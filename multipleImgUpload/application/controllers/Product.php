<?php
class Product extends CI_Controller
{
    public function products()
    {
        $this->load->view('productform');
    }

    private function set_upload_options()
    {
        //upload an image options
        $config = array();
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '0';
        $config['overwrite'] = FALSE;

        return $config;
    }
    public function post()
    {

        $files = $_FILES;
        $images = array();
        $cpt = count($_FILES['userfile']['name']);
        for ($i = 0; $i < $cpt; $i++) {
            $_FILES['userfile']['name'] = $files['userfile']['name'][$i];
            $_FILES['userfile']['type'] = $files['userfile']['type'][$i];
            $_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'][$i];
            $_FILES['userfile']['error'] = $files['userfile']['error'][$i];
            $_FILES['userfile']['size'] = $files['userfile']['size'][$i];
            $this->load->library('upload');
            $this->upload->initialize($this->set_upload_options());
            $this->upload->do_upload();
            $images[] = $_FILES['userfile']['name'];
        }
        $fileName = implode(',', $images);

        $data = array(
            'kodeProduk' => $this->input->post('kodeproduk'),
            'ket' => $this->input->post('ket'),

            'userfile' => $fileName
        );

        unset($data['submit']);
        $this->load->model('Productmodel');
        $this->Productmodel->add_record($data);
        redirect(base_url("Product/products"));
    }
}
