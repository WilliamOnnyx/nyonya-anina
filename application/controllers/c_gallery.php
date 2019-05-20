<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class C_gallery extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->database();
		$this->load->model('m_gallery');
		$session_id = $this->session->userdata('login');
		if($session_id==false)
		{
			redirect('login');
		}
    }
	
	public function index(){ //untuk memanggil halaman users
		
		$data=array('title' =>'',
			   'isi' =>'gallery/gallery',
				'message' => ' ',
				'nama' =>$this->m_gallery->nama()
		);
		$this->load->view('layout/wrapper',$data); 
			
    }
	
	//ADD
	public function add(){
		$logo = $_FILES['foto']['name'];
		if($logo!=null){$this->upload_gambar();}
			$result = $this->m_gallery->add($logo);
			$data=array('title' =>'',
				   'isi' =>'gallery/gallery_add',
				   '_prev' => 'gallery',
				   '_here' => 'Tambah gallery',
				   'message' => '<div class="alert alert-success"> Data sudah dimasukkan </div>',
					'nama' =>$this->m_gallery->nama()
			);
			$this->load->view('layout/wrapper',$data);  
	}
	
	public function add_page(){ //untuk memanggil halaman add users
		$data=array('title' =>'',
			   'isi' =>'gallery/gallery_add',
			   '_prev' => 'gallery',
			   '_here' => 'Tambah gallery',
			   'message' => ' ',
				'nama' =>$this->m_gallery->nama()
		);
		$this->load->view('layout/wrapper',$data); 
		
	}
		
	//DELETE
	public function delete($id){ //untuk menghapus users yang dipilih
		$this->m_gallery->delete($id);
	}
	
	public function upload_gambar()
	{
			
		//load the helper
		$this->load->helper('form');

		//Configure
		//set the path where the files uploaded will be copied. NOTE if using linux, set the folder to permission 777
		$config['upload_path'] = 'assets/images/gallery';
		
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