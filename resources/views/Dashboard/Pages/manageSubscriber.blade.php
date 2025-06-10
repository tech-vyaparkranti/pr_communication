@extends('layouts.dashboardLayout')
@section('title', 'Subscribe')
@section('content')

    <x-content-div heading="Manage Subscribe Data">
        <x-card-element header="Subscribe Data">
            <x-data-table>

            </x-data-table>
        </x-card-element>
    </x-content-div>
@endsection

@section('script')
<script type="text/javascript">

        $(function() {

            table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                "scrollX": true,
                ajax: {
                    url: "{{ route('subscribeData') }}",
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
                        data: 'email',
                        name: 'email',
                        title: 'Email',
                    },
                    {
                        data: 'ip_address',
                        name: 'ip_address',
                        title: 'IP Address'
                    },
                    
                ],
                order: [
                    [1, "desc"]
                ]
            });

        });
    </script>
    @include('Dashboard.include.dataTablesScript')
@endsection