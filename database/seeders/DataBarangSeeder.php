<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DataBarang;

class DataBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DataBarang::create([
            'nama' => 'Tepung Ketan',
            'merek' => 'Rose Brand',
            'qty' => '100',
            'harga_umum' => '12000',
            'harga_grosir' => '11000',
            'harga_member' => '10000',
        ]);
    }
}