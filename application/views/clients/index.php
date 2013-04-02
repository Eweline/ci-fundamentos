<div class="engloba">
	<?php foreach ($clients as $client): ?>


	    <h2><?php echo $client['nome'] ?></h2>
	    <div id="main">
	        </h4><?php echo $client['pedido'] ?><h4>
	        <?php echo $client['descricao'] ?>
	    </div>
	    <?php $id = $client['id']; ?>
	    <p><a href="<?php echo site_url('/clients/' . $client['id']) ?>">Visualizar</a></p>
	    <p><a href="<?php echo site_url('/clients/deletar/' . $client['id']) ?>">Deletar</a></p>
	    <p><a href="<?php echo site_url('/clients/update/' . $client['id']) ?> ">Editar cliente</a></p>

	<?php endforeach ?>

	<br/><br/><br/>
	<hr/>
	<p><a href="<?php echo site_url('/clients/create') ?>">Novo cliente</a></p>
</div>