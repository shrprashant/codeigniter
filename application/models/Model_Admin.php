<?PHP

class Model_Admin extends CI_Model{
	
	public function addItem($Name,$Price,$Category,$Description,$Status,$Image){
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
}

?>
