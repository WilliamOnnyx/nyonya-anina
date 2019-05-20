<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class M_promo extends CI_Model {

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
	
	public function add($foto){
		$nama = $this->input->post('promo');
		$desk = $this->input->post('isi');
		$kate = $this->input->post('kategori');
		
		if($foto==""){
			$data = array(
			   'title' => $nama,
			   'isi' => $desk
			);
		}
		else{
			$data = array(
			   'title' => $nama,
			   'isi' => $desk,
			   'foto' => $foto
			);
		}

		$this->db->insert('promo', $data); 
		
	}
	
	//model untuk menghapus user yang dipilih
	public function delete($id){
	
		$sql= mysql_query("delete from promo 
		where id = $id
		");
		$result = mysql_fetch_array($sql);
		
	}
	
	//model untuk mengganti data user yang dipilih
	public function edit($foto){
		$id = $this->input->post('id');
		$nama = $this->input->post('promo');
		$desk = $this->input->post('isi');
		
		if($foto==""){
			$data = array(
			   'title' => $nama,
			   'isi' => $desk
			);
		}
		else{
			$data = array(
			   'title' => $nama,
			   'isi' => $desk,
			   'foto' => $foto
			);
		}

		$this->db->where('id', $id);
		$this->db->update('promo', $data); 
		
	}
 
	//model untuk melihat data user yang dipilih
	public function view($id){
	
		$query = $this->db->query("
		SELECT *
		FROM promo
		WHERE promo.id= '$id'");
		return $query->result_array();
	}
} 