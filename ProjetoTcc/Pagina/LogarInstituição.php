<?php 

include "connect.php";
session_start();


$login = $_POST['email'];
$senha = $_POST['senha'];

// VERIFICA ANTES DA CONSULTA SE OS PARAMETROS FORAM PASSADOS
if (empty($login)) {
exit("<script>alert('Preencha o campo login'); history.back();</script>");
}
if (empty($senha)) {
exit("<script>alert('Informe o campo senha'); history.back();</script>");
}

/*
// To protect MySQL injection (more detail about MySQL injection)
$login = stripslashes($login);
$senha = stripslashes($senha);
$login = mysqli_real_escape_string($login);
$senha = mysqli_real_escape_string($senha);*/



$query = "SELECT * FROM instituicao WHERE email = '$login' AND senha = '$senha'";

$result=mysqli_query($connection,$query);
$registros=mysqli_num_rows($result);

if ($registros !=0){
	while ($dados = mysqli_fetch_assoc($result)) {
		$nome=$dados['nome'];
		$email=$dados['email'];
		$Id_Inst = $dados['ID_Inst'];
	}
		
		$_SESSION['login'] = 'email';
		$_SESSION['nome'] = $nome;
		$_SESSION['email'] = $email;
		$_SESSION['Id_Inst'] = $Id_Inst;

		
		header("location:HomeInstituicao.php");


  // Free result set
		mysqli_free_result($result);
}
else {
	header("location:LoginDoInst.php?erro=1");
    exit;

/*echo '
			<html>
			<head>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<title>Erro de Login</title>
			<style type="text/css">
			#imgpos {
			position:absolute;
			left:50%;
			top:50%;
			margin-left:-110px;
			margin-top:-40px;
			}
			</style>
			</head>
			<body>
			<strong><p>Senha ou Login inv�lidos!, clique <a href="login.php">AQUI</a> para voltar</p></strong>
			<img src="erro.png" width="128" height="128" 
			alt="Erro de login. Tente Novamente" id="imgpos">
			</body>
			</html>			
		';
*/
}

?>



		
	