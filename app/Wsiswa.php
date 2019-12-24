<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wsiswa extends Model
{
   protected $table = 'wsiswas';

   protected $guarded = [];

   public function user()
   {
       return $this->belongsTo(User::class);
   }
   public function pembayarans()
   {
       return $this->hasOne(Pembayaran::class);
   }
   public function categorie()
   {
       return $this->hasMany(Categorie::class);
   }
}
