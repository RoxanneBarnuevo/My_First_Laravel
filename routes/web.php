<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'StudentController@welcome');

Route::get('/about', 'StudentController@about')->name('about');

Route::get('/login', 'StudentController@login')->name('login');

/*USERS */
Route::get('/users', 'StudentController@users')->name('users');

Route::get('/user', 'StudentController@index')->name('user-list');
Route::get('/register', 'StudentController@register')->name('register');
Route::post('/user', 'StudentController@save')->name('save-user');

/*Update*/
Route::get('/users-edit/{id}', 'StudentController@edit')->name('users-edit'); /*edit */
Route::post('/save-edit/{id}', 'StudentController@saveUpdate')->name('save-user-edit');


Route::get('/delete/{id}', 'StudentController@remove')->name('delete');  /*delete */





/*EMPLOYEES*/

Route::get('/employees/list', 'EmployeesController@list')->name('list');
Route::get('/employees', 'EmployeesController@index1')->name('employees-list');
Route::get('/employees/create', 'EmployeesController@create_employee')->name('create');
Route::post('/employees', 'EmployeesController@save_employee')->name('save-employees');


 /*edit */
Route::get('/employees/edit/{id}', 'EmployeesController@edit_employee')->name('edit_employee');
Route::post('/save-edit/{id}', 'EmployeesController@saveUpdate_employee')->name('save-edit');

/*delete */
Route::get('/employees/delete/{id}', 'EmployeesController@remove_employee')->name('delete_employee');  