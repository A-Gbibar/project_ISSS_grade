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
Route::post('/connection' , 'ControllerCreate@go')->name('connection.go');
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