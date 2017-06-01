<?PHP
class Datam extends CI_Model{
    public function saveIt($username,$password){
   // $this->db->query("insert into user (username,password)values('$username','$password')");
        
        
        //using array as insert is called active record
    $arr = array(
        'username'=>$username,
        'password'=>$password
    );
        $this->db->insert("user",$arr);
        return "Data saved";
    }
    
    // retrive using active records
    public function recData(){
        return $this->db->get('user'); // data from model is return to controller
        //$data->db->where("username","aman"); //limit(?)
    }
    
    public function recData1($username){
        $this->db->where("username",$username);
        return $this->db->get('user');
    }
    
    public function updateData(){
        $datas= array(
        "username"=>"Mohan Prasad"  
        );
        $this->db->where("id",5);
        $this->db->update("user",$datas);
    }
    
    public function deleteData(){
       $this->db->where("id",5);
        $this->db->delete("user");
    }
}


?>