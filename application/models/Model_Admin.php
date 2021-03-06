<?PHP

class Model_Admin extends CI_Model{
	
	public function addProduct($Name,$Price,$Category,$Description,$Status,$Image){

		$array=array(
		"item_name"=>$Name,
		"item_price"=>$Price,
		"category_id"=>$Category,
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
        return $query-> result();  
	}

	public function findProduct($id){
		$this->db->where("item_id",$id);
		$result=$this->db->get("item");
		return $result->result();
	}


	public function editProduct($id,$Name,$Price,$Category,$Description,$Status,$Image){
		$array=array(
		"item_id"=>$id,
		"item_name"=>$Name,
		"item_price"=>$Price,
		"category_id"=>$Category,
		"item_desc"=>$Description,
		"item_status"=>$Status,	
		"item_image"=>$Image);
		$this->db->where('item_id',$id);
		$this->db->update("item",$array);
		return"data updated successfully";
		
	}
	public function deleteProduct($id){
		
		$this->db->where("item_id",$id);
		$result=$this->db->delete('item');
		return "data deleted successfully";
		
	}

	public function selectOrder(){
		$query = $this->db->get('order');
        return $query-> result();  
	}

	public function deleteOrder($id){
		
		$this->db->where("order_id",$id);
		$result=$this->db->delete('order');
		return "data deleted successfully";
		
	}



	public function viewItemDetails($item_id){
		$query = $this->db->select('*')
						->from('item')
						->join('category','category.category_id=item.category_id')
						->where('item.item_id',$item_id)
						->get();
		if($query->num_rows()){
			return $query->result();
		} else {
			return FALSE;
		}
	}
}

?>
