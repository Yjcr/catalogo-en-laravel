<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\games;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Games::factory(500)->create();

        User::factory()->create([
            'name' => 'yey',
            'email' => 'yey@example.com',
        ]);
    }
}
