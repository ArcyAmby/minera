<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserInfo;
use App\Models\User;

class UserInfoSeeder extends Seeder
{
    public function run()
    {
        // Retrieve the first two users from the users table
        $users = User::take(2)->get();

        // Create user info entries for each user with different information
        foreach ($users as $user) {
            UserInfo::create([
                'user_firstname' => $user->name,
                'user_lastname' => 'Doe',
                'user_middlename' => 'M',
                'user_bdate' => '1990-01-01',
                'user_address' => $user->email . ' Address',
                'user_contact_num' => '1234567890',
                'user_id' => $user->id,
            ]);
        }
    }
}
