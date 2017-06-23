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


}

?>