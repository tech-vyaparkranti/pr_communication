@extends('layouts.dashboardLayout')
@section('title', 'Client Testimonial')
@section('content')

    <x-content-div heading="Manage Client Testimonial">
        <x-card-element header="Add Client Testimonial">
            <x-form-element method="POST" enctype="multipart/form-data" id="submitForm" action="javascript:">
                <x-input type="hidden" name="id" id="id" value=""></x-input>
                <x-input type="hidden" name="action" id="action" value="insert"></x-input>

                <x-input-with-label-element id="video_link" label="You Tube Video Link" name="video_link" type="text"
                     required ></x-input-with-label-element>   
                <x-input-with-label-element id="client_name" label="Client Name" name="client_name" type="text"
                  required ></x-input-with-label-element>               

                <x-select-with-label id="status" name="status" label="Select Status" required="true">
                    <option value="1">Live</option>
                    <option value="0">Disabled</option>
                </x-select-with-label>
                <x-input-with-label-element id="sorting" required label="Sorting Number" type="numeric"
                    name="position"></x-input-with-label-element>

                <x-form-buttons></x-form-buttons>
            </x-form-element>

        </x-card-element>

        <x-card-element header="Client Testimonial Data">
            <x-data-table>

            </x-data-table>
        </x-card-element>
    </x-content-div>
@endsection

@section('script')
    <script type="text/javascript">
        $('#content').summernote({
            placeholder: 'ElementText',
            tabsize: 2,
            height: 100
        });
        let site_url = '{{ url('/') }}';
        let table = "";
        $(function() {

            table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                "scrollX": true,
                ajax: {
                    url: "{{ route('getClientTestimonial') }}",
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
                        data: 'video_link',
                        orderable: false,
                        searchable: false,
                        render: function(data, type, meta) {
                            if (data) {
                                // Try to extract the video ID from YouTube URL formats
                                let videoId = '';
                                const youtubeMatch = data.match(
                                    /(?:youtube\.com\/(?:watch\?v=|embed\/)|youtu\.be\/)([^\s&?/]+)/
                                    );

                                if (youtubeMatch && youtubeMatch[1]) {
                                    videoId = youtubeMatch[1];
                                }

                                if (videoId) {
                                    return `
                                    <iframe 
                                        width="200" 
                                        height="120" 
                                        src="https://www.youtube.com/embed/${videoId}" 
                                        frameborder="0" 
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                        allowfullscreen>
                                    </iframe>
                                `;
                                } else {
                                    return 'Invalid YouTube URL';
                                }
                            } else {
                                return 'No Video';
                            }
                        },
                        title: "Video Link"
                    },  
                    {
                        data: 'client_name',
                        name: 'client_name',
                        title: 'Client Name'
                    },              
                    {
                        data: 'position',
                        name: 'position',
                        title: 'Sorting'
                    },  

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
                $('#video_link').val(row['video_link']);
                $("#status").val(row['status']);
                $("#client_name").val(row['client_name']);
                $("#sorting").val(row['position']);
                $("#action").val("update");
                
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
                            url: '{{ route('saveClientTestimonial') }}',
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
                    url: '{{ route('saveClientTestimonial') }}',
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
