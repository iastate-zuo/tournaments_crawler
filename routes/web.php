<?php

use Illuminate\Support\Facades\Route;
use \App\Contact;

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

//Route::get('/', function () {
//	$contacts = Contact::paginate(10);
//	return view('home', ['contacts' => $contacts]);
//});

Route::get('/', 'ContactController@index');
