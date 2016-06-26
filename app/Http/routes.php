<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// API ROUTES.
Route::group(['prefix' => 'api/v1'], function () {
    Route::get('customers', 'ApiCustomerController@index');
    Route::get('customers/{id}', 'ApiCustomerController@show');
    Route::put('customers/{id}', 'ApiCustomerController@update');
    Route::post('customers', 'ApiCustomerController@insert');
    Route::patch('customers/{id}', 'ApiCustomerController@update');
    Route::delete('customers/{id}', 'ApiCustomerController@destroy');
});

// WEB ROUTES.
Route::get('/', 'HomeController@index')->name('index');
Route::auth();

Route::get('/home', 'HomeController@index')->name('index');

// Department routes.
Route::get('departments', 'DepartmentController@index')->name('department.index');
Route::get('/departments/search', 'DepartmentController@index')->name('department.search');
Route::get('/departments/show/{id}', 'DepartmentController@show')->name('department.specific');
Route::get('/departments/new', 'DepartmentController@new')->name('department.register');
Route::get('/departments/delete/{id}', 'DepartmentController@destroy')->name('department.destroy');
Route::post('/departments/create', 'DepartmentController@create')->name('department.store');
Route::post('/departments/update/{id}', 'DepartmentController@update')->name('department.update');

// Account info routes.
Route::get('/account/update/{tab}', 'AccountController@Account')->name('account.info');
Route::get('/account/api/removeKey/{id}', 'AccountController@removeApiKey')->name('account.api.destroy');
Route::post('/account/update/password', 'AccountController@updateAccountSecurity')->name('account.update.pass');
Route::post('/account/api/newKey', 'AccountController@createApiKey')->name('account.create.api');
Route::post('/account/update/information', 'AccountController@updateAccountInformation')->name('account.update.info');

// Knowledge routing
Route::get('/knowledge', 'KnowledgeBaseController@index')->name('knowledge.index');
Route::get('/knowledge/search', 'KnowledgeBaseController@index')->name('knowledge.search');
Route::get('/knowledge/destroy/{id}', 'KnowledgeBaseController@destroy')->name('knowledge.destroy');
Route::get('/knowledge/edit/{id}', 'KnowledgeBaseController@edit')->name('knowledge.edit');
Route::get('/knowledge/register', 'KnowledgeBaseController@register')->name('knowledge.register');
Route::get('/knowledge/question/{id}', 'KnowledgeBaseController@show')->name('knowledge.show');
Route::post('/knowledge/register', 'KnowledgeBaseController@store')->name('knowledge.store');
Route::post('/knowledge/edit/{id}', 'KnowledgeBaseController@update')->name('knowledge.update');

// Customer routes.
Route::get('/customers', 'CustomerController@index')->name('customers.list');
Route::get('/customers/search', 'CustomerController@index')->name('customer.search');
Route::get('/customers/create', 'CustomerController@newCustomer')->name('customer.create');
Route::get('/customer/destroy/{id}', 'CustomerController@destroy')->name('customer.destroy');
Route::get('/customer/update/{id}', 'CustomerController@edit')->name('customer.edit');
Route::post('/customer/update/{id}', 'CustomerController@update')->name('customer.update');
Route::post('/customer/create', 'CustomerController@create')->name('customer.insert');

// Tickets routes
Route::get('/tickets', 'TicketsController@index')->name('tickets.index');
Route::get('/tickets/create', 'TicketsController@create')->name('tickets.created');
Route::get('/tickets/assigned', 'TicketsController@assigned')->name('tickets.assigned');

// API settings routes 
Route::get('/api/key/logs/{id}', 'AccountController@getApiLogs')->name('account.api.logs');

// Setup routes
Route::get('/setup', 'SetupController@index')->name('setup.index');
