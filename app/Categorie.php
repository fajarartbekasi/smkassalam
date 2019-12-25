<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $table = 'categories';

    protected $guarded = [];

    public function kela()
    {
        return $this->belongsTo(Kela::class);
    }

}
