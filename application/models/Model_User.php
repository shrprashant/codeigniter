<?PHP

class Model_User extends CI_Model{

public function getRegister($firstname,$lastname,$email,$username,$password,
                            $phonenumber,$address)){

	$array=array(
	"first_name"=>$firstname.
	"last_name"=>$lastname,
	"username"=>$username,
	"password"=>$password,
	"phone_number"=>$phonenumber,
	"address"=>$address,
	"email"=>$email
   );

	$this->db->insert('user',$array);
	return "Data saved successfully";
}


}






?>