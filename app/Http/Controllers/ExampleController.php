<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
	public function __construct()
	{ 
		//khai bao su dung middleware owr day
		// $this->middleware('testLogin')->only('index');
		//truyen tham số vào middleware
		$this->middleware('testLogin:superAdmin')->except(['info','demo']);//loaji tru info con day tac dong het
	}
	public function demo(){
		return "demo middleware";
	}
    public function index(){
    	return "this is index";
    }
    public function info(){
    	return "hello you";
    }
}
