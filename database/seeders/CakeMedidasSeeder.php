<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CakeMedidasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */  
    public function run()
    {
        DB::table('cake_medidas')->insert([
            'medida' => '5" - pulgadas',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('cake_medidas')->insert([
            'medida' => '6" - pulgadas',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('cake_medidas')->insert([
            'medida' => '7" - pulgadas',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('cake_medidas')->insert([
            'medida' => '8" - pulgadas',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('cake_medidas')->insert([
            'medida' => '9" - pulgadas',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('cake_medidas')->insert([
            'medida' => '10" - pulgadas',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('cake_medidas')->insert([
            'medida' => '11" - pulgadas',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('cake_medidas')->insert([
            'medida' => '12" - pulgadas',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('cake_medidas')->insert([
            'medida' => '14" - pulgadas',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('cake_medidas')->insert([
            'medida' => '16" - pulgadas',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
