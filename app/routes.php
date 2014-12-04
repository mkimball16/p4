<?php



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
* Events
* (Explicit Routing)
*/
Route::get('/party', 'PartyController@getIndex');
Route::get('/party_edit/{id}', 'PartyController@getEdit');
Route::post('/party_edit', 'PartyController@postEdit');
Route::get('/party_create', 'PartyController@getCreate');
Route::post('/party_create', 'PartyController@postCreate');


/**
* Guests
* (Explicit Routing)
*/
Route::get('/guest', 'GuestController@getIndex');
Route::get('/guest_edit/{id}', 'GuestController@getEdit');
Route::post('/guest_edit', 'GuestController@postEdit');
Route::get('/guest_create', 'GuestController@getCreate');
Route::post('/guest_create', 'GuestController@postCreate');










