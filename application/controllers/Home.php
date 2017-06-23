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

        public function addCategory(){
            $this->load->view('addCategory');
        }
        

        public function login(){
            $this->load->view('login');
        }

        public function signup(){
            $this->load->view('signup');
        }  

         

    	public function dashboard(){
    		$this->load->view('dashboard/dashboard');
    	}

         public function about1(){
            $this->load->view('dashboard/about1');
        }
        public function contact1(){
            $this->load->view('dashboard/contact1');
        }
         public function petservice1(){
            $this->load->view('dashboard/petservice1');
        }
        public function petguide1(){
            $this->load->view('dashboard/petguide1');
        }
        public function petmart1(){
            $this->load->view('dashboard/petmart1');
        }

        public function admin(){
            $this->load->view('indexAdmin');
        }

        public function addProduct(){
            $this->load->view('addProduct');
        }

        public function selectProduct(){
            $this->load->view('selectProduct');
        }

        public function editProduct(){
            $this->load->view('editProduct');
        }
		public function addPet(){
    		$this->load->view('addPet');
    	}
        public function editCart(){
            $this->load->view('dashboard/editCart');
        }
   }


   ?>