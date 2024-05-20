<?php
namespace App\Http\Controllers;

use App\Models\Inventory;
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
            // Eager load the 'addedBy' relationship
            $inventory = Inventory::with('addedBy')
                ->select('id', 'inv_type', 'inv_name', 'inv_brand', 'inv_description', 'inv_quantity', 'inv_delivered_by', 'inv_price', 'inv_added_by', 'created_at')
                ->get();

            return DataTables::of($inventory)
                ->addColumn('added_by_name', function ($inventory) {
                    return $inventory->addedBy ? $inventory->addedBy->name : 'N/A'; // Show 'N/A' if no user is found
                })
                ->addColumn('action', function ($inventory) {
                    $editUrl = route('inventories.edit', $inventory->id);
                    $deleteUrl = route('inventories.destroy', $inventory->id);

                    return '<a href="' . $editUrl . '" class="btn btn-primary">Edit</a> 
                            <form method="POST" action="' . $deleteUrl . '" style="display:inline;">
                                '. csrf_field() . method_field("DELETE") .'
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>';
                })
                ->make(true);
        }

        return view('inventories.index');
    }

    public function store()
    {
        return view('inventories.store');
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'inv_type' => 'required|string|max:255',
            'inv_code' => 'required|string|max:255|unique:inventories,inv_code',
            'inv_name' => 'required|string|max:255',
            'inv_brand' => 'required|string|max:255',
            'inv_description' => 'required|string',
            'inv_quantity' => 'required|integer',
            'inv_delivered_by' => 'required|string|max:255',
            'inv_price' => 'required|numeric',
        ]);

        $inventory = Inventory::create([
            'inv_type' => $validatedData['inv_type'],
            'inv_code' => $validatedData['inv_code'],
            'inv_name' => $validatedData['inv_name'],
            'inv_brand' => $validatedData['inv_brand'],
            'inv_description' => $validatedData['inv_description'],
            'inv_quantity' => $validatedData['item_quantity'],
            'inv_delivered_by' => $validatedData['item_delivered_by'],
            'inv_price' => $validatedData['item_price'],
            'inv_added_by' => Auth::id(), // Use the currently authenticated user's ID
        ]);

        if ($inventory) {
            return redirect()->route('inventories.index')->with('success', 'Inventory item created successfully.');
        } else {
            return redirect()->route('inventories.create')->with('error', 'Failed to create inventory item.');
        }
    }

    public function edit(Inventory $inventory)
    {
        return view('inventories.edit', compact('inventory'));
    }

    public function update(Request $request, Inventory $inventory)
    {
        $validatedData = $request->validate([
            'inv_type' => 'required|string|max:255',
            'inv_code' => 'required|string|max:255|unique:inventories,inv_code,' . $inventory->id,
            'inv_name' => 'required|string|max:255',
            'inv_brand' => 'required|string|max:255',
            'inv_description' => 'required|string',
            'inv_quantity' => 'required|integer',
            'inv_deivered_by' => 'required|string|max:255',
            'inv_price' => 'required|numeric',
        ]);

        $inventory->update([
            'inv_type' => $validatedData['inv_type'],
            'inv_code' => $validatedData['inv_code'],
            'inv_name' => $validatedData['inv_name'],
            'inv_brand' => $validatedData['inv_brand'],
            'inv_description' => $validatedData['inv_description'],
            'inv_quantity' => $validatedData['inv_quantity'],
            'inv_delivered_by' => $validatedData['inv_delivered_by'],
            'inv_price' => $validatedData['inv_price'],
        ]);

        return redirect()->route('inventories.index')->with('success', 'Inventory item updated successfully.');
    }

    public function destroy(Inventory $inventory)
    {
        $inventory->delete();
        return redirect()->route('inventories.index')->with('success', 'Inventory item deleted successfully.');
    }


}
