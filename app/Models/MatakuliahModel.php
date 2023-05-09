<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatakuliahModel extends Model
{
    use HasFactory;
    protected $table = 'matakuliah';
    protected $primaryKey ='kode';
    protected $keyType = 'string';
    protected $fillable = [
        'kode',
        'nama_mk',
        'dosen',
        'sks',
        'jam' ,
        'nilai' 
    ];
}
