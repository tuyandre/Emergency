<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Criminals extends Model
{
   protected $fillable = [
      'populations_id', 'Message', 'longitude','latitude','audio','photo','type',
   ];
   public function Populations(){
      return $this->belongsTo('App\Populations');
   }
}
