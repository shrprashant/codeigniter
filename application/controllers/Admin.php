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
		$config['max-width']="250";
		$config['max_height']="250";

		
		
		$this->load->library('upload',$config);
		$this->upload->do_upload('file');
		
		$data=array('upload_data'=>$this->upload->data());
		
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
		
		
    }



       public function selectProduct(){
/*
   		$this->load->model('Model_Admin');
        $selectCategory=$this->Model_Admin->selectCategory();
         // printing to see wether value is passed in array or not print_r($getCategory);
        $this->load->view('selectProduct',['getCategory'=>$selectCategory]);*/

        $this->load->model('Model_Admin');
        $data['message']=$this->Model_Admin->selectProduct();
        $this->load->view('selectProduct',$data);
       
    }

     public function findProduct(){


        $this->load->model('Model_Admin');
        $data['message']=$this->Model_Admin->findProduct();
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
		$config['max-width']="250";
		$config['max_height']="250";

		
		
		$this->load->library('upload',$config);
		$this->upload->do_upload('file');
		
		$data=array('upload_data'=>$this->upload->data());
		
		$id=$this->input->post('item_id');
		$Name=$this->input->post('item_name');
		$Price=$this->input->post('item_price');
		$Category=$this->input->post('item_category');
		$Description=$this->input->post('item_desc');
		$Status=$this->input->post('item_status');
		
		$Image=$data['upload_data']['file_name'];

		$this->load->model('Model_Admin');
		$this->Model_Admin->editProduct($id,$Name,$Price,$Category,$Description,$Status,$Image);
		
		$data['insertmsg']="data inserted successfully";
		$this->load->view('selectProduct',$data);
		
		
    }

    public function deleteProduct(){
		$this->load->model('Model_Admin');
		$id=$this->input->get('item_id');
		$this->Model_Admin->deleteProduct($id);
		 redirect('/Admin/selectProduct/');
		echo "data deleted";
	}



}
    
?>