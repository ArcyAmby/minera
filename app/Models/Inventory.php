<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'inv_type',
        'inv_code',
        'inv_name',
        'inv_brand',
        'inv_description',
        'inv_quantity',
        'inv_delivered_by',
        'inv_price',
        'inv_added_by', // Add the new column to the fillable array
    ];

    public function addedBy()
    {
        return $this->belongsTo(User::class, 'inv_added_by');
    }

    public function purchases()
    {
        return $this->hasMany(Purchase::class, 'inv_id');
    }
}
