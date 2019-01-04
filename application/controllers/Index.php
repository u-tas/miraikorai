<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	public function view()
	{
		$this->load->view('index');
	}
}
