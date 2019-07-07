<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/firebase', 'FirebaseController@index')->name('firebase');
Route::get('/criminals', 'CriminalsController@try')->name('criminal');
Route::post('/criminals/create', 'CriminalsController@adds')->name('add_criminal');


//Admins  routes
Route::prefix('admin/')->group(/**
 *
 */
   function () {

      Route::get('dashboard', function () {
         return view('dashboard');
      })->name('dashboard');

      // categories
      Route::get('allPeople', [
         'uses' => 'PopulationsController@index',
         'as' => 'people'
      ]);
      Route::get('roadAccident', [
         'uses' => 'CriminalsController@road',
         'as' => 'road'
      ]);
      Route::get('Fire/Accident', [
         'uses' => 'CriminalsController@Fires',
         'as' => 'fires'
      ]);
      // Genealogy
      Route::get('criminals', [
         'uses' => 'CriminalsController@criminals',
         'as' => 'criminals'
      ]);

      // Edit(Modify password) password
      Route::get('edit/Credential', [
         'uses' => 'MemberController@editPassword',
         'as' => 'editpass'
      ]);







      // Edit(Modify password) password
      Route::get('edit/Credential', [
         'uses' => 'UserController@editPassword',
         'as' => 'editpass'
      ]);

      // show profile
      Route::get('edit/Profile', [
         'uses' => 'UserController@getProfile',
         'as' => 'getProfile'
      ]);

      // update profile
      Route::post('update/Profile', [
         'uses' => 'UserController@updateProfile',
         'as' => 'updateProfile'
      ]);

// update Password
      Route::post('update/password', [
         'uses' => 'UserController@updatePassword',
         'as' => 'updatePassword'
      ]);





      Route::get('criminals/all', [
         'uses' => 'Criminalscontroller@all',
         'as' => 'criminals.all'
      ]);
      Route::get('roads/all', [
         'uses' => 'Criminalscontroller@allRoads',
         'as' => 'road.all'
      ]);
      Route::get('Fires/all', [
         'uses' => 'Criminalscontroller@allFires',
         'as' => 'fires.all'
      ]);
      Route::get('People/all', [
         'uses' => 'Populationscontroller@all',
         'as' => 'peoples.all'
      ]);







      Route::get('criminals/show/{id}', [
         'uses' => 'Criminalscontroller@criminalsShow',
         'as' => 'criminals.show'
      ]);
      Route::delete('criminals/delete/{id}', [
         'uses' => 'Criminalscontroller@criminalsDestroy',
         'as' => 'criminals.delete'
      ]);

      Route::get('roads/show/{id}', [
         'uses' => 'Criminalscontroller@roadShow',
         'as' => 'roads.show'
      ]);
      Route::delete('roads/delete/{id}', [
         'uses' => 'Criminalscontroller@roadDestroy',
         'as' => 'roads.delete'
      ]);


      Route::get('fires/show/{id}', [
         'uses' => 'Criminalscontroller@firesShow',
         'as' => 'fires.show'
      ]);
      Route::delete('fires/delete/{id}', [
         'uses' => 'Criminalscontroller@firesDestroy',
         'as' => 'fires.delete'
      ]);



      Route::get('people/show/{id}', [
         'uses' => 'Populationscontroller@Show',
         'as' => 'peoples.show'
      ]);
      Route::delete('people/delete/{id}', [
         'uses' => 'Populationscontroller@destroy',
         'as' => 'peoples.delete'
      ]);

//reports for all systems



      Route::get('reports/criminals', [
         'uses' => 'ReportsController@getCriminalsReports',
         'as' => 'reports.criminals'
      ]);
      Route::get('reports/roads', [
         'uses' => 'ReportsController@getRoadReports',
         'as' => 'reports.roads'
      ]);
      Route::get('reports/fires', [
         'uses' => 'ReportsController@getFiresReports',
         'as' => 'reports.fires'
      ]);
      Route::get('reports/populations', [
         'uses' => 'ReportsController@getPopulationsReports',
         'as' => 'reports.populations'
      ]);

      //generate pdf from database

      Route::post('reports/population', [
         'uses' => 'ReportsController@getPopulations',
         'as' => 'populations.pdf'
      ]);
      Route::post('reports/Road', [
         'uses' => 'ReportsController@getRoads',
         'as' => 'roads.pdf'
      ]);

      Route::post('reports/Fire', [
         'uses' => 'ReportsController@getFires',
         'as' => 'fires.pdf'
      ]);
      Route::post('reports/Criminal', [
         'uses' => 'ReportsController@getCriminals',
         'as' => 'criminals.pdf'
      ]);



      Route::get('criminals/pdf', [
         'uses' => 'ReportsController@criminalsPdf',
         'as' => 'criminalsPdf'
      ]);

      Route::get('roads/pdf', [
         'uses' => 'ReportsController@RoadsPdf',
         'as' => 'roadsPdf'
      ]);
      Route::get('FIRES/pdf', [
         'uses' => 'ReportsController@FiresPdf',
         'as' => 'firesPdf'
      ]);
      Route::get('populations/pdf', [
         'uses' => 'ReportsController@PopulationsPdf',
         'as' => 'populationsPdf'
      ]);


   });