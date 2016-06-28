<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Access extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('ion_auth');
        $this->load->model('admin/m_user','m_user');

    }  
    
    public function index()
    {
        // if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']){
        //     redirect("dashboard");
        // }
        redirect("dashboard");
        //$this->load->view('dashboard/admin');
    }
    
    public function validate() {

        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[12]|alpha_dash');
        $this->form_validation->set_rules('userpass', 'Password', 'required');
        
        if($this->form_validation->run($this) == FALSE){
            $this->load->view('access/login');
        }
        else
        {
            $username = $this->input->post('username');
            $password = $this->input->post('userpass');
            $pass = md5($password);
            $ret = $this->m_user->GetUser($username,$pass);
            // $data['error'] = $ret;
            // $this->load->view('access/login',$data);
            if($ret){
                $user = $ret[0];
                if($username == $user['username'] && $pass == $user["password"]){
                    $this->session->loggedIn = 1;
                    $this->session->loggedTime = Now();

                    ## LOGIN AS EDITOR ##
                    $this->session->user_id = $user['id_user'];
                    $this->session->username = $user['username'];
                    $this->session->namauser = $user['nama_user'];
                    $this->session->roles = $user['role'];
                    $this->session->roles_id = $user['id_role'];
                    
                    if($user['username'] != ''){
                        redirect("dashboard");  
                    } else {
                        $this->logout();
                    }
                } else {
                    $data['error'] = "Username dan Password tidak cocok.";
                    $this->load->view('access/login',$data);
                    //$this->validate($data);
                    // redirect("login");
                }
            } else {
                $data['error'] = "Username tidak terdaftar";
                $this->load->view('access/login',$data);
                //$this->validate($data);
                // redirect("login");
            }
            //return;
            
        }

    }

    public function logout(){
        unset($_SESSION);
        session_destroy();
        redirect('dashboard');
    }
}
