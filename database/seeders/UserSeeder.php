<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Manager',
            'role_id' => 1, // Make sure this role ID exists in your roles table
            'email' => 'manager@gmail.com',
            'password' => Hash::make('secret'), // Remove the leading backslash
        ]);
    }
}