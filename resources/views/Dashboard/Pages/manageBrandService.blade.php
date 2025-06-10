@extends('layouts.dashboardLayout')
@section('title', 'Brand Services')
@section('content')

    <x-content-div heading="Manage Brand Service">
        <x-card-element header="Add Brand Service Data ">
            <x-form-element method="POST" enctype="multipart/form-data" id="submitForm" action="javascript:">
                <x-input type="hidden" name="id" id="id" value=""></x-input>
                <x-input type="hidden" name="action" id="action" value="insert"></x-input>

                <x-select-with-label id="brand_service" name="brand_id" label="Select Brand" required="true">
                    @foreach ($brand as $item)
                        <option value='{{$item->id}}'>{{$item->title}}</option>
                    @endforeach
                </x-select-with-label>

                <x-input-with-label-element id="image" label="Upload Image" name="image" type="file"
                    accept="image/*"></x-input-with-label-element>
                <x-input-with-label-element id="video_link" label="Enter Video Link" name="video_link"
                    ></x-input-with-label-element>
                <x-input-with-label-element id="title" label="title" name="title"
                    required></x-input-with-label-element>               
                <x-select-with-label id="blog_status" name="status" label="Select Status" required="true">
                    <option value="1">Live</option>
                    <option value="0">Disabled</option>
                </x-select-with-label>
                <x-input-with-label-element id="position" label="Position" name="position" type="numeric"
                    required></x-input-with-label-element>
                <x-text-area-with-label id="content" fullscreen label="Description" name="description"
                    required></x-text-area-with-label>
                <x-content-div heading="Upload Files">
                    <div id="itinerarySection">
                        <x-input-with-label-element id="pdf" label="Upload file" name="files" type="file" accept=".pdf"
                        ></x-input-with-label-element>
                        {{-- <div class="col-md-2 col-sm-12 text-center">
                            <x-button type="button" onclick="addNewItineraryBlock()"
                                class="btn btn-primary btn-icon mt-4">+</x-button>
                        </div> --}}
                    </div>
                </x-content-div>
                <div id="pdf-preview" class="mb-3"></div>

                <x-form-buttons></x-form-buttons>
            </x-form-element>

        </x-card-element>

        <x-card-element header="Brand Service Data">
            <x-data-table>

            </x-data-table>
        </x-card-element>
    </x-content-div>
    <style>
       .note-editor {
        width: 100% !important;
    }
    </style>
@endsection
<script>
     const brandData = @json($brand);
     function addNewItineraryBlock () {
            const block = document.createElement('div');
            block.className = 'file-block row mt-3';
            block.innerHTML = `
                <div class="col-md-5">
                    <label for="pdf">Upload file</label>
                    <input type="file" name="files[]" class="form-control" accept=".pdf" />
                </div>
                <div class="col-md-2 col-sm-12 text-center">
                    <button type="button" class="btn btn-danger btn-icon mt-4" onclick="removeItineraryBlock(this)">−</button>
                </div>
            `;
            document.getElementById('itinerarySection').appendChild(block);
        }
    
        function removeItineraryBlock(button) {
            button.closest('.file-block').remove();
        }
        function removePdfBlock(index) {
            document.getElementById('pdfBlock' + index).remove();
        }

</script>

@section('script')
    <script type="text/javascript">
        $('#content').summernote({
            placeholder: 'ElementText',
            tabsize: 2,
            height: 100,
        });
        let site_url = '{{ url('/') }}';
        let table = "";

        $(function() {

            table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                "scrollX": true,
                ajax: {
                    url: "{{ route('brandServiceData') }}",
                    type: 'POST',
                    data: {
                        '_token': '{{ csrf_token() }}'
                    }
                },
                columns: [{
                        data: "DT_RowIndex",
                        orderable: false,
                        searchable: false,
                        title: "Sr.No."
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false,
                        title: 'Action'
                    },
                    {
                        data: 'image',
                        render: function(data, type, row) {
                            let image = '';
                            if (data) {
                                image = '<img alt="Image Link" src="' +site_url + data +
                                    '" class="img-thumbnail">'
                            }
                            return image;
                        },
                        orderable: false,
                        searchable: false,
                        title: "Image"
                    },
                    {
                        data: 'brand_id',
                        name: 'brand_id',
                        title: 'Brand Id', 
                        render: function(data, type, row) {
                            const match = brandData.find(el => el.id == data);
                            return match ? match.title : 'N/A';
                        }
                    },
                    {
                        data: 'title',
                        name: 'title',
                        title: 'Title'
                    },
                    {
                        data: 'video_link',
                        name: 'video_link',
                        title: 'Video Link'
                    },
                    {
                        data: 'description',
                        name: 'description',
                        title: 'Content'
                    },
                    {
                        data: null,
                        name: 'pdf',
                        title: 'PDF',
                        orderable: false,
                        searchable: false,
                        render: function(data, type, full, meta) {
                            if (full.files) {
                                return `<a href="${site_url}/brand_service_files/${full.files}" target="_blank" class="btn btn-sm btn-primary">
                                    <i class="fas fa-file-pdf"></i> View PDF
                                </a>`;
                            } else {
                                return 'No PDF';
                            }
                        }
                    }
                ],
                order: [
                    [2, "desc"]
                ]
            });

        });
        $(document).on("click", ".edit", function() {
            let row = $.parseJSON(atob($(this).data("row")));
            if (row['id']) {
                $("#id").val(row['id']);
                $("#image").attr("required", false);
                $("#title").val(row['title']);
                $("#video_link").val(row["video_link"])
                $("#brand_service").val(row["brand_id"])
                $("#blog_status").val(row['status']);
                $("#position").val(row['position']);
                $("#action").val("update");
                $("#content").val(row['description']);
                $('#content').summernote('destroy');
                $('#content').summernote({
                    focus: true
                });
                if (row.files) {
            try {
                let files = JSON.parse(row.files);
                let fileHtml = '';

                files.forEach((file, index) => {
                    fileHtml += `
                        <div class="pdf-block mb-2" id="pdfBlock${index}">
                            <a href="/${file.path}" target="_blank">${file.filename}</a>
                        </div>
                    `;
                });

                $("#pdf-preview").html(fileHtml);
            } catch (e) {
                console.error("Invalid JSON in files", e);
            }
        } else {
            $("#pdf-preview").html('');
        }

                scrollToDiv();
            } else {
                errorMessage("Something went wrong. Code 101");
            }
        });


        function Disable(id) {
            changeAction(id, "disable", "This item will be disabled!", "Yes, disable it!");
        }

        function Enable(id) {
            changeAction(id, "enable", "This item will be enabled!", "Yes, enable it!");
        }

        function changeAction(id, action, text, confirmButtonText) {
            if (id) {
                Swal.fire({
                    title: 'Are you sure?',
                    text: text,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: confirmButtonText
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: 'POST',
                            url: '{{ route('saveBrandService') }}',
                            data: {
                                id: id,
                                action: action,
                                '_token': '{{ csrf_token() }}'
                            },
                            success: function(response) {
                                if (response.status) {
                                    successMessage(response.message, true);
                                    table.ajax.reload();
                                } else {
                                    errorMessage(response.message);
                                }
                            },
                            failure: function(response) {
                                errorMessage(response.message);
                            }
                        });
                    }
                });
            } else {
                errorMessage("Something went wrong. Code 102");
            }
        }

        $(document).ready(function() {
            $("#submitForm").on("submit", function() {
                var form = new FormData(this);
                $.ajax({
                    type: 'POST',
                    url: '{{ route('saveBrandService') }}',
                    data: form,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.status) {
                            successMessage(response.message, "reload");
                        } else {
                            errorMessage(response.message);
                        }

                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            const errors = xhr.responseJSON.errors;
                            const allMessages = Object.values(errors).flat().join('<br>');
                            errorMessage(allMessages);
                        } else {
                            errorMessage("Something went wrong");
                        }
                    },
                    failure: function(response) {
                        errorMessage(response.message);
                    }
                });
            });
        });
    </script>
    @include('Dashboard.include.dataTablesScript')
@endsection
