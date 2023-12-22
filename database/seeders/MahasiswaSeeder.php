<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            'npm' => "21157201132",
            'nama' => 'Gilang Dwi Cahyo',
            'alamat' => 'Gunung Pangilun',
            'no_hp' => '082333928642',
        ]); 
    }
}
