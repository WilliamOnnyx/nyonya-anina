<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class C_kategori extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->database();
		$this->load->model('m_kategori');
		$session_id = $this->session->userdata('login');
		if($session_id==false)
		{
			redirect('login');
		}
    }
	
	public function index(){ //untuk memanggil halaman users
		
		$data=array('title' =>'',
			   'isi' =>'kategori/kategori',
				'message' => ' ',
				'nama' =>$this->m_kategori->nama()
		);
		$this->load->view('layout/wrapper',$data); 
			
    }
	
	//ADD
	public function add(){
		
		$kategori = $this->input->post('kategori');
		$query = $this->db->query("SELECT * FROM kategori WHERE nama like '".$kategori."' ");
		
		if($query->num_rows()==0){
			$result = $this->m_kategori->add();
			$data=array('title' =>'',
				   'isi' =>'kategori/kategori_add',
				   '_prev' => 'kategori',
				   '_here' => 'Tambah kategori',
				   'message' => '<div class="alert alert-success"> Data sudah dimasukkan </div>',
					'nama' =>$this->m_kategori->nama()
			);
			$this->load->view('layout/wrapper',$data);  
		}
		else{
			$data=array('title' =>'',
					   'isi' =>'kategori/kategori_add',
					   '_prev' => 'kategori',
					   '_here' => 'Tambah kategori',
					   'message' => '<div class="alert alert-danger"> Nama kategori telah terdaftar. Masukkan nama kategori lain </div>',
						'nama' =>$this->m_kategori->nama()
			);
			$this->load->view('layout/wrapper',$data); 
		}
	}
	
	public function add_page(){ //untuk memanggil halaman add users
		$data=array('title' =>'',
			   'isi' =>'kategori/kategori_add',
			   '_prev' => 'kategori',
			   '_here' => 'Tambah kategori',
			   'message' => ' ',
				'nama' =>$this->m_kategori->nama()
		);
		$this->load->view('layout/wrapper',$data); 
		
	}
		
	//DELETE
	public function delete($id){ //untuk menghapus users yang dipilih
		$this->m_kategori->delete($id);
	}
	
	//UPDATE
	public function edit(){
		$id = $this->input->post('id');
		$kategori = $this->input->post('kategori');
		$query = $this->db->query("SELECT * FROM kategori WHERE nama like '".$kategori."' ");
		
		if($query->num_rows()==0){
				$this->m_kategori->edit();
				$data=array('title' =>'',
				   'data' => $this->m_kategori->view($id),
				   'isi' =>'kategori/kategori_edit',
				   '_prev' => 'kategori',
				   '_here' => ' Ubah kategori',
					'message' => '<div class="alert alert-success"> Data sudah diubah </div>',
				'nama' =>$this->m_kategori->nama()
				);
				$this->load->view('layout/wrapper',$data); 
			
		}
		else{
			$data=array('title' =>'',
				   'data' => $this->m_kategori->view($id),
				   'isi' =>'kategori/kategori_edit',
				   '_prev' => 'kategori',
				   '_here' => 'Ubah kategori',
					'message' => '<div class="alert alert-danger"> Nama kategori telah terdaftar. Masukkan nama kategori lain </div>',
				'nama' =>$this->m_kategori->nama()
				);
				$this->load->view('layout/wrapper',$data); 
		}
	}
	
	public function edit_page($id){ //untuk memanggil halaman edit users
		
		$data=array('title' =>'',
			   'data' => $this->m_kategori->view($id),
			   'isi' =>'kategori/kategori_edit',
			   '_prev' => 'kategori',
			   '_here' => 'Ubah kategori',
			   'message' => '',
				'nama' =>$this->m_kategori->nama()
		);
		$this->load->view('layout/wrapper',$data); 
		
    }
	
	public function view_page($id){ //untuk memanggil halaman view users
		$data=array('title' =>'',
			   'data' => $this->m_kategori->view($id),
			   'isi' =>'kategori/kategori_view',
			   '_prev' => 'kategori',
			   '_here' => 'Lihat Detil kategori',
				'nama' =>$this->m_kategori->nama()
		);
		$this->load->view('layout/wrapper',$data); 
	}	
} 