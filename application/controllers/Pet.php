<?PHP
defined('BASEPATH') OR exit('No direct script access allowed');

    class Pet extends CI_Controller{
	
	
	public function addPet(){
   
		
		
		$Name=$this->input->post('petname');
		$Breed=$this->input->post('breed');
		$Color=$this->input->post('color');
		

		$this->load->model('Model_Pet');
		$this->Model_Pet->addProduct($Name,$Breed,$Color);
		
		$data['message']="data inserted successfully";
		$this->load->view('addPet',$data);
		
		
    }


	
	
	
	
	
	}
      