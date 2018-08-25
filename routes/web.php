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
