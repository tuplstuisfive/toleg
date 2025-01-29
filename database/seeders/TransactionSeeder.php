<?php

namespace Database\Seeders;

use App\Models\transaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $objs= ['100','1000','10000','100000'];
        foreach ($ojbs as $obj) {
            transaction::create(['price'=>$obj]);
        };
    }
}
