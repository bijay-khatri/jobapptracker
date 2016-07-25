<?php
	
	Route::get('/','PageController@index');

	Route::get('/about','PageController@about');


	Route::get('application/add','ApplicationController@addForm');
	Route::post('application/add','ApplicationController@save');

	Route::get('application/show','ApplicationController@show');
	Route::get('application/delete/{application}','ApplicationController@delete');
	Route::get('application/edit/{application}','ApplicationController@edit');

