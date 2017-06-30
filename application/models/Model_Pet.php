<?PHP

class Model_Pet extends CI_Model{
	
	public function addPet($Name,$Breed,$Color){
		
		$sessionData=$this->session->userdata('user_id');
		$array=array(
		"ownerid"=>$sessionData,	
		"petname"=>$Name,
		"breed"=>$Breed,
		"color"=>$Color
		);
		$this->db->insert("pet",$array);
		
	}


	public function selectPet($sessionData){
		$this->db->where("ownerid",$sessionData);
		$this->db->order_by("petid");
        $query = $this->db->get('pet');
        if($query->num_rows()>0){
        return $query-> result();  
        }
}


	public function selectPetDetails(){
		
        $query = $this->db->get('pet');
        return $query-> result();  
        
}

    public function deletePet($id){
		
		$this->db->where("petid",$id);
		$result=$this->db->delete('pet');
		return "data deleted successfully";
		
	}

}

