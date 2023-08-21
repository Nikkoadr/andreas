<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    'role' => '1',
                    'nama' => 'Administrator',
                    'email' => 'nikkoadrian02@gmail.com',
                    'password' => Hash::make('1234567800*'),
                ],
                [
                    'role' => '2',
                    'nama' => 'Andreas Limanto',
                    'email' => 'admin@tokoandreas.com',
                    'password' => Hash::make('1234567800'),
                ],
                [
                    'role' => '2',
                    'nama' => 'Agus Priyanto',
                    'email' => 'admin@angelcell.com',
                    'password' => Hash::make('1234567800'),
                ],
                [
                    'role' => '3',
                    'nama' => 'Agnes',
                    'email' => 'karyawan1@tokoandreas.com',
                    'password' => Hash::make('1234567800'),
                ],
                [
                    'role' => '3',
                    'nama' => 'Ratna',
                    'email' => 'karyawan1@angelcell.com',
                    'password' => Hash::make('1234567800'),
                ],
            ]
        );
    }
}
