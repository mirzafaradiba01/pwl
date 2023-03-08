<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeluargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        DB::table('keluarga')->insert([
            [
                'no'=> '1',
                'nama' => 'Muhamad Zakian',
                'status' => 'Ayah',
                'jk' => 'L',
                'tgl_lahir' => '1970-07-05',
                'agama' => 'Islam',
                'pekerjaan' => 'Wiraswasta'
            ],
            [
                'no'=> '2',
                'nama' => 'Tarmini',
                'status' => 'Ibu',
                'jk' => 'P',
                'tgl_lahir' => '1980-02-04',
                'agama' => 'Islam',
                'pekerjaan' => 'Ibu Rumah Tangga'
            ],
            [
                'no'=> '3',
                'nama' => 'Mirza Priscilla Faradiba',
                'status' => 'Kakak',
                'jk' => 'P',
                'tgl_lahir' => '2003-07-01',
                'agama' => 'Islam',
                'pekerjaan' => 'Mahasiswa'
            ],
            [
                'no'=> '4',
                'nama' => 'Aina Afiza Meilani Humairo',
                'status' => 'Adek',
                'jk' => 'P',
                'tgl_lahir' => '2008-05-27',
                'agama' => 'Islam',
                'pekerjaan' => 'Pelajar'
            ],
            [
                'no'=> '5',
                'nama' => 'Zainal Fanani',
                'status' => 'Kakek',
                'jk' => 'L',
                'tgl_lahir' => '1946-12-24',
                'agama' => 'Islam',
                'pekerjaan' => 'Petani'
            ],
            [
                'no'=> '6',
                'nama' => 'Khalim',
                'status' => 'Nenek',
                'jk' => 'P',
                'tgl_lahir' => '1952-04-15',
                'agama' => 'Islam',
                'pekerjaan' => 'Ibu Rumah Tangga'
            ]

        ]);
    }
}
