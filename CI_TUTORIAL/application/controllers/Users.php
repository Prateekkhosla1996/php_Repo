<?php
    class Users extends CI_Controller{

        public function index(){
            // $this->load->model('Usermodel');
            $this->load->helper('new');
            helloWorld();
            $userData['users'] =  $this->Usermodel->getUserData();
            $this->load->view('Users/userList',$userData);
            
        }
    }