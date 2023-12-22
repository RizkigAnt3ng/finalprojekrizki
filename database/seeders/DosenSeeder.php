<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dosens')->insert([
            'nidn'=>"121212",
            'nama'=>'Rizki',
            'alamat'=> 'Padang',
            'no_hp'=> '081234567890',
        ]);
    }
}
