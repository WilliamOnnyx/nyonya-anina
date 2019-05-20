<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class M_change_pass extends CI_Model {

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
	
	//Change Password
	public function change_password(){
		$opass = $this->input->post('opass'); //old Password
		$npass = $this->input->post('npass'); //new Password
		$npassre = $this->input->post('npassre'); //new password re-type
		
		$username = $this->session->userdata('username');
		$query = $this->db->query("
		SELECT password
		FROM identitas
		WHERE username='$username'");
		
		foreach ($query->result_array() as $row)
		{
			$password=$row['password'];
		}
		
		if(strcmp($password,$opass)==0 && strcmp($npass,$npassre)==0)
		{
			$data = array(
               'password' => $npass
            );

			$this->db->where('username', $username);
			$this->db->update('identitas', $data); 
			
			$newdata = array(
					   'password'  => $npass
					);

					$this->session->set_userdata($newdata);

			return true;
		}
		else
		{
			return false;
		}
		
	}
} 