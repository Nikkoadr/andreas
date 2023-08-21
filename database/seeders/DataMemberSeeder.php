<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DataMember;

class DataMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DataMember::create([
            'nama' => 'dakocan',
            'alamat' => 'Jangga',
        ]);
    }
}
