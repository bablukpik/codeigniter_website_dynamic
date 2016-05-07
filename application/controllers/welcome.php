<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
            $data['title']='Home page';  
            $data['maincontent']=$this->load->view('home_content','', true);//main post or content 
		$this->load->view('master_view',$data);//header and footer
	}
        
        	public function shop()
	{
            
            $data['title']='Shop Page';   
            $data['maincontent']=$this->load->view('shop','', true);//main post or content 
            $this->load->view('master_view',$data);//header and footer
	}
        
         	public function product_details()
	{
            $data['title']='Product details';
            $data['maincontent']=$this->load->view('product_details','', true);//main post or content 
	    $this->load->view('master_view',$data);//header and footer
	}
        
}

