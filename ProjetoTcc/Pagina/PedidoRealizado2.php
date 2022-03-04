<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Pedidos Realizados</title>
</head>

<body>
    <center>
        <h1>Pedidos Realizados</h1>
    </center>
    <br><br>
    <?php
    include("connect.php");
    session_start();
    $codCard = $_GET['codigo'];
    $quant = 0;

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
                    <th style="text-align: center;" scope="col">Numero do Cardapio</th>
                    <th style="text-align: center;" scope="col">Numero do Pedido</th>
                    <th style="text-align: center;" scope="col">Nome</th>
                    <th style="text-align: center;" scope="col">CPF</th>
                    <th style="text-align: center;" scope="col">Telefone</th>
                    <th style="text-align: center;" scope="col">Quantidade Solicitada</th>

                </tr>
            </thead>
            <tbody>

                <?php

                $query = "SELECT usuario.Id_Usu, usuario.nome, usuario.CPF, usuario.Telefone,passe.Quantidade_Pedida, passe.Id_passe from passe, usuario where passe.fk_id_usuario=usuario.ID_Usu and passe.fk_Cardapio_Id_Cardapio='$codCard'";
                mysqli_set_charset($connection, 'utf8');
                if ($result = mysqli_query($connection, $query)) {
                    while ($dados = mysqli_fetch_assoc($result)) {

                        $nome = $dados['nome'];
                        $cpf = $dados['CPF'];
                        $Tel = $dados['Telefone'];
                        $quant_Pedida = $dados['Quantidade_Pedida'];
                        $id_passe = $dados['Id_passe'];
                        $quant = ($quant + $quant_Pedida);


                        echo ('<tr><td align="center">' . $codCard . '</td><td align="center">' . $id_passe . '</td><td align="center">' . $nome . '</td><td align="center">' . $cpf . '</td><td align="center">' . $Tel . '</td><td align="center">' . $quant_Pedida . '</td></tr>');
                    }

                    mysqli_free_result($result);
                }
                echo '<table class= "table table-striped">
                <th style= "text-align: center;">Quantidade Total Pedida</th>
            
                <tr><td align="center";scope="col";>' . $quant . '</td></tr>
                  </table>';
                ?>