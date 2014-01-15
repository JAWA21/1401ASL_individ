<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Gallery_model extends CI_Model {

	public function create_photos($data)
	{
		$this->load->helper(array('form', 'url'));

		$this->load->library('upload', $config);

		$data = array(
			'title' => $this->input->post('title'),
			'slug' => $slug,
			'text' => $this->input->post('text')
		);

		return $this->db->insert('photos', $data);

		if ( ! $this->upload->do_upload())
		{
			//$error = array('error' => $this->upload->display_errors());

			$this->load->view('upload_form', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());

			$this->load->view('upload_success', $data);
		}
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
}
?>
	