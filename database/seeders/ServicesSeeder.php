<?php

namespace Database\Seeders;

use App\Models\services;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (['TMcell', 'Telekom Internet', 'AGTS Internet', 'AGTS Telefon', 'AGTS IPTV'] as $obj){
            services::create(['name' => $obj]);
        }
    }
}
