<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Item extends CI_Controller{

   
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
        $this->load->view('addItem',['getCategory'=>$selectCategory]);
       
    }

     public function addItem(){
     //uploading image
		$config['upload_path']="assets/images/images";
		$config['allowed_types']="jpg|gif|png";
		$config['max-width']="200";
		$config['max_height']="200";

		
		
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
		$this->Model_Admin->addItem($Name,$Price,$Category,$Description,$Status,$Image);
		
		$data['insertmsg']="data inserted successfully";
		$this->load->view('addItem',$data);
		
		
    }
}
    
?>