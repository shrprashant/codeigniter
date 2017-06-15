<?PHP

class Model_Pet extends CI_Model{
	
	public function addPet($Name,$Breed,$Color){
		$array=array(
		"petname"=>$Name,
		"breed"=>$Price,
		"color"=>$Color
		);
		$this->db->insert("pet",$array);
		
	}
}