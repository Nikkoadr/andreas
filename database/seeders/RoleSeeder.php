<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('role')->insert(
            [
                [
                    'id' => '1',
                    'nama' => 'admin',
                ],
                [
                    'id' => '2',
                    'nama' => 'pemilik',
                ],
                [
                    'id' => '3',
                    'nama' => 'karyawan',
                ]
            ]
        );
    }
}
