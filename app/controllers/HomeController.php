<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		return View::make('index');
	}

	public function apiDatatable()
	{
		return Datatable::collection(User::all())
        ->showColumns('id','username','email','first_name', 'last_name')
        ->searchColumns('username')
        ->orderColumns('id','email')
        ->make();
	}

}
