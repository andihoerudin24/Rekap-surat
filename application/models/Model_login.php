<?php
Class Model_login extends CI_Model{
    
    
    function chek_login($username,$password){
     $chek= $this->db->get_where('admin',array('username'=>$username,'password'=>$password));
     if ($chek->num_rows()>0) {
         return 1;
     } else {
         return 0; 
     }
     
    }
}
?>