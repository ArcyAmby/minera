@extends('layouts.app')

@section('content') 
<div class="container mx-auto mt-10">
    <div class="flex justify-between items-center mb-6 mx-4">
        <h2 class="text-2xl font-semibold">Inventory Management</h2>
        <a href="{{ route('inventories.store') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
            Add Inventory
        </a>
    </div>
    <div class="overflow-x-hidden">
        <div class="inline-block min-w-full overflow-hidden ml-4">
            <table class="table-auto min-w-full border-collapse" id="inventory-table">
                <thead>
                    <tr>
                        <th class="px-4 py-2">Id</th>
                        <th class="px-4 py-2">Code</th>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Type</th>
                        <th class="px-4 py-2">Brand</th>
                        <th class="px-4 py-2">Description</th>
                        <th class="px-4 py-2">Measurement</th>
                        <th class="px-4 py-2">Quantity</th>
                        <th class="px-4 py-2">Delivered By</th>
                        <th class="px-4 py-2">Price</th>
                        <th class="px-4 py-2">Added By</th>
                        <th class="px-4 py-2">Created At</th>
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
        $('#inventory-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('inventories-list') }}",
            columns: [
                { data: 'id', name: 'id' },
                { data: 'inv_code', name: 'inv_code' },
                { data: 'inv_name', name: 'inv_name' },
                { data: 'inv_type', name: 'inv_type' },
                { data: 'inv_brand', name: 'inv_brand' },
                { data: 'inv_description', name: 'inv_description' },
                { data: 'inv_measurement', name: 'inv_measurement' },
                { data: 'inv_quantity', name: 'inv_quantity' },
                { data: 'inv_delivered_by', name: 'inv_delivered_by' },
                { data: 'inv_price', name: 'inv_price' },
                { data: 'added_by_name', name: 'added_by_name' }, // Use 'added_by_name' instead of 'item_added_by'
                { data: 'created_at', name: 'created_at' },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    render: function (data, type, row) {
                        let editUrl = "{{ route('inventories.edit', ':id') }}".replace(':id', row.id);
                        let deleteUrl = "{{ route('inventories.destroy', ':id') }}".replace(':id', row.id);

                        return '<a href="' + editUrl + '" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded-md">Edit</a> ' +
                            '<form id="deleteForm_' + row.id + '" method="POST" action="' + deleteUrl + '" class="inline-block"> ' +
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
