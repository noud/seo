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

// google
Route::get('/breadcrumb/{breadcrumb_list}/{field}', 'BreadcrumbController@field');
Route::get('/carousel/{carousel}/{field}', 'CarouselController@field');
Route::get('/carousel_summary/{itemList}/{field}', 'CarouselSummaryController@field');
Route::get('/blog_posting/{blog_posting}/{field}', 'BlogPostingController@field');
Route::get('/job_posting/{job_posting}/{field}', 'JobPostingController@field');
Route::get('/web_site/{web_site_google}/{field}', 'WebSiteGoogleController@field');
Route::get('/local_business/{localBusiness}/{field}', 'LocalBusinessController@field');
// schema.org
Route::get('/organization/{organization}/address/{field}', 'OrganizationController@address');
Route::get('/organization/{organization}/employees/{name}/{field}', 'OrganizationController@employeesByName');
Route::get('/organization/{organization}/founders/{name}/{field}', 'OrganizationController@foundersByName');
Route::get('/organization/{organization}/{field}', 'OrganizationController@field');

Route::get('/', function () {
    return view('welcome');
});

Route::get('schema', '\Agontuk\Schema\Controllers\SchemaController@index');
Route::post('schema', '\Agontuk\Schema\Controllers\SchemaController@generateMigration');

Route::get('/schema-inspector/schema', 'SchemaInspectorController@schema');
Route::get('/schema-inspector/test', 'SchemaInspectorController@test');
