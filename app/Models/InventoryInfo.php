<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'inv_type_id',
        'inv_name',
        'inv_brand',
        'inv_description',
        'inv_image',
    ];

    public function logistics()
    {
        return $this->hasMany(InventoryLogistic::class, 'inventory_info_id');
    }

    public function type()
    {
        return $this->belongsTo(InventoryType::class, 'inv_type_id');
    }
}
