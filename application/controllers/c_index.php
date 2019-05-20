<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class C_index extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->database();
		$this->load->model('m_index');	
    }
	
	public function index(){ //untuk memanggil halaman users
		
		$data=array(
			'nama' => $this->m_index->nama(),
			'logo' => $this->m_index->logo(),
			'alamat' => $this->m_index->alamat(),
			'telepon' => $this->m_index->telepon(),
			'about' => $this->m_index->about(),
			'foto' => $this->m_index->list_foto(),
			'kategori' => $this->m_index->list_kategori(),
			'menu' => $this->m_index->list_menu(),
			'promo' => $this->m_index->list_promo()
		);
		$this->load->view('halaman',$data); 
			
    }
	
} 
