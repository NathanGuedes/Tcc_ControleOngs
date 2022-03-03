<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <title>Relatorio de produtos</title>
</head>

<body>
  <center>
    <h1>Relatório de Pedidos</h1>
  </center>
  <br><br>
  <?php
  include("connect.php");
  session_start();
  $quant_total = 0;

  /*
if ($_SESSION['login']) {

echo'
<p><strong>
Usuario: ' .$_SESSION['nome'].' </strong></p>';

} else {
  header("location:login.php");
}*/

  ?>


  <center>
    <table class="table table-striped">
      <thead>
        <tr>
          <th style="text-align: center;" scope="col">ID</th>
          <th style="text-align: center;" scope="col">Descrição</th>
          <th style="text-align: center;" scope="col">Nome do Solicitante</th>
          <th style="text-align: center;" scope="col">CPF</th>
          <th style="text-align: center;" scope="col">Quantidade Pedida</th>
        </tr>
      </thead>
      <tbody>

        <?php
        include("connect.php");
        $codCard = $_GET['codigo'];

        $query = "SELECT cardapio.Id_Cardapio, cardapio.descricao,usuario.nome, usuario.CPF, passe.Quantidade_Pedida from cardapio, usuario, passe WHERE cardapio.Id_Cardapio = '$codCard' and passe.fk_Cardapio_Id_Cardapio='$codCard'";
        mysqli_set_charset($connection, "utf8");
        if ($result = mysqli_query($connection, $query)) {
          while ($dados = mysqli_fetch_assoc($result)) {
            $id = $dados['Id_Cardapio'];
            $descr = $dados['descricao'];
            $cliente = $dados['nome'];
            $cpf = $dados['CPF'];
            $quant = $dados['Quantidade_Pedida'];
            $quant_total = ($quant_total + $quant);

            echo ('<tr><td align="center">' . $id . '</td><td align="center"><b>' . $descr . '</b></td><td align="center"> ' . $cliente . '</td><td align="center">' . $cpf . '</td><td align="center">' . $quant . '</td></tr>');
          }
          mysqli_num_rows($result);
        }


        echo '<table class= "table table-striped">
        <th style= "text-align: center;">Quantidade Total Pedida</th>
    
        <tr><td align="center";scope="col";>' . $quant_total . '</td></tr>
          </table>';
        ?>
      </tbody>
    </table>
  </center>
  </div>
  <br>
  <p><a href="javascript:history.back()">Voltar</a></p>
</body>

</html>