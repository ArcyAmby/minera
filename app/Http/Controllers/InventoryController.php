<?php

namespace App\Http\Controllers;

use App\Models\InventoryInfo;
use App\Models\InventoryLogistic;
use App\Models\InventoryType;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Auth;

class InventoryController extends Controller
{
    public function index()
    {
        return view('inventories.index');
    }

    public function inventoryTable(Request $request)
    {
        if ($request->ajax()) {
            $inventoryLogistics = InventoryLogistic::with(['info', 'addedBy'])->get();

            return DataTables::of($inventoryLogistics)
                ->addColumn('inv_code', function ($logistic) {
                    return $logistic->info->inv_name;
                })
                ->addColumn('inv_type', function ($logistic) {
                    return $logistic->info->type->type_name;
                })
                ->addColumn('inv_name', function ($logistic) {
                    return $logistic->info->inv_name;
                })
                ->addColumn('inv_brand', function ($logistic) {
                    return $logistic->info->inv_brand;
                })
                ->addColumn('inv_description', function ($logistic) {
                    return $logistic->info->inv_description;
                })
                ->addColumn('added_by_name', function ($logistic) {
                    return $logistic->addedBy ? $logistic->addedBy->name : 'N/A';
                })
                ->addColumn('action', function ($logistic) {
                    $editUrl = route('inventories.edit', $logistic->id);
                    $deleteUrl = route('inventories.destroy', $logistic->id);

                    return '<a href="' . $editUrl . '" class="btn btn-primary">Edit</a>
                            <form method="POST" action="' . $deleteUrl . '" style="display:inline;">
                                ' . csrf_field() . method_field("DELETE") . '
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>';
                })
                ->make(true);
        }

        return view('inventories.index');
    }

    public function store()
    {
        $types = InventoryType::all();
        return view('inventories.store', compact('types'));
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'inv_type_id' => 'required|exists:inventory_types,id',
            'inv_code' => 'required|string|max:255|unique:inventory_logistics,inv_code',
            'inv_name' => 'required|string|max:255',
            'inv_brand' => 'required|string|max:255',
            'inv_description' => 'required|string',
            'inv_quantity' => 'required|integer',
            'inv_delivered_by' => 'required|string|max:255',
            'inv_price' => 'required|numeric',
            'inv_measurement' => 'required|string|max:255',
        ]);

        $inventoryInfo = InventoryInfo::firstOrCreate([
            'inv_type_id' => $validatedData['inv_type_id'],
            'inv_name' => $validatedData['inv_name'],
            'inv_brand' => $validatedData['inv_brand'],
            'inv_description' => $validatedData['inv_description'],
        ]);

        $inventoryLogistic = InventoryLogistic::create([
            'inv_code' => $validatedData['inv_code'],
            'inv_quantity' => $validatedData['inv_quantity'],
            'inv_delivered_by' => $validatedData['inv_delivered_by'],
            'inv_price' => $validatedData['inv_price'],
            'inv_measurement' => $validatedData['inv_measurement'],
            'inv_added_by' => Auth::id(),
            'inventory_info_id' => $inventoryInfo->id,
        ]);

        if ($inventoryLogistic) {
            return redirect()->route('inventories.index')->with('success', 'Inventory item created successfully.');
        } else {
            return redirect()->route('inventories.create')->with('error', 'Failed to create inventory item.');
        }
    }

    public function edit(InventoryLogistic $inventoryLogistic)
    {
        $inventoryInfo = $inventoryLogistic->info;
        $types = InventoryType::all();
        return view('inventories.edit', compact('inventoryLogistic', 'inventoryInfo', 'types'));
    }

    public function update(Request $request, InventoryLogistic $inventoryLogistic)
    {
        $validatedData = $request->validate([
            'inv_type_id' => 'required|exists:inventory_types,id',
            'inv_code' => 'required|string|max:255|unique:inventory_logistics,inv_code,' . $inventoryLogistic->id,
            'inv_name' => 'required|string|max:255',
            'inv_brand' => 'required|string|max:255',
            'inv_description' => 'required|string',
            'inv_quantity' => 'required|integer',
            'inv_delivered_by' => 'required|string|max:255',
            'inv_price' => 'required|numeric',
            'inv_measurement' => 'required|string|max:255',
        ]);

        $inventoryInfo = $inventoryLogistic->info;
        $inventoryInfo->update([
            'inv_type_id' => $validatedData['inv_type_id'],
            'inv_name' => $validatedData['inv_name'],
            'inv_brand' => $validatedData['inv_brand'],
            'inv_description' => $validatedData['inv_description'],
        ]);

        $inventoryLogistic->update([
            'inv_code' => $validatedData['inv_code'],
            'inv_quantity' => $validatedData['inv_quantity'],
            'inv_delivered_by' => $validatedData['inv_delivered_by'],
            'inv_price' => $validatedData['inv_price'],
            'inv_measurement' => $validatedData['inv_measurement'],
        ]);

        return redirect()->route('inventories.index')->with('success', 'Inventory item updated successfully.');
    }

    public function destroy(InventoryLogistic $inventoryLogistic)
    {
        $inventoryLogistic->delete();
        return redirect()->route('inventories.index')->with('success', 'Inventory item deleted successfully.');
    }
}
