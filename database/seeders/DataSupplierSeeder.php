<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataSupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('data_supplier')->insert(
            [
                [
                    'id_toko' => '1',
                    'nama' => 'Siniar Jaya',
                    'alamat' => 'Jatibarang',
                    'nomor_hp' => '08190002000',
                ],
                [
                    'id_toko' => '2',
                    'nama' => 'Ono',
                    'alamat' => 'Indramayu',
                    'nomor_hp' => '08190005000',
                ]
            ]
        );
    }
}
