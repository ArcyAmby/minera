<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryLogistic extends Model
{
    use HasFactory;

    protected $fillable = [
        'inv_code',
        'inv_measurement',
        'inv_quantity',
        'inv_delivered_by',
        'inv_price',
        'inv_added_by',
        'inventory_info_id',
    ];

    public function addedBy()
    {
        return $this->belongsTo(User::class, 'inv_added_by');
    }

    public function info()
    {
        return $this->belongsTo(InventoryInfo::class, 'inventory_info_id');
    }
}
