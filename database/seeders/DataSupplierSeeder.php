<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DataSupplier;

class DataSupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DataSupplier::create([
            'nama' => 'Sinar Jaya',
            'alamat' => 'Jatibarang',
            'nomor_hp' => '08190002000',
        ]);
    }
}
