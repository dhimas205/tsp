<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Dashboard extends CI_Controller{
    //put your code here
    public function __construct()
    {
        parent::__construct();
    }    
    
    public function index() {        
        $this->load->view('dashboard/admin');
    }
    
}
