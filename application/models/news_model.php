<?php

class News_model extends CI_Model{

	public function __construct()
	{
		$this->load->database();
	}


	public function findAllBySlug($slug = FALSE)
	{
		if($slug === FALSE)
		{
			$query = $this->db->get('news');
			return $query->result_array();
		}

		$query = $this->db->get_where('news', array('slug' => $slug));
		return $query->row_array();
	}


	public function set_news()
	{
		$date = date('Y-m-j');

		$this->load->helper('url');
		
		$slug = url_title($this->input->post('title'), 'dash', TRUE);
		
		$data = array(
			'title' => $this->input->post('title'),
			'slug' => $slug,
			'date' => $date,
			'text' => $this->input->post('text')
		);
		
		return $this->db->insert('news', $data);
	}

	public function update($id)
	{
		$this->db->where('id', $id);
		return $this->db->update('news');
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('news');
	} 
}
?>