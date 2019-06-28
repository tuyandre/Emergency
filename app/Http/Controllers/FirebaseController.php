<?php

namespace App\Http\Controllers;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

use Illuminate\Http\Request;

class FirebaseController extends Controller
{
    public function index(){
$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
$firebase = (new Factory)
    ->withServiceAccount($serviceAccount)
    ->create();



    $database= $firebase->getDatabase();
    $ref=$database->getReference('criminals');
   $key=$ref->push()->getKey();
 
   $ref->getChild($key)->set([
       'name'=>'Angela kamana',
        'Message'=>'FIRE Extinguisher accident',
        'location'=>'kigali',
        'telephone'=>'-1.974745, 30.077266'
   ]);
    return $key;
}
}
