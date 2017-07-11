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
                        $this->form_validation->set_rules('repassword', 'Confirm Password', 'trim|required');
                    }

                $this->form_validation->set_rules('phone_number','Phone Number','required|numeric|exact_length[10]');
                $this->form_validation->set_rules('address', 'Address', 'required');

                $this->form_validation->set_rules('email_id','Email','required|trim|valid_email|max_length[40]');

        
               if($this->form_validation->run()){

                    $firstname=$this->input->post('first_name');
                    $lastname=$this->input->post('last_name');  
                    $username=$this->input->post('username');
                    $password=md5($this->input->post('password'));

                    $repassword=md5($this->input->post('repassword'));
                    $phonenumber=$this->input->post('phone_number');
                    $address=$this->input->post('address');
                    $email=$this->input->post('email_id');

                    $this->load->model('Model_User');
                     $data['CustomerMessage']=$this->Model_User->getRegister
                                ($firstname,$lastname,$username,$password,
                                $phonenumber,$address,$email);
                                
                    $this->load->view('login');
        
                     $this->session->set_flashdata('msg','Registration Successful Please login');
                 } else{
                    $this->load->view('signup');
                    
                 } 

            
		}
    
        public function login(){  
            //getting value from form
            $username=$this->input->post('username');
            $password=md5($this->input->post('password'));
            // loading the model
            $this->load->model('Model_User');
            // sending the value of username and password to model via $userID variable
            $userID=$this->Model_User->checkLogin($username,$password);
            if($userID){
                //checking condition for admin with session start
                if($userID==1){
                    $this->session->set_userdata('user_id',$userID);
                    $this->session->set_userdata('username',$username);
                    return redirect('Admin/selectOrder');
         
                }else{
                    //checking condition for user with session start
                    $this->load->library('session');
                    $this->session->set_userdata('user_id',$userID);
                    $this->session->set_userdata('username',$username);
                    // redricting to dashboard if login successful
                    return redirect('Home/dashboard');
                }
            } else {
                // print message if login fails
                echo "<script>alert('Login Failed');
                window.location.href='login'; </script>";

            }
        }

   

       public function selectUser(){
        $this->load->model('Model_User');
        $data['message']=$this->Model_User->selectUser();
        $this->load->view('viewUser',$data);
       }

       public function selectCategory(){

   
        $this->load->model('Model_Admin');
        $selectCategory=$this->Model_Admin->selectCategory();
        /* printing to see wether value is passed in array or not print_r($getCategory);*/
        $this->load->view('dashoard/petMart1',['getCategory'=>$selectCategory]);
       
    }


      
         public function findProduct($id){
        $id=$this->uri->segment(3);
        
        $this->load->model('Model_Admin');
        $data['message']=$this->Model_Admin->findProduct($id);
        $data['messages']=$this->Model_Admin->selectCategory();
        $this->load->view('dashboard/petMart1',$data);
       
    
       }

       public function selectImage(){
        $this->load->model('Model_User');
        $data['productlist']=$this->Model_User->select();
        $this->load->view('dashboard/petMart1',$data);
        
    }




       public function deleteUser(){
        $id=$this->uri->segment(3);
        $this->load->model('Model_User');
        $data['message']=$this->Model_User->deleteUser($id);
         redirect('/User/selectUser/');
       }

        public function selectProfile(){

         $sessionData=$this->session->userdata('user_id');
        if($sessionData!=''){
            $this->load->model('Model_User');
            
            $data['profile']=$this->Model_User->selectProfile
                            ($sessionData);
                
        $this->load->view('updateProfile',$data);
        } else{
           $this->load->view('dashboard/petMart1');
       }
}

 
        public function updateUserDetails(){

        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('first_name', 'Firstname', 'required|trim|max_length[50]');
        $this->form_validation->set_rules('last_name', 'Lastname', 'required|max_length[15]');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[20]');
        $this->form_validation->set_rules('phone_number','Phone Number','required|numeric|exact_length[10]');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('email_id','Email','required|trim|valid_email|max_length[40]');
        if($this->form_validation->run()){
                     $userID=$this->session->userdata('user_id');

            $firstname=$this->input->post('first_name');
            $lastname=$this->input->post('last_name');   
            $username=$this->input->post('username');
            $phonenumber=$this->input->post('phone_number');
            $address=$this->input->post('address');
            $email=$this->input->post('email_id');     

          
            
            $this->load->model('Model_User');
            
            $data['userMessage']=$this->Model_User->updateUserProfile
                            ($userID,$firstname,$lastname,$username,$phonenumber,$address,$email);
                            
            redirect(site_url('Home/dashboard'));                   
        } else {
            echo validation_errors();
        }
    }

    public function billGenerate(){

        $sessionData=$this->session->userdata('user_id');
        if($sessionData!=''){
            $this->load->model('Model_User');
            
            $data['bill']=$this->Model_User->billGenerate
                            ($sessionData);
      
        $this->load->view('dashboard/payment',$data);
        } else{
           $this->load->view('dashboard/petMart1');
       }
    }
    
    public function logout(){
        $this->session->sess_destroy();
        redirect('Home/index');
    }
    

    }

?>