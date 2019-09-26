<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/organization/{organization}/address/{field}', 'OrganizationController@address');
Route::get('/organization/{organization}/employees/{name}/{field}', 'OrganizationController@employeesByName');
Route::get('/organization/{organization}/founders/{name}/{field}', 'OrganizationController@foundersByName');
Route::get('/organization/{organization}/{field}', 'OrganizationController@field');
Route::get('/', function () {
    return view('welcome');
});
