<?PHP
defined('BASEPATH') OR exit('No direct script access allowed');

    class Booking extends CI_Controller{
   

	public function addbooking(){
   
		/*$this->load->library('form_validation');

         $this->form_validation->set_rules('petname','Pet Name','trim|required|max_length[50]');
         $this->form_validation->set_rules('service','Service'.'trim|required');
 	     $this->form_validation->set_rules('day','Day','trim|required');
 	     $this->form_validation->set_rules('date','Date','trim|required');
 	     $this->form_validation->set_rules('sessionno','Session No','trim|required');  
 	      $this->form_validation->set_rules('time','Time','trim|required'); 
           
         if($this->form_validation->run()){*/


		$Name=$this->input->post('petname');
		$Service=$this->input->post('service');
		$Day=$this->input->post('day');
		$Date=$this->input->post('date');
		$Time=$this->input->post('time');
		$Sessionno=$this->input->post('sessionno');
		

		$this->load->model('Model_Booking');
		$this->Model_Booking->addBooking($Name,$Service,$Day,$Date,$Time,$Sessionno);
		redirect('/Pet/selectPet/');
		   /* $this->load->view('dashboard/addPet');*/
   		/*	  
         } else{
                    echo validation_errors();
       } */

	}


	




   }

   ?>
      