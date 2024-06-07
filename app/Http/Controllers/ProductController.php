<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InventoryType;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $allTypes = InventoryType::with('inventories.logistics')->get();

        // Render the initial product list
        return view('products.index', compact('allTypes'));
    }

    public function fetch(Request $request)
{
    $query = InventoryType::with(['inventories.logistics']);

    // Apply filters if any
    if ($request->hasAny(['name', 'type', 'min_price', 'max_price', 'min_quantity', 'max_quantity'])) {
        $query->where(function ($query) use ($request) {

            if ($request->filled('name')) {
                $query->orWhereHas('inventories', function ($q) use ($request) {
                    $q->where('inv_name', 'like', '%' . $request->input('name') . '%');
                });
            }

            // Filter by type
            if ($request->filled('type')) {
                $query->orWhere('id', $request->input('type'));
            }

            // Filter by price range
            if ($request->filled('min_price')) {
                $minPrice = (float) $request->input('min_price');
                $query->orWhereHas('inventories.logistics', function ($q) use ($minPrice) {
                    $q->where('inv_price', '>=', sprintf('%.2f', $minPrice));
                });
            }
            if ($request->filled('max_price')) {
                $maxPrice = (float) $request->input('max_price');
                $query->orWhereHas('inventories.logistics', function ($q) use ($maxPrice) {
                    $q->where('inv_price', '<=', sprintf('%.2f', $maxPrice));
                });
            }

            // Filter by quantity range
            if ($request->filled('min_quantity')) {
                $minQuantity = (int) $request->input('min_quantity');
                $query->orWhereHas('inventories.logistics', function ($q) use ($minQuantity) {
                    $q->where('inv_quantity', '>=', $minQuantity);
                });
            }
            if ($request->filled('max_quantity')) {
                $maxQuantity = (int) $request->input('max_quantity');
                $query->orWhereHas('inventories.logistics', function ($q) use ($maxQuantity) {
                    $q->where('inv_quantity', '<=', $maxQuantity);
                });
            }
            // Filter by name and type
            if ($request->filled('name') && $request->filled('type')) {
                $query->whereHas('inventories', function ($q) use ($request) {
                    $q->where('inv_name', 'like', '%' . $request->input('name') . '%')
                        ->where('id', $request->input('type'));
                });
            }

            // Filter by name and price range
            if ($request->filled('name') && $request->filled('min_price')) {
                $minPrice = (float) $request->input('min_price');
                $query->whereHas('inventories.logistics', function ($q) use ($minPrice, $request) {
                    $q->where('inv_name', 'like', '%' . $request->input('name') . '%')
                        ->where('inv_price', '>=', sprintf('%.2f', $minPrice));
                });
            }
            if ($request->filled('name') && $request->filled('max_price', $request)) {
                $maxPrice = (float) $request->input('max_price');
                $query->whereHas('inventories.logistics', function ($q) use ($maxPrice, $request) {
                    $q->where('inv_name', 'like', '%' . $request->input('name') . '%')
                        ->where('inv_price', '<=', sprintf('%.2f', $maxPrice));
                });
            }
            if ($request->filled('name') && $request->filled('min_price') && $request->filled('max_price')) {
                $minPrice = (float) $request->input('min_price');
                $maxPrice = (float) $request->input('max_price');
                $query->whereHas('inventories.logistics', function ($q) use ($minPrice, $maxPrice, $request) {
                    $q->where('inv_name', 'like', '%' . $request->input('name') . '%')
                        ->whereBetween('inv_price', [$minPrice, $maxPrice]);
                });
            }

            // Filter by name and quantity range
            if ($request->filled('name') && $request->filled('min_quantity')) {
                $minQuantity = (int) $request->input('min_quantity');
                $query->whereHas('inventories.logistics', function ($q) use ($minQuantity, $request) {
                    $q->where('inv_name', 'like', '%' . $request->input('name') . '%')
                        ->where('inv_quantity', '>=', $minQuantity);
                });
            }
            if ($request->filled('name') && $request->filled('max_quantity')) {
                $maxQuantity = (int) $request->input('max_quantity');
                $query->whereHas('inventories.logistics', function ($q) use ($maxQuantity, $request) {
                    $q->where('inv_name', 'like', '%' . $request->input('name') . '%')
                        ->where('inv_quantity', '<=', $maxQuantity);
                });
            }
            if ($request->filled('name') && $request->filled('min_quantity') && $request->filled('max_quantity')) {
                $minQuantity = (int) $request->input('min_quantity');
                $maxQuantity = (int) $request->input('max_quantity');
                $query->whereHas('inventories.logistics', function ($q) use ($minQuantity, $maxQuantity, $request) {
                    $q->where('inv_name', 'like', '%' . $request->input('name') . '%')
                        ->whereBetween('inv_quantity', [$minQuantity, $maxQuantity]);
                });
            }

            // Filter by type and price range
            if ($request->filled('type') && $request->filled('min_price')) {
                $minPrice = (float) $request->input('min_price');
                $query->whereHas('inventories.logistics', function ($q) use ($minPrice, $request) {
                    $q->where('id', $request->input('type'))
                        ->where('inv_price', '>=', sprintf('%.2f', $minPrice));
                });
            }
            if ($request->filled('type') && $request->filled('max_price')) {
                $maxPrice = (float) $request->input('max_price');
                $query->whereHas('inventories.logistics', function ($q) use ($maxPrice, $request) {
                    $q->where('id', $request->input('type'))
                        ->where('inv_price', '<=', sprintf('%.2f', $maxPrice));
                });
            }
            if ($request->filled('type') && $request->filled('min_price') && $request->filled('max_price')) {
                $minPrice = (float) $request->input('min_price');
                $maxPrice = (float) $request->input('max_price');
                $query->whereHas('inventories.logistics', function ($q) use ($minPrice, $maxPrice, $request) {
                    $q->where('id', $request->input('type'))
                        ->whereBetween('inv_price', [$minPrice, $maxPrice]);
                });
            }

            // Filter by type and quantity range
            if ($request->filled('type') && $request->filled('min_quantity')) {
                $minQuantity = (int) $request->input('min_quantity');
                $query->whereHas('inventories.logistics', function ($q) use ($minQuantity, $request) {
                    $q->where('id', $request->input('type'))
                        ->where('inv_quantity', '>=', $minQuantity);
                });
            }
            if ($request->filled('type') && $request->filled('max_quantity')) {
                $maxQuantity = (int) $request->input('max_quantity');
                $query->whereHas('inventories.logistics', function ($q) use ($maxQuantity, $request) {
                    $q->where('id', $request->input('type'))
                        ->where('inv_quantity', '<=', $maxQuantity);
                });
            }
            if ($request->filled('type') && $request->filled('min_quantity') && $request->filled('max_quantity')) {
                $minQuantity = (int) $request->input('min_quantity');
                $maxQuantity = (int) $request->input('max_quantity');
                $query->whereHas('inventories.logistics', function ($q) use ($minQuantity, $maxQuantity, $request) {
                    $q->where('id', $request->input('type'))
                        ->whereBetween('inv_quantity', [$minQuantity, $maxQuantity]);
                });
            }

            // Filter by quantity and price range
            if ($request->filled('min_quantity') && $request->filled('min_price')) {
                $minQuantity = (int) $request->input('min_quantity');
                $minPrice = (float) $request->input('min_price');
                $query->whereHas('inventories.logistics', function ($q) use ($minQuantity, $minPrice) {
                    $q->where('inv_quantity', '>=', $minQuantity)
                        ->where('inv_price', '>=', sprintf('%.2f', $minPrice));
                });
            }
            if ($request->filled('min_quantity') && $request->filled('max_price')) {
                $minQuantity = (int) $request->input('min_quantity');
                $maxPrice = (float) $request->input('max_price');
                $query->whereHas('inventories.logistics', function ($q) use ($minQuantity, $maxPrice) {
                    $q->where('inv_quantity', '>=', $minQuantity)
                        ->where('inv_price', '<=', sprintf('%.2f', $maxPrice));
                });
            }
            if ($request->filled('min_quantity') && $request->filled('min_price') && $request->filled('max_price')) {
                $minQuantity = (int) $request->input('min_quantity');
                $minPrice = (float) $request->input('min_price');
                $maxPrice = (float) $request->input('max_price');
                $query->whereHas('inventories.logistics', function ($q) use ($minQuantity, $minPrice, $maxPrice) {
                    $q->where('inv_quantity', '>=', $minQuantity)
                        ->whereBetween('inv_price', [$minPrice, $maxPrice]);
                });
            }

            // Filter by quantity and price range
            if ($request->filled('max_quantity') && $request->filled('min_price')) {
                $maxQuantity = (int) $request->input('max_quantity');
                $minPrice = (float) $request->input('min_price');
                $query->whereHas('inventories.logistics', function ($q) use ($maxQuantity, $minPrice) {
                    $q->where('inv_quantity', '<=', $maxQuantity)
                        ->where('inv_price', '>=', sprintf('%.2f', $minPrice));
                });
            }
            if ($request->filled('max_quantity') && $request->filled('max_price')) {
                $maxQuantity = (int) $request->input('max_quantity');
                $maxPrice = (float) $request->input('max_price');
                $query->whereHas('inventories.logistics', function ($q) use ($maxQuantity, $maxPrice) {
                    $q->where('inv_quantity', '<=', $maxQuantity)
                        ->where('inv_price', '<=', sprintf('%.2f', $maxPrice));
                });
            }
            if ($request->filled('max_quantity') && $request->filled('min_price') && $request->filled('max_price')) {
                $maxQuantity = (int) $request->input('max_quantity');
                $minPrice = (float) $request->input('min_price');
                $maxPrice = (float) $request->input('max_price');
                $query->whereHas('inventories.logistics', function ($q) use ($maxQuantity, $minPrice, $maxPrice) {
                    $q->where('inv_quantity', '<=', $maxQuantity)
                        ->whereBetween('inv_price', [$minPrice, $maxPrice]);
                });
            }
        });

        // Get the filtered products
        $inventoryTypes = $query->get();

        // Render the product list using a Blade view
        return view('products.products-list', compact('inventoryTypes'))->render();
    }
}
}
