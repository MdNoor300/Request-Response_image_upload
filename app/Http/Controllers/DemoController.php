<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    //1 string int null boolean response
    function Demo1(): string|int|null|bool{
      return "String,Number,Null,Boolean";
    }


    //2 Array and associative array response
    function Demo2(){
        
    }

    //3 json response
    function Demo3(){
        
    }


    //4 response with data, msg, code
    function Demo4(){
        
    }


    //5 Respose redirect
    function Demo5(){
        
    }


    //6 Binary file response
    function Demo6(){
        
    }


    //7 file download response
    function Demo7(){
        
    }


    //8 Response cookies  
    function Demo8(){
        
    }


    //9 Response with header properties
    function Demo9(){
        
    }


    //10 Response with blade view 
    function Demo10(){
        
    }



}
