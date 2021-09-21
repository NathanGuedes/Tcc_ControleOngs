<?php
include("connect.php");
session_start();

$quant = $_POST['quantidade'];
$codigo = $_POST['C_Card'];
$Id_Uso = $_SESSION['Id_Uso'];


$query = "SELECT * FROM cardapio where Id_Cardapio = $codigo";
mysqli_set_charset($connection, "utf8");
if ($result = mysqli_query($connection, $query)) {
    while ($dados = mysqli_fetch_assoc($result)) {
        $quant_D = $dados['Quantidade_Disponivel'];

    }
    mysqli_free_result($result);
}

if ($quant_D >= $quant) {
    $query1 = "INSERT INTO passe(Quantidade_Pedida, fk_Cardapio_Id_Cardapio,fk_id_usuario) VALUE ('$quant','$codigo','$Id_Uso')";
    mysqli_set_charset($connection, 'utf8');
    $results = mysqli_query($connection, $query1);

    $quant_Final = ($quant_D - $quant);

    $query2 = "UPDATE cardapio SET Quantidade_Disponivel= $quant_Final WHERE Id_Cardapio= $codigo";
    $result = mysqli_query($connection, $query2);

    echo 'Reserva Realizada Com Sucesso<br><br>';
    echo "<a href='HomeUsuario.php'><b>Voltar para a Home</b></a><br><br>";


} else {
    echo '<b>Quantidade Indisponivel</b><br><br>';
    echo "<a href='HomeUsuario.php'><b>Voltar para a Home</b></a><br><br>";
    echo "<a href='HomeUsuario.php'><b>Voltar para a Home</b></a><br><br>";
}



?>