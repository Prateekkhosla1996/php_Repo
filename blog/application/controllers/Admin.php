<?php
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function logout()
    {
        $this->session->unset_userdata('id');
        return redirect('Admin/index');
    }
    public function welcome()
    {
        if (!$this->session->userdata('id')) {
            return redirect('Admin/index');
        }

        $this->load->model('Loginmodel');
        $get_articles = $this->Loginmodel->getarticleList();

        $this->load->view('Admin/dashboard.php', ['articles' => $get_articles]);
    }
    public function register()
    {
        $this->load->view('Admin/register');
    }
    public function index()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'user name', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|max_length[12]');
        $this->form_validation->set_error_delimiters('<div class= "text-danger">', '</div>');
        if ($this->form_validation->run()) {
            // getting value from form post
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $this->load->model('Loginmodel');
            $id = $this->Loginmodel->isValidate($username, $password);
            if ($id) {
                $this->load->library('session');
                $this->session->set_userdata('id', $id);
                return redirect('admin/welcome');
            } else {
               $this->session->set_flashdata('Login_failed','Invalid username/password');
               
               return redirect('Admin/index');
            }
        } else {
            // echo validation_errors();
            $this->load->view('Admin/login');
        }
    }
    // public function addUser()
    // {
    // }
    // public function edit()
    // {
    // }
    // public function delete()
    // {
    // }
    // is_unique[tablename.fieldname]

}
