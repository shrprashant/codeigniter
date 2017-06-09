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

	
}


}






?>