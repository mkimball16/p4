<?php


Route::model('party', 'Party');
/**
* Index
*/
Route::get('/', 'IndexController@getIndex');


/**
* User
* (Explicit Routing)
*/
# Note: the beforeFilter for 'guest' on getSignup and getLogin is handled in the Controller
Route::get('/signup', 'UserController@getSignup');
Route::get('/login', 'UserController@getLogin' );
Route::post('/signup', ['before' => 'csrf', 'uses' => 'UserController@postSignup'] );
Route::post('/login', ['before' => 'csrf', 'uses' => 'UserController@postLogin'] );
Route::get('/logout', ['before' => 'auth', 'uses' => 'UserController@getLogout'] );


/**
* Parties
* (Explicit Routing)
*/
Route::get('/party', 'PartyController@getIndex');
Route::get('/party_edit/{id}', 'PartyController@getEdit');
Route::post('/party_edit', 'PartyController@postEdit');
Route::get('/party_create', 'PartyController@getCreate');
Route::post('/party_create', 'PartyController@postCreate');
Route::get('/party_delete/{id}', 'PartyController@getDelete');
Route::post('/party_delete', 'PartyController@postDelete');


/**
* Guests
* (Explicit Routing)
*/
Route::get('/guest/{id}', 'GuestController@getIndex');
Route::get('/guest_edit/{id}', 'GuestController@getEdit');
Route::post('/guest_edit', 'GuestController@postEdit');
Route::get('/guest_create/{id}', 'GuestController@getCreate');
Route::post('/guest_create', 'GuestController@postCreate');
Route::get('/guest_delete/{id}', 'GuestController@getDelete');
Route::post('/guest_delete', 'GuestController@postDelete');










