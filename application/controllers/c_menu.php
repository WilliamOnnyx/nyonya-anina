<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class C_menu extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->database();
		$this->load->model('m_menu');
		$session_id = $this->session->userdata('login');
		if($session_id==false)
		{
			redirect('login');
		}
    }
	
	public function index(){ //untuk memanggil halaman users
		
		$data=array('title' =>'',
			   'isi' =>'menu/menu',
				'message' => ' ',
				'nama' =>$this->m_menu->nama()
		);
		$this->load->view('layout/wrapper',$data); 
			
    }
	
	//ADD
	public function add(){
		$logo = $_FILES['foto']['name'];
		$menu = $this->input->post('menu');
		$query = $this->db->query("SELECT * FROM menu WHERE nama like '".$menu."' ");
		if($logo!=null){$this->upload_gambar();}
		if($query->num_rows()==0){
		$this->upload_gambar();
			$result = $this->m_menu->add($logo);
			$data=array('title' =>'',
				   'isi' =>'menu/menu_add',
				   '_prev' => 'menu',
				   '_here' => 'Tambah menu',
				   'message' => '<div class="alert alert-success"> Data sudah dimasukkan </div>',
					'nama' =>$this->m_menu->nama(),
				'output' => $this->m_menu->list_kategori()
			);
			$this->load->view('layout/wrapper',$data);  
		}
		else{
			$data=array('title' =>'',
					   'isi' =>'menu/menu_add',
					   '_prev' => 'menu',
					   '_here' => 'Tambah menu',
					   'message' => '<div class="alert alert-danger"> Nama menu telah terdaftar. Masukkan nama menu lain </div>',
						'nama' =>$this->m_menu->nama(),
				'output' => $this->m_menu->list_kategori()
			);
			$this->load->view('layout/wrapper',$data); 
		}
	}
	
	
	public function add_page(){ //untuk memanggil halaman add users
		$data=array('title' =>'',
			   'isi' =>'menu/menu_add',
			   '_prev' => 'menu',
			   '_here' => 'Tambah menu',
			   'message' => ' ',
				'nama' =>$this->m_menu->nama(),
				'output' => $this->m_menu->list_kategori()
		);
		$this->load->view('layout/wrapper',$data); 
		
	}
		
	//DELETE
	public function delete($id){ //untuk menghapus users yang dipilih
		$this->m_menu->delete($id);
	}
	
	//UPDATE
	public function edit(){
		$logo = $_FILES['foto']['name'];
		$id = $this->input->post('id');
		$menu = $this->input->post('menu');
		$query = $this->db->query("SELECT * FROM menu WHERE nama like '".$menu."' ");
		if($logo!=null){$this->upload_gambar();}
		if($query->num_rows()==0){
				$this->m_menu->edit($logo);
				$data=array('title' =>'',
				   'data' => $this->m_menu->view($id),
				   'isi' =>'menu/menu_edit',
				   '_prev' => 'menu',
				   '_here' => ' Ubah menu',
					'message' => '<div class="alert alert-success"> Data sudah diubah </div>',
				'nama' =>$this->m_menu->nama(),
				'output' => $this->m_menu->list_kategori()
				);
				$this->load->view('layout/wrapper',$data); 
			
		}
		else{
			$data=array('title' =>'',
				   'data' => $this->m_menu->view($id),
				   'isi' =>'menu/menu_edit',
				   '_prev' => 'menu',
				   '_here' => 'Ubah menu',
					'message' => '<div class="alert alert-danger"> Nama menu telah terdaftar. Masukkan nama menu lain </div>',
				'nama' =>$this->m_menu->nama(),
				'output' => $this->m_menu->list_kategori()
				);
				$this->load->view('layout/wrapper',$data); 
		}
	}
	
	public function edit_page($id){ //untuk memanggil halaman edit users
		
		$data=array('title' =>'',
			   'data' => $this->m_menu->view($id),
			   'isi' =>'menu/menu_edit',
			   '_prev' => 'menu',
			   '_here' => 'Ubah menu',
			   'message' => '',
				'nama' =>$this->m_menu->nama(),
				'output' => $this->m_menu->list_kategori()
		);
		$this->load->view('layout/wrapper',$data); 
		
    }
	
	public function upload_gambar()
	{
			
		//load the helper
		$this->load->helper('form');

		//Configure
		//set the path where the files uploaded will be copied. NOTE if using linux, set the folder to permission 777
		$config['upload_path'] = 'assets/images/menu';
		
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
			   'data' => $this->m_menu->view($id),
			   'isi' =>'menu/menu_view',
			   '_prev' => 'menu',
			   '_here' => 'Lihat Detil menu',
				'nama' =>$this->m_menu->nama()
		);
		$this->load->view('layout/wrapper',$data); 
	}	
} 