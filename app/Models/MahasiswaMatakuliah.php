<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaMatakuliah extends Model
{
    use HasFactory;
    // protected $table = "mahasiswamatakuliah";


    protected $fillable = [
        'mahasiswa_id',
        'mhs_matakuliah_id',
        'nilai'
    ];

    public function mahasiswa(){
        return $this->belongsTo(MahasiswaModel::class);
    }

    public function matkul(){
        return $this->belongsTo(MatakuliahModel::class, 'mhs_matakuliah_id', 'id');
    }

}
