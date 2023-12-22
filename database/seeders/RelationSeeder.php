<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RelationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('relations')->insert([
            'mahasiswa_npm' => "21157201132",
            'dosen_nidn' => '101010',
            'matakuliah_kode' => '21157201132',
            'status' => 'Y',
        ]);  
    }
}

