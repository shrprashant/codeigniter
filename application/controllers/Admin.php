<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function addCategory() {

        $Category = $this->input->post('category_name');

        $this->load->model('Model_Admin');
        $this->Model_Admin->addCategory($Category);

        $data['insertmsg'] = "category inserted successfully";
        $this->load->view('addCategory', $data);
    }

    public function selectCategory() {


        $this->load->model('Model_Admin');
        $selectCategory = $this->Model_Admin->selectCategory();
        /* printing to see wether value is passed in array or not print_r($getCategory); */
        $this->load->view('addProduct', ['getCategory' => $selectCategory]);
    }

    public function addProduct() {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('item_name', 'Item Name', 'required|trim|max_length[25]');
        $this->form_validation->set_rules('item_price', 'Item Price', 'required|numeric|trim|max_length[4]');
        $this->form_validation->set_rules('category_id', 'Category ID', 'required');
        $this->form_validation->set_rules('item_desc', 'Item Description', 'required|trim|max_length[100]');

        if ($this->form_validation->run()) {
            $config['upload_path'] = "assets/images/images/upload/";
            $config['allowed_types'] = 'gif|jpg|png';

            $this->load->library('upload', $config);
            $this->upload->do_upload('file');

            $data = array('upload_data' => $this->upload->data());

            $Name = $this->input->post('item_name');
            $Image = $data['upload_data']['file_name'];
            $Price = $this->input->post('item_price');
            $Category = $this->input->post('category_id');
            $Description = $this->input->post('item_desc');
            $Status = $this->input->post('item_status');

            $this->load->model('Model_Admin');
            $this->Model_Admin->addProduct
                    ($Name, $Price, $Category, $Description, $Status, $Image);
            redirect('/Admin/selectCategory/');
        } else {

            redirect('/Admin/selectCategory/');
        }
    }

// to show in the table while 

    public function selectProduct() {

        $this->load->model('Model_Admin');
        $data['message'] = $this->Model_Admin->selectProduct();
        $this->load->view('selectProduct', $data);
    }

    // to load in the edit form
    public function findProduct($id) {
        $id = $this->uri->segment(3);

        $this->load->model('Model_Admin');
        $data['message'] = $this->Model_Admin->findProduct($id);
        $data['messages'] = $this->Model_Admin->selectCategory();
        $this->load->view('editProduct', $data);
    }

    public function editDetails($id) {

        $this->load->model("Model_Admin");

        $data['productlist'] = $this->Model_Admin->selectProductId($id);

        $this->load->view('editProduct', $data);
    }

    public function editProduct() {
        //uploading image
        $config['upload_path'] = "assets/images/images";
        $config['allowed_types'] = "jpg|gif|png";
        /* $config['max-width']="250";
          $config['max_height']="250"; */

        $this->load->library('upload', $config);
        $this->upload->do_upload('file');

        $data = array('upload_data' => $this->upload->data());

        $this->load->library('form_validation');
        $this->form_validation->set_rules('hiddenID', 'Hidden ID', 'required');
        $this->form_validation->set_rules('item_name', 'Item Name', 'required|trim|max_length[25]');
        $this->form_validation->set_rules('item_price', 'Item Price', 'required|numeric|trim|max_length[4]');
        $this->form_validation->set_rules('item_desc', ' Description', 'required|trim|max_length[500]');

        if ($this->form_validation->run()) {

            $id = $this->input->post('hiddenID');
            $Name = $this->input->post('item_name');
            $Price = $this->input->post('item_price');
            $Category = $this->input->post('item_category');
            $Description = $this->input->post('item_desc');
            $Status = $this->input->post('item_status');

            $Image = $data['upload_data']['file_name'];

            $this->load->model('Model_Admin');
            $this->Model_Admin->editProduct($id, $Name, $Price, $Category, $Description, $Status, $Image);

            $data['insertmsg'] = "data inserted successfully";
            redirect('/Admin/selectProduct/');
        } else {
            echo validation_errors();
        }
    }

    public function deleteProduct() {

        $id = $this->uri->segment(3);
        $this->load->model('Model_Admin');
        $data['message'] = $this->Model_Admin->deleteProduct($id);
        redirect('/Admin/selectProduct/');
    }

    public function selectOrder() {

        $this->load->model('Model_Admin');
        $data['message'] = $this->Model_Admin->selectOrder();
        $this->load->view('indexAdmin', $data);
    }

    public function deleteOrder() {

        $id = $this->uri->segment(3);
        $this->load->model('Model_Admin');
        $data['message'] = $this->Model_Admin->deleteOrder($id);
        redirect('/Admin/selectOrder/');
    }

    public function selectPetDetails() {
        $this->load->model('Model_Pet');
        $data['message'] = $this->Model_Pet->selectPetDetails();
        $this->load->view('viewPet', $data);
    }

    public function deletePet() {

        $id = $this->uri->segment(3);
        $this->load->model('Model_Pet');
        $data['message'] = $this->Model_Pet->deletePet($id);
       redirect('/Admin/selectPetDetails/');
    }

    public function selectBooking() {
        $this->load->model('Model_Booking');
        $data['message'] = $this->Model_Booking->selectBooking();
        $this->load->view('viewBooking', $data);
    }

    public function deleteBooking() {

        $id = $this->uri->segment(3);
        $this->load->model('Model_Booking');
        $data['message'] = $this->Model_Booking->deleteBooking($id);
        redirect('/Admin/selectBooking/');
    }

    public function viewItem(){
        $sessionData=$this->session->userdata('user_id');
        if($sessionData!=''){   
        
            $this->load->library('pagination');
            $this->load->model('Model_Admin');


            $config['base_url'] = base_url('Admin/selectProduct');
            
            $config['per_page'] = ($this->input->get('limitRows')) ? $this->input->get('limitRows') : 10;
            $config['enable_query_strings'] = TRUE;
            $config['page_query_string'] = TRUE;
            $config['reuse_query_string'] = TRUE;


             // integrate bootstrap pagination
            $config['full_tag_open'] = '<ul class="pagination">';
            $config['full_tag_close'] = '</ul>';
           
            $config['first_tag_open'] = '<li>';
            $config['first_tag_close'] = '</li>';
            $config['prev_link'] = 'Prev';
            $config['prev_tag_open'] = '<li class="prev">';
            $config['prev_tag_close'] = '</li>';
            $config['next_link'] = 'Next';
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '</li>';
            $config['last_tag_open'] = '<li>';
            $config['last_tag_close'] = '</li>';
            $config['cur_tag_open'] = '<li class="active"><a href="'.$config['base_url'].'?per_page=0">';
            $config['cur_tag_close'] = '</a></li>';
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';

            $data['page'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
            $data['searchFor'] = ($this->input->get('query')) ? $this->input->get('query') : NULL;
            $data['orderField'] = ($this->input->get('orderField')) ? $this->input->get('orderField') : '';
            $data['orderDirection'] = ($this->input->get('orderDirection')) ? $this->input->get('orderDirection') : '';
            $data['citylist'] = $this->CustomerModel->getItem($config["per_page"], $data['page'], $data['searchFor'], $data['orderField'], $data['orderDirection']);
            $config['total_rows'] = $this->CustomerModel->countItem($config["per_page"], $data['page'], $data['searchFor'], $data['orderField'], $data['orderDirection']);
            $this->pagination->initialize($config);
            $data['pagination'] = $this->pagination->create_links();
            $this->load->view('selectProduct', $data);
        } else{
            redirect('Admin/selectProduct');
        }
    }

public function viewItemDetails($item_id){
        $sessionData=$this->session->userdata('user_id');
        if($sessionData!=''){
            $this->load->model('Model_User');
            
            $data['ItemInfo']=$this->CustomerModel->viewItemDetails
                            ($item_id);
            // $data['ItemImage']=$this->CustomerModel->viewItemImage
                            // ($itemID);
            $this->load->view('selectProduct',$data);
        } else{
            $this->load->view('Login');
        }
    }

}

?>