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
        $this->load->library('pagination');
        $config=[
           'base_url' => base_url('Admin/welcome'),
           'per_page' => 2,
           'total_rows' => $this->Loginmodel->num_rows(),
           'full_tag_open'=>"<ul class='pagination'>",
           'full_tag_close'=>"</ul>",
           'next_tag_open'=>"<li class='page-item'>",
           'next_tag_close'=>"</li>",
           'prev_tag_open'=>"<li class='page-item'>",
           'prev_tag_close'=>"</li>",
           'num_tag_open' =>"<li class='page-item'>",
           'num_tag_close' =>"</li>",
           'cur_tag_open' =>"<li class='active'>",
           'cur_tag_close' =>"</li>",
        ];
        $this->pagination->initialize($config);
        $articles = $this->Loginmodel->articlelist($config['per_page'],$this->uri->segment(3));
        $get_articles = $this->Loginmodel->getarticleList();
        $this->load->view('Admin/dashboard.php', ['articles' => $articles]);
    }
    public function register()
    {
        $this->load->view('Admin/register');
    }
    public function index()
    {


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
                $this->session->set_flashdata('Login_failed', 'Invalid username/password');

                return redirect('Admin/index');
            }
        } else {
            // echo validation_errors();
            $this->load->view('Admin/login');
        }
    }
    public function addTitle()
    {
        if (!$this->session->userdata('id')) {
            return redirect('Admin/index');
        }

        $this->load->view('admin/add_article');
        $this->input->post();
    }
    public function userValidation()
    {
        if (!$this->session->userdata('id')) {
            return redirect('Admin/index');
        }
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('body', 'Body', 'required');
        if ($this->form_validation->run()) {
            $post = $this->input->post();
            $this->load->model('Loginmodel');
            if ($this->Loginmodel->add_articles($post)) {
                $this->session->set_flashdata('successful', 'uploaded sucessfully');
                return redirect('Admin/welcome');
            } else {
                $this->session->set_flashdata('uploading_failed', 'failed to upload');
                return redirect('Admin/welcome');
            }
        } else {
            $this->load->view('admin/add_article');
        }
    }
    // public function edit()
    // {
    // }
    public function deleteArticle()
    {
        $id = $this->input->post('id');
        $this->load->model('Loginmodel');
        if ($this->Loginmodel->delete_articles($id)) {
            $this->session->set_flashdata('successful', 'deleted sucessfully');
            return redirect('Admin/welcome');
        } else {
            $this->session->set_flashdata('error', 'unable to delete ');
            return redirect('Admin/welcome');
        }
    }
    public function edit($id){
        $this->load->model('Loginmodel');
        $rt = $this->Loginmodel->find_article($id);
        $this->load->view('Admin/edit_article',['article'=>$rt]);
    }
    // is_unique[tablename.fieldname]
    public function edit_article($article_id){
        if (!$this->session->userdata('id')) {
            return redirect('Admin/index');
        }
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('body', 'Body', 'required');
        if ($this->form_validation->run()) {
            $post = $this->input->post();
            // $art_id = $post['article_id'];
            $this->load->model('Loginmodel');
            if ($this->Loginmodel->update_article($article_id,$post)) {
                $this->session->set_flashdata('successful', 'edit sucessfully');
                return redirect('Admin/welcome');
            } else {
                $this->session->set_flashdata('uploading_failed', 'failed to edit');
                return redirect('Admin/welcome');
            }
        } else {
            $this->load->view('admin/edit_article');
        }
    }
}
