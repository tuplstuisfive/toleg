<?php

namespace Database\Seeders;

use App\Models\card;
use App\Models\contact;
use App\Models\status;
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
//
//        User::factory()->create([
//            'name ' => 'Test User',
//            'email' => 'test@example.com',
//        ]);
        $this->call([
            ServicesSeeder::class,
        ]);

        card::factory(10)->create();
        contact::factory(10)->create();
        status::factory(10)->create();
    }
}
