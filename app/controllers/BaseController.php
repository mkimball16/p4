<?php

class BaseController extends Controller {

	/**
	*
	*/
	public function __construct() {

		# POST submissions need to pass the CSRF filter
		$this->beforeFilter('csrf', array('on' => 'post'));

	}

}
