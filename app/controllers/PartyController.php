<?php

class PartyController extends \BaseController {



	public function __construct() {

		# Make sure BaseController construct gets called
		parent::__construct();

		# Only logged in users should have access to this controller
		$this->beforeFilter('auth');

	}


	/**
	* Display all parties
	* @return View
	*/
	public function getIndex() {

		return View::make('party');
		}
		



	/**
	* Show the "Add a party form"
	* @return View
	*/
	public function getCreate() {

		return View::make('party_create');

	}


	/**
	* Process the "Add a party form"
	* @return Redirect
	*/
	public function postCreate() {

	
# Step 1) Define the rules
		$rules = array(
			'name_of_event' => 'required',
			'type_of_event' => 'required',
			'month' => 'required',
			'day' => 'required',
			'year' => 'required',
			'location' => 'required',
			'number_of_guests' => 'required'
		);

		# Step 2)
		$validator = Validator::make(Input::all(), $rules);

		# Step 3
		if($validator->fails()) {

			return Redirect::to('/party_create')
				->with('flash_message', 'We were unable to create your event; please fix the errors listed below.')
				->withInput()
				->withErrors($validator);
		}

		$party = new Party;
		#$party->fill(Input::all());
		$party->name_of_event    = Input::get('name_of_event');
		$party->type_of_event    = Input::get('type_of_event');
		$party->month    = Input::get('month');
		$party->day    = Input::get('day');
		$party->year    = Input::get('year');
		$party->location    = Input::get('location');
		$party->number_of_guests   = Input::get('number_of_guests');
		$party->user_id  = Auth::user()->id;
		$party->save();

		return Redirect::action('PartyController@getIndex')->with('flash_message','Your event has been added.');
		

}

	/**
	* Show the "Edit an event form"
	* @return View
	*/
	public function getEdit($id) {

		$party = Party::findOrFail($id);
    	return View::make('party_edit')->with('party', $party);
	}

	/**
	* Process the "Edit an event form"
	* @return Redirect
	*/
	public function postEdit() {
		try {
	        $party = Party::findOrFail(Input::get('id'));
	    }
	    catch(exception $e) {
	        return Redirect::to('/party')->with('flash_message', 'Event not found');
	    }

		$party->fill(Input::all());
	    $party->save();

	   	return Redirect::action('PartyController@getIndex')->with('flash_message','Your changes have been saved.');

	}

/**
	* Process party deletion
	*
	* @return Redirect
	*/
	public function getDelete($id) {

		$party = Party::findOrFail($id);

		return View::make('party_delete')->with('party', $party);


	}

	public function postDelete() {
		/**$id = Input::get('party');
		$party = Party::findOrFail($id);
		$party->delete();**/

		try {
	        $party = Party::findOrFail(Input::get('id'));
	    }
	    catch(exception $e) {
	        return Redirect::to('/party')->with('flash_message', 'Could not delete party - not found.');
	    }

	    Party::destroy(Input::get('id'));

		return Redirect::action('PartyController@getIndex')->with('flash_message','Your party was deleted.');
	}

}