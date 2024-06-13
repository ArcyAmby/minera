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

        $types = InventoryType::all();
        
        foreach ($types as $type) {
            for ($i = 1; $i <= 5; $i++) {

                $inventoryInfo = InventoryInfo::create([
                    'inv_type_id' => $type->id,
                    'inv_name' => "{$type->type_name} Item {$i}",
                    'inv_brand' => "Brand {$i}",
                    'inv_description' => "Description for {$type->type_name} Item {$i}.",
                    'inv_image' => 'img/placeholder.png', // Default placeholder image
                ]);

                InventoryLogistic::create([
                    'inv_code' => $this->generateUniqueCode($type->type_name, $i),
                    'inv_measurement' => 'units',
                    'inv_quantity' => rand(10, 100), // random quantity between 10 and 100
                    'inv_delivered_by' => 'Supplier Name',
                    'inv_price' => rand(10, 100) / 10, // random price between 1.0 and 10.0
                    'inv_added_by' => 1,
                    'inventory_info_id' => $inventoryInfo->id,
                ]);
            }
        }
    }

    private function generateUniqueCode($typeName, $index)
    {
        // Generate a unique code based on type name and index
        return substr(strtoupper($typeName), 0, 3) . str_pad($index, 4, '0', STR_PAD_LEFT);
    }
}
