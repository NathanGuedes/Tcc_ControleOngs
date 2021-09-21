<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/VerDetalhes.css">
    <title>Cadastro Alimento</title>
</head>
<body>



<section>
<form class="form-horizontal" method="post" action="CadastrarAlimento.php">
<fieldset>

<!-- Form Name -->
<legend>CADASTRO DE ALIMENTO</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nomeali">Nome</label>
  <div class="col-md-4">
  <input id="nomeali" name="nomeAli" type="text" placeholder="coloque o nome" class="form-control input-md" required="">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="quantali">Quantidade</label>
  <div class="col-md-4">
  <input id="quantali" name="quantAli" type="number" placeholder="coloque a quantidade" class="form-control input-md" required="">

  </div>
</div><br>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="btnali"></label>
  <div class="col-md-4">
      <button type="submit" id="btnali" name="btnali" class="btn btn-primary" href="CadastroAlimento.php">Enviar</button><br><br>
  </div>
</div>

</fieldset>
</form>
</section>
</body>
</html>
