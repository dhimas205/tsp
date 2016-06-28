<?php if (!defined('BASEPATH'))  exit('No direct script access allowed');


class Commons extends CI_Controller{

	public function __construct(){
		parent::__construct();
		//$this->load->model("m_commons");
	}

	public function header(){
		$this->load->view('design/header');
	}

	public function footer(){
		$this->load->view('design/footer');
	}

	public function topbar(){
		$data['username'] = NULL;
		$data['nama'] = NULL;
		$data['loggedin'] = 0;
		if ($this->session->loggedIn == 1){
			$data['username'] 	= $this->session->username;
			$data['nama'] 		= $this->session->namauser;
			$data['loggedin'] 	= $this->session->loggedIn;
		}
			

		$this->load->view('design/topbar',$data);
	}

	public function sidebar($title,$icon){
		$data['username'] = NULL;
		$data['nama'] = NULL;
		$data['loggedin'] = 0;
		$data['titleBreadcumb'] = $title;
		$data['iconBreadcumb'] = $icon;
		if ($this->session->loggedIn == 1){
			$data['username'] 	= $this->session->username;
			$data['nama'] 		= $this->session->namauser;
			$data['loggedin'] 	= $this->session->loggedIn;
		}
		$this->load->view('design/sidebar', $data);
	}
	
}

/* end of file commons/controllers/Commons.php */
?>