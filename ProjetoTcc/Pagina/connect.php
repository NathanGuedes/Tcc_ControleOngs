<?php

$connection = mysqli_connect("localhost","root","","tabela_tcc")
or die ("Não foi possível a conexão ao gerenciamento banco de dados!");
$db = mysqli_select_db($connection, "tabela_tcc") or die ("Banco de dados não localizado!");

?>