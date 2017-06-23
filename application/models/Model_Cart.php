<?PHP

class Model_Cart extends CI_Model{

	public function selectProduct(){
		$query = $this->db->get('item');
        return $query-> result();  
	}

	// Add Items To Cart
	public function addProductInCart($sessionData,$item_id){
		echo $sessionData;
		
		echo "<br>";
		$array=array(
			"cart_session"=>$sessionData,
			"item_id"=>$item_id,
			/*"item_name"=>$item_name*/
		);
	    $this->db->set('date', 'NOW()', FALSE);
		$this->db->insert("cart",$array); //Active Records
		return "Data saved";
	}


	public function getNamePrice($item_id){
		echo $item_id;
		$this->db->where("item_id", $item_id);
			$result=$this->db->get("item");
			$row=$result->result_array();
			$price= ($row[0]['item_price']);
						$item_name= ($row[0]['item_name']);

			echo $price;

			$arr=array(
			"item_id"=>$item_id,
			"item_price"=>$price,
			"item_name"=>$item_name);
		$this->db->where("item_id",$item_id);
		$this->db->update('cart',$arr);
	}

}

?>