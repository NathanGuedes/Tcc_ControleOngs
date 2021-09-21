<?php
include_once("connect.php");
session_start();

$nome_ali = $_POST["nomeAli"];
$quant_ali = $_POST["quantAli"];
$Id_inst = $_SESSION['Id_Inst'];

$sql = "INSERT INTO alimentos(Nome_Alimento, Quant_Ali, fk_Instituicao_ID_Inst) values ( '$nome_ali','$quant_ali','$Id_inst')";

$Cadastrar = mysqli_query($connection, $sql);

echo "<a href='CadastroAlimento.php'><b>Cadastrar Alimento Novamente</b></a><br><br>";
echo "<a href='HomeInstituicao.php'><b>Voltar para a Home</b></a><br><br>";
?>
