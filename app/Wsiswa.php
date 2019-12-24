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
}
