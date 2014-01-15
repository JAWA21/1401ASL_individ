<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cart extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		// $this->load->model('user_model');
	}

	public function cart_view()
	{
		$data['title']= 'Cart';
		$this->load->view('includes/header',$data);
		$this->load->view('pages/cart_view.php', $data);
		$this->load->view('includes/footer',$data);
	}
}
?>