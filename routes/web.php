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

Route::get('/' , 'ControllerCreate@wolcome')->name('wolcome.index');
Route::get('/produtionP/{idP}' , 'ControllerCreate@index')->name('production.index');
Route::post('/CreateP' , 'ControllerCreate@store')->name('proffesseur.store');

Route::post('/connection' , 'controllerLogin@login')->name('connection.login');

Route::post('/CreatePP001/{idP}' , 'ControllerCreate@storePP01')->name('CreatePP001.store');
Route::get('/configNote' , 'ControllerSetting@showconfig')->name('Setting.ShowconfigNote');
Route::put('/configNote/{id}' ,'ControllerSetting@storeConfig' )->name('Setting.storeConfig');
Route::get('/calcPP01/{id}' , 'ControllerCalc@calcPP01')->name('calcPP01');

Route::get('/createPP02/{id}' , 'ControlllerPPO02@show')->name('createPP02.show');
Route::post('/createPP02/{id}' , 'ControlllerPPO02@store')->name('createPP02.store');

Route::get('/createPP03/{id}' , 'ControllerPP03@show')->name('createPP03.show');
Route::post('/createPP03/{id}' , 'ControllerPP03@store')->name('createPP03.store');
// Next Step EP
Route::get('/nextStep/{id}' , 'ControllerEP01@index')->name('nextStep.index');
//========EP01=======
Route::get('EP01/{id}' , 'ControllerEP01@show')->name('EP01.show');
Route::post('EP01/{id}' , 'ControllerEP01@store')->name('EP01.store');
//========EP02=======
Route::get('EP02/{id}' , 'ControllerEP02@show')->name('EP02.show');
Route::post('EP02/{id}' , 'ControllerEP02@store')->name('EP02.store');
//========EP03=======
Route::get('EP03/{id}' , 'ControllerEP03@show')->name('EP03.show');
Route::post('EP03/{id}' , 'ControllerEP03@store')->name('EP03.store');
//========EP04=EP05=======
Route::get('EP04_EP05/{id}' , 'ControllerEP04_EP05@show')->name('EP04_EP05.show');
Route::post('EP04_EP05/{id}' , 'ControllerEP04_EP05@store')->name('EP04_EP05.store');
//========EP06=======
Route::get('EP06/{id}' , 'ControllerEP06@show')->name('EP06.show');
Route::post('EP06/{id}' , 'ControllerEP06@store')->name('EP06.store');

//===========RPA01============
Route::get('/nextStepRPA/{id}' , 'ControllerRPA01@index')->name('nextStepRPA.index');
Route::get('/RPA01/{id}' , 'ControllerRPA01@show')->name('RPA01.show');
Route::post('/RPA01/{id}' , 'ControllerRPA01@store')->name('RPA01.store');

//========RP0A2===============
Route::get('/RPA02/{id}' , 'ControllerRPA02@show')->name('RPA02.show');
Route::post('/RPA02/{id}' , 'ControllerRPA02@store')->name('RPA02.store');

//========RPA03===============
Route::get('/RPA03/{id}' , 'ControllerRPA03@show')->name('RPA03.show');
Route::post('/RPA03/{id}' , 'ControllerRPA03@store')->name('RPA03.store');
//========RPA04=RPA05=RPA06===============
Route::get('/RPA04-05-06-07/{id}' , 'ControllerRPA04@show')->name('RPA04-05-06-07.show');
Route::post('/RPA04-05-06-07/{id}' , 'ControllerRPA04@store')->name('RPA04-05-06-07.store');

//========RPA08===============
Route::get('/RPA08/{id}' , 'ControllerRPA08@show')->name('RPA08.show');
Route::post('/RPA08/{id}' , 'ControllerRPA08@store')->name('RPA08.store');

//===========PS01============
Route::get('/nextStepPS/{id}' , 'ControllerPS@index')->name('nextStepPS.index');

// Route::get('/home', 'HomeController@index')->name('home');
