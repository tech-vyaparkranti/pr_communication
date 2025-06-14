@extends('layouts.dashboardLayout')
@section('title', 'Contact Us Data')

@section('content')
<x-content-div heading="Contact Form Submissions">
    <x-card-element header="Contact Form Data">
        {{-- The x-data-table component should render a <table class="data-table"> element --}}
        <x-data-table></x-data-table>
    </x-card-element>
</x-content-div>
@endsection

@section('script')
<script type="text/javascript">
    let table = ""; // Declare table variable globally for potential future access

    $(function () {
        // Initialize DataTable
        table = $('.data-table').DataTable({
            processing: true, // Show processing indicator
            serverSide: true, // Enable server-side processing for large datasets
            scrollX: true,    // Enable horizontal scrolling for wide tables
            ajax: {
                url: "{{ route('managecontactdata') }}", // Laravel route for DataTables data
                type: "POST", // Method for the AJAX request
                data: {
                    // Include CSRF token for POST requests in Laravel
                    '_token': '{{ csrf_token() }}'
                }
            },
            columns: [
                // Column: Serial Number (DT_RowIndex is a special DataTables column for this)
                { data: 'DT_RowIndex', name: 'DT_RowIndex', title: "Sr.No.", orderable: false, searchable: false },

                // Column: First Name
                { data: '{{ \App\Models\ContactUsModel::FIRST_NAME }}', name: '{{ \App\Models\ContactUsModel::FIRST_NAME }}', title: 'First Name' },

                // Column: Last Name
                { data: '{{ \App\Models\ContactUsModel::LAST_NAME }}', name: '{{ \App\Models\ContactUsModel::LAST_NAME }}', title: 'Last Name' },

                // Column: Email
                { data: '{{ \App\Models\ContactUsModel::EMAIL }}', name: '{{ \App\Models\ContactUsModel::EMAIL }}', title: 'Email' },

                // Column: Country Code
                { data: '{{ \App\Models\ContactUsModel::COUNTRY_CODE }}', name: '{{ \App\Models\ContactUsModel::COUNTRY_CODE }}', title: 'Country Code' },

                // Column: Phone Number
                { data: '{{ \App\Models\ContactUsModel::PHONE_NUMBER }}', name: '{{ \App\Models\ContactUsModel::PHONE_NUMBER }}', title: 'Phone' },

                // Column: Message
                { data: '{{ \App\Models\ContactUsModel::MESSAGE }}', name: '{{ \App\Models\ContactUsModel::MESSAGE }}', title: 'Message' },

                // // Optional Columns (Uncomment if you want to display these)
                // { data: '{{ \App\Models\ContactUsModel::IP_ADDRESS }}', name: '{{ \App\Models\ContactUsModel::IP_ADDRESS }}', title: 'IP' },
                // { data: '{{ \App\Models\ContactUsModel::USER_AGENT }}', name: '{{ \App\Models\ContactUsModel::USER_AGENT }}', title: 'User Agent' },

                // Column: Status
                { data: '{{ \App\Models\ContactUsModel::STATUS }}', name: '{{ \App\Models\ContactUsModel::STATUS }}', title: 'Status' },

                // Column: Created At - RENDERED IN UTC
                {
                    data: '{{ \App\Models\ContactUsModel::CREATED_AT }}',
                    name: '{{ \App\Models\ContactUsModel::CREATED_AT }}',
                    title: 'Created At (UTC)',
                    render: function (data, type, row) {
                        // Ensure data is not null or empty
                        if (!data) {
                            return '';
                        }
                        // Create a Date object from the ISO 8601 string provided by Laravel
                        // Laravel's timestamps are typically in UTC, but JavaScript's Date object
                        // by default interprets them based on the local timezone if not explicitly
                        // told otherwise (e.g., without a 'Z' or timezone offset).
                        // Using new Date(data + 'Z') or ensuring data has 'Z' suffix
                        // ensures it's parsed as UTC. If Laravel's timestamp already has a 'Z',
                        // then new Date(data) is sufficient.
                        const date = new Date(data);

                        // Check if the date is valid
                        if (isNaN(date.getTime())) {
                            return 'Invalid Date';
                        }

                        // Format the date to UTC string
                        // Option 1: ISO String (e.g., "2025-06-14T09:47:00.000Z") - precise
                        // return date.toISOString();

                        // Option 2: UTC String (e.g., "Fri, 14 Jun 2025 09:47:00 GMT") - readable
                        // return date.toUTCString();

                        // Option 3: Localized UTC time (more user-friendly, specify UTC timezone)
                        // This uses toLocaleString and explicitly sets the timezone to UTC.
                        return date.toLocaleString('en-GB', {
                            year: 'numeric',
                            month: '2-digit',
                            day: '2-digit',
                            hour: '2-digit',
                            minute: '2-digit',
                            second: '2-digit',
                            hour12: false, // 24-hour format
                            timeZone: 'UTC', // This is key to displaying in UTC
                            timeZoneName: 'short' // Will add "UTC" or "GMT"
                        });
                    }
                },
            ],
            // Default sorting order for the table
            order: [[10, "desc"]] // Sort by 'Created At' (column index 10) in descending order
        });
    });
</script>
{{-- Include any other necessary DataTables scripts (e.g., plugins, language files) --}}
@include('Dashboard.include.dataTablesScript')
@endsection
