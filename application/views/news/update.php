<div class='engloba'>
<h2>UpDate a news item</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/update/' . $news['id']);

	//echo $new['title'] . "<br/>";
?>

	<?php //echo $news['title']; ?>
	<label for='title'>Título</label>
	<input type="input" name="title"  value='<?php  echo $news['title']; ?>'/><br /><br />

	<label for='text'>Texto</label>
	<textarea name="text"><?php  echo $news['text']; ?></textarea><br />

	<input type="hidden" name="date" id="dateId" /> 
	
	<input type="submit" name="submit" value="Gravar" /> 

</form>

</div>