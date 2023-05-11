<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatakuliahModel extends Model
{
    use HasFactory;
    protected $table = 'mhs_matakuliah';
    // protected $primaryKey ='kode';
    // protected $keyType = 'string';
    protected $fillable = [
        'kode',
        'nama_mk',
        'semester',
        'dosen',
        'sks',
        'jam' ,
        'nilai' 
    ];

    public function mahasiswaMatakuliah(){
        return $this->HasMany(MahasiswaMatakuliah::class,'mhs_matakuliah_id','id');
    }
}
