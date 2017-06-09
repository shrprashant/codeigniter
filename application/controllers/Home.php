<?PHP
defined('BASEPATH') OR exit('No direct script access allowed');

    class Home extends CI_Controller{
   
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
      

    	public function dashboard(){
    		$this->load->view('dashboard');
    	}

   }


   ?>