<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LokasiAset extends Model
{
    use HasFactory;
    protected $table = 'lokasiaset';
    protected $guarded = [];

    public function aset()
    {
        return $this->hasMany(Aset::class, 'IDLokasi');
    }

    // public function Aset(){
    //     return $this->belongsTo(Aset::class, 'NamaLokasi');
    // }
}
