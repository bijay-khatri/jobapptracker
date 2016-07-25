<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Company;
use App\Position;
use App\Application;

class ApplicationController extends Controller
{
    

	public function addForm(){
		//Get all positions from DB
		$positions = Position::all();
		//Get all companies from DB
        $companies = Company::all();
      	$application = new Application();
    	return view('job.add',compact('positions','companies','application'));
	}

    /*
     * Save the application object to database 
    */
    public function save(Request $request){
    	if(empty($request['id']))
    		$application = new Application();
    	else
    		$application = Application::find((int)$request['id']);

        $application->description = $request['description'];
        $application->applied_on =  $request['applied_on'];

        $application->user_id = 1;
        $application->company_id = $request['company_id'];
        $application->position_id =$request['position_id'];

        $application->save();


        //follow the prg pattern
        return redirect()->action('ApplicationController@show');
    }

    public function show(){
    	
		//Get all applications from DB
        $applications = Application::all();
    	return view('job.list', compact('applications'));
    }

    public function delete(Request $request, Application $application){
    	$application->delete();
    	return redirect()->back();
    }

     public function edit(Request $request, Application $application){

     	//Get all positions from DB
		$positions = Position::all();
		//Get all companies from DB
        $companies = Company::all();

    	return view('job.add',compact('application','positions','companies'));
    }
}
