<?php

Route::get('/',"Weclomecontroller@index");




Auth::routes();

Route::get('/home', 'HomeController@index');

Route::match(['get', 'post'],'profile','PorfileController@GetUserInfo');
Route::post('research/add',"PorfileController@add");
Route::get('/interface',"AproveResearchController@show");
Route::get('/interface/aprrove/{id}',"AproveResearchController@approve");

