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
	if($query->num_rows()>=1){
		return $query->row()->user_id;

		$this->session->set_userdata($sess_array);
				
        echo "get login:";				
	}else {
		echo "not login";
	}	
}

}

?>