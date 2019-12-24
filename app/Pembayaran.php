<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
   protected $table = 'pembayarans';
   protected $guarded = [];

   public function wsiswa()
   {
       return $this->belongsTo(Wsiswa::class);
   }
   public function categorie()
   {
       return $this->belongsTo(Categorie::class);
   }
}
