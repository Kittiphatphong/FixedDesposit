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
// locale Route
Route::get('lang/{locale}',[LanguageController::class,'swap']);
Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');


// !Customer
Route::get('customer-index','CustomerController@index')->name('customer.index')->middleware('permission:Deposit');
Route::get('customer-create','CustomerController@create')->name('customer.create')->middleware('permission:AddCustomer');
Route::post('customer-store','CustomerController@store')->name('customer.store')->middleware('permission:AddCustomer');
Route::post('customer-destroy/{id}','CustomerController@destroy')->name('customer.destroy')->middleware('permission:DeleteCustomer');
Route::group(['middleware' => ['permission:EditCustomer']], function () {
Route::get('customer-edit/{id}','CustomerController@edit')->name('customer.edit');
Route::post('customer-update/{id}','CustomerController@update')->name('customer.update');
});

// !Account
Route::get('account-index','AccountController@index')->name('account.index')->middleware('permission:Account');
Route::group(['middleware' => ['permission:AddAccount']], function () {
Route::get('account-create/{id}','AccountController@create')->name('account.create');
Route::post('account-store/{id}','AccountController@store')->name('account.store');
Route::get('account-show/{id}','AccountController@show')->name('account.show');
});
Route::group(['middleware' => ['permission:EditAccount']], function () {
Route::get('account-edit/{id}','AccountController@edit')->name('account.edit');
Route::post('account-update/{id}','AccountController@update')->name('account.update');
});
Route::post('account-destroy/{id}','AccountController@destroy')->name('account.destroy')->middleware('permission:DeleteAccount');

// !Type
Route::get('type-index','TypeController@index')->name('type.index')->middleware('permission:SettingLuckyCode');
Route::group(['middleware' => ['permission:AddLuckyCode']], function () {
Route::get('type-create','TypeController@create')->name('type.create');
Route::post('type-store','TypeController@store')->name('type.store');
});
Route::group(['middleware' => ['permission:EditLuckyCode']], function () {
Route::get('type-edit/{id}','TypeController@edit')->name('type.edit');
Route::post('type-update/{id}','TypeController@update')->name('type.update');
});
Route::post('type-destroy/{id}','TypeController@destroy')->name('type.destroy')->middleware('permission:DeleteLuckyCode');

// !Employee
Route::group(['middleware' => ['permission:Employee']], function () {
Route::get('employee-index','EmployeeController@index')->name('employee.index');
Route::get('employee-report','EmployeeController@report')->name('employee.report');
Route::get('employee-search','EmployeeController@search')->name('employee.search');
Route::get('employee-export', 'EmployeeController@export')->name('employee.export');
Route::get('employee-search-export', 'EmployeeController@query')->name('employee.query');
});
Route::group(['middleware' => ['permission:AddEmployee']], function () {
Route::get('employee-create','EmployeeController@create')->name('employee.create');
Route::post('employee-store','EmployeeController@store')->name('employee.store');
Route::get('employee-view/{id}','EmployeeController@view')->name('employee.view');
});
Route::group(['middleware' => ['permission:EditEmployee']], function () {
Route::get('employee-edit/{id}','EmployeeController@edit')->name('employee.edit');
Route::post('employee-update/{id}','EmployeeController@update')->name('employee.update');
});
Route::post('employee-destroy/{id}','EmployeeController@destroy')->name('employee.destroy')->middleware('permission:DeleteEmployee');

// !Lucky code
Route::group(['middleware' => ['permission:ShowAccount']], function () {
Route::get('show-lucky-code','LuckyCodeController@show')->name('lucky.show');
Route::get('view-lucky-code/{id}','LuckyCodeController@view')->name('lucky.view');
});
Route::get('index-lucky-code','LuckyCodeController@index')->name('lucky.index')->middleware('permission:LuckyCode');

// !User
// Route::resource('user', 'UserController');
Route::get('user-index','UserController@index')->name('user.index')->middleware('permission:User');
Route::group(['middleware' => ['permission:AddUser']],function(){
  Route::get('user-create','UserController@create')->name('user.create');
  Route::post('user-store','UserController@store')->name('user.store');
});
Route::group(['middleware' => ['permission:EditUser']],function(){
Route::get('user-edit/{id}','UserController@edit')->name('user.edit');
Route::post('user-update/{id}','UserController@update')->name('user.update');
});
Route::post('user-destroy/{id}','UserController@destroy')->name('user.destroy')->middleware('permission:DeleteUser');

// !Role and permission
Route::get('role-index','RoleController@index')->name('role.index')->middleware('permission:Role');
Route::group(['middleware' => ['permission:AddRole']],function(){
Route::get('role-create','RoleController@create')->name('role.create');
Route::post('role-store','RoleController@store')->name('role.store');
});
Route::group(['middleware' => ['permission:EditRole']],function(){
Route::get('role-edit/{id}','RoleController@edit')->name('role.edit');
Route::post('role-update/{id}','RoleController@update')->name('role.update');
});
Route::post('role-destroy/{id}','RoleController@destroy')->name('role.destroy')->middleware('permission:DeleteRole');
Route::group(['middleware' => ['permission:AssignPermission']],function(){
route::get('add-permission/{id}','RoleController@addPermission')->name('role.permission');
route::get('store-permission/{id}','RoleController@storePermission')->name('role.storePermission');
route::get('destroy-permission/{id}','RoleController@destroyPermission')->name('role.destroyPermission');
});

// !TypeDocument
Route::get('document-index','DocumentController@index')->name('document.index')->middleware('permission:SettingLuckyCode');
Route::group(['middleware' => ['permission:AddLuckyCode']], function () {
Route::get('document-create','DocumentController@create')->name('document.create');
Route::post('document-store','DocumentController@store')->name('document.store');
});
Route::group(['middleware' => ['permission:EditLuckyCode']], function () {
Route::get('document-edit/{id}','DocumentController@edit')->name('document.edit');
Route::post('document-update/{id}','DocumentController@update')->name('document.update');
});
Route::post('document-destroy/{id}','DocumentController@destroy')->name('document.destroy')->middleware('permission:DeleteLuckyCode');


// !Random
Route::group(['middleware' => ['permission:Random']], function () {
Route::get('random-index','RandomController@index')->name('random.index');
Route::get('random-random','RandomController@random')->name('random.random');
Route::get('random-list','RandomController@list')->name('random.list');
});
Route::get('random-win','RandomController@win')->name('random.win')->middleware('permission:WinRandom');
Route::post('random-destroy/{id}','RandomController@destroy')->name('random.destroy')->middleware('permission:DeleteWinRandom');