<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->data = array();
		$this->set_data();
	}
	
	public function index()
	{
		// do code ?
	}
	
}