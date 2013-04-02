<div class='engloba'>
<h2>Create a news item</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create') ?>

	<input type="input" name="title"  placeholder='Título'/><br /><br />

	<textarea name="text"  placeholder='Notícia'></textarea><br />

	<input type="hidden" name="date" id="dateId" /> 
	
	<input type="submit" name="submit" value="Gravar" /> 

</form>

</div>