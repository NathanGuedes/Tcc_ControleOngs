<?php

session_start();
include_once("connect.php");
$codCard = $_GET['codigo'];
$result_chamada = "SELECT * FROM cardapio WHERE Id_Cardapio = '$codCard'";
$resultado_Chamada = mysqli_query($connection, $result_chamada);
$row_chamada = mysqli_fetch_assoc($resultado_Chamada);

?>


<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf8 />
  	<meta name=" viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/VerDetalhes.css">
  <title>Cadastrar novo cardapio</title>
</head>

<body>
  <section>
    <h3> Novo cardápio </h3><br>
    <form action="AtualizarCardapio.php" method="post" name="form1">
      <div class="form-group">
        <label class="col-md-4 control-label" for="HorarioDeAbertura">Data Do Serviço</label>
        <div class="col-md-4">

          <input type="date" name="adata" id="adata" class="form-control input-md" value="<?php echo $row_chamada['DataCardapio']; ?>" required />
        </div>
      </div>
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="HorarioDeAbertura">Horário De Abertura</label>
        <div class="col-md-4">
          <input id="HorarioDeAbertura" name="HorarioDeAbertura" type="time" placeholder="" value="<?php echo $row_chamada['Hora_de_Abertura_Cardapio']; ?>" class="form-control input-md" required="">

        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="HorarioDeFechamento">Horário De Fechamento</label>
        <div class="col-md-4">
          <input id="HorarioDeFechamento" name="HorarioDeFechamento" type="time" value="<?php echo $row_chamada['Hora_De_Fechamento_Cardapio']; ?>" class="form-control input-md" required="" />

        </div>
      </div>

      <!-- Textarea -->
      <div class=" form-group">
        <label class="col-md-4 control-label" for="descricao">Descrição</label>
        <div class="col-md-4">
          <textarea class="form-control" id="descricao" name="descricao" value=""><?php echo $row_chamada['Descricao']; ?></textarea>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="QuantCardapio">Quantidade</label>
        <div class="col-md-4">
          <input id="QuantCardapio" name="QuantCardapio" type="text" placeholder="" class="form-control input-md" value="<?php echo $row_chamada['Quantidade_Disponivel']; ?>" required="">

        </div>
      </div>

      <hr>
      <center><button class="btn btn-success" type="submit">Atualizar</button></center>
    </form>
  </section>
</body>

</html>