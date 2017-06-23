<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Cart extends CI_Controller{



       public function selectProduct(){

        $this->load->model('Model_Cart');
        $data['message']=$this->Model_Cart->selectProduct();
        $this->load->view('dashboard/petMart1',$data);
       
    }


    // Add Items To Cart
	public function addToCart($item_id){
		$sessionData=$this->session->userdata('user_id');
		if($sessionData!=''){
			$this->load->model('Model_Cart');
			
			$data['CartMessage']=$this->Model_Cart->addProductInCart
							($sessionData,$item_id);
			redirect(site_url('Cart/selectProduct'));					
		} else{
			$this->load->view('dashboard/dashboard');
		}
	}
	


}

?>