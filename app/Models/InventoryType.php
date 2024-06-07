<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryType extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_name',
        'type_category',
        'type_description',
    ];

    public function inventories()
    {
        return $this->hasMany(InventoryInfo::class, 'inv_type_id');
    }
}
