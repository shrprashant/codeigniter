<?PHP

class Model_User extends CI_Model{

	public function getRegister($firstname,$lastname,$username,$password,
                            $phonenumber,$address,$email){

	$array=array(
	"first_name"=>$firstname,
	"last_name"=>$lastname,
	"username"=>$username,
	"password"=>$password,
	"phone_number"=>$phonenumber,
	"address"=>$address,
	"email_id"=>$email
   	);

	$this->db->insert('user',$array);
	return "Data saved successfully";
	}

	public function checkLogin($username,$password){
	$query=$this->db->where(['username'=>$username,'password'=>$password])->get ("user");
	if($query->num_rows()){
		return $query->row()->user_id;
	/*
			$this->session->set_userdata($sess_array);*/
			 echo $query;	
       		 echo "get login:";				
		}else {
			echo "not login";
			}	
	}

	 	public function selectUser(){
            $query = $this->db->get('user');
             return $query-> result();  
        }

         public function getProductDetails(){
            $query = $this->db->get('item');
             return $query-> result();  
        }

        public function select(){
		$Image=$this->db->get('item');
		return $Image->result();
		}


    	 public function deleteUser($id){
     	$this->db->where('user_id', $id);
        $this->db->delete('user'); 
     }   

      public function findProduct1($id){
     	$id=$this->uri->segment(3);
     	
        $this->load->model('Model_Admin');
        $data['message']=$this->Model_Admin->findProduct($id);
        $data['messages']=$this->Model_Admin->selectCategory();
        $this->load->view('dashboard/petMart1',$data);
       
    }

    public function selectProfile($sessionData){
    $this->db->where("user_id",$sessionData);
		$result=$this->db->get("user");
		return $result->result();	
    }

    
	
	public function updateUserProfile($userID,$firstname,$lastname,$username,$phonenumber,$address,$email){
		$array=array(
			"first_name"=>$firstname,
			"last_name"=>$lastname,
			"username"=>$username,
			"phone_number"=>$phonenumber,
			"address"=>$address,
			"email_id"=>$email
		);
		$this->db->where("user_id",$userID);
		$this->db->update('user',$array);
		return "data updated";
	}


}

?>