<?php

class LoginModel extends CI_Model {
    
    public function checkFormData($data){
     
         $adminPassword=md5($data['adminPassword']);
         $sql="SELECT * from admin_tbl WHERE email='$data[adminEmail]' AND password='$adminPassword'";
         $query_result=$this->db->query($sql);
         $result=$query_result->row();
         return $result;
    }
}

?>
