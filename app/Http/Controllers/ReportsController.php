<?php

namespace App\Http\Controllers;

use App\Criminals;
use App\Populations;
use Illuminate\Http\Request;
use PDF;
use Redirect;
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


   public function getPopulations(Request $request)
   {
      $c = Populations::paginate(15);
      return view('reports.getPopulations')->with('populations_data', $c);
   }


   public function getRoads(Request $request)
   {
      $roads_data =Criminals::with('Populations')
      ->where('type','=','roads')
      ->orderBy('id','desc')
      ->get();
      return view('reports.getRoads')->with('road_data', $roads_data);
   }



   public function getFires(Request $request)
   {
      $fires_data =Criminals::with('Populations')
         ->where('type','=','fires')
         ->orderBy('id','desc')
         ->get();
      return view('reports.getFires')->with('fire_data', $fires_data);
   }




   public function getCriminals(Request $request)
   {
      $criminals_data = $this->get_criminals_data();
      return view('reports.getCriminals')->with('criminal_data', $criminals_data);
      return view('reports.getCriminals');
   }



   function get_criminals_data()
   {
      $criminal_data =Criminals::with('Populations')
         ->where('type','=','criminals')
         ->orderBy('id','desc')
         ->get();
      return $criminal_data;
   }

  public function criminalsPdf()
   {
      $criminal_data =Criminals::with('Populations')
         ->where('type','=','criminals')
         ->orderBy('id','desc')
         ->get();

      $output = '
     <h3 align="center">Criminals Data</h3>
     <table width="100%" style="border-collapse: collapse; border: 0px;">
      <tr>
    <th style="border: 1px solid; padding:12px;" width="20%"> People Name</th>
    <th style="border: 1px solid; padding:12px;" width="30%">Message</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Location</th>

   </tr>
     ';
      foreach($criminal_data as $criminal)
      {
         $output .= '
      <tr>
       <td style="border: 1px solid; padding:12px;">'.$criminal->populations['name'].'</td>
       <td style="border: 1px solid; padding:12px;">'.$criminal->Message.'</td>
       <td style="border: 1px solid; padding:12px;">'.$criminal->location.'</td>
       
      </tr>
      ';
      }
      $output .= '</table>';


      $pdf = \App::make('dompdf.wrapper');

      $pdf->loadHTML($output);
      return $pdf->stream();

   }
  public function RoadsPdf()
   {
      $roads_data =Criminals::with('Populations')
         ->where('type','=','roads')
         ->orderBy('id','desc')
         ->get();

      $output = '
     <h2 align="center">REPORTS</h2>
     <h3 align="center">ROADS ACCIDENT DATE</h3>
     <table width="100%" style="border-collapse: collapse; border: 0px;">
      <tr>
    <th style="border: 1px solid; padding:12px;" width="20%"> People Name</th>
    <th style="border: 1px solid; padding:12px;" width="30%">Message</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Location</th>

   </tr>
     ';
      foreach($roads_data as $road)
      {
         $output .= '
      <tr>
       <td style="border: 1px solid; padding:12px;">'.$road->populations['name'].'</td>
       <td style="border: 1px solid; padding:12px;">'.$road->Message.'</td>
       <td style="border: 1px solid; padding:12px;">'.$road->location.'</td>
       
      </tr>
      ';
      }
      $output .= '</table>';


      $pdf = \App::make('dompdf.wrapper');

      $pdf->loadHTML($output);
      return $pdf->stream();
   }

   public function FiresPdf()
   {
      $fires_data =Criminals::with('Populations')
         ->where('type','=','fires')
         ->orderBy('id','desc')
         ->get();

      $output = '
     <h2 align="center">REPORTS</h2>
     <h3 align="center">FIRE EXTINGUISHER DATA</h3>
     <table width="100%" style="border-collapse: collapse; border: 0px;">
      <tr>
    <th style="border: 1px solid; padding:12px;" width="20%"> People Name</th>
    <th style="border: 1px solid; padding:12px;" width="30%">Message</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Location</th>

   </tr>
     ';
      foreach($fires_data as $fire)
      {
         $output .= '
      <tr>
       <td style="border: 1px solid; padding:12px;">'.$fire->populations['name'].'</td>
       <td style="border: 1px solid; padding:12px;">'.$fire->Message.'</td>
       <td style="border: 1px solid; padding:12px;">'.$fire->location.'</td>
       
      </tr>
      ';
      }
      $output .= '</table>';


      $pdf = \App::make('dompdf.wrapper');

      $pdf->loadHTML($output);
      return $pdf->stream();
   }
   public function PopulationsPdf()
   {
      $populations_data =Populations::all();

      $output = '
     <h2 align="center">REPORTS</h2>
     <h3 align="center">ALL POPULATION DATA</h3>
     <table width="100%" style="border-collapse: collapse; border: 0px;">
      <tr>
    <th style="border: 1px solid; padding:12px;" width="20%"> People Name</th>
    <th style="border: 1px solid; padding:12px;" width="30%">People Username</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Location</th>

   </tr>
     ';
      foreach($populations_data as $population)
      {
         $output .= '
      <tr>
       <td style="border: 1px solid; padding:12px;">'.$population->name.'</td>
       <td style="border: 1px solid; padding:12px;">'.$population->username.'</td>
       <td style="border: 1px solid; padding:12px;">'.$population->location.'</td>
       
      </tr>
      ';
      }
      $output .= '</table>';
      $pdf =  \App::make('dompdf.wrapper');
      $pdf->loadHTML($output);
      return $pdf->stream();
   }
}
