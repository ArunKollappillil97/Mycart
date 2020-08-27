<?php 
//-----------------------controller:shoppingController-----------------
//-----------------------logincontroller:loginController------------
//-----------------------model:shoppingmodel,loginmodel---------------------------
defined('BASEPATH') OR exit('No direct script access allowed');

class loginController extends CI_Controller 
{
	public function __construct()
	 {
		 parent::__construct();

          $this->load->library('session');
		  $this->load->model('Login_model');
	 }
   
    
     public function verifyLogin()//verify the login 
	 {
	$email    = $this->input->post('uname');
    $password = $this->input->post('psw');
    $validate = $this->Login_model->validate($email,$password);
    if($validate->num_rows() > 0){
      
        $data  = $validate->row_array();
        $username  = $data['username']; 
        $usertype = $data['usertype'];
        $password = $data['password'];
        $user_id = $data['user_id'];

        $sesdata = array(
            'username'  => $username,
            'usertype'     => $usertype,
            'password'     => $password,
            'user_id'     => $user_id,
            'logged_in' => TRUE
        );
         session_start();
        $this->session->set_userdata($sesdata);
        $th=$this->session->userdata('usertype');
       $thfd= $this->session->userdata('user_id');
        if($usertype =='1'){
            redirect('productlist');
          }if($usertype =='2'){

            redirect('userproductlist');
              
           }else{
       
            redirect('loginController/logout');
             }
         }
}
	      public function logout()//logout

		 {

		   session_start();
		   $this->session->unset_userdata('user_id');
		   $this->session->unset_userdata('usertype');
		   $this->session->unset_userdata('username');
		   $this->session->sess_destroy();
		     redirect('shoppingController');

		 }
}


 