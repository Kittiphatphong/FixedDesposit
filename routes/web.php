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
Route::get('account-edit/{id}','AccountController@edit')->name('account.edit');
Route::post('account-update/{id}','AccountController@update')->name('account.update');

// !Type
Route::get('type-index','TypeController@index')->name('type.index');
Route::get('type-create','TypeController@create')->name('type.create');
Route::post('type-store','TypeController@store')->name('type.store');
Route::get('type-edit/{id}','TypeController@edit')->name('type.edit');
Route::post('type-update/{id}','TypeController@update')->name('type.update');
Route::post('type-destroy/{id}','TypeController@destroy')->name('type.destroy');

// !Employee
Route::get('employee-index','EmployeeController@index')->name('employee.index');
Route::get('employee-create','EmployeeController@create')->name('employee.create');
Route::post('employee-store','EmployeeController@store')->name('employee.store');
Route::post('employee-destroy/{id}','EmployeeController@destroy')->name('employee.destroy');
Route::get('employee-edit/{id}','EmployeeController@edit')->name('employee.edit');
Route::post('employee-update/{id}','EmployeeController@update')->name('employee.update');

// !Lucky code
Route::get('show-lucky-code','LuckyCodeController@show')->name('lucky.show');
Route::get('view-lucky-code/{id}','LuckyCodeController@view')->name('lucky.view');
Route::get('index-lucky-code','LuckyCodeController@index')->name('lucky.index');
Route::post('generate-lucky-code/{id}','LuckyCodeController@store')->name('lucky.store');

// !User
// Route::resource('user', 'UserController');
Route::get('user-index','UserController@index')->name('user.index');
Route::get('user-create','UserController@create')->name('user.create');
Route::post('user-store','UserController@store')->name('user.store');
Route::get('user-edit/{id}','UserController@edit')->name('user.edit');
Route::post('user-update/{id}','UserController@update')->name('user.update');
Route::post('user-destroy/{id}','UserController@destroy')->name('user.destroy');

// !Role and permission
Route::get('role-index','RoleController@index')->name('role.index');
Route::get('role-create','RoleController@create')->name('role.create');
Route::post('role-store','RoleController@store')->name('role.store');
Route::get('role-edit/{id}','RoleController@edit')->name('role.edit');
Route::post('role-update/{id}','RoleController@update')->name('role.update');
Route::post('role-destroy/{id}','RoleController@destroy')->name('role.destroy');

route::get('add-permission/{id}','RoleController@addPermission')->name('role.permission');
route::get('store-permission/{id}','RoleController@storePermission')->name('role.storePermission');
route::get('destroy-permission/{id}','RoleController@destroyPermission')->name('role.destroyPermission');