<?PHP
defined('BASEPATH') OR exit('No direct script access allowed');

    class Pet extends CI_Controller{
	
	
	public function addPet(){
   
		$this->load->library('form_validation');

         $this->form_validation->set_rules('petname','Pet Name','trim|required|max_length[50]');
         $this->form_validation->set_rules('breed','Breed'.'trim|required|max_length[20]');
 	     $this->form_validation->set_rules('color','Color','trim|required|max_length[20]');
           
         if($this->form_validation->run()){


		$Name=$this->input->post('petname');
		$Breed=$this->input->post('breed');
		$Color=$this->input->post('color');
		

		$this->load->model('Model_Pet');
		$this->Model_Pet->addPet($Name,$Breed,$Color);
		    $this->load->view('dashboard/addPet');
         } else{
                    echo validation_errors();
       } 

	}
	
	public function selectPet(){
		$sessionData=$this->session->userdata('user_id');
		
		
   
        $this->load->model('Model_Pet');
        $selectPet=$this->Model_Pet->selectPet($sessionData);

        $this->load->view('dashboard/booking',['getPetName'=>$selectPet]);
      
    
}

}