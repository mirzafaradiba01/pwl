<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa_MatakuliahModel extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa_matakuliah';

    protected $fillable = [
        'mahasiswa_id',
        'matakuliah_kode',
        'nilai'
    ];

    public function mahasiswa(){
        return $this->belongsToMany(MahasiswaModel::class);
    }

    public function matakuliah(){
        return $this->belongsToMany(MatakuliahModel::class);
    }

}
