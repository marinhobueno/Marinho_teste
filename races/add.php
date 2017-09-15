<?php 
  require_once('functions.php'); 
  add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Registrar Corrida</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Nome do Passageiro</label>
      <input type="text" class="form-control" placeholder="Qual seu nome?!" name="race['passenger_name']" required >
	  
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Nome do Motorista</label>
      <input type="text" class="form-control" placeholder="Quem será o seu motorista?" name="race['driver_name']" required>
    </div>

    <div class="form-group col-md-3">
      <label for="campo3">Valor da Corrida</label>
      <input type="text" class="form-control" placeholder="Insira o valor da corrida!" name="race['race_value']" required>
    </div>
 
	<div class="form-group col-md-2">
	<label for="campo3">Data de Cadastro</label>	
	<input type="text" class="form-control" name="race['created']" disabled>
	</div>	
 </div>

  
  <div id="actions" class="row">
    <div class="col-md-11">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="../index.php" class="btn btn-danger">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>