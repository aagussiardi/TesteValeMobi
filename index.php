<?php include 'functions.php';  ?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<meta charset="utf-8">
		<title>ValeMobi</title>
	</head>
<body>

</body>
</html>


<div class="container">
<img src="http://static1.squarespace.com/static/553d085de4b0befb8369d19f/t/5703cad1cf80a1095e651782/1482452926260/?format=1500w">
  <form method='post' action='module.php'>
    <div class="form-group row">
	  <h1>Cadastro de Mercadorias</h1>	
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Tipo</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" name="tipo">
      </div>
    </div>
    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Nome</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-sm" id="smFormGroupInput" name="nome">
      </div>
    </div>
    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Quantidade</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-sm" id="smFormGroupInput" name="qtd">
      </div>
    </div>
    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Preço</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-sm" id="smFormGroupInput" name="preco">
      </div>
    </div>
    <div class="form-group row">
    <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm" style="margin-right: 1.3%;">Tipo Transacao</label>
	    <select class="form-control form-control-sm" id="smFormGroupInput" name="tipo_transac" style="width:80.8%;">
	      <option>Compra</option>
	      <option>Venda</option>
	    </select>
  </div>
    <input type="submit" class="btn btn-primary" value="Enviar" name='sender'>
  </form>
<table class="table table-inverse">
  <thead>
    <tr>
      <th>Código</th>
      <th>Tipo</th>
      <th>Nome</th>
      <th>Quantidade</th>
      <th>Preço</th>
      <th>Tipo Transação</th>
    </tr>
  </thead>
  <tbody>
  	<?php $merchantFromDataBase = listTransactions(); ?>
  	<?php foreach ($merchantFromDataBase as $merchantRow) {
  			echo "<tr>
					<td>{$merchantRow['cod']}</td>
					<td>{$merchantRow['tipo']}</td>
					<td>{$merchantRow['nome']}</td>
					<td>{$merchantRow['quantidade']}</td>
					<td>{$merchantRow['preco']}</td>
					<td>{$merchantRow['tipo_transac']}</td>
				  </tr>";
		} ?>
    <tr></tr>
  </tbody>
</table>
</div>