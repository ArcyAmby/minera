<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\InventoryInfo;
use App\Models\InventoryLogistic;
use App\Models\InventoryType;

class InventorySeeder extends Seeder
{
    public function run()
    {
        // Manually create entries for each type
        
        // Example for InventoryType with id 1
        $inventoryInfo1 = InventoryInfo::create([
            'inv_type_id' => 1,
            'inv_name' => 'Stainless Steel Cotter',
            'inv_brand' => 'Dong',
            'inv_description' => 'Stainless steel cotter nails for everyday use',
            'inv_image' => 'img/product-1.jpg',
        ]);

        InventoryLogistic::create([
            'inv_code' => $this->generateUniqueCode('Type 1', 1),
            'inv_measurement' => 'Per Piece',
            'inv_quantity' => 50,
            'inv_delivered_by' => 'Dong Supplier',
            'inv_price' => 45.0,
            'inv_added_by' => 1,
            'inventory_info_id' => $inventoryInfo1->id,
        ]);

        // Example for InventoryType with id 2
        $inventoryInfo2 = InventoryInfo::create([
            'inv_type_id' => 2,
            'inv_name' => 'Countersdunk Flat Head Screw',
            'inv_brand' => 'Sus304',
            'inv_description' => 'Xtended Sus304 Philiipps Self Tapping Wood Screw.',
            'inv_image' => 'img/product-2.jpg',
        ]);

        InventoryLogistic::create([
            'inv_code' => $this->generateUniqueCode('Type 2', 1),
            'inv_measurement' => 'Per Piece',
            'inv_quantity' => 75,
            'inv_delivered_by' => 'Philipps',
            'inv_price' => 90.0,
            'inv_added_by' => 1,
            'inventory_info_id' => $inventoryInfo2->id,
        ]);

        $inventoryInfo3 = InventoryInfo::create([
            'inv_type_id' => 3,
            'inv_name' => 'Heavy Duty Pipe',
            'inv_brand' => 'PPR',
            'inv_description' => '4 meters pipe',
            'inv_image' => 'img/product-3.jpg',
        ]);

        InventoryLogistic::create([
            'inv_code' => $this->generateUniqueCode('Type 3', 1),
            'inv_measurement' => 'Meters',
            'inv_quantity' => 100,
            'inv_delivered_by' => 'Philipps',
            'inv_price' => 200.0,
            'inv_added_by' => 1,
            'inventory_info_id' => $inventoryInfo3->id,
        ]);

        // Repeat the above pattern for each type as needed.
    }

    private function generateUniqueCode($typeName, $index)
    {
        // Generate a unique code based on type name and index
        return substr(strtoupper($typeName), 0, 3) . str_pad($index, 4, '0', STR_PAD_LEFT);
    }
}
