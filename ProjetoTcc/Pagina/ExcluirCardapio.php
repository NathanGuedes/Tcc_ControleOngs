<?php
include_once("connect.php");
$codCard = $_GET['codigo'];
$quant = 0;

$sql = "DELETE FROM cardapio WHERE Id_Cardapio = $codCard";

$Deletar = mysqli_query($connection, $sql);

echo "<b>Cardápio deletado com sucesso</b></br></br>";
echo "<a href='HomeInstituicao.php'><b>Voltar para a Home</b></a><br><br>";
echo "<a href='MeusCardapios.php'><b>Voltar para Meus Cardápios</b></a><br><br>";
