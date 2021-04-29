<?php
class Users extends CI_Controller{
   
    public function index(){
        // $this->load->helper('url');
       $this->load->view('Users/article_list');
    }
}