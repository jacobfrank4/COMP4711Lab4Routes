<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	public function index() 
	{
		
		// this is the view we want shown
		$this->data['pagebody'] = 'justone';

		// build the list of authors, to pass on to our view
		$source = $this->quotes->all();	

		//select the last author in the array
		$record = $source[(count($source) - 1)];

		$this->data = array_merge($this->data, $record);
		$this->render();
	}
}
