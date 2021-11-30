<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $details = [
            'name' => 'William Odhiambo',
            'email' => 'itswilliamodhiambo@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'is_staff' => true,
            'is_super_admin' => true,
            'status' => true,
        ];

        User::create($details);
    }
}
