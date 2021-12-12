<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf8 />
	<meta name=" viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <title>Novo cardapio</title>
</head>

<body>

  <?php
  include("connect.php");
  session_start();
  $codCard = $_GET["codigo"];
  $dia = $_POST["adata"];
  $dataformatada = date('Y-m-d', strtotime($dia));


  echo $codCard;

  ?>
</body>

</html>