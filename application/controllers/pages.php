<?php

class Pages extends CI_Controller {
	public function view($page = 'home') {
		
		// Se o arquivo correspondente não existir no diretório, erro
    if ( ! file_exists('application/views/pages/' . $page . '.php'))
    {
        show_404();
    }

	     // Título da página é o próprio nome com a primeira letra em maiúsculo
	    $data['title'] = ucfirst($page);


	    // carregar  helper
		$this->load->helper('html');
		$this->load->helper('url');

	    // "Monta" a apresentação usando as views
	    $this->load->view('templates/header', $data);
	    $this->load->view('pages/' . $page, $data);
	    $this->load->view('templates/footer', $data);
	    

	}
}

?>