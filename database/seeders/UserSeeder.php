<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'email' => 'admin@email.com',
        ]);

        User::factory()->create([
            'email' => 'user@email.com',
        ]);

        User::factory(8)->create();
    }
}
