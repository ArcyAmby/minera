@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10">
    <div class="w-full mx-auto my-auto">
        <div class="flex flex-col w-full h-auto mt-[3%]">

            <!-- Filter Form -->
            <form id="filterForm" class="mb-6">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mb-4">
                    <!-- Filter by name -->
                    <input type="text" name="name" id="name" placeholder="Filter by name" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    
                    <!-- Filter by type -->
                    <select id="type" name="type" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm select2">
                        <option value="">Select Type</option>
                        @foreach($allTypes as $type)
                        <option value="{{ $type->id }}" {{ request('type') == $type->id ? 'selected' : '' }}>{{ $type->type_name }}</option>
                        @endforeach
                    </select>
                    
                    <!-- Filter by price range -->
                    <input type="number" name="min_price" id="min_price" placeholder="Min Price" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <input type="number" name="max_price" id="max_price" placeholder="Max Price" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    
                    <!-- Filter by quantity range -->
                    <input type="number" name="min_quantity" id="min_quantity" placeholder="Min Quantity" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <input type="number" name="max_quantity" id="max_quantity" placeholder="Max Quantity" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                </div>
                <button type="button" id="applyFilters" class="px-4 py-2 bg-blue-500 text-white rounded-md">Filter</button>
            </form>

            <!-- Product List -->
            <div id="productList" class="flex flex-wrap">
                <!-- Product items will be rendered here -->
            </div>
        </div>
    </div>
</div>

<!-- Add jQuery for AJAX requests -->
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<!-- Add Select2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script>
    $(document).ready(function () {
        $('.select2').select2();

        function fetchProducts() {
            $.ajax({
                url: "{{ route('products.products-list') }}",
                type: "GET",
                data: $("#filterForm").serialize(), // Serialize form data
                success: function (response) {
                    $("#productList").html(response);
                },
                error: function (xhr) {
                    console.error(xhr.responseText);
                }
            });
        }

        // Call fetchProducts() initially
        fetchProducts();

        // Bind click event listener to the filter button
        $("#applyFilters").click(function () {
            fetchProducts(); // Fetch products when the filter button is clicked
        });
    });
</script>
@endsection
