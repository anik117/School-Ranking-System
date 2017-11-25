<?php

namespace App\Http\Controllers;

use App\School;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    	$schools=School::all();
    	return view('index', compact('schools'));
    }
    public function about(){
    	return view('pages.about');
    }
}
