<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Admin extends CI_Controller{

   
    public function addCategory(){

    	$Category=$this->input->post('category_name');

    	$this->load->model('Model_Admin');
		$this->Model_Admin->addCategory($Category);
		
		$data['insertmsg']="category inserted successfully";
		$this->load->view('addCategory',$data);

    }

    public function selectCategory(){

   
        $this->load->model('Model_Admin');
        $selectCategory=$this->Model_Admin->selectCategory();
        /* printing to see wether value is passed in array or not print_r($getCategory);*/
        $this->load->view('addProduct',['getCategory'=>$selectCategory]);
       
    }

     public function addProduct(){
     
     	
     //uploading image
		$config['upload_path']="assets/images/images";
		$config['allowed_types']="jpg|gif|png";
		/*$config['max-width']="250";
		$config['max_height']="250";*/
		
		$this->load->library('upload',$config);
		$this->upload->do_upload('images');
		
		$data=array('upload_data'=>$this->upload->data());
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('item_name', 'Item Name', 'required|trim|max_length[30]');
		$this->form_validation->set_rules('item_price', 'Item Price', 'required|numeric|trim|max_length[5]');
		$this->form_validation->set_rules('item_category', 'Category', 'required');
		$this->form_validation->set_rules('item_desc', 'Item Description', 'required|trim|max_length[500]');
		
		if($this->form_validation->run()){
		$Name=$this->input->post('item_name');
		$Price=$this->input->post('item_price');
		$Category=$this->input->post('item_category');
		$Description=$this->input->post('item_desc');
		$Status=$this->input->post('item_status');
		
		$Image=$data['upload_data']['file_name'];

		$this->load->model('Model_Admin');
		$this->Model_Admin->addProduct($Name,$Price,$Category,$Description,$Status,$Image);
		
		$data['insertmsg']="data inserted successfully";
		$this->load->view('addProduct',$data);
		
		} else{
              	$this->load->view('addProduct');
         }
    }

// to show in the table while 

       public function selectProduct(){

        $this->load->model('Model_Admin');
        $data['message']=$this->Model_Admin->selectProduct();
        $this->load->view('selectProduct',$data);
       
    }
    // to load in the edit form
     public function findProduct($id){
     	$id=$this->uri->segment(3);
     	
        $this->load->model('Model_Admin');
        $data['message']=$this->Model_Admin->findProduct($id);
        $data['messages']=$this->Model_Admin->selectCategory();
        $this->load->view('editProduct',$data);
       
    }


    	
    	 

		public function editDetails($id){
		
		$this->load->model("Model_Admin");

		$data['productlist']=$this->Model_Admin->selectProductId($id);
	
		$this->load->view('editProduct',$data);
	}


     public function editProduct(){
     //uploading image
		$config['upload_path']="assets/images/images";
		$config['allowed_types']="jpg|gif|png";
		/*$config['max-width']="250";
		$config['max_height']="250";*/
		
		$this->load->library('upload',$config);
		$this->upload->do_upload('images');
		
		$data=array('upload_data'=>$this->upload->data());
		
			$this->load->library('form_validation');
		$this->form_validation->set_rules('hiddenID', 'Hidden ID', 'required');
		$this->form_validation->set_rules('item_name', 'Item Name', 'required|trim|max_length[25]');
		$this->form_validation->set_rules('item_price', 'Item Price', 'required|numeric|trim|max_length[4]');
		$this->form_validation->set_rules('item_desc', ' Description', 'required|trim|max_length[500]');
		
		if($this->form_validation->run()){

		$id=$this->input->post('hiddenID');
		$Name=$this->input->post('item_name');
		$Price=$this->input->post('item_price');
		$Category=$this->input->post('item_category');
		$Description=$this->input->post('item_desc');
		$Status=$this->input->post('item_status');
		
		$Image=$data['upload_data']['file_name'];

		$this->load->model('Model_Admin');
		$this->Model_Admin->editProduct($id,$Name,$Price,$Category,$Description,$Status,$Image);
		
		$data['insertmsg']="data inserted successfully";
		  redirect('/Admin/selectProduct/');
		}else{
			echo validation_errors();
		}
		
    }

    public function deleteProduct(){
    	
	   $id=$this->uri->segment(3);
        $this->load->model('Model_Admin');
        $data['message']=$this->Model_Admin->deleteProduct($id);
         redirect('/Admin/selectProduct/');
		
	}



}
    
?>