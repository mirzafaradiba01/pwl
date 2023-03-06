<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HobiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hobi')->insert([
            [
                'hobi'=> 'Memasak',
                'alasan' => 'Ingin bisa belajar membuat berbagai macam makanan dan mungkin bisa membuka sebuah toko'
            ],
            [
                'hobi' => 'Menonton Film',
                'alasan' => 'Sebagai hiburan dikala waktu senggang saya'
            ],
            [
                'hobi' => 'Traveling',
                'alasan'  => 'Saya suka berjelajahi tempat-tempat baru dan ungkin saya bisa mempelajari suatu hal baru dalam melakukan traveling'
            ],
            [
                'hobi' => 'Menulis Cerpen',
                'alasan' => 'Untuk mengisi waktu senggang saya dan saya bisa menuangkan semua imajinasi maupun pengalaman saya kedalam cerpen'
            ]
        ]);
    }
}
