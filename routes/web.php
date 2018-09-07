<?php

Route::middleware('auth')->group(function() {
  Route::get('/', function () {
      return view('dashboard');
  });

  Route::get('/pidum', 'PidumController@index');
  Route::get('/pidum/{id}/view', 'PidumController@view');
  Route::put('/pidum/{id}/update', 'PidumController@update');
  Route::get('/pidum/{id}/delete', 'PidumController@delete');
  Route::get('/pidum/input', 'PidumController@form');
  Route::post('/pidum/input', 'PidumController@insert');
  Route::any('/pidum/find', 'PidumController@find');

  Route::get('/pidsus', 'PidsusController@index');
  Route::get('/pidsus/{id}/view', 'PidsusController@view');
  Route::put('/pidsus/{id}/update', 'PidsusController@update');
  Route::get('/pidsus/{id}/delete', 'PidsusController@delete');
  Route::get('/pidsus/input', 'PidsusController@form');
  Route::post('/pidsus/input', 'PidsusController@insert');
  Route::any('/pidsus/find', 'PidsusController@find');

  Route::get('/datun', 'DatunController@index');
  Route::get('/datun/{id}/view', 'DatunController@view');
  Route::put('/datun/{id}/update', 'DatunController@update');
  Route::get('/datun/{id}/delete', 'DatunController@delete');
  Route::get('/datun/input', 'DatunController@form');
  Route::post('/datun/input', 'DatunController@insert');
  Route::any('/datun/find', 'DatunController@find');
});

Route::get('/sip/pidum', 'PidumController@list');
Route::get('/sip/pidum/{id}/detail', 'PidumController@detail');
Route::any('/sip/pidum/find', 'PidumController@cari');

Route::get('/sip/pidsus', 'PidsusController@list');
Route::get('/sip/pidsus/{id}/detail', 'PidsusController@detail');
Route::any('/sip/pidsus/find', 'PidsusController@cari');

Route::get('/sip/datun', 'DatunController@list');
Route::get('/sip/datun/{id}/detail', 'DatunController@detail');
Route::any('/sip/datun/find', 'DatunController@cari');


// Auth::routes();

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/home', 'HomeController@index')->name('home');
