<?php

class Productcontroller extends CI_Controller
{

    public function index()
    {

        $this->load->model('Productmodel');
        $pds['products'] =  $this->Productmodel->getproduct();
        $this->load->view('products/index', $pds);
    }

    public function edit($id)
    {
        $this->load->model('Productmodel');
        $pds['product'] =  $this->Productmodel->findproduct($id);
        $this->load->view('products/edit', $pds);
    }
    public function create()
    {

        $this->load->view('products/create');
    }
    public function store()
    {
        // if ($this->form_validation->run()) {
        $ori_filename = $_FILES['pimg']['name'];
        $new_name = time() . "" . $ori_filename;
        $config = [
            'upload_path' => './upload/',
            'allowed_types' => 'gif|jpg|png|jpeg',
            'file_name' => $new_name,
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('pimg')) {
            $imgError = array('error' => $this->upload->display_errors());
            $this->load->view('products/create', $imgError);
        } else {
            $pimg = $this->upload->data('file_name');
            $data = [
                'pname' => $this->input->post('pname'),
                'pdesc' => $this->input->post('pdesc'),
                'price' => $this->input->post('price'),
                'pimg' => $pimg
            ];
            $this->load->model('Productmodel');
            $this->Productmodel->insertproduct($data);
            $this->session->set_flashdata('status', 'product inserted sucessfully');
            redirect(base_url('product/add'));
        }
        // } else {
        //     $this->load->view('products/create');
        // }
    }
    public function update($id)
    {
        $old_filename = $this->input->post('old_prod_img');
        $new_filename = $_FILES["pimg"]["name"];
        if ($new_filename == TRUE) {
            $update_filename = time() . "" . $_FILES["pimg"]['name'];
            $config = [
                'upload_path' => './upload/',
                'allowed_types' => 'gif|jpg|png|jpeg',
                'file_name' => $update_filename,
            ];
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('pimg')) {
                if (file_exists("./upload/" . $old_filename)) {
                    unlink("./images/" . $old_filename);
                }
            }
        } else {
            $update_filename = $old_filename;
        }

        $data = [
            'pname' => $this->input->post('pname'),
            'pdesc' => $this->input->post('pdesc'),
            'price' => $this->input->post('price'),
            'pimg' => $update_filename
        ];
        $this->load->model('Productmodel');
        $this->Productmodel->updateproduct($data, $id);
        $this->session->set_flashdata('status', 'product update sucessfully');
        redirect(base_url('product/edit/' . $id));
    }

    public function delete($id)
    {
        $this->load->model('Productmodel');
        
        if ($this->Productmodel->checkProductImage($id)) {
            $data = $this->Productmodel->checkProductImage($id);
            // $data->pimg;
            if (file_exists("./upload/" . $data->pimg)) {
                unlink("./upload/" . $data->pimg);
            }
            $this->Productmodel->deleteproduct($id);

            
        }
    }
}
