<div class='engloba'>
	<?php
		echo "<h1>". $news['title']. "</h1>";
		echo $news['text'];
	?>
	<br/><br/>
	<p><a href="<?php echo site_url('/news/update/'.$news['id']) ?> ">Editar notícia</a></p>
</div>