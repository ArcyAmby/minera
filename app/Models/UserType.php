<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usertype extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        // Add other fields as needed
    ];

    // Define relationships if any, for example:
    // public function users()
    // {
    //     return $this->hasMany(User::class);
    // }
}
