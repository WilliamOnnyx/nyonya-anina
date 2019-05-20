<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class C_promo extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->database();
		$this->load->model('m_promo');
		$session_id = $this->session->userdata('login');
		if($session_id==false)
		{
			redirect('login');
		}
    }
	
	public function index(){ //untuk memanggil halaman users
		
		$data=array('title' =>'',
			   'isi' =>'promo/promo',
				'message' => ' ',
				'nama' =>$this->m_promo->nama()
		);
		$this->load->view('layout/wrapper',$data); 
			
    }
	
	//ADD
	public function add(){
		$logo = $_FILES['foto']['name'];
		$promo = $this->input->post('promo');
		$query = $this->db->query("SELECT * FROM promo WHERE title like '".$promo."' ");
		$this->upload_gambar();
		if($query->num_rows()==0){
		$this->upload_gambar();
			$result = $this->m_promo->add($logo);
			$data=array('title' =>'',
				   'isi' =>'promo/promo_add',
				   '_prev' => 'promo',
				   '_here' => 'Tambah promo',
				   'message' => '<div class="alert alert-success"> Data sudah dimasukkan </div>',
					'nama' =>$this->m_promo->nama()
			);
			$this->load->view('layout/wrapper',$data);  
		}
		else{
			$data=array('title' =>'',
					   'isi' =>'promo/promo_add',
					   '_prev' => 'promo',
					   '_here' => 'Tambah promo',
					   'message' => '<div class="alert alert-danger"> Nama promo telah terdaftar. Masukkan nama promo lain </div>',
						'nama' =>$this->m_promo->nama()
			);
			$this->load->view('layout/wrapper',$data); 
		}
	}
	
	
	public function add_page(){ //untuk memanggil halaman add users
		$data=array('title' =>'',
			   'isi' =>'promo/promo_add',
			   '_prev' => 'promo',
			   '_here' => 'Tambah promo',
			   'message' => ' ',
				'nama' =>$this->m_promo->nama()
		);
		$this->load->view('layout/wrapper',$data); 
		
	}
		
	//DELETE
	public function delete($id){ //untuk menghapus users yang dipilih
		$this->m_promo->delete($id);
	}
	
	//UPDATE
	public function edit(){
		$logo = $_FILES['foto']['name'];
		$id = $this->input->post('id');
		$promo = $this->input->post('promo');
		$query = $this->db->query("SELECT * FROM promo WHERE title like '".$promo."' ");
		$this->upload_gambar();
		if($query->num_rows()==1){
				$this->m_promo->edit($logo);
				$data=array('title' =>'',
				   'data' => $this->m_promo->view($id),
				   'isi' =>'promo/promo_edit',
				   '_prev' => 'promo',
				   '_here' => ' Ubah promo',
					'message' => '<div class="alert alert-success"> Data sudah diubah </div>',
				'nama' =>$this->m_promo->nama()
				);
				$this->load->view('layout/wrapper',$data); 
			
		}
		else{
			$data=array('title' =>'',
				   'data' => $this->m_promo->view($id),
				   'isi' =>'promo/promo_edit',
				   '_prev' => 'promo',
				   '_here' => 'Ubah promo',
					'message' => '<div class="alert alert-danger"> Nama promo telah terdaftar. Masukkan nama promo lain </div>',
				'nama' =>$this->m_promo->nama()
				);
				$this->load->view('layout/wrapper',$data); 
		}
	}
	
	public function edit_page($id){ //untuk memanggil halaman edit users
		
		$data=array('title' =>'',
			   'data' => $this->m_promo->view($id),
			   'isi' =>'promo/promo_edit',
			   '_prev' => 'promo',
			   '_here' => 'Ubah promo',
			   'message' => '',
				'nama' =>$this->m_promo->nama()
		);
		$this->load->view('layout/wrapper',$data); 
		
    }
	
	public function upload_gambar()
	{
			
		//load the helper
		$this->load->helper('form');

		//Configure
		//set the path where the files uploaded will be copied. NOTE if using linux, set the folder to permission 777
		$config['upload_path'] = 'assets/images/promo';
		
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
	
	public function view_page($id){ //untuk memanggil halaman view users
		$data=array('title' =>'',
			   'data' => $this->m_promo->view($id),
			   'isi' =>'promo/promo_view',
			   '_prev' => 'promo',
			   '_here' => 'Lihat Detil promo',
				'nama' =>$this->m_promo->nama()
		);
		$this->load->view('layout/wrapper',$data); 
	}	
} 