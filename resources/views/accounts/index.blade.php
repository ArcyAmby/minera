@extends('layouts.app')

@section('content') 
<div class="container mx-auto mt-10">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-semibold">User Management</h2>
        <a href="{{ route('accounts.store') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
            Add User
        </a>
    </div>

    <div class="overflow-x-hidden">
        <div class="max-w-full overflow-x-hidden">
            <table class="table-auto w-full border-collapse" id="users-table">
                <thead>
                    <tr>
                        <th class="px-4 py-2">Id</th>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Email</th>
                        <th class="px-4 py-2">User Type</th>
                        <th class="px-4 py-2">Created At</th>
                        <th class="px-4 py-2">First Name</th>
                        <th class="px-4 py-2">Last Name</th>
                        <th class="px-4 py-2">Middle Name</th>
                        <th class="px-4 py-2">Birth Date</th>
                        <th class="px-4 py-2">Address</th>
                        <th class="px-4 py-2">Contact Number</th>
                        <th class="px-4 py-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Table content will be loaded dynamically -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script>
    $(document).ready(function () {
        $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('accounts-list') }}",
            columns: [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },
                { data: 'email', name: 'email' },
                { data: 'usertype_id', name: 'usertype_id' },
                { data: 'created_at', name: 'created_at' },
                { data: 'user_firstname', name: 'user_firstname' },
                { data: 'user_lastname', name: 'user_lastname' },
                { data: 'user_middlename', name: 'user_middlename' },
                { data: 'user_bdate', name: 'user_bdate' },
                { data: 'user_address', name: 'user_address' },
                { data: 'user_contact_num', name: 'user_contact_num' },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    render: function (data, type, row) {
                        let editUrl = "{{ route('accounts.edit', ':id') }}".replace(':id', row.id);
                        let deleteUrl = "{{ route('accounts.destroy', ':id') }}".replace(':id', row.id);

                        return '<a href="' + editUrl + '" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded-md">Edit</a> ' +
                            '<form id="deleteForm_' + row.id + '" method="POST" action="' + deleteUrl + '"> ' +
                            '<input type="hidden" name="_token" value="{{ csrf_token() }}"> ' +
                            '<input type="hidden" name="_method" value="DELETE"> ' +
                            '<button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded-md">Delete</button> ' +
                            '</form>';
                    }
                }
            ]
        });
    });
</script> 
@endsection
