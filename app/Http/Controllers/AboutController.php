<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
    	$title="this is About";
    	//nap vao 1 file html
    	return view('about.index')->with('title',$title);
    }
}
