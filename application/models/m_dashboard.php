<?php
class M_dashboard extends CI_Model {
	public function __construct() {
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
	
	public function logo(){
		$query = $this->db->query("
		SELECT logo
		FROM identitas");
		
		foreach ($query->result_array() as $row)
	   {
			
			   return $row['logo'];
	   }
	}
	
}