<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Gallery_model extends CI_Model {

	public function create_photos($data)
	{
		$this->load->helper(array('form', 'url'));
		//$this->load->library('upload', $config);

		$user = $data['user_id'];

		$data = array(
			'make' => $data["make"],
			'model' => $data["model"],
			//$data["date_time"] = $raw_exif["EXIF"]["DateTimeOriginal"];
			'exposure_time' =>$data["exposure_time"],	
			'f_number' => $data["f_number"],
			'iso_speed' => $data["iso_speed"],
			'orig_name' => $data["orig_name"],
			'pTitle' => $data["title"],
			'pDesc' => $data["desc"]
			//$data["shutter_speed"] = $raw_exif["EXIF"]["ShutterSpeedValue"];
		);
		$this->db->where("userID", $user);
		return $this->db->insert('photos', $data);
	}

	public function read_photos()
	{
		$query = $this->db->get('photos');
		// foreach ($query->result_array() as $row)
		// {
		//    $row['pTitle'];
		//    $row['userID'];
		//    $row['focal'];
		// }
		return $query->result_array();
	}

	public function read_onePhoto($ID)
	{
		$this->db->where("ID", $ID);
		$query = $this->db->get('photos');

		return $query->result_array();
	}
}
?>	