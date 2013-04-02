<?php 

class News extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('news_model');
		$this->load->helper('html');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['news'] = $this->news_model->findAllBySlug();
		$data['title'] = 'News INDEX';

		$this->load->view('templates/header', $data);
		$this->load->view('news/index', $data);
		$this->load->view('templates/footer');
	}


	public function view($slug = false)
	{
		$data['news'] = $this->news_model->findAllBySlug($slug);

		if (empty($data['news']))
		{
		show_404();
		}

		$data['title'] = $data['news']['title'];

		$this->load->view('templates/header', $data);
		$this->load->view('news/view', $data);
		$this->load->view('templates/footer');
	}

	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$data['title'] = 'Create a news item';
		
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('text', 'text', 'required');
		
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);	
			$this->load->view('news/create');
			$this->load->view('templates/footer');
			
		}
		else
		{
			$this->news_model->set_news();
			$this->load->view('news/success');
		}
	}


	public function adicionar()
	{

		//$this->db->insert->('news', $dados);
		$this->news->insert($dados);
	}

	public function editar($id){
		$this->load->helper('form');
		$this->load->library('form_validation');

		// buscar no banco o item com o ID
		$this->db->where('id', $id);

		if(empty($_POST)){
			$data['news'] = $this->db->get_where('news', array('id' => $id))->row_array();

			$this->load->view('templates/header', $data);
			$this->load->view('news/update', $data);
			$this->load->view('templates/footer');
		} else {
			$dados['title'] = $this->input->post('title');
			$dados['text'] = $this->input->post('text');

			if($this->db->update('news', $dados)){
				redirect('news');
			} else {
				log_message('error', 'erro ao editar');
			}
		}
	}

	public function deletar($id)
	{
		if($this->news_model->delete($id))
		{
			redirect('news');
		}else{
			log_message('error', 'Erro ao deletar.');
		}
	}

	public function listar()
	{
		$data['news'] = $this->news->get();
	}



}
?>