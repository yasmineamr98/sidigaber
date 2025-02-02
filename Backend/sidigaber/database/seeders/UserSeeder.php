<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create a user with the name 'Yasmine' and password '1234yasmine'
        User::create([
            'name' => 'Yasmine',
            'email' => 'yasmine@example.com', // You can set any valid email
            'password' => '1234yasmine', // Password will be automatically hashed due to the mutator
            'phone_number' => '1234567890', // Add phone number as needed
        ]);
    }
}
