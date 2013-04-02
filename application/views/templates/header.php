<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title><?php echo $title; ?> - meu site maneiro</title>
		<!-- <link rel="stylesheet" type="assets/css/normalize.css" href=""> -->

		<?php echo link_tag('assets/css/normalize.css') ?>
		<?php echo link_tag('assets/css/custom.css') ?>
	</head>
	<body>

		<div >
			<center>
				<ul id='menuver'>
					<li class="<?php echo $this->uri->segment(1) == 'home' ? 'active' : ''; ?>"><a href="<?php echo site_url("home"); ?>"> Home </a></li>
					<li class="<?php echo $this->uri->segment(1) == 'sobre' ? 'active' : ''; ?>"><a href="<?php echo site_url("sobre"); ?>"> Sobre </a></li>
					<li class="<?php echo $this->uri->segment(1) == 'contato' ? 'active' : ''; ?>"><a href="<?php echo site_url("contato"); ?>"> Contato </a></li>
					<li class="<?php echo $this->uri->segment(1) == 'news' ? 'active' : ''; ?>"><a href="<?php echo site_url("news"); ?>"> Notícias </a></li>
					<li class="<?php echo $this->uri->segment(1) == 'clients' ? 'active' : ''; ?>"><a href="<?php echo site_url("clients"); ?>"> Clientes </a></li>
				</ul>
			</center>
		</div>
		