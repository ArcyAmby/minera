<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_total_price',
        'order_discount',
    ];

    public function purchases()
    {
        return $this->hasMany(Purchase::class, 'order_id');
    }
}
