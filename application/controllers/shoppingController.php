<?php
//-----------------------controller:shoppingController-----------------
//-----------------------logincontroller:loginController------------
//-----------------------model:shoppingmodel---------------------------
defined('BASEPATH') OR exit('No direct script access allowed');

class shoppingController extends CI_Controller {
	public function __construct()
	 {
		 parent::__construct();
	  $this->load->library('session');
	  $this->load->model('shoppingmodel');
	 }
   
    public function index() 
	{
		$this->load->view('login');
	}
    public function adminproductlist()//viewing product bty admin
	{	$data['product']=$this->shoppingmodel->cartedproductlist();
		$this->load->view('adminheader');
		$this->load->view('adproductlist',$data);
	}

	public function productAdd()//view product add
	{
		$data['category']=$this->shoppingmodel->categorylist();
		$this->load->view('adminheader');
		$this->load->view('productadd',$data);
		$this->load->view('productfooter');
	}
	public function addProduct()//add product
	{
      $value=$this->input->post();
      $this->form_validation->set_rules('category', 'category', 'trim|required');
      $this->form_validation->set_rules('product', 'product', 'trim|required');
      $this->form_validation->set_rules('rate', 'rate', 'trim|required');
      if($this->form_validation->run()== TRUE)
        {
        $result=$this->shoppingmodel->productAdd($value);
        redirect('productlist');
	    }
    }

	public function cartedproductlist()//view carted items by user
	{		
		$data['cart']=$this->shoppingmodel->productcartlist();
		$this->load->view('customerheader');
		$this->load->view('cartedlist',$data);
	}
	
	public function Productlist()//view product list
	{   
		$data['category']=$this->shoppingmodel->categorylist();
		$this->load->view('customerheader');
		$this->load->view('productlist',$data);
	}

	public function fetch_subcategory()//fetching sub  category
	{
     $value=$this->input->post();
	 //print_r($value);	
	 $result=$this->shoppingmodel->productlist($value);
	 $data['res'] = $result;
	 echo json_encode($data);
	}
	public function cartchanging()//selecting items to cart
	{
	 $value=$this->input->post('id');
	 $result=$this->shoppingmodel->productstatuschang($value);
	 //print_r($result);die;
	 $data['res'] = $result;

	 echo json_encode($data);
	}
	public function removecart()//removing items from cart
	{
	 $value=$this->input->post('id');
	 $result=$this->shoppingmodel->productstatusremoving($value);
	 //print_r($result);die;
	 $data['res'] = $result;

	 echo json_encode($data);
	}
	public function finalCart()//fetching sub  category
	{
        $data['finalcart']=$this->shoppingmodel->finalCart();
        $data['innvoice'] = generateInnvoice();
		$this->load->view('customerheader');
		$this->load->view('finalcart',$data);
		$this->load->view('productfooter');
	}


	

}
