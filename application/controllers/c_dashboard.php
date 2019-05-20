<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_dashboard extends CI_Controller {
	 function __construct() {
        parent::__construct();
        $this->load->database();
		$this->load->model('m_dashboard');
    }
	
	public function index() {
		$session_id = $this->session->userdata('login');
		if($session_id==true)
		{
			$data=array('title'=>'Dashboard',
			'isi' =>'dashboard',
			'nama' => $this->m_dashboard->nama(),
			'logo' => $this->m_dashboard->logo()
			
			);
			$this->load->view('layout/wrapper',$data);
		}
		else
		{
			$data=array('title'=>'Login',
			'isi' =>'login_view'
			);
			$this->load->view('login_view',$data);
		}
	}
}