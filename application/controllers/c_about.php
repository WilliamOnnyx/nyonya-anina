<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class C_about extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->database();
		$this->load->model('m_about');
		$session_id = $this->session->userdata('login');
		if($session_id==false)
		{
			redirect('login');
		}
    }
	
	public function index(){ //untuk memanggil halaman users
		
		$data=array('title' =>'',
			   'isi' =>'about/about',
				'message' => ' ',
				'data' => $this->m_about->view(),
				 '_prev' => 'About',
				   '_here' =>' About',
				'nama' =>$this->m_about->nama()
		);
		$this->load->view('layout/wrapper',$data); 
			
    }
	//UPDATE
	public function edit(){
		$logo = $_FILES['foto']['name'];
		$id = $this->input->post('id');
		if($logo!=null){$this->upload_gambar();}
		$this->m_about->edit($logo);
		$data=array('title' =>'',
		   'data' => $this->m_about->view($id),
		   'isi' =>'about/about',
		   '_prev' => 'about',
		   '_here' =>' About',
			'message' => '<div class="alert alert-success"> Data sudah diubah </div>',
		'nama' =>$this->m_about->nama()
		);
		$this->load->view('layout/wrapper',$data); 
	}
	public function upload_gambar()
	{
			
		//load the helper
		$this->load->helper('form');

		//Configure
		//set the path where the files uploaded will be copied. NOTE if using linux, set the folder to permission 777
		$config['upload_path'] = 'assets/images/logo';
		
    		// set the filter image types
		$config['allowed_types'] = 'gif|jpg|png';
		
		//load the upload library
		$this->load->library('upload', $config);
    
		$this->upload->initialize($config);
    
		$this->upload->set_allowed_types('*');

		$data['upload_data'] = '';
    
		$this->upload->do_upload('foto');
		
		//redirect(c_hotel);
	}
	
} 