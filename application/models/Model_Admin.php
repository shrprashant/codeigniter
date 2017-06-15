<?PHP

class Model_Admin extends CI_Model{
	
	public function addProduct($Name,$Price,$Category,$Description,$Status,$Image){
		$array=array(
		"item_name"=>$Name,
		"item_price"=>$Price,
		"item_category"=>$Category,
		"item_desc"=>$Description,
		"item_status"=>$Status,	
		"item_image"=>$Image);
		$this->db->insert("item",$array);
		
	}
	public function addCategory($Category){
		$array=array(
		"category_name"=>$Category	
		);
		$this->db->insert("category",$array);
	}

	public function selectCategory(){
            $query = $this->db->get('category');
             if($query->num_rows()>0){
             return $query-> result();  
        }
}

	public function selectProduct(){
		$query = $this->db->get('item');
             if($query->num_rows()>0){
             return $query-> result();  
		}
	}

	public function findProduct($itemID){
		$this->db->where("item_id",$itemID);
		$result=$this->db->get("category");
		return $result->result();
	}


	public function editProduct($itemID,$Name,$Price,$Category,$Description,$Status,$Image){
		$array=array(
		"item_id"=>$itemID,
		"item_name"=>$Name,
		"item_price"=>$Price,
		"item_category"=>$Category,
		"item_desc"=>$Description,
		"item_status"=>$Status,	
		"item_image"=>$Image);
		$this->db->where('item_id',$itemID);
		$this->db->insert("item",$array);
		return"data updated successfully";
		
	}
	public function deleteProduct($itemID){
		
		$this->db->where("item_id",$itemID);
		$this->db->delete('item');
		return "data deleted";
		
	}
}

?>
