<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OstadController extends Controller
{
    function SayHi(){
        return "Hello";
    }


    function great($name="bhai"){
        return "Hello $name";
    }


    function samplePostRequest(Request $request){
        // return request()->all();
        return $request->input("person");
    }

    function sampleGetRequest(Request $request){
        // return request()->all();
        // return "Get Request";

        return "<form method='POST' action='/form'>
        <input type='text' name='person' placeholder='Enter Name'>
        <input type='submit' value='Submit'>
        </form>";
    }
}
