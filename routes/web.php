<?php
  use App\Http\Controllers\LanguageController;

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


// Route url
Route::get('/', 'DashboardController@dashboardAnalytics');

// Route Dashboards
Route::get('/dashboard-analytics', 'DashboardController@dashboardAnalytics');

// Route Components
Route::get('/sk-layout-2-columns', 'StaterkitController@columns_2');
Route::get('/sk-layout-fixed-navbar', 'StaterkitController@fixed_navbar');
Route::get('/sk-layout-floating-navbar', 'StaterkitController@floating_navbar');
Route::get('/sk-layout-fixed', 'StaterkitController@fixed_layout');

// acess controller
Route::get('/access-control', 'AccessController@index');
Route::get('/access-control/{roles}', 'AccessController@roles');
Route::get('/modern-admin', 'AccessController@home');



// Auth::routes();

// locale Route
Route::get('lang/{locale}',[LanguageController::class,'swap']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('user', 'UserController');
// !Customer
Route::get('customer-index','CustomerController@index')->name('customer.index');
Route::get('customer-create','CustomerController@create')->name('customer.create');
Route::post('customer-store','CustomerController@store')->name('customer.store');
Route::post('customer-destroy/{id}','CustomerController@destroy')->name('customer.destroy');
Route::get('customer-edit/{id}','CustomerController@edit')->name('customer.edit');
Route::post('customer-update/{id}','CustomerController@update')->name('customer.update');

// !Account
Route::get('account-create/{id}','AccountController@create')->name('account.create');
Route::post('account-store/{id}','AccountController@store')->name('account.store');
Route::get('account-index','AccountController@index')->name('account.index');

// !Type
Route::get('type-index','TypeController@index')->name('type.index');
Route::get('type-create','TypeController@create')->name('type.create');
Route::post('type-store','TypeController@store')->name('type.store');

// !Employee
Route::get('employee-index','EmployeeController@index')->name('employee.index');
Route::get('employee-create','EmployeeController@create')->name('employee.create');
Route::post('employee-store','EmployeeController@store')->name('employee.store');

// !Lucky code
Route::get('show-lucky-code','LuckyCodeController@show')->name('lucky.show');
Route::get('view-lucky-code/{id}','LuckyCodeController@view')->name('lucky.view');
Route::get('index-lucky-code','LuckyCodeController@index')->name('lucky.index');
Route::post('generate-lucky-code/{id}','LuckyCodeController@store')->name('lucky.store');
