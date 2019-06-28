<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
   public function editPassword(){
      return view('profile.editpasword');

   }


   public function updatePassword(Request $request){
      if (Auth::check())
      {
         $user=User::find(Auth::User()->id);

         if (Hash::check($request['oldpass'], Auth::User()->password)){
            $user->password=Hash::make($request['password']);
            $user->save();
            return back()->with('success','Password Updated Successfull !');

         }
         else {
            return back()->with('error','Current password is not Correct !');
         }

      }
   }




   public function getProfile(){

      if (Auth::check())
      {

      $user=User::find(Auth::User()->id);

      //return response()->json(['member' => $user], 200);

      return view('profile.updateProfile', ['user'=>$user]);
   }}

   public function updateProfile(Request $request){

      if (Auth::check())
      {
         $user=User::find(Auth::User()->id);
         $user->name=$request['name'];
         $user->email=$request['email'];
         $user->save();
         return back()->with('success','Profile Updated Successfull!');
      }
   }
}
