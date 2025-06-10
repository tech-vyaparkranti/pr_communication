@extends('layouts.dashboardLayout')
@section('title', 'Contact Us')
@section('content')

    <x-content-div heading="Manage Contact Us Data">
        <x-card-element header="Contact Us Data">
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
                    url: "{{ route('ContactUsData') }}",
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
                        data: 'first_name',
                        name: 'first_name',
                        title: 'First Name',
                    },
                    {
                        data: 'last_name',
                        name: 'last_name',
                        title: 'Last Name'
                    },
                    {
                        data: 'email',
                        name: 'email',
                        title: 'Email'
                    },
                    {
                        data: 'phone_number',
                        name: 'phone_number',
                        title: 'Phone Number'
                    },
                    {
                        data: 'company_name',
                        name: 'company_name',
                        title: 'Company Address'
                    },
                    {
                        data: 'message',
                        name: 'message',
                        title: 'Message'
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