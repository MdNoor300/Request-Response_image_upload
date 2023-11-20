<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalController extends Controller
{
    function getPerson(Request $request, $name=null){
        $display = $request->input("display","profile");
       return response("Hello {$name} - displaying {$display}",200);
    }

    function getPersonById(Request $request, $id=null){
        if($id == null){
            return response("Provide the id",400);
        }else{
        return response("The id is : {$id}",200);
        }
    }

    function personAccount(Request $request, $name=null, $accountId=null){
        return response("Hello {$name}, your account number is {$accountId}", 200);
    }    



    function personForm(){
        return view("person");
    }


    function personCreate(Request $request){

        // $request->validate([
        //     'image' => 'required|image|max:300'      //for image validation
        // ]);

        $name = $request -> input("name");
        $email = $request -> input("email");
        $image = $request -> file("image");

          // Check if a file was uploaded
        if($image){
            // Generate a unique name for the image using current timestamp, original name, and extension
        $imageName = time()."-".$image->getClientOriginalName();

        // Move the uploaded image to the public "images" directory
        $image->move(public_path("images"),$imageName);
        }else{
            $imageName = null; 
        }
        return view("newPerson",[
            "name" => $name,
            "email"=> $email, 
            "image"=>$imageName]);
        // return response("Person: {$name} with email: {$email} created",200);
    }

}