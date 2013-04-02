<!--<pre>
	<?php print_r($news) ?>
</pre> -->


<div class=engloba>

	<?php 
	foreach ($news as $news_item): ?>

	    <h2><?php echo $news_item['title'] ?></h2>
	    <div id="main">
	        <?php echo $news_item['text'] ?>
	    </div>
	    <button><a href="<?php echo site_url('/news/' . $news_item['slug']) ?>">Visualizar</a></button>
	    <button><a href="<?php echo site_url('/news/deletar/' . $news_item['id']) ?>">Deletar</a></button>
	    <button><a href="<?php echo site_url('/news/update/'.$news_item['id']) ?> ">Editar notícia</a></button>

	<?php endforeach ?>

	<br/><br/><br/>
	<hr/>
	<p>
		<a href="<?php echo site_url('/news/create') ?>">Nova Notícia</a>
		
	</p>
</div>