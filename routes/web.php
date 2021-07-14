<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'cd-admin'], function(){

	Route::get('dashboard', function(){
		return view('cd-admin.dashboard.dashboard');
	});	

	//About-Us
	Route::get('create-about','Backend\AboutusController@create');
	Route::post('save-about','Backend\AboutusController@save');
	Route::get('about','Backend\AboutusController@view');
	Route::get('edit-about/{about_id}','Backend\AboutusController@edit');
	Route::post('update-about/{about_id}','Backend\AboutusController@update');
	Route::get('delete-about/{about_id}','Backend\AboutusController@delete');


	//BecomeMember
	Route::get('create-member','Backend\MemberController@create');
	Route::post('save-member','Backend\MemberController@save');
	Route::get('member','Backend\MemberController@view');
	Route::get('edit-member/{member_slug}','Backend\MemberController@edit');
	Route::post('update-member/{member_slug}','Backend\MemberController@update');
	Route::get('delete-member/{member_slug}','Backend\MemberController@delete');


	//Product
	Route::get('create-product','Backend\ProductController@create');
	Route::post('save-product','Backend\ProductController@save');
	Route::get('product','Backend\ProductController@view');
	Route::get('edit-product/{product_slug}','Backend\ProductController@edit');
	Route::post('update-product/{product_slug}','Backend\ProductController@update');
	Route::get('delete-product/{product_slug}','Backend\ProductController@delete');


	//Event
	Route::get('create-event','Backend\EventController@create');
	Route::post('save-event','Backend\EventController@save');
	Route::get('event','Backend\EventController@view');
	Route::get('edit-event/{event_slug}','Backend\EventController@edit');
	Route::post('update-event/{event_slug}','Backend\EventController@update');
	Route::get('delete-event/{event_slug}','Backend\EventController@delete');

	//Status
	Route::get('editstatus/{uuid}/{model_name}','Backend\StatusController@editstatus');


	//Important Numbers
	Route::get('create-number','Backend\ImportantNumberController@create');
	Route::post('save-number','Backend\ImportantNumberController@save');
	Route::get('number','Backend\ImportantNumberController@view');
	Route::get('edit-number/{number_slug}','Backend\ImportantNumberController@edit');
	Route::post('update-number/{number_slug}','Backend\ImportantNumberController@update');
	Route::get('delete-number/{number_slug}','Backend\ImportantNumberController@delete');


	//Team
	Route::get('create-team','Backend\TeamController@create');
	Route::post('save-team','Backend\TeamController@save');
	Route::get('team','Backend\TeamController@view');
	Route::get('edit-team/{team_slug}','Backend\TeamController@edit');
	Route::post('update-team/{team_slug}','Backend\TeamController@update');
	Route::get('delete-team/{team_slug}','Backend\TeamController@delete');


	//Service
	Route::get('create-service','Backend\ServiceController@create');
	Route::post('save-service','Backend\ServiceController@save');
	Route::get('service','Backend\ServiceController@view');
	Route::get('edit-service/{service_slug}','Backend\ServiceController@edit');
	Route::post('update-service/{service_slug}','Backend\ServiceController@update');
	Route::get('delete-service/{service_slug}','Backend\ServiceController@delete');


	//Contact
	Route::get('create-contact','Backend\ContactController@create');
	Route::post('save-contact','Backend\ContactController@save');
	Route::get('contact','Backend\ContactController@view');
	Route::get('edit-contact/{contact_uuid}','Backend\ContactController@edit');
	Route::post('update-contact/{contact_uuid}','Backend\ContactController@update');
	Route::get('delete-contact/{contact_uuid}','Backend\ContactController@delete');


	//Resource
	Route::get('create-resource','Backend\ResourceController@create');
	Route::post('save-resource','Backend\ResourceController@save');
	Route::get('resource','Backend\ResourceController@view');
	Route::get('edit-resource/{resource_slug}','Backend\ResourceController@edit');
	Route::post('update-resource/{resource_slug}','Backend\ResourceController@update');
	Route::get('delete-resource/{resource_slug}','Backend\ResourceController@delete');



});
