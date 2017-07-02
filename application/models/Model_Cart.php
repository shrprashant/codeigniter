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
			"quantity"=>1
			/*"item_name"=>$item_name*/
		);
	    $this->db->set('date', 'NOW()', FALSE);
		$this->db->insert("cart",$array); //Active Records
		return "Data saved";
	}

		public function getCartProduct($sessionData){
		/*$this->db->where("cart_session",$sessionData);
		$this->db->order_by("cart_id");
		$result=$this->db->get("cart");
		return $result->result();*/
		$query = $this->db->select('*')
						->from('cart')
						->join('item','item.item_id=cart.item_id')
						->where('cart.cart_session',$sessionData)
						->get();
        return $query->result();
	}

	public function updateProductInCart($cart_id,$quantity){

		$array=array(
			
			"cart_id"=>$cart_id,
			"quantity"=>$quantity
			/*"item_name"=>$item_name*/
		);
	    $this->db->set('date', 'NOW()', FALSE);
		$this->db->where("cart_id",$cart_id);
		$this->db->update('cart',$array);
		return "data updated";
		
	}


		public function removeProductInCart($cart_id){
		$this->db->where('cart_id',$cart_id);
		$result=$this->db->delete("cart");
		return "data deleted";
	}


	public function getNamePrice($item_id){
		
		$this->db->where("item_id", $item_id);
			$result=$this->db->get("item");
			$row=$result->result_array();
			$price= ($row[0]['item_price']);
			$item_name= ($row[0]['item_name']);
			/*$item_desc= ($row[0]['item_desc']);*/

		

			$arr=array(
			"item_id"=>$item_id,
			"item_price"=>$price,
			"item_name"=>$item_name,
			/*"item_desc"=>$item_desc*/);
		$this->db->where("item_id",$item_id);
		$this->db->update('cart',$arr);
	}


      


}

?>