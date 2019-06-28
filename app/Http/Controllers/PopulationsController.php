<?php

namespace App\Http\Controllers;

use App\Populations;
use Illuminate\Http\Request;

class PopulationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('dashboard.peoples');
    }

   public function all()
   {
      $c = Populations::all();
      return response()->json(['peoples' => $c], 200);

   }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
   public function show($id)
   {
      $c = Populations::find($id);
      if (!$c) {
         return response()->json(['message' => 'Not found'], 404);
      }
      //return response()->json(['peoples' => $c]);
      return view('dashboard.peopleDetail');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Populations  $populations
     * @return \Illuminate\Http\Response
     */
    public function edit(Populations $populations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Populations  $populations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Populations $populations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Populations  $populations
     * @return \Illuminate\Http\Response
     */
    public function destroy(Populations $populations)
    {
        //
    }
}
