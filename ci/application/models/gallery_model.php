<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Gallery_model extends CI_Model {

	public function create_photos()
	{
		$this->load->helper('url');

		$slug = url_title($this->input->post('title'), 'dash', TRUE);

		$data = array(
			'title' => $this->input->post('title'),
			'slug' => $slug,
			'text' => $this->input->post('text')
		);

		return $this->db->insert('photos', $data);
	}

	public function read_photos()
	{
		$query = $this->db->get('photos');
		foreach ($query->result_array() as $row)
		{
		   $row['pTitle'];
		   $row['userID'];
		   $row['focal'];
		}
		return $query->result_array();
	}
}
?>
	