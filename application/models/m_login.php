<?php
class M_login extends CI_Model {
	public function __construct() {
		$this->load->database();
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
	
	public function nama(){
		$query = $this->db->query("
		SELECT nama
		FROM identitas");
		
		foreach ($query->result_array() as $row)
	   {
			
			   return $row['nama'];
	   }
	}
	
	//Cek Login
	public function validate(){
		//$this->session->sess_destroy();
        // grab user input
        $username = $this->input->post('username');
        $password = $this->input->post('password');
		
		
        // Run the query
        $query = $this->db->query("
		SELECT username, password
		FROM identitas
		WHERE username = '$username' and password = '$password'");
		
        // Let's check if there are any results
        if($query->num_rows() == 1)
        {
			foreach ($query->result_array() as $row)
		   {
				//get the query	
				$newdata = array(
				   'username'  => $row['username'],
				   'password'  => $row['password'],
				   'login' => TRUE
				);

				$this->session->set_userdata($newdata);
		   }
			return true;
		}
		return false;
	}
}