<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Gallery extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('gallery_model');
		$this->load->helper(array('form', 'url'));
	}

	public function gallery_view()
	{
		$photoArr['photoArr']=$this->gallery_model->read_photos();
		$data['title']= 'Gallery';
		$data = array_merge($data, $photoArr);
		//print_r($photoArr);
		
		$this->load->view('includes/header',$data);
		$this->load->view('pages/gallery_view.php',$data);
		$this->load->view('includes/footer',$data);
	}

	function do_upload()
	{
		$config =  array(
                  'upload_path'     => dirname($_SERVER["SCRIPT_FILENAME"])."/assets/img/gallery/",
                  'upload_url'      => base_url()."/assets/img/gallery/",
                  'allowed_types'   => "gif|jpg|png|jpeg|pdf|doc|xml",
                  'overwrite'       => TRUE,
                  'max_size'        => "1000KB",
                  'max_height'      => "768",
                  'max_width'       => "1024"  
                );
		$this->load->library('upload', $config);
if($this->upload->do_upload())
{
    echo "file upload success";
}
else
{
   echo "file upload failed";
}


		// try
  //       {
  //           if($this->input->post("submit")){        
  //               $this->load->library("app/uploader");
  //               $config = $this->config->item("rules");
  //               $this->uploader->do_upload($config["image"]);
                
  //               $image_data = $this->upload->data();
  //               $config["manipulation"]['source_image'] = $image_data['full_path'];
  //               $this->load->library('image_lib', $config["manipulation"]); 
                
                
  //               switch($this->input->post("mode"))
  //               {
  //                   case "crop":
  //                       $this->image_lib->crop();
  //                       break;
  //                   case "resize":
  //                       $this->image_lib->resize();
  //                       break;
  //                   case "rotate":
  //                       $config["manipulation"]['rotation_angle'] = '90';
  //                       $this->image_lib->initialize($config["manipulation"]); 
  //                       $this->image_lib->rotate();
  //                       break;
  //                   case "watermark":
  //                       $config["manipulation"]['wm_text'] = 'Copyright 2013 - CodeSamplez.com';
  //                       $config["manipulation"]['wm_type'] = 'text';
  //                       $this->image_lib->initialize($config["manipulation"]); 
  //                       $this->image_lib->watermark();    
  //               }
  //           }
            return $this->load->view('index.php/user/login',$data);
        }
        // catch(Exception $err)
        // {
        //     log_message("error",$err->getMessage());
        //     return show_error($err->getMessage());
        // }
	}
?>