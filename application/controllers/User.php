<?PHP
defined('BASEPATH') OR exit('No direct script access allowed');

    class User extends CI_Controller{
   
        public function index(){
            $this->load->view("index");
        }
        public function blog(){
        	$this->load-> view("blog");
        }

        public function about(){
        	$this->load->view('about');
        }
        public function contact(){
        	$this->load->view('contact');
        }
        public function petguide(){
        	$this->load->view('petguide');
        }
        public function petmart(){
        	$this->load->view('petmart');
        }

        public function login(){
            $this->load->view('login');
        }

       
         public function signup(){
            $this->load->view('signup');
        }
      
 		
		public function register(){
			//if ( $this->session->userdata('user_id')==''){
		  //    redirect(base_url()."index.php/login");
//}
                    $this->load->library('form_validation');

                $this->form_validation->set_rules('first_name','Firstname','trim|required|max_length[50]');
                $this->form_validation->set_rules('last_name','Lastname'.'trim|required');
                $this->form_validation->set_rules('username','Username','trim|required');
                       
                if($this->input->post('password')!='' || $this->input->post('repassword')!='')
                    {
                        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[20]|matches[repassword]'); 
                        $this->form_validation->set_rules('repassword', 'Confirm Password', 'trim|required|min_length[6]|max_length[20]');
                    }

                $this->form_validation->set_rules('phone_number', 'Phone Number', 'required|numeric|exact_length[10]');
                $this->form_validation->set_rules('address', 'Address', 'required');

                $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|max_length[40]');



             if($this->form_validation->run()){
                $firstname=$this->input->post('first_name');
                $lastname=$this->input->post('last_name');
                $email=$this->input->post('email');
                $username=$this->input->post('username');
                $password=$this->input->post('password');
                $phonenumber=$this->input->post('phone_number');
                $address=$this->input->post('address');
   /*

    $data['customerMessage']=$this->Model_User->getRegister
                            ($firstname,$lastname,$email,$username,$password,
                            $phonenumber,$address);*/
                            
            $this->load->view('login');
        

             }else {
            echo validation_errors();
                

            }
		}
    }
?>
