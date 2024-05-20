<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Inventory;

class InventorySeeder extends Seeder
{
    public function run()
    {
        $inventories = [
            [
                'inv_type' => 'Hardware',
                'inv_code' => 'E0034',
                'inv_name' => 'Example Item',
                'inv_brand' => 'Example Brand',
                'inv_description' => 'Description of the item goes here.',
                'inv_quantity' => 100,
                'inv_delivered_by' => 'Supplier Name',
                'inv_price' => 10.99,
                'inv_added_by' => 1,
            ],
            [
                'inv_type' => 'Hardware',
                'inv_code' => 'E2223',
                'inv_name' => 'Example Item',
                'inv_brand' => 'Example Brand',
                'inv_description' => 'Description of the item goes here.',
                'inv_quantity' => 100,
                'inv_delivered_by' => 'Supplier Name',
                'inv_price' => 10.99,
                'inv_added_by' => 1,
            ],
        ];

        foreach ($inventories as $inventory) {
            Inventory::create($inventory);
        }
        // Generate 10 entries for the inventory table
        
    }
}
