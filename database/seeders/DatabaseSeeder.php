<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'user_role' => 'admin',
            'name' => 'Jeshan',
            'email' => 'admin@gmail.com',            
            'password' => Hash::make('123456789'),
            'phone' => '+8801607906754',
            'state' => 'Sylhet',
            'country' => 'Bangladesh',
            'address' => 'Silver Village',
            'zipcode' => '3111',
        ]);
    }
}
