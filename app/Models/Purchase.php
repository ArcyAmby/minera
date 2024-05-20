<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    // Specify the table if it's not the plural form of the model name
    protected $table = 'purchases';

    // Specify the attributes that are mass assignable
    protected $fillable = [
        'inv_id',
        'purchase_price',
        'purchase_type',
        'purchase_quantity',
        'order_id',
    ];

    // Define the relationship with the Inventory model
    public function inventory()
    {
        return $this->belongsTo(Inventory::class, 'inv_id');
    }

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }
}
