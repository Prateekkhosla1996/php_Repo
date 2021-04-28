<?php
    class Users extends CI_Controller{

        public function index(){
            $this->load->model('Usermodel');
            $userData['users'] =  $this->Usermodel->getUserData();
            $this->load->view('Users/userList',$userData);
            
        }
    }