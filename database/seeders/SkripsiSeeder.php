<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkripsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('table_skripsi')->DB::insert([
            'id' => 1,
            'name' => 'Muhammad Noor Ibrahim',
            'nim' => '21120120140064',
            'bidang' => 'RPL',
            'judul' => 'Membuat Skripsi dengan kerangka kerja Laravel',
            'koleksi' => 'Skripsi',
            'dosen_pembimbing' => 'Pak Ibra',
            'abstrak' => 'daawfnafawofiawfoiasnanfajkfnekjfnawnfajawdawdawfawgfawgwaofjawuifhawiughewugeaiufawhfawfawhf',
            'inifile' => 'https://drive.google.com/file/d/1SIP-MazOwvhrEnIaUlXwUUCE_PcMW8U-/view?usp=share_link'

            ]);
    }
}
