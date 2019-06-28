<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportsController extends Controller
{
   public function getCriminalsReports()
   {
      return view('reports.criminals');
   }
   public function getRoadReports()
   {
      return view('reports.roads');
   }
   public function getFiresReports()
   {
      return view('reports.fires');
   }
   public function getPopulationsReports()
   {
      return view('reports.populations');
   }
}
