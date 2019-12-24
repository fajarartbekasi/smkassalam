<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswas';

    protected $guarded = [];

    public function wsiswa()
    {
        return $this->belongsTo(Wsiswa::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function kela()
    {
        return $this->belongsTo(Kela::class);
    }
}
