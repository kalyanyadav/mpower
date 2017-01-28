<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Companies extends CI_Controller {
    public function index(){
       $this->load->view('common/header');
       $this->load->view('companies');
       $this->load->view('common/footer');
}
}
