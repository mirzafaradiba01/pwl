<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kendaraan')->insert([
            [
                'no_pol' => 'AE1703MPF',
                'merk' => 'Honda',
                'jenis' => 'Beat',
                'tahun_buat' => '2023',
                'warna' => 'Merah'
            ],
            [
                'no_pol' => 'AG2030FRD',
                'merk' => 'Suzuki',
                'jenis' => 'Ertiga',
                'tahun_buat' => '2022',
                'warna' => 'Hitam'
            ],
            [
                'no_pol' => 'N5678CLA',
                'merk' => 'Daihatsu',
                'jenis' => 'Ayla',
                'tahun_buat' => '2021',
                'warna' => 'Putih'
            ],
            [
                'no_pol' => 'AA3502KLF',
                'merk' => 'Toyota',
                'jenis' => 'Fortuner',
                'tahun_buat' => '2022',
                'warna' => 'Abu-Abu'
            ]
        ]);
    }
}
