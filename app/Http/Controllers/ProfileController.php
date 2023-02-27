<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        return view ('profile')
            ->with('name', 'Mirza Priscilla Faradiba')
            ->with('nama', 'Mirza')
            ->with('nim', '2141720254')
            ->with('kelas', 'TI-2B')
            ->with('absen', '14')
            ->with('prodi', 'D-IV Teknik Informatika')
            ->with('jurusan', 'Teknologi Informasi')
            ->with('univ', 'Politeknik Negeri Malang');
    }
}
