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
	public function getCreate($id) {
		$party = Party::findOrFail($id);
    	return View::make('guest_create')->with('party', $party);
	}

    


	/**
	* Process the "Add a guest form"
	* @return Redirect
	*/
	public function postCreate() {
		$party = Party::findOrFail(Input::get('id'));
		# Instantiate the guest model
		$guests = new Guest();

		$guests->fill(Input::all());
		$guests->party_id  =  $party->id;
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
		}
		catch(exception $e) {
		    return Redirect::to('/guest')->with('flash_message', 'Guest not found');
		}

    	return View::make('guest_edit')->with('guest', $guests);
  

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
	        return Redirect::to('/guest')->with('flash_message', 'Guest not found');
	    }

	    # http://laravel.com/docs/4.2/eloquent#mass-assignment
	    $guests->fill(Input::all());
	    $guests->save();

	   	return Redirect::action('GuestController@getIndex')->with('flash_message','Your changes have been saved.');

	}


/**
	* Process guest deletion
	*
	* @return Redirect
	*/
	public function getDelete($id) {

		$guest = Guest::findOrFail($id);

		return View::make('guest_delete')->with('guest', $guest);


	}

	public function postDelete() {
		/**$id = Input::get('party');
		$party = Party::findOrFail($id);
		$party->delete();**/

		try {
	        $guest = Guest::findOrFail(Input::get('id'));
	    }
	    catch(exception $e) {
	        return Redirect::to('/guest')->with('flash_message', 'Could not delete guest - not found.');
	    }

	    Guest::destroy(Input::get('id'));

		return Redirect::action('GuestController@getIndex')->with('flash_message','Your guest was deleted.');
	}


}