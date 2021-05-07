<?php
class Home extends CI_Controller
{

    public function index()
    {
        $this->load->view('Home/index');
    }
    public function privacy()
    {
        $this->load->model('PrivacyModel');
        $res = $this->PrivacyModel->get();
        $this->load->view('Home/privacy',['p' => $res]);
    }
    public function productdesc()
    {
        $this->load->view('Home/productdes');
    }
    public function contactus()
    {
        $this->load->view('Home/contactus');
    }
    public function returnpolicy()
    {
        $this->load->model('ReturnModel');
        $res = $this->ReturnModel->get();
        $this->load->view('Home/returnpolicy', ['rp' => $res]);
    }
    public function termandcondition()
    {
        $this->load->model('Termandcondition');
        $res = $this->Termandcondition->get();
        $this->load->view('Home/tandc', ['tc' => $res]);
    }
    public function shipping()
    {
        $this->load->view('Home/shipping');
    }
    public function addcontactus()
    {
        $this->form_validation->set_rules('user_name', 'user name', 'required');
        $this->form_validation->set_rules('user_number', 'user number', 'required');
        $this->form_validation->set_rules('user_email', 'user email', 'required');
        $this->form_validation->set_rules('user_comment', 'user comment', 'required');
        if ($this->form_validation->run()) {
            $post =  $this->input->post();
            $this->load->model('Contactmodel');
            if ($this->Contactmodel->insert_contactus($post)) {
                $this->session->set_flashdata('successful', 'your information is stored sucessfully we will contact you shortly');
                return redirect('Home/contactus');
            }
        } else {
            $this->load->view('Home/contactus');
        }
    }
    public function viewallproducts()
    {
        $this->load->view('Home/products');
    }
}
