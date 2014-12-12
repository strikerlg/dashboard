<?php

Route::group(['namespace' => 'Syn'], function()
{
	Route::any('/', [
		'as' => 'home',
		'uses' => 'Dashboard\Controllers\DashboardController@home'
	]);
});