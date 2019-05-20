<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class M_kategori extends CI_Model {

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
	
	//model untuk menambahkan kategori
	public function add(){
		$kategori = $this->input->post('kategori');
		
		$data = array(
		   'nama' => $kategori
		);

		$this->db->insert('kategori', $data); 
		
	}
	
	//model untuk menghapus user yang dipilih
	public function delete($id){
	
		$sql= mysql_query("delete from kategori 
		where id = $id
		");
		$result = mysql_fetch_array($sql);
		
	}
	
	//model untuk mengganti data user yang dipilih
	public function edit(){
		$id = $this->input->post('id');
		$kategori = $this->input->post('kategori');
		
		$data = array(
		   'nama' => $kategori
		);

		$this->db->where('id', $id);
		$this->db->update('kategori', $data); 
		
	}
 
	//model untuk melihat data user yang dipilih
	public function view($id){
	
		$query = $this->db->query("
		SELECT *
		FROM kategori
		WHERE id= '$id'");
		return $query->result_array();
	}
} 