<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('petugas')->insert([
            'nama_petugas' => 'Endi Admin',
            'username' => 'adm_endi',
            'password' => Hash::make('password'),
            'telp' => '089624005433',
            'alamat'=> 'cikerteg',
            'jk'=>'Laki-Laki',
            'level' => 'administrator',
            'status' => true,
            'created_at' => now()
        ]);

        DB::table('petugas')->insert([
            'nama_petugas' => 'Endi Petugas',
            'username' => 'ptg_endi',
            'password' => Hash::make('password'),
            'telp' => '089614226228',
            'alamat'=> 'balandongan',
            'jk'=> 'Wanita',
            'level' => 'petugas',
            'status' => true,
            'created_at' => now()
        ]);
    }
}
