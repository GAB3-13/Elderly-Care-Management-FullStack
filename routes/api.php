<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/individuals', 'IndividualController@index');
Route::get('/individuals/{id}', 'IndividualController@show');
Route::post('/individuals', 'IndividualController@store');
Route::put('/individuals/{id}', 'IndividualController@update');
Route::delete('/individuals/{id}', 'IndividualController@destroy');

Route::get('/passwords', 'PasswordController@index');
Route::get('/passwords/{id}', 'PasswordController@show');
Route::post('/passwords', 'PasswordController@store');
Route::put('/passwords/{id}', 'PasswordController@update');
Route::delete('/passwords/{id}', 'PasswordController@destroy');

Route::get('/roles', 'RoleController@index');
Route::get('/roles/{id}', 'RoleController@show');
Route::post('/roles', 'RoleController@store');
Route::put('/roles/{id}', 'RoleController@update');
Route::delete('/roles/{id}', 'RoleController@destroy');

Route::get('/home-care', 'HomeCareController@index');
Route::get('/home-care/{id}', 'HomeCareController@show');
Route::post('/home-care', 'HomeCareController@store');
Route::put('/home-care/{id}', 'HomeCareController@update');
Route::delete('/home-care/{id}', 'HomeCareController@destroy');

Route::get('/salaries', 'SalaryController@index');
Route::get('/salaries/{id}', 'SalaryController@show');
Route::post('/salaries', 'SalaryController@store');
Route::put('/salaries/{id}', 'SalaryController@update');
Route::delete('/salaries/{id}', 'SalaryController@destroy');

Route::get('/patients', 'PatientController@index');
Route::get('/patients/{id}', 'PatientController@show');
Route::post('/patients', 'PatientController@store');
Route::put('/patients/{id}', 'PatientController@update');
Route::delete('/patients/{id}', 'PatientController@destroy');

Route::get('/payments', 'PaymentController@index');
Route::get('/payments/{id}', 'PaymentController@show');
Route::post('/payments', 'PaymentController@store');
Route::put('/payments/{id}', 'PaymentController@update');
Route::delete('/payments/{id}', 'PaymentController@destroy');

Route::get('/emergency-contacts', 'EmergencyContactController@index');
Route::get('/emergency-contacts/{id}', 'EmergencyContactController@show');
Route::post('/emergency-contacts', 'EmergencyContactController@store');
Route::put('/emergency-contacts/{id}', 'EmergencyContactController@update');
Route::delete('/emergency-contacts/{id}', 'EmergencyContactController@destroy');

Route::get('/approvals', 'ApprovalController@index');
Route::get('/approvals/{id}', 'ApprovalController@show');
Route::post('/approvals', 'ApprovalController@store');
Route::put('/approvals/{id}', 'ApprovalController@update');
Route::delete('/approvals/{id}', 'ApprovalController@destroy');
