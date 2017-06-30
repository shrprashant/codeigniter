<?PHP

class Model_Booking extends CI_Model{
	
	public function addBooking($Name,$Service,$Day,$Date,$Time,$Sessionno){
		
		 if ($Service == 'walk') {
                $Price = 100;
           } else if ($Service == 'feed') {
                  	 $Price = 300;
           } else if ($Service == 'socialisation') {
                     $Price = 400;
           } else if ($Service == 'play') {
                  	 $Price = 150;
          }else if ($Service == 'vetenary') {
                  	 $Price = 500;
          }else if ($Service == 'vaccination') {
                  	 $Price = 500;}
		$sessionData=$this->session->userdata('user_id');

	
		$array=array(
		"ownerid"=>$sessionData,	
		"petname"=>$Name,
		"service"=>$Service,
		"day"=>$Day,
		"date"=>$Date,
		"time"=>$Time,
		"sessionno"=>$Sessionno,
		"cost"=>$Sessionno *$Price
		);
		$this->db->insert("booking",$array);
		


	}

	public function selectBooking(){
		$this->db->order_by("day");
        $query = $this->db->get('booking');
        return $query-> result();  
        
}

    public function deleteBooking($id){
		
		$this->db->where("bookingid",$id);
		$result=$this->db->delete('booking');
		return "data deleted successfully";
		
	}

}

