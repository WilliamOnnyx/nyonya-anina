<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class C_change_password extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->database();
		$this->load->model('m_change_pass');
    }

	public function index(){
		$session_id = $this->session->userdata('login');
		if($session_id==true){
			$data=array('title' =>'',
				   'isi' =>'change_password',
					'message' => ' ',
					'nama' => $this->m_change_pass->nama()
			);
			$this->load->view('layout/wrapper',$data); 
		}
		else{
			$data=array('title'=>'Login',
			'isi' =>'login_view',
			'nama' => $this->m_change_pass->nama()
			);
			$this->load->view('login_view',$data);
		}
    }
	
	//mereset dan mengganti password
	public function change_password(){
		$this->_set_rules();
		if($this->form_validation->run()==true){
			$opass = $this->input->post('opass'); //old Password
			$npass = $this->input->post('npass'); //new Password
			$npassre = $this->input->post('npassre'); //new password re-type
			//check reset
			$result = $this->m_change_pass->change_password();
			if($result){
				$data=array('title' =>'',
					   'isi' =>'change_password',
						'message' => '<div class="alert alert-success"> Data sudah dimasukkan </div>',
			'nama' => $this->m_change_pass->nama()
				);
				$this->load->view('layout/wrapper',$data);
				
			}
			else{
				$data=array('title' =>'',
					   'isi' =>'change_password',
						'message' => '<div class="alert alert-danger"> Password yang dimasukkan tidak sama </div>',
			'nama' => $this->m_change_pass->nama()
				);
				$this->load->view('layout/wrapper',$data);
				
			}
		}else{
			$data=array('title' =>'',
				   'isi' =>'change_password',
					'message' => '<div class="alert alert-danger"> Isilah field yang kosong </div>',
			'nama' => $this->m_change_pass->nama()
			);
			$this->load->view('layout/wrapper',$data);
			
		}
	}
	
	function _set_rules(){ //peraturan untuk perusahaan
		$this->form_validation->set_rules('npass', 'Password Baru', 'required|min_length[8]|max_length[25]');
		$this->form_validation->set_rules('npassre', 'Ketik Ulang Password Baru', 'required|min_length[8]|max_length[25]');
		
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
	}
	
	
} 