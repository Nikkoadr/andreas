<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DataBarang;
use Illuminate\Support\Facades\DB;

class DataBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('data_barang')->insert(
            [
                [
                    'id_toko' => '1',
                    'id_supplier' => '1',
                    'nama' => 'Tepung Ketan',
                    'stok' => '100',
                    'harga_modal' => '9000',
                    'harga_umum' => '12000',
                    'harga_member' => '10000',
                ],
                [
                    'id_toko' => '2',
                    'id_supplier' => '3',
                    'nama' => 'Casing',
                    'stok' => '100',
                    'harga_modal' => '9000',
                    'harga_umum' => '12000',
                    'harga_member' => '10000',
                ],
            ]
        );
    }
}
