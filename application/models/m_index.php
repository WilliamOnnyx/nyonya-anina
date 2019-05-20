<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class M_index extends CI_Model {

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
	public function about(){
		$query = $this->db->query("
		SELECT about
		FROM identitas");
		
		foreach ($query->result_array() as $row)
	   {
			
			   return $row['about'];
	   }
	}
	public function alamat(){
		$query = $this->db->query("
		SELECT alamat
		FROM identitas");
		
		foreach ($query->result_array() as $row)
	   {
			
			   return $row['alamat'];
	   }
	}
	
	public function telepon(){
		$query = $this->db->query("
		SELECT telepon
		FROM identitas");
		
		foreach ($query->result_array() as $row)
	   {
			
			   return $row['telepon'];
	   }
	}
	
	public function logo(){
		$query = $this->db->query("
		SELECT logo
		FROM identitas");
		
		foreach ($query->result_array() as $row)
	   {
			
			   return $row['logo'];
	   }
	}
	
	public function list_foto(){
		$query = $this->db->query("
		SELECT *
		FROM gallery
		order by id desc
		limit 7
		");
		return $query->result_array();
	}
	
	public function list_kategori(){
		$query = $this->db->query("
		SELECT *
		FROM kategori
		");
		return $query->result_array();
	}
	
	public function list_promo(){
		$query = $this->db->query("
		SELECT *
		FROM promo
		");
		return $query->result_array();
	}
	
	public function list_menu(){
		$query = $this->db->query("
		SELECT m.*,k.nama namaKategori
		FROM menu m
		join kategori k on k.id=m.idKategori
		");
		return $query->result_array();
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