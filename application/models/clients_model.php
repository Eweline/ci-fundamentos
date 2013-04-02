<?php
class Clients_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function set_clients()
	{
		$this->load->helper('url');
		
		$data = array(
			'nome' => $this->input->post('nome'),
			'pedido' => $this->input->post('pedido'),
			'descricao' => $this->input->post('descricao')
		);
		
		return $this->db->insert('clients', $data);
		// ou
		//return $this->news->insert($data);   que é: $this->model->insert($data);
	}

	public function get_clients($id = false)
	{
		if($id === false)
		{
			$query = $this->db->get('clients');
			return $query->result_array();
		}

		$query = $this->db->get_where('clients', array('id' => $id));
		return $query->row_array();
	}


	public function delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('clients');
	} 
}