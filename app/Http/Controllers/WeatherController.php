<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;



class WeatherController extends Controller
{
    function DisplayLoc(){
        $location=[
            "city"=>"khulna",
            "country"=>"Bangladesh",
            "name"=>"Noor",
        ];
        return $location;
    }

    function location(){
        $location=[
            "city"=>"khulna",
            "country"=>"Bangladesh",
            "name"=>"Noor",
        ];
        return view("lc",["location"=>$location]);
    }

    //weather conditions
    function weather($location){
         $weatherDetails = Http::get("https://wttr.in/($location)?format=j1")->json();
         $currentTemp = $weatherDetails["current_condition"] [0] ["temp_C"];
         $currentCondition = $weatherDetails["current_condition"] [0] ["weatherDesc"] [0] ["value"];
        return view("weather",compact("currentTemp","currentCondition","location"));
       
    }

}



