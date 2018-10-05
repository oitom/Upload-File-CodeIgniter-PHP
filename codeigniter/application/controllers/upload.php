<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends CI_Controller 
{
    function index()
    {
        $this->load->helper(array('form'));
        
        if(isset($_FILES["arquivo"])){
            $config['upload_path'] = APPPATH . "uploads/";
            $config['allowed_types'] = '*';
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload("arquivo"))
                $this->load->view('index', array('msg' =>  $this->upload->display_errors()));
            else
                $this->load->view('index', array('msg' => 'Sucesso!'));
        }
        else
            $this->load->view('index', array('msg' => '' ));
    }
}
?>