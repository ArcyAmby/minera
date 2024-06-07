<?php

// app/Http/Controllers/WelcomeController.php

namespace App\Http\Controllers;

use App\Models\InventoryType;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $inventoryTypes = InventoryType::all()->groupBy('type_category');
        return view('welcome', compact('inventoryTypes'));
    }
}