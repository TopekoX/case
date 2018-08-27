<?php

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/pidum', 'PidumController@index');
Route::get('/pidum/{id}/view', 'PidumController@view');
Route::put('/pidum/{id}/update', 'PidumController@update');
Route::get('/pidum/{id}/delete', 'PidumController@delete');
Route::get('/pidum/input', 'PidumController@form');
Route::post('/pidum/input', 'PidumController@insert');

Route::get('/pidsus', 'PidsusController@index');
Route::get('/pidsus/{id}/view', 'PidsusController@view');
Route::put('/pidsus/{id}/update', 'PidsusController@update');
Route::get('/pidsus/{id}/delete', 'PidsusController@delete');
Route::get('/pidsus/input', 'PidsusController@form');
Route::post('/pidsus/input', 'PidsusController@insert');
