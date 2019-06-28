<?php

namespace App\Http\Controllers;
use App\Populations;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use App\Criminals;
use Illuminate\Http\Request;

class CriminalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function road()
    {
       return view('dashboard.road');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Fires()
    {
       return view('dashboard.fire');
    }

    public function criminals()
    {
       return view('dashboard.criminals');
    }

   public function all()
   {
      $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseService.json');



      $firebase = (new Factory)
          ->withServiceAccount($serviceAccount)
          // The following line is optional if the project id in your credentials file
          // is identical to the subdomain of your Firebase project. If you need it,
          // make sure to replace the URL with the URL of your project.
          ->withDatabaseUri('https://emergency-alert1.firebaseio.com/')
          ->create();
  
      $database = $firebase->getDatabase(); 
      $ref=$database->getReference("criminals");
  
  
      $criminals=$ref->getValue();
      foreach ($criminals as $criminal){
  
          $all_criminals[]=$criminal;
          
  
      }
    
      // return response()->json(['criminals'=>$all_criminals],200);
      //  $cri= json_encode($all_criminals);






      $crimi = Criminals::with('Populations')
         ->where('type','=','criminals')
         ->orderBy('id','desc')
         ->get();
      return response()->json(['criminals' => $crimi], 200);




//       $c = Criminals::all();
//      return response()->json(['criminals' => $c], 200);

   }






   public function allRoads()
   {
      $crimi = Criminals::with('Populations')
         ->where('type','=','roads')
         ->orderBy('id','desc')
         ->get();
      return response()->json(['roads' => $crimi], 200);

   }
   public function allFires()
   {
      $crimi = Criminals::with('Populations')
         ->where('type','=','fires')
         ->orderBy('id','desc')
         ->get();
      return response()->json(['fires' => $crimi], 200);


   }
    public function show(Criminals $criminals)
    {
        //
    }

    

    public function try()
    {
      $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseService.json');



      $firebase = (new Factory)
          ->withServiceAccount($serviceAccount)
          // The following line is optional if the project id in your credentials file
          // is identical to the subdomain of your Firebase project. If you need it,
          // make sure to replace the URL with the URL of your project.
          ->withDatabaseUri('https://emergency-alert1.firebaseio.com/')
          ->create();
  
      $database = $firebase->getDatabase(); 
      $ref=$database->getReference("criminals");
  
  
      $criminals=$ref->getValue();
      foreach ($criminals as $criminal){
  
          $all_criminals[]=$criminal;
          
  
      }

//      return response()->json(['criminals'=>$all_criminals],200);
//      return json_encode($all_criminals);
      return view('criminals.criminal',compact('all_criminals'));
    }


    public function adds(Request $request)
    {
      $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseService.json');



      $firebase = (new Factory)
          ->withServiceAccount($serviceAccount)
          // The following line is optional if the project id in your credentials file
          // is identical to the subdomain of your Firebase project. If you need it,
          // make sure to replace the URL with the URL of your project.
          ->withDatabaseUri('https://emergency-alert1.firebaseio.com/')
          ->create();
  
      $database = $firebase->getDatabase(); 
      $ref=$database->getReference("criminals");


      $name=$request->name;
      $loc=$request->location;
      $mess=$request->message;
      $tel=$request->telephone;


      $key=$ref->push()->getKey();
      $ref->getChild($key)->set([
          'Names'=>$name,
           'message'=>$mess,
           'location'=>$loc,
           'telephone'=>$tel
      ]);


      $criminals=$ref->getValue();
      foreach ($criminals as $criminal){
  
          $all_criminals[]=$criminal;
          
  
      }

      return view('criminals.criminal',compact('all_criminals'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Criminals  $criminals
     * @return \Illuminate\Http\Response
     */
    public function destroy(Criminals $criminals)
    {
        //
    }




   public function roadDestroy($id)
   {
      $member = Criminals::find($id);
      if (!$member) {
         return response()->json(['message' => 'Invalid budget'], 404);
      }
      $member->delete();
      return response()->json(['message' => 'Data deleted'], 200);

   }

   public function firesDestroy($id)
   {
      $member = Criminals::find($id);
      if (!$member) {
         return response()->json(['message' => 'Invalid budget'], 404);
      }
      $member->delete();
      return response()->json(['message' => 'Data deleted'], 200);

   }

   public function criminalsDestroy($id)
   {
      $member = Criminals::find($id);
      if (!$member) {
         return response()->json(['message' => 'Invalid budget'], 404);
      }
      $member->delete();
      return response()->json(['message' => 'Data deleted'], 200);

   }

   public function criminalsShow($id)
   {
      $criminals = Criminals::with('Populations')
         ->orderBy('id','desc')
         ->where('id','=',$id)
         ->get();


      if (!$criminals) {
         return response()->json(['message' => 'Not found'], 404);
      }
      //return response()->json(['criminal' => $criminals]);
      return view('dashboard.criminalDetail',compact('criminals'));
   }
   public function firesShow($id)
   {
      $fires = Criminals::with('Populations')
         ->orderBy('id','desc')
         ->where('id','=',$id)
         ->get();


      if (!$fires) {
         return response()->json(['message' => 'Not found'], 404);
      }
      //return response()->json(['criminal' => $criminals]);
      return view('dashboard.fireDetail',compact('fires'));
      return view('dashboard.fireDetail');
   }
   public function roadShow($id)
   {
      $roads = Criminals::with('Populations')
         ->orderBy('id','desc')
         ->where('id','=',$id)
         ->get();


      if (!$roads) {
         return response()->json(['message' => 'Not found'], 404);
      }
      //return response()->json(['criminal' => $criminals]);
      return view('dashboard.roadDetail',compact('roads'));

   }
}
