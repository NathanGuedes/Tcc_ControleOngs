
<?php

include_once("connect.php");


$nome = $_POST["Nome"];
$email = $_POST["Email"];
$cpf = $_POST["Cpf"];
$senha = $_POST["Senha"];
$sexo = $_POST["Sexo"];
$nascimento = $_POST["DataDeNascimento"];
$cep = $_POST["Cep"];
$telefone = $_POST["Telefone"];
$dependente = $_POST["q_dependente"];



$sql = "INSERT INTO usuario(nome, email, CPF, senha, sexo, Nascimento, CEP, Telefone, Quant_Depen) values ( '$nome', '$email', '$cpf', '$senha', '$sexo', '$nascimento' ,'$cep', '$telefone', '$dependente')";

$Cadastrar = mysqli_query($connection, $sql);

echo "<a href='LoginDoUsuario.php'><b>Relizar Login</b></a><br><br>";
echo "<a href='PaginaInicial.php'><b>Voltar para Página Inicial</b></a><br><br>";

?>

