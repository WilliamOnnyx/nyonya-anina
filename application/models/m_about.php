<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class M_about extends CI_Model {

    function __construct(){
        parent::__construct();
        $this->load->database();
    }
		
	public function nama(){
		$query = $this->db->query("
		SELECT nama
		FROM identitas");
		
		foreach ($query->result_array() as $row)
	   {
			
			   return $row['nama'];
	   }
	}
	
	public function edit($foto){
		$id = $this->input->post('id');
		$nama = $this->input->post('about');
		$desk = $this->input->post('desk');
		$alamat = $this->input->post('alamat');
		$telepon = $this->input->post('telepon');
		
		if($foto==""){
			$data = array(
			   'nama' => $nama,
			   'alamat' => $alamat,
			   'about' => $desk,
			   'telepon' => $telepon
			);
		}
		else{
			$data = array(
			   'nama' => $nama,
			   'alamat' => $alamat,
			   'about' => $desk,
			   'logo' => $foto,
			   'telepon' => $telepon
			);
		}

		$this->db->where('id', $id);
		$this->db->update('identitas', $data); 
		
	}
 
	//model untuk melihat data user yang dipilih
	public function view(){
	
		$query = $this->db->query("
		SELECT *
		FROM identitas
		WHERE id= 1");
		return $query->result_array();
	}
} 