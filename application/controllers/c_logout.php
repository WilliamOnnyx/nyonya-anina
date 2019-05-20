<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_logout extends CI_Controller {
	 function __construct() {
        parent::__construct();
        $this->load->database();
    }
	
	public function index() {
		$this->session->sess_destroy();
		redirect('login');
	}

}