<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class M_gallery extends CI_Model {

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
		
		
			$data = array(
			   'foto' => $foto
			);
			$this->db->insert('gallery', $data); 
	}
	
	//model untuk menghapus user yang dipilih
	public function delete($id){
	
		$sql= mysql_query("delete from gallery 
		where id = $id
		");
		$result = mysql_fetch_array($sql);
		
	}
	
	
} 