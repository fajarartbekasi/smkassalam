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
       return $this->hasMany(Pembayaran::class);
   }
   public function siswas()
   {
       return $this->hasMany(Siswa::class);
   }
}
