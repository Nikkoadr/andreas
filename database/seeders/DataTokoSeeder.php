<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataTokoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('data_toko')->insert(
            [
                [
                    'nama' => 'Toko Andreas',
                    'alamat' => 'Jangga',
                ],
                [
                    'nama' => 'Angel Cell',
                    'alamat' => 'Jangga'
                ]
            ]
        );
    }
}
