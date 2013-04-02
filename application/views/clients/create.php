<div class='engloba'>
<h2>Create a new client</h2>

<?php //echo validation_errors(); ?>

<?php echo form_open('clients/create') ?>

	<input type="input" name="nome"  placeholder='Nome'/><br /><br />

	<input type="input" name="pedido"  placeholder='Pedido'/><br /><br />

	<textarea name="descricao"  placeholder='Descricao'></textarea><br />

	<input type="hidden" name="date" id="dateId" /> 
	
	<input type="submit" name="submit" value="Gravar" /> 

</form>

</div>