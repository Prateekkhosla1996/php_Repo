<?php
class Admin extends CI_Controller
{

    // login function
    public function index()
    {
        // loading login view
        $this->form_validation->set_rules('username', 'user name', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run()) {
            // getting value from form post
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            // loading model adminmodel
            $this->load->model('Adminmodel');
            $id =  $this->Adminmodel->isValidate($username, $password);
            if ($id) {
                $this->load->library('session');
                $this->session->set_userdata('id', $id);
                return redirect('Admin/dashboard');
            } else {
                $this->session->set_flashdata('Login_failed', 'Invalid username/password');

                return redirect('Admin/index');
            }
        }
        $this->load->view('Admin/login');
    }
    // logout function
    public function logout()
    {
        $this->session->unset_userdata('id');
        return redirect('Admin/index');
    }
    public function dashboard()
    {
        if (!$this->session->userdata('id')) {
            return redirect('Admin/index');
        }
        // loading categories view
        $this->load->model('Categorymodel');
        $get_categories = $this->Categorymodel->getcategories();

        $this->load->view('Admin/categories', ['categories' => $get_categories]);
    }
    public function manage_category()
    {
        if (!$this->session->userdata('id')) {
            return redirect('Admin/index');
        }
        // loading manage_categories view
        $this->load->view('Admin/manage_categories');
    }

    public function product()
    {
        if (!$this->session->userdata('id')) {
            return redirect('Admin/index');
        }
        $this->load->model('Productmodel');
        $res = $this->Productmodel->getallproducts();

        $this->load->view('Admin/products', ['products' => $res]);
    }
    // add category
    public function addcategory()
    {
        if (!$this->session->userdata('id')) {
            return redirect('Admin/index');
        }
        $this->form_validation->set_rules('cname', 'category name', 'required');
        if ($this->form_validation->run()) {
            $post =  $this->input->post();
            $this->load->model('Categorymodel');
            if ($this->Categorymodel->add_category($post)) {
                $this->session->set_flashdata('successful', 'uploaded sucessfully');
                return redirect('Admin/dashboard');
            } else {
                $this->session->set_flashdata('uploading_failed', 'failed to upload');
                return redirect('Admin/dashboard');
            }
        } else {
            $this->load->view('Admin/manage_categories');
        }
    }
    // delete category
    public function deleteCat()
    {
        if (!$this->session->userdata('id')) {
            return redirect('Admin/index');
        }
        $id = $this->input->post('id');
        $this->load->model('Categorymodel');
        if ($this->Categorymodel->delete_category($id)) {
            $this->session->set_flashdata('successful_del', 'deleted sucessfully');
            return redirect('Admin/dashboard');
        }
    }

    public function editCategory($id)
    {
        $this->load->model('Categorymodel');
        $res = $this->Categorymodel->find_category($id);
        $this->load->view('admin/edit_category', ['cat' => $res]);
    }
    // update controller
    public function updatedcategory($cat_id)
    {
        if (!$this->session->userdata('id')) {
            return redirect('Admin/index');
        }

        $this->form_validation->set_rules('cname', 'category name', 'required');
        if ($this->form_validation->run()) {
            $post =  $this->input->post();
            $categoryId = $post['cat_id'];
            $this->load->model('Categorymodel');

            if ($this->Categorymodel->update_category($cat_id, $post)) {
                $this->session->set_flashdata('successful', 'uploaded sucessfully');
                return redirect('Admin/dashboard');
            } else {
                $this->session->set_flashdata('uploading_failed', 'failed to upload');
                return redirect('Admin/dashboard');
            }
        } else {
            $this->load->view('Admin/manage_categories');
        }
    }

    // products controllers 
    public function manage_products()
    {
        if (!$this->session->userdata('id')) {
            return redirect('Admin/index');
        }
        $this->load->model('Categorymodel');
        $get_categories = $this->Categorymodel->getcategories();
        $this->load->view('Admin/addproduct', ['category' => $get_categories]);
    }

    public function addproduct()
    {
        if (!$this->session->userdata('id')) {
            return redirect('Admin/index');
        }
        $this->form_validation->set_rules('product_name', 'product name', 'required');
        $this->form_validation->set_rules('product_mrp', 'product mrp', 'required');
        $this->form_validation->set_rules('product_sp', 'product sp', 'required');
        $this->form_validation->set_rules('product_desc', 'product desc', 'required');
        $config = [
            'upload_path' => './upload/',
            'allowed_types' => 'gif|jpg|png|jpeg'

        ];
        $this->load->library('upload', $config);
        if ($this->form_validation->run() && $this->upload->do_upload('product_img')) {
            $post =  $this->input->post();
            $data = $this->upload->data();
            $img_path = base_url("upload/" . $data['raw_name'] . $data['file_ext']);

            $post['product_img'] = $img_path;
            $this->load->model('Productmodel');
            if ($this->Productmodel->add_product($post)) {
                $this->session->set_flashdata('successful', 'uploaded sucessfully');
                return redirect('Admin/product');
            } else {
                $this->session->set_flashdata('uploading_failed', 'failed to upload');
                return redirect('Admin/product');
            }
        } else {
            $this->load->view('Admin/addproduct');
        }
    }

    // delete products
    public function deleteproduct()
    {
        if (!$this->session->userdata('id')) {
            return redirect('Admin/index');
        }
        $id = $this->input->post('id');
        $this->load->model('Productmodel');
        if ($this->Productmodel->delete_product($id)) {
            $this->session->set_flashdata('sucessful_del', 'deleted sucessfully');
            return redirect('Admin/product');
        }
    }

    public function editProduct($id)
    {
        $this->load->model('Productmodel');
        $this->load->model('Categorymodel');
        $res = $this->Productmodel->find_product($id);
        $get_categories = $this->Categorymodel->getcategories();
        $this->load->view('Admin/editproduct', ['product' => $res, 'category' => $get_categories]);
    }

    // update products
    public function updatedproducts($pdt_id)
    {
        if (!$this->session->userdata('id')) {
            return redirect('Admin/index');
        }
        $config = [
            'upload_path' => './upload/',
            'allowed_types' => 'gif|jpg|png|jpeg'
        ];
        $this->load->library('upload', $config);
        $this->form_validation->set_rules('product_name', 'product name', 'required');
        if ($this->form_validation->run() && $this->upload->do_upload('product_img')) {
            $post =  $this->input->post();
            $data = $this->upload->data();
            $img_path = base_url("upload/" . $data['raw_name'] . $data['file_ext']);

            $post['product_img'] = $img_path;
            // $categoryId = $post['cat_id'];
            $this->load->model('Productmodel');

            if ($this->Productmodel->update_product($pdt_id, $post)) {
                $this->session->set_flashdata('successful', 'updated sucessfully');
                return redirect('Admin/product');
            } else {
                $this->session->set_flashdata('uploading_failed', 'failed to update');
                return redirect('Admin/product');
            }
        } else {
            $this->load->view('Admin/editproduct');
        }
    }

    // contact us
    public function contactus()
    {
        $this->load->model('Contactmodel');
        $res = $this->Contactmodel->getcontact();
        $this->load->view('Admin/contactus', ['contact' => $res]);
    }

    // tandc
    public function termandconditionmaster()
    {
        if (!$this->session->userdata('id')) {
            return redirect('Admin/index');
        }
        $this->load->model('');
        $this->load->model('Termandcondition');
        $get = $this->Termandcondition->get();
        $this->load->view('Admin/termandconditionview', ['tnc' => $get]);
    }
    public function termandcondition()
    {
        if (!$this->session->userdata('id')) {
            return redirect('Admin/index');
        }
        $this->load->view('Admin/termandcondition');
    }
    public function addtnc()
    {
        if (!$this->session->userdata('id')) {
            return redirect('Admin/index');
        }
        $post =  $this->input->post();
        $this->load->model('Termandcondition');
        if ($this->Termandcondition->add($post)) {
            $this->session->set_flashdata('successful', 'uploaded sucessfully');
            return redirect('Admin/termandcondition');
        } else {
            $this->session->set_flashdata('uploading_failed', 'failed to upload');
            return redirect('Admin/termandcondition');
        }
    }
    public function edittnc($id)
    {
        if (!$this->session->userdata('id')) {
            return redirect('Admin/index');
        }
        $this->load->model('Termandcondition');
        $res = $this->Termandcondition->find($id);
        $this->load->view('admin/edit_tc', ['tc' => $res]);
    }
    public function updatetc($tc_id)
    {
        if (!$this->session->userdata('id')) {
            return redirect('Admin/index');
        }
        $post =  $this->input->post();
        $this->load->model('Termandcondition');
        if ($this->Termandcondition->update_tc($tc_id, $post)) {
            $this->session->set_flashdata('successful', 'updated sucessfully');
            return redirect('Admin/termandconditionmaster');
        } else {
            $this->session->set_flashdata('uploading_failed', 'failed to update');
            return redirect('Admin/termandconditionmaster');
        }
    }

    // return policy
    public function returnpolicymaster()
    {
        if (!$this->session->userdata('id')) {
            return redirect('Admin/index');
        }
        $this->load->model('ReturnModel');
        $get = $this->ReturnModel->get();
        $this->load->view('Admin/returnpolicy', ['rp' => $get]);
    }
    public function returnpolicy()
    {
        if (!$this->session->userdata('id')) {
            return redirect('Admin/index');
        }

        $this->load->view('Admin/addreturnpolicy');
    }
    public function addreturnpolicy()
    {
        if (!$this->session->userdata('id')) {
            return redirect('Admin/index');
        }
        $post =  $this->input->post();
        $this->load->model('ReturnModel');
        if ($this->ReturnModel->add($post)) {
            $this->session->set_flashdata('successful', 'uploaded sucessfully');
            return redirect('Admin/returnpolicymaster');
        } else {
            $this->session->set_flashdata('uploading_failed', 'failed to upload');
            return redirect('Admin/returnpolicymaster');
        }
    }
    public function editreturnpolicy($id)
    {
        if (!$this->session->userdata('id')) {
            return redirect('Admin/index');
        }
        $this->load->model('ReturnModel');
        $res = $this->ReturnModel->find($id);
        $this->load->view('Admin/editreturnpolicy', ['rp' => $res]);
    }
    public function updatereturnpolicy($rp_id)
    {
        if (!$this->session->userdata('id')) {
            return redirect('Admin/index');
        }
        $post =  $this->input->post();
        $this->load->model('ReturnModel');
        if ($this->ReturnModel->update_rp($rp_id, $post)) {
            $this->session->set_flashdata('successful', 'updated sucessfully');
            return redirect('Admin/returnpolicymaster');
        } else {
            $this->session->set_flashdata('uploading_failed', 'failed to update');
            return redirect('Admin/returnpolicymaster');
        }
    }
    public function privacymaster()
    {
        if (!$this->session->userdata('id')) {
            return redirect('Admin/index');
        }
        $this->load->model('PrivacyModel');
        $get = $this->PrivacyModel->get();
        $this->load->view('Admin/privacymaster', ['rp' => $get]);
    }
    public function privacy()
    {
        if (!$this->session->userdata('id')) {
            return redirect('Admin/index');
        }

        $this->load->view('Admin/addprivacy');
    }
    public function addprivacy()
    {
        if (!$this->session->userdata('id')) {
            return redirect('Admin/index');
        }
        $post =  $this->input->post();
        $this->load->model('PrivacyModel');
        if ($this->PrivacyModel->add($post)) {
            $this->session->set_flashdata('successful', 'uploaded sucessfully');
            return redirect('Admin/privacymaster');
        } else {
            $this->session->set_flashdata('uploading_failed', 'failed to upload');
            return redirect('Admin/privacymaster');
        }
    }

    public function editprivacy($id)
    {
        if (!$this->session->userdata('id')) {
            return redirect('Admin/index');
        }
        $this->load->model('PrivacyModel');
        $res = $this->PrivacyModel->find($id);
        $this->load->view('Admin/editprivacy', ['rp' => $res]);
    }
    public function updateprivacy($p_id)
    {
        if (!$this->session->userdata('id')) {
            return redirect('Admin/index');
        }
        $post =  $this->input->post();
        $this->load->model('PrivacyModel');
        if ($this->PrivacyModel->update_p($p_id, $post)) {
            $this->session->set_flashdata('successful', 'updated sucessfully');
            return redirect('Admin/privacymaster');
        } else {
            $this->session->set_flashdata('uploading_failed', 'failed to update');
            return redirect('Admin/privacymaster');
        }
    }
}
