<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf8 />
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Novo cardapio</title>
</head>
<body>

<?php
include("connect.php");
session_start();
//AQUI VOCÊS DEVERÃO ALTERAR O CÓDIGO PARA SALVAR OS DADOS DENTRO DA TABELA CARDÁPIO.
//OS PRODUTOS SELECIONADOS DEVERÃO ESTAR EM UMA TABELA CHAMADA ITEM DE CARDÁPIO JUNTO COM O CODIGO DO CARDAPIO AO QUAL SE RELACIONA CONFORME EXPLICADO.
//O CARDAPIO É SALVO NA TABELA PROPRIA COM DATA E HORA E SE DESEJAREM PODEM DAR UM NOME PARA O CARDAPIO.

$selecionados = $_POST["alimentos"];
$dia = $_POST["adata"];
$dataformatada = date('Y-m-d', strtotime($dia));


$H_Abertura = $_POST["HorarioDeAbertura"];
$H_Fechamento = $_POST["HorarioDeFechamento"];
$Descricao = $_POST["descricao"];
$Quant = $_POST["QuantCardapio"];
$H_Abertura_F = date('H:i:s', strtotime($H_Abertura));
$H_Fechamento_F = date('H:i:s', strtotime($H_Fechamento));
$Id_inst = $_SESSION['Id_Inst'];

//SALVAR CARDAPIO
$query = "UPDATE cardapio (Hora_de_Abertura_Cardapio, Hora_De_Fechamento_Cardapio, Descricao, Quantidade_Disponivel, DataCardapio) VALUES ('$H_Abertura_F','$H_Fechamento_F','$Descricao','$Quant','$dataformatada')";
mysqli_set_charset( $connection, 'utf8');
$results = mysqli_query($connection,$query);

if ($results) {
    echo "<b>Cadastro Realizado Com Sucesso</b><br><br>";
    echo "<a href='novocardapio.php'><b>Cadastrar Um Novo Cardápio</b></a><br><br>";
    echo "<a href='HomeInstituicao.php'><b>Voltar para a Home</b></a><br><br>";

}else {
    echo "Erro no cadastro";
    echo "<a onclick='history.go(-1)'><b>Voltar</b></a><br><br>";





?>