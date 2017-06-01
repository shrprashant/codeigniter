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
 
    }
?>
