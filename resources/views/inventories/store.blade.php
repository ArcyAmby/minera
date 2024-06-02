@extends('layouts.app')

@section('content')
<div class="h-full mt-14 mb-10">
    <div class="container mx-auto px-4 py-8 grid grid-cols-1 md:grid-cols-2 gap-8">
        <div>
            <h1 class="text-md font-semibold mb-6">Inventory Information</h1>

            <form action="{{ route('inventories.create') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="inv_code" class="block text-gray-700 text-sm font-bold mb-2">Inventory Code</label>
                    <input type="text" class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="inv_code" name="inv_code" required>
                </div>

                <div class="mb-4">
                    <label for="inv_type" class="block text-gray-700 text-sm font-bold mb-2">Inventory Type</label>
                    <input type="text" class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="inv_type" name="inv_type" required>
                </div>

                <div class="mb-4">
                    <label for="inv_name" class="block text-gray-700 text-sm font-bold mb-2">Inventory Name</label>
                    <input type="text" class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="inv_name" name="inv_name" required>
                </div>

                <div class="mb-4">
                    <label for="inv_brand" class="block text-gray-700 text-sm font-bold mb-2">Inventory Brand</label>
                    <input type="text" class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="inv_brand" name="inv_brand" required>
                </div>

                <div class="mb-4">
                    <label for="inv_description" class="block text-gray-700 text-sm font-bold mb-2">Inventory Description</label>
                    <input type="text" class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="inv_description" name="inv_description" required>
                </div>
        </div>

        <div>
            <h1 class="text-md font-semibold mb-6">Inventory Logistics</h1>

            <div class="mb-4">
                <label for="inv_measurement" class="block text-gray-700 text-sm font-bold mb-2">Inventory Measurement</label>
                <input type="text" class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="inv_measurement" name="inv_measurement" required>
            </div>

            <div class="mb-4">
                <label for="inv_quantity" class="block text-gray-700 text-sm font-bold mb-2">Inventory Quantity</label>
                <input type="number" class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="inv_quantity" name="inv_quantity" required>
            </div>

            <div class="mb-4">
                <label for="inv_delivered_by" class="block text-gray-700 text-sm font-bold mb-2">Inventory Delivered By</label>
                <input type="text" class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="inv_delivered_by" name="inv_delivered_by" required>
            </div>

            <div class="mb-4">
                <label for="inv_price" class="block text-gray-700 text-sm font-bold mb-2">Inventory Price (Per Pack)</label>
                <input type="number" class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="inv_price" name="inv_price" required>
            </div>

            <div class="mb-4">
                <label for="inv_added_by" class="block text-gray-700 text-sm font-bold mb-2">Added By</label>
                <select type="text" class="appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="inv_added_by" name="inv_added_by" required>
                    <option value="1">Admin</option>
                </select>
            </div>
        </div>
        <button type="submit" class="bg-green-500 hover:bg-green-700 text-sm text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline">Add Inventory</button>
        <button type="button" class="bg-gray-500 hover:bg-gray-700 text-sm text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline" onclick="window.location.href='{{ route('inventories.index') }}'">Cancel</button>
    </form>
    </div>
</div>
@endsection
