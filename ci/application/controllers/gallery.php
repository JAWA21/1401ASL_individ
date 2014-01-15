<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Gallery extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('gallery_model');
	}

	public function gallery_view()
	{
		$photoArr['photoArr']=$this->gallery_model->read_photos();
		//$data['title']= 'Gallery';
		//$data = array_merge($data, $photoArr);
		print_r($photoArr);
		
		$this->load->view('includes/header',$data);
		$this->load->view('pages/gallery_view.php',$photoArr);
		$this->load->view('includes/footer',$data);
	}
}
?>