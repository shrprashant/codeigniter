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

	// Check login function for checking username and password

	public function checkLogin($username,$password){
	$query=$this->db->where(['username'=>$username,'password'=>$password])->get ("user");
	if($query->num_rows()){
		return $query->row()->user_id;
	  					
		}else {
			return false;
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

	public function billGenerate($sessionData){


		$this->db->select('*','sum(order.cost)');
		$this->db->from('order');
		//$this->db->join('user','user.user_id=order.cart_session','inner');
		//$this->db->join('booking','booking.ownerid=order.cart_session','inner');
		$this->db->where('cart_session',$sessionData);
		$res=$this->db->get();	
	
		return $res->result_array();
	}


}

?>