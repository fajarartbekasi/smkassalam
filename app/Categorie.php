<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'kela_id',
        'tahun_ajaran',
        'keterangan',
        'biaya_semester',
        'psb',
        'pts_ganjil',
        'pts_genap',
        'spas',
        'pat',
        'raport',
        'daftar_ulang',
        'un',
    ];

    public function kela()
    {
        return $this->belongsTo(Kela::class);
    }

}
