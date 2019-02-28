<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
    	$title="this is contact";
    	//nap vao 1 file html
    	return view('contact.index')->with('title',$title);
    }
}
