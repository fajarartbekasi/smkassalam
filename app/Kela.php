<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kela extends Model
{
    protected $table = 'kelas';

    protected $guarded = [];

    public function siswas()
    {
        return $this->hasMany(Siswa::class);
    }
    public function categories()
    {
        return $this->hasMany(Spp::class);
    }
}
