<?php

namespace App\Http\Controllers;

use App\Models\InventoryType;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function index(){

        
        $inventoryTypes = InventoryType::with('inventories.logistics')->get()->groupBy('type_category');
        
        // Flatten the list of inventories
        $inventories = InventoryType::with('inventories.logistics')
            ->get()
            ->flatMap(function ($type) {
                return $type->inventories;
            });
    
        return view('user-dashboard.index', compact('inventoryTypes', 'inventories'));
    }
}
