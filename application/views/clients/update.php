<div class='engloba'>
<h2>UpDate the client</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('clients/update/' . $clients['id']); 
		//print_r($clients);
?>

	<label for='nome'>Nome</label>
	<input type="input" name="nome"   value="<?php echo $clients['nome'] ?>" /><br /><br />

	<label for='pedido'>Pedido</label>
	<input type="input" name="pedido" value="<?php echo $clients['pedido'] ?>"/><br /><br />

	<label for='descricao'>Descrição</label>
	<textarea name="descricao"><?php echo $clients['descricao'] ?></textarea><br />

	<input type="hidden" name="date" id="dateId" /> 
	
	<input type="submit" name="submit" value="Gravar" /> 

</form>

</div>