<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'email' => 'john@example.com',
                'name' => 'Admin',
                'password' => bcrypt('password'),
                'usertype_id' => 1, 
            ],
            [
                'email' => 'jane@example.com',
                'name' => 'Guest',
                'password' => bcrypt('password'),
                'usertype_id' => 2, 
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
