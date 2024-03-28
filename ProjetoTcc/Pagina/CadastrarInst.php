<?php

include_once("connect.php");


$nome = $_POST["NomeInst"];
$email = $_POST["Email"];
$cnpj = $_POST["Cnpj"];
$senha = $_POST["Senha"];
$bairro = $_POST["Bairro"];
$rua = $_POST["Rua"];
$cep = $_POST["Cep"];
$telefone = $_POST["Telefone"];
$responsavel= $_POST["InstRespon"];
$numero = $_POST["Num_Inst"];


$sql = "INSERT INTO instituicao(nome, ResponsavelPelaInstituição, email, senha, Rua, Num_Inst, Bairro, CEP, Telefone, CNPJ ) values ( '$nome', '$responsavel', '$email', '$senha', '$rua', '$numero' ,'$bairro ','  $cep  ', '$telefone', '$cnpj')";

$Cadastrar = mysqli_query($connection, $sql);

echo "<a href='LoginDoInst.php'><b>Relizar Login</b></a><br><br>";
echo "<a href='PaginaInicial.php'><b>Voltar para Página Inicial</b></a><br><br>";


?>

