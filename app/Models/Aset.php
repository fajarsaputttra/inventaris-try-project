<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aset extends Model
{
    use HasFactory;
    protected $table = 'aset';
    protected $guarded = [];

    public function lokasiaset(){
    return $this->hasMany(LokasiAset::class, 'id');
    }

    public function kategoriaset(){
    return $this->hasMany(KategoriAset::class, 'id');
    }

    // public function laset(){
    //     return $this->hasMany(LokasiAset::class, 'IDLokasi');
    // }
    // public function kaset(){
    //     return $this->hasMany(KategoriAset::class, 'IDKategori');
    // }
}
