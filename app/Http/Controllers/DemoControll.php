<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//request ở trong thư mục vendor/laravel/frameword/src/illuminate/http

class DemoControll extends Controller
{
    public function index()
    {
    	return "this is demo controller";
    }
    public function test($myName,$myAge,Request $request){
    	$name=$request->name;
    	$age=$request->age;
    	return  "my name-{$name} : my age-{$age}";
    	// return  "my name-{$myName} : my age-{$myAge}";
    }
}
