<?php

class GuestController extends \BaseController {


	/**
	*
	*/
	public function __construct() {

		# Make sure BaseController construct gets called
		parent::__construct();

		# Only logged in users should have access to this controller
		$this->beforeFilter('auth');

	}


	/**
	* Display all guests
	* @return View
	*/
	public function getIndex() {

		return View::make('guest');
		}
		


	/**
	* Show the "Add a guest form"
	* @return View
	*/
	public function getCreate() {


    	return View::make('guest_create');

	}


	/**
	* Process the "Add a guest form"
	* @return Redirect
	*/
	public function postCreate() {

		# Instantiate the guest model
		$guests = new Guest();

		$guests->fill(Input::all());
		$guests->save();

		# Magic: Eloquent
		$guests->save();

		return Redirect::action('GuestController@getIndex')->with('flash_message','Your guest has been added.');

	}


	/**
	* Show the "Edit guest information form"
	* @return View
	*/
	public function getEdit($id) {

		try {
		    $guests    = Guest::findOrFail($id);
		    $events = Event::getIdNamePair();
		}
		catch(exception $e) {
		    return Redirect::to('/list')->with('flash_message', 'Guest not found');
		}

    	return View::make('edit')
    		->with('guest', $guests)
    		->with('event', $events);

	}

	/**
	* Process the "Edit a book form"
	* @return Redirect
	*/
	public function postEdit() {

		try {
	        $guests = Guest::findOrFail(Input::get('id'));
	    }
	    catch(exception $e) {
	        return Redirect::to('/list')->with('flash_message', 'Guest not found');
	    }

	    # http://laravel.com/docs/4.2/eloquent#mass-assignment
	    $guests->fill(Input::all());
	    $guests->save();

	   	return Redirect::action('GuestController@getIndex')->with('flash_message','Your changes have been saved.');

	}



}