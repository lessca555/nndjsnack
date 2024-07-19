<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@erp.com',
            'password' => bcrypt('12345678'),
            'role' => 'Admin'
        ]);
        $admin->assignRole('Admin');

        $sales = User::create([
            'name' => 'Tian',
            'email' => 'tian@erp.com',
            'password' => bcrypt('12345678'),
            'role' => 'Sales'
        ]);
        $sales->assignRole('Sales');

        $user = User::create([
            'name' => 'Zaky',
            'email' => 'user@erp.com',
            'password' => bcrypt('12345678'),
            'role' => 'User'
        ]);
        $user->assignRole('User');
    }
}
