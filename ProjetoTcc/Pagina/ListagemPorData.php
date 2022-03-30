<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <title>Cardápios</title>
</head>

<body>
  <center>
    <h1>Cardápio da Instituição Por Data</h1>
  </center>
  <br><br>
  <?php
  include("connect.php");
  session_start();
  $dataCard = $_POST['data_card'];


  echo '
		<table class="table table-striped" >
		 <th style="text-align: center;" scope="col">Numero do Cardapio</th>
     <th style="text-align: center;" scope="col">Data Do Cardápio</th>
     <th style="text-align: center;" scope="col">Descrição</th>
		
	    </tr>';
  $par = 1;
  $query = "SELECT cardapio.Id_Cardapio,cardapio.DataCardapio, cardapio.Descricao from cardapio where cardapio.DataCardapio ='$dataCard'";
  mysqli_set_charset($connection, 'utf8');
  if ($result = mysqli_query($connection, $query)) {
    while ($dados = mysqli_fetch_assoc($result)) {

      $C_Cardapio = $dados['Id_Cardapio'];
      $DataServ = $dados['DataCardapio'];
      $descricao = $dados['Descricao'];



      if ($par % 2) {
        echo ('<tr><td align="center">' . $C_Cardapio . '</td><td align="center">' . $DataServ . '</td><td align="center">' . $descricao . '</tr>');
      } else {
        echo ('<tr><td align="center">' . $C_Cardapio . '</td><td align="center">' . $DataServ . '</td><td align="center">' . $descricao .  '</tr>');
      }

      $par = $par + 1;
    }
    echo '</table>';

    mysqli_free_result($result);
  }
