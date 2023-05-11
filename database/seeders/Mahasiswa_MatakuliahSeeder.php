<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Mahasiswa_MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
        public function run()
        {
            DB::table('mahasiswa_matakuliahs')->insert([
                [
                    'mahasiswa_id' => '1',
                    'mhs_matakuliah_id' => '1',
                    'nilai' => 'A'
                ],
                [
                    'mahasiswa_id' => '1',
                    'mhs_matakuliah_id' => '2',
                    'nilai' => 'A'
                ],
                [
                    'mahasiswa_id' => '1',
                    'mhs_matakuliah_id' => '3',
                    'nilai' => 'B+'
                ],
                [
                    'mahasiswa_id' => '1',
                    'mhs_matakuliah_id' => '4',
                    'nilai' => 'A'
                ],
                [
                    'mahasiswa_id' => '1',
                    'mhs_matakuliah_id' => '5',
                    'nilai' => 'B+'
                ],
                [
                    'mahasiswa_id' => '2',
                    'mhs_matakuliah_id' => '6',
                    'nilai' => 'A'
                ],
                [
                    'mahasiswa_id' => '2',
                    'mhs_matakuliah_id' => '7',
                    'nilai' => 'B+'
                ],
                [
                    'mahasiswa_id' => '2',
                    'mhs_matakuliah_id' => '8',
                    'nilai' => 'A'
                ],
                [
                    'mahasiswa_id' => '2',
                    'mhs_matakuliah_id' => '9',
                    'nilai' => 'B+'
                ],
                [
                    'mahasiswa_id' => '2',
                    'mhs_matakuliah_id' => '10',
                    'nilai' => 'A'
                ]
            ]);
    }
}