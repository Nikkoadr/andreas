<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DataMember;
use Illuminate\Support\Facades\DB;

class DataMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('data_member')->insert(
            [
                [
                    'id_toko' => '1',
                    'nama' => 'dakocan',
                    'alamat' => 'Jangga',
                ],
                [
                    'id_toko' => '2',
                    'nama' => 'haji maung',
                    'alamat' => 'jumleng',
                ],
            ]
        );
    }
}
