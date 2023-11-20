<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OstadController;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\DemoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hi',[OstadController::class,'SayHi']);
Route::get("/great/{name?}",[OstadController::class,'great']);
 Route::post("/sample-post-request",[OstadController::class,'samplePostRequest']);

 Route::post("/form",[OstadController::class,'samplePostRequest']);
 Route::get("/form",[OstadController::class,'sampleGetRequest']);

 Route::get("/loc",[WeatherController::class,'location']);

 Route::get("/weather/{location}",[WeatherController::class,'weather']);

 Route::get("person/{name?}",[PersonalController::class,"getPerson"])->whereAlpha("name");

 Route::get("personById/{id?}",[PersonalController::class,"getpersonById"])->whereNumber("id");

 Route::get("person/{name?}/account/{accountId?}",[PersonalController::class,"personAccount"])->whereAlpha("name")->whereNumber("accountId");

 Route::get("/persons",[PersonalController::class,"personForm"]);
 Route::post("/persons",[PersonalController::class,"personCreate"]);


//  Route::post("/api/persons",[ApiController::class,"creatAPerson"]);



//Various Response Formats 
Route::get('Demo1',[DemoController::class,'Demo1']);
Route::get('Demo1',[DemoController::class,'Demo1']);
Route::get('Demo1',[DemoController::class,'Demo1']);
Route::get('Demo1',[DemoController::class,'Demo1']);
Route::get('Demo1',[DemoController::class,'Demo1']);
Route::get('Demo1',[DemoController::class,'Demo1']);
Route::get('Demo1',[DemoController::class,'Demo1']);
Route::get('Demo1',[DemoController::class,'Demo1']);
Route::get('Demo1',[DemoController::class,'Demo1']);
Route::get('Demo1',[DemoController::class,'Demo1']);
////// 