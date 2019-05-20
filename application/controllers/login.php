<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller {
	 function __construct() {
        parent::__construct();
        $this->load->database();
    }
	
	public function index() {
		$this->load->model('m_login','m_login');
		$data=array('title'=>'Login',
			'isi' =>'login_view',
			'logo' =>$this->m_login->logo(),
			'nama' =>$this->m_login->nama()
		);
			$this->load->view('login_view',$data);
	}
	
	public function login_action(){
		//load the database
		$this->load->model('m_login','m_login');
		//check the input
		$result = $this->m_login->validate();
		 if(! $result){
            // If user did not validate, then show them login page again
            $msg = '<font color=red size=24><b>Invalid username and/or password.</b></font><br />';
            
			//echo $msg;
			$this->session->set_flashdata('msg', $msg);
			redirect('login');
        }else{
            // If user did validate, 
            // Send them to members area
			$this->session->set_flashdata('msg', 'Login Berhasil');
				redirect('c_dashboard');
		}
	}

}