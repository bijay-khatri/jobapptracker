<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
    /**
     * The index page
     */

    public function index(){
    	return view('index');
    }

    public function about(){
    	return view('about');
    }

}
