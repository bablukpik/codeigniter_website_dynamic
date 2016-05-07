<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_controller extends CI_Controller {
    public function index(){
       $this->load->view('admin/login.php');
    }

    public function formData(){
        
         $data['adminEmail']=$_POST['adminEmail'];
         $data['adminPassword']=$_POST['adminPassword'];
         
         $result=$this->loginModel->checkFormData($data);
         
         if($result){
           
           $sdata['id']=$result->id;
           $sdata['name']=$result->name;
           $this->session->set_userdata($sdata);
           
           redirect('super_admin/index');
         }
         
         else{
             
             redirect('Login_controller/index');
            }
     
         //print_r($result);    

}
}
?>
