<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DataToko;

class DataTokoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DataToko::create([
            'nama' => 'Toko Andreas',
            'alamat' => 'Jangga',
        ]);
    }
}
