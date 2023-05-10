<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Matakuliah')->insert([ 
            [
                'kode'=> 'RTI211001',
                'nama_mk' => 'Pancasila',
                'semester' => '1',
                'dosen' => 'Widaningsih Condrowardhani, SH, MH.',
                'sks' => '2',
                'jam' => '2',
                'nilai' => 'B+'
            ],
            [
                'kode'=> 'RTI211004',
                'nama_mk' => 'Matematika 1',
                'semester' => '1',
                'dosen' => 'Rudy Ariyanto, ST., M.Cs.',
                'sks' => '3',
                'jam' => '6',
                'nilai' => 'A'
            ],
            [
                'kode'=> 'RTI211005',
                'nama_mk' => 'Bahasa Inggris 1',
                'semester' => '1',
                'dosen' => 'Farida Ulfa, S.Pd., M.Pd.',
                'sks' => '2',
                'jam' => '4',
                'nilai' => 'B+'
            ],
            [
                'kode'=> 'RTI211008',
                'nama_mk' => 'Keselamatan dan Kesehatan Kerja',
                'semester' => '1',
                'dosen' => 'Meyti Eka Apriyani ST., MT.',
                'sks' => '2',
                'jam' => '4',
                'nilai' => 'B'
            ],
            [
                'kode'=> 'RTI211003',
                'nama_mk' => 'Critical Thinking dan Problem Solving',
                'semester' => '1',
                'dosen' => 'Dwi Puspitasari, S.Kom., M.Kom.',
                'sks' => '2',
                'jam' => '4',
                'nilai' => 'A'
            ],
            [
                'kode'=> 'RTI211007',
                'nama_mk' => 'Praktikum Dasar Pemrograman',
                'semester' => '1',
                'dosen' => "Mamluatul Hani'ah, S.Kom., M.Kom.",
                'sks' => '3',
                'jam' => '6',
                'nilai' => 'B'
            ],
            [
                'kode'=> 'RTI211006',
                'nama_mk' => 'Dasar Pemrograman',
                'semester' => '1',
                'dosen' => "Mamluatul Hani'ah, S.Kom., M.Kom.",
                'sks' => '2',
                'jam' => '4',
                'nilai' => 'B+'
            ],
            [
                'kode'=> 'RTI211002',
                'nama_mk' => 'Konsep Teknologi Informasi',
                'semester' => '1',
                'dosen' => 'Indra Dharma Wijaya, ST., M.MT.',
                'sks' => '2',
                'jam' => '4',
                'nilai' => 'B'
            ],
            [
                'kode'=> 'RTI212009',
                'nama_mk' => 'Praktikum Algoritma dan Struktur Data',
                'semester' => '2',
                'dosen' => 'Mungki Astiningrum, ST., M.Kom.',
                'sks' => '2',
                'jam' => '4',
                'nilai' => 'A'
            ],
            [
                'kode'=> 'RTI212008',
                'nama_mk' => 'Algoritma dan Struktur Data',
                'semester' => '2',
                'dosen' => 'Mungki Astiningrum, ST., M.Kom.',
                'sks' => '2',
                'jam' => '4',
                'nilai' => 'B+'
            ],
            [
                'kode'=> 'RTI212010',
                'nama_mk' => 'Ilmu Komunikasi dan Organisasi',
                'semester' => '2',
                'dosen' => 'Robby Anggriawan SE., ME.',
                'sks' => '2',
                'jam' => '4',
                'nilai' => 'B+'
            ],
            [
                'kode'=> 'RTI212004',
                'nama_mk' => 'Sistem Operasi',
                'semester' => '2',
                'dosen' => 'Ika Kusumaning Putri,S.Kom.,M.T',
                'sks' => '2',
                'jam' => '4',
                'nilai' => 'A'
            ],
            [
                'kode'=> 'RTI212005',
                'nama_mk' => 'Rekayasa Perangkat Lunak',
                'semester' => '2',
                'dosen' => 'ARIADI RETNO TRI HAYATI RIRID, S.KOM,M.KOM',
                'sks' => '2',
                'jam' => '4',
                'nilai' => 'A'
            ],
            [
                'kode'=> 'RTI212002',
                'nama_mk' => 'Matematika 2',
                'semester' => '2',
                'dosen' => 'Deasy Sandhya Elya Ikawati, S.Si, M. Si',
                'sks' => '2',
                'jam' => '4',
                'nilai' => 'B'
            ],
            [
                'kode'=> 'RTI212001',
                'nama_mk' => 'Agama',
                'semester' => '2',
                'dosen' => 'M. MUKHLIS FAHRUDDIN, MSI',
                'sks' => '2',
                'jam' => '2',
                'nilai' => 'A'
            ],
            [
                'kode'=> 'RTI212007',
                'nama_mk' => 'Praktikum Basis Data',
                'semester' => '2',
                'dosen' => 'Elok Nur Hamdana, S.T., M.T',
                'sks' => '2',
                'jam' => '4',
                'nilai' => 'B+'
            ],
            [
                'kode'=> 'RTI212006',
                'nama_mk' => 'Basis Data',
                'semester' => '2',
                'dosen' => 'Elok Nur Hamdana, S.T., M.T',
                'sks' => '2',
                'jam' => '4',
                'nilai' => 'B+'
            ],
            [
                'kode'=> 'RTI212003',
                'nama_mk' => 'Bahasa Inggris 2',
                'semester' => '2',
                'dosen' => 'Atiqah Nurul Asri, S.Pd., M.Pd.',
                'sks' => '2',
                'jam' => '4',
                'nilai' => 'A'
            ],
            [
                'kode'=> 'RTI213007',
                'nama_mk' => 'Pemrograman Berbasis Objek',
                'semester' => '3',
                'dosen' => 'Elok Nur Hamdana, S.T., M.T',
                'sks' => '2',
                'jam' => '4',
                'nilai' => 'B'
            ],
            [
                'kode'=> 'RTI213002',
                'nama_mk' => 'Sistem Manajemen Kualitas',
                'semester' => '3',
                'dosen' => 'Farida Ulfa, S.Pd., M.Pd.',
                'sks' => '2',
                'jam' => '4',
                'nilai' => 'B+'
            ],
            [
                'kode'=> 'RTI213001',
                'nama_mk' => 'Desain Antarmuka',
                'semester' => '3',
                'dosen' => 'Anugrah Nur Rahmanto, S.Sn., M.Ds.',
                'sks' => '2',
                'jam' => '4',
                'nilai' => 'B+'
            ],
            [
                'kode'=> 'RTI213004',
                'nama_mk' => 'Desain dan Pemrograman Web',
                'semester' => '3',
                'dosen' => 'DIMAS WAHYU WIBOWO, ST.,MT.',
                'sks' => '3',
                'jam' => '6',
                'nilai' => 'B+'
            ],
            [
                'kode'=> 'RTI213003',
                'nama_mk' => 'Kecerdasan Buatan',
                'semester' => '3',
                'dosen' => 'Mustika Mentari, S.Kom, M.Kom',
                'sks' => '2',
                'jam' => '4',
                'nilai' => 'B'
            ],
            [
                'kode'=> 'RTI213006',
                'nama_mk' => 'Matematika 3',
                'semester' => '3',
                'dosen' => 'Deasy Sandhya Elya Ikawati, S.Si, M. Si',
                'sks' => '2',
                'jam' => '4',
                'nilai' => 'A'
            ],
            [
                'kode'=> 'RTI213005',
                'nama_mk' => 'Basis Data Lanjut',
                'semester' => '3',
                'dosen' => 'Eka Larasati Amalia, S.ST., MT.',
                'sks' => '3',
                'jam' => '6',
                'nilai' => 'B+'
            ],
            [
                'kode'=> 'RTI213008',
                'nama_mk' => 'Praktikum Pemrograman Berbasis Objek',
                'semester' => '3',
                'dosen' => 'Elok Nur Hamdana, S.T., M.T.',
                'sks' => '3',
                'jam' => '6',
                'nilai' => 'B+'
            ],


        ]);
    }
}
