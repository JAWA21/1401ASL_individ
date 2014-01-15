<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Gallery extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		// $this->load->model('user_model');
	}

	public function gallery_view()
	{
		$data['title']= 'Gallery';
		$this->load->view('includes/header',$data);
		$this->load->view('pages/gallery_view.php', $data);
		$this->load->view('includes/footer',$data);
	}
}
?>