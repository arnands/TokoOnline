<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'nama' => 'Administrator',
            'email' => 'admin@gmail.com',
            'role' => '1',
            'status' => 1,
            'hp' => '08214433756',
            'password' =>bcrypt('p@55word'),
        ]);
        User::factory()->create([
            'nama' => 'arnanda',
            'email' => 'arnanda@gmail.com',
            'role' => '0',
            'status' => 0,
            'hp' => '08214433857',
            'password' =>bcrypt('p@55word'),
        ]);
        User::factory()->create([
            'nama' => 'arnanda',
            'email' => 'arnands@gmail.com',
            'role' => '0',
            'status' => 0,
            'hp' => '08214433856',
            'password' =>bcrypt('p@55word'),
        ]);
    }
}
