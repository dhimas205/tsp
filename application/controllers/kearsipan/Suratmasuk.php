<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Suratmasuk extends CI_Controller{
    //put your code here
    public function __construct()
    {
        parent::__construct();
    }    
    
    public function balai() {
        $tahun = $this->input->post('tahun');
        if (!isset($tahun)){
            $tahun = date("Y");
        }
        $data['tahun_exist'] = $tahun;
        $table = "surat_masuk_".$tahun;
        $query = $this->db->order_by('tgl_surat', 'DESC')->get($table);
        // echo "SELECT:: <br/>".$this->db->last_query()."<br/><br/>";
        if($query->num_rows() > 0){
            $data['record'] = $query->result();
        } else {
            $data['record'] = array();
        }       

        $this->load->view('suratmasuk/index_balai.php',$data);
    }
    
}
