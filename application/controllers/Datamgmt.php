<?PHP
    class Datamgmt extends CI_Controller{
        public function getData(){
            $username=$this->input->post('username');   // input from form through view
            $password=$this->input->post('password');
            $this->load->model('datam');                    //model load gareko from datam class
            $data['modelmsg']=$this->datam->saveIt($username,$password);
           // $this->datam->saveIt($username,$password);
            
            $data['msg']="data successfully saved";// message array ma pass gareko
            $data['msg2']="data saved";
            $this->load-> view('message',$data); // view ko message ma $ data ko value pass gareko
            
            
        }
        
        public function recData(){
            $this->load->model("datam");
            $datas=$this->datam->recData();
            //var_dump($datas->result());
            //parsing message from controller to view
            $data['datas']=$datas;
            $this->load->view("message",$data);
        }
        
        public function searchuser(){
            
            $this->load->model("datam");
            $username->$this->input->post('username');
            $datas=$this->datam->recData1($username);
            $data['datas']=$datas;
            $this->load->view("message",$data);
        }
        
        public function updateIt(){
            $this->load->model("datam");
            $this->datam->updateData();
        }
        
        public function deleteIt(){
            $this->load->model("datam");
            $this->datam->deleteData();
        }
        
        public function checklib(){
            $this->load->library('Mylibrary');
            $this->Mylibrary->firstfun();
        }
    }
?>
