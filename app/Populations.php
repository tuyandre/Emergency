<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Populations extends Model
{
   protected $fillable = [
      'name',
      'username',
      'password',
      'location',
      'telephone',
   ];


   public function Criminals(){
      return $this->hasMany('App\Criminals');
   }
}
