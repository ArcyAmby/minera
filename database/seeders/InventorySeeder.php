<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\InventoryInfo;
use App\Models\InventoryLogistic;

class InventorySeeder extends Seeder
{
    public function run()
    {
        $inventoryInfos = [
            [
                'inv_type' => 'Hardware',
                'inv_name' => 'Example Item',
                'inv_brand' => 'Example Brand',
                'inv_description' => 'Description of the item goes here.',
            ],
            [
                'inv_type' => 'Hardware',
                'inv_name' => 'Example Item',
                'inv_brand' => 'Example Brand',
                'inv_description' => 'Description of the item goes here.',
            ],
        ];

        foreach ($inventoryInfos as $key => $infoData) {
            $info = InventoryInfo::create($infoData);

            $logisticsData = [
                'inv_code' => $key == 0 ? 'E0034' : 'E2223',
                'inv_measurement' => 'liters',
                'inv_quantity' => 100,
                'inv_delivered_by' => 'Supplier Name',
                'inv_price' => 10.99,
                'inv_added_by' => 1,
                'inventory_info_id' => $info->id,
            ];

            InventoryLogistic::create($logisticsData);
        }
    }
}
