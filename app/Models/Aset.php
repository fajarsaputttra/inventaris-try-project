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
    return $this->belongsTo(LokasiAset::class, 'IDLokasi');
    }

    public function kategoriaset(){
    return $this->belongsTo(KategoriAset::class, 'IDKategori');
    }
}
