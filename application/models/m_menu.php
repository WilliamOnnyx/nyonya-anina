<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class M_menu extends CI_Model {

    function __construct(){
        parent::__construct();
        $this->load->database();
    }
	
	public function list_kategori(){
		$query = $this->db->query("
		SELECT *
		FROM kategori
		");
		return $query->result_array();
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
		$nama = $this->input->post('menu');
		$desk = $this->input->post('desk');
		$harga = $this->input->post('harga');
		$kate = $this->input->post('kategori');
		
		if($foto==""){
			$data = array(
			   'nama' => $nama,
			   'harga' => $harga,
			   'deskripsi' => $desk,
			   'idKategori' => $kate
			);
		}
		else{
			$data = array(
			   'nama' => $nama,
			   'harga' => $harga,
			   'deskripsi' => $desk,
			   'foto' => $foto,
			   'idKategori' => $kate
			);
		}

		$this->db->insert('menu', $data); 
		
	}
	
	//model untuk menghapus user yang dipilih
	public function delete($id){
	
		$sql= mysql_query("delete from menu 
		where id = $id
		");
		$result = mysql_fetch_array($sql);
		
	}
	
	//model untuk mengganti data user yang dipilih
	public function edit($foto){
		$id = $this->input->post('id');
		$nama = $this->input->post('menu');
		$desk = $this->input->post('desk');
		$harga = $this->input->post('harga');
		$kate = $this->input->post('kategori');
		
		if($foto==""){
			$data = array(
			   'nama' => $nama,
			   'harga' => $harga,
			   'deskripsi' => $desk,
			   'idKategori' => $kate
			);
		}
		else{
			$data = array(
			   'nama' => $nama,
			   'harga' => $harga,
			   'deskripsi' => $desk,
			   'foto' => $foto,
			   'idKategori' => $kate
			);
		}

		$this->db->where('id', $id);
		$this->db->update('menu', $data); 
		
	}
 
	//model untuk melihat data user yang dipilih
	public function view($id){
	
		$query = $this->db->query("
		SELECT menu.*,kategori.nama namakate
		FROM menu
		join kategori on menu.idKategori=kategori.id
		WHERE menu.id= '$id'");
		return $query->result_array();
	}
} 