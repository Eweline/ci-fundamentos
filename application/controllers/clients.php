<?php
class Clients extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('clients_model');
		$this->load->helper('html');
		$this->load->helper('url');
	}


	public function index()
	{
		$data['clients'] = $this->clients_model->get_clients();
		$data['title'] = 'Clientes';

		$this->load->view('templates/header', $data);
		$this->load->view('clients/index', $data);
		$this->load->view('templates/footer');
	}

	public function view($id)
	{
		$data['clients'] = $this->clients_model->get_clients($id);

		if (empty($data['clients']))
		{
		show_404();
		}

		//$data['clients'] = $data['clients']['nome'];

		$this->load->view('templates/header', $data);
		$this->load->view('clients/view', $data);
		$this->load->view('templates/footer');
	}


	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$data['title'] = 'Create a new client';
		
		$this->form_validation->set_rules('nome', 'Nome', 'required');
		$this->form_validation->set_rules('pedido', 'Pedido', 'required');
		$this->form_validation->set_rules('descricao', 'Descrição', 'required');
		
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);	
			$this->load->view('clients/create');
			$this->load->view('templates/footer');
			
		}
		else
		{
			$this->clients_model->set_clients();
			$this->load->view('clients/success');
		}
	}


	public function editar($id){
		$this->load->helper('form');
		$this->load->library('form_validation');

		// buscar no banco o item com o ID
		$this->db->where('id',$id);

		if(empty($_POST)){
			$data['clients'] = $this->db->get('clients')->row_array();

			$this->load->view('templates/header', $data);
			$this->load->view('clients/update', $data);
			$this->load->view('templates/footer');
		} else {
			$dados['nome'] = $this->input->post('nome');
			$dados['pedido'] = $this->input->post('pedido');
			$dados['descricao'] = $this->input->post('descricao');

			if($this->db->update('clients', $dados)){
				redirect('clients');
			} else {
				log_message('error', 'erro ao editar');
			}
		}
	}

	public function deletar($id)
	{
		if($this->clients_model->delete($id))
		{
			redirect('clients');
		}else{
			log_message('error', 'Erro ao deletar.');
		}
	}

}