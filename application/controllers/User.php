<?PHP
defined('BASEPATH') OR exit('No direct script access allowed');

    class User extends CI_Controller{
   
      
 		
		public function register(){
	            $this->load->library('form_validation');

                $this->form_validation->set_rules('first_name','Firstname','trim|required|max_length[50]');
                $this->form_validation->set_rules('last_name','Lastname'.'trim|required');
                $this->form_validation->set_rules('username','Username','trim|required');
                       
                if($this->input->post('password')!='' || $this->input->post('repassword')!='')
                    {
                        $this->form_validation->set_rules('password','Password', 'trim|required|min_length[6]|max_length[20]|matches[repassword]'); 
                        $this->form_validation->set_rules('repassword', 'Confirm Password', 'trim|required|min_length[6]|max_length[20]');
                    }

                $this->form_validation->set_rules('phone_number','Phone Number','required|numeric|exact_length[10]');
                $this->form_validation->set_rules('address', 'Address', 'required');

                $this->form_validation->set_rules('email_id','Email','required|trim|valid_email|max_length[40]');

        
               if($this->form_validation->run()){

                    $firstname=$this->input->post('first_name');
                    $lastname=$this->input->post('last_name');  
                    $username=$this->input->post('username');
                    $password=$this->input->post('password');
                    $phonenumber=$this->input->post('phone_number');
                    $address=$this->input->post('address');
                    $email=$this->input->post('email_id');

                    $this->load->model('Model_User');
                     $data['CustomerMessage']=$this->Model_User->getRegister
                                ($firstname,$lastname,$username,$password,
                                $phonenumber,$address,$email);
                                
                    $this->load->view('login');
        

                 } else{
                    echo validation_errors();
                 } 

            
		}
    
        public function login(){ 
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|min_length[7]|max_length[50]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[7]|max_length[50]');
        
        if($this->form_validation->run()){
            $username=$this->input->post('username');
            $password=$this->input->post('password');
            
            $this->load->model('Model_User');
            
            $userID=$this->Model_User->checkLogin($username,$password);
            if($userID){
                if($userID==1){
                    $this->load->view('indexAdmin');
                }else{
                    $this->load->library('session');
                    $this->session->set_userdata('user_id',$userID);
                    return redirect('Home/dashboard');
                }
            } else {
                echo ("Password not match");
            }
        } else {
            $this->load->view('Login');
        }
    }


    }






?>
