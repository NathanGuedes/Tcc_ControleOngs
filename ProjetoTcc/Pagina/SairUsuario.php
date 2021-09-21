<?php
//include("logwriter.php");
session_start();
//salvalog("saiu do sistema");


session_unset();
session_destroy();

/*echo '
			<html>
			<head>
			<meta http-equiv="Content-Type" content="text/html; 
			charset=iso-8859-1">
			<title>Saida do Sistema</title>
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
			<p><strong> LOGOFF EFETUADO </strong></p>
			<strong><p>Voc� saiu do sistema com sucesso. Obrigado por utilizar!</p> 
			<p>Clique <a href="HomeInstituicao.php">AQUI</a> para retornar ao in�cio.</p></strong>
			<img src="logoff.png" width="128" height="128" 
			alt="Saiu do sistema" id="imgpos">
			</body>
			</html>			
			';
*/
echo ' <a href="LoginDoUsuario.php">AQUI</a>';
?>