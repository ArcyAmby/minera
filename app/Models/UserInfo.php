<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;

    protected $table = 'user_info';

    protected $fillable = [
        'user_firstname',
        'user_lastname',
        'user_middlename',
        'user_bdate',
        'user_address',
        'user_contact_num',
        'user_id',
    ];

    // Define relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
