<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Json extends CI_Controller {

    function __construct(){
        parent::__construct();
		$session_id = $this->session->userdata('login');
		if($session_id==false)
		{
			redirect('c_login');
		}
    }
	
	public function json_kategori(){
		$con = mysqli_connect("localhost", "root", "", "nyonya");
			if (!$con) {
				die("Connection failed: " . mysqli_connect_error());
			}
		
		$result = mysqli_query($con, "select 
		id,
		nama
		from kategori
		order by id
		 ");

		if(!empty($result)){
			while($row = mysqli_fetch_array($result)){	
				$emp[] = array( 'id' => $row['id'],
								'nama' => $row['nama']
								);
			}
		}

		header('Content-Type:text/json');
		echo json_encode($emp);
	}
	
	public function json_kategori_search($title) {
		$con = mysqli_connect("localhost", "root", "", "nyonya");
		if (!$con) {
			die("Connection failed: " . mysqli_connect_error());
		}
		
		$result = mysqli_query($con, "select 
		id,
		nama
		from kategori
		WHERE nama LIKE '%".$title."%'
		order by id
		 ");
		
		if(!empty($result)){
			while($row = mysqli_fetch_array($result)){	
				$emp[] = array( 'id' => $row['id'],
								'nama' => $row['nama']
								);
			}
		}

		header('Content-Type:text/json');
		echo json_encode($emp);
	}
	
	public function json_menu(){
		$con = mysqli_connect("localhost", "root", "", "nyonya");
			if (!$con) {
				die("Connection failed: " . mysqli_connect_error());
			}
		
		$result = mysqli_query($con, "select m.*, k.nama namaKategori
		from menu m
		join kategori k on k.id=m.idKategori
		order by id
		 ");

		if(!empty($result)){
			while($row = mysqli_fetch_array($result)){	
				$hitung = strlen($row['deskripsi']);
				if($hitung <100){
				$emp[] = array( 'id' => $row['id'],
								'nama' => $row['nama'],
								'desk' => $row['deskripsi'],
								'harga' => $row['harga'],
								'foto' => $row['foto'],
								'kate' => $row['namaKategori']
								);
				}
				else{
					$desk = substr($row['deskripsi'],0,50);
					$desk.="...";
					$emp[] = array( 'id' => $row['id'],
								'nama' => $row['nama'],
								'desk' => $desk,
								'harga' => $row['harga'],
								'foto' => $row['foto'],
								'kate' => $row['namaKategori']
								);
				}
			}
		}

		header('Content-Type:text/json');
		echo json_encode($emp);
	}
	
	public function json_menu_search($title) {
		$con = mysqli_connect("localhost", "root", "", "nyonya");
		if (!$con) {
			die("Connection failed: " . mysqli_connect_error());
		}
		
		$result = mysqli_query($con, "select m.*, k.nama namaKategori
		from menu
		join kategori k on k.id=m.idKategori
		WHERE m.nama LIKE '%".$title."%'
		order by id
		 ");
		
		if(!empty($result)){
			while($row = mysqli_fetch_array($result)){	
				$hitung = strlen($row['deskripsi']);
				if($hitung <100){
				$emp[] = array( 'id' => $row['id'],
								'nama' => $row['nama'],
								'desk' => $row['deskripsi'],
								'harga' => $row['harga'],
								'foto' => $row['foto'],
								'kate' => $row['namaKategori']
								);
				}
				else{
					$desk = substr($row['deskripsi'],0,50);
					$desk.="...";
					$emp[] = array( 'id' => $row['id'],
								'nama' => $row['nama'],
								'desk' => $desk,
								'harga' => $row['harga'],
								'foto' => $row['foto'],
								'kate' => $row['namaKategori']
								);
				}
			}
		}

		header('Content-Type:text/json');
		echo json_encode($emp);
	}
	
	public function json_promo(){
		$con = mysqli_connect("localhost", "root", "", "nyonya");
			if (!$con) {
				die("Connection failed: " . mysqli_connect_error());
			}
		
		$result = mysqli_query($con, "select *
		from promo
		order by id
		 ");

		if(!empty($result)){
			while($row = mysqli_fetch_array($result)){	
				$emp[] = array( 'id' => $row['id'],
						'title' => $row['title'],
						'isi' => $row['isi'],
						'foto' => $row['foto']
						);
			}
		}

		header('Content-Type:text/json');
		echo json_encode($emp);
	}
	
	public function json_promo_search($title) {
		$con = mysqli_connect("localhost", "root", "", "nyonya");
		if (!$con) {
			die("Connection failed: " . mysqli_connect_error());
		}
		
		$result = mysqli_query($con, "select *
		from promo
		WHERE promo.title LIKE '%".$title."%'
		order by id
		 ");
		
		if(!empty($result)){
			while($row = mysqli_fetch_array($result)){	
				$emp[] = array( 'id' => $row['id'],
						'title' => $row['title'],
						'isi' => $row['isi'],
						'foto' => $row['foto']
						);
			}
		}

		header('Content-Type:text/json');
		echo json_encode($emp);
	}

	public function json_gallery(){
		$con = mysqli_connect("localhost", "root", "", "nyonya");
			if (!$con) {
				die("Connection failed: " . mysqli_connect_error());
			}
		
		$result = mysqli_query($con, "select *
		from gallery
		order by id
		 ");

		if(!empty($result)){
			while($row = mysqli_fetch_array($result)){					
				$emp[] = array('foto' => $row['foto']
							);
			}
		}

		header('Content-Type:text/json');
		echo json_encode($emp);
	}

	
}?>