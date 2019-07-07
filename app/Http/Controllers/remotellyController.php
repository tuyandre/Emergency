<?php

namespace App\Http\Controllers;

use App\Criminals;
use App\Populations;
use Illuminate\Http\Request;

class remotellyController extends Controller
{

    public function register(Request $request){
       $name=$request['name'];
       $username=$request['username'];
       $pass=$request['pass'];
       $tel=$request['tel'];

       $p = Populations::where('username', '=', $username)->first();
       if ($p){
          return response()->json(['member' => "exist"], 200);
       }
else {
   $pop = new Populations();
   $pop->name = $name;
   $pop->username = $username;
   $pop->password = $pass;
   $pop->telephone = $tel;


   try {
      $pop->save();
   } catch (QueryException $exception) {
      return response()->json(['ex' => $exception->errorInfo], 500);
   }

   return response()->json(['member' => "ok"], 200);
}
    }



    public function Login(Request $request){
       $username=$request['username'];
       $pass=$request['pass'];

       $p = Populations::where([['username', '=', $username],[ 'password','=',$pass]])->first();

       if ($p){
        $P=$p->toArray();
       
          return response()->json(['login' => "ok",'data'=>$P], 200);
       }else{
          return response()->json(['login' => "You entered incorrect credential"], 200);
       }

    }
    public function criminals(Request $request){
       $username=$request['username'];

       $p = Populations::where('username', '=', $username)->first();

       $id=$p->id;
       $message=$request['message'];
       $long=$request['long'];
       $lat=$request['lat'];
       $type=$request['type'];

       $criminal=new Criminals();
       $criminal->populations_id=$id;
       $criminal->message=$message;
       $criminal->latitude=$lat;
       $criminal->longitude=$long;
       $criminal->type=$type;
       try {
          $criminal->save();
       } catch (QueryException $exception) {
          return response()->json(['ex' => $exception->errorInfo], 500);
       }

       return response()->json(['criminal' => "ok"], 200);
    }

    public function index(){
       return response()->json(['member' =>"sfew fv fdr"], 200);
    }


    public function getCriminal(Request $request){

       $id=$request['id'];
       $cri = Criminals::where('populations_id', '=', $id)->get();
       if ($cri){
          return response()->json(['criminals' => $cri], 200);
       }else{
          return response()->json(['criminals' =>"not"], 200);
       }

    }
}
