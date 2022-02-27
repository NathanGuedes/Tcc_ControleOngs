<?php
include("connect.php");
session_start();
$id_inst = $_SESSION['Id_Inst'];

echo '
		<table width="80%" border="1" align="center">
		<th bgcolor="#FFFFCC" scope="col" align="center">Codigo</th>
		<th bgcolor="#FFFFCC" scope="col" align="center">Data do Serviço</th>
		<th bgcolor="#FFFFCC" scope="col" align="center">Descrição</th>
		<th bgcolor="#FFFFCC" scope="col" align="center">Editar</th>
    <th bgcolor="#FFFFCC" scope="col" align="center">Excluir</th>
		
	    </tr>';
$par = 1;
$query = "SELECT cardapio.Id_Cardapio,cardapio.DataCardapio, cardapio.Descricao from cardapio where cardapio.fk_Instituicao_ID_Inst ='$id_inst'";
mysqli_set_charset($connection, 'utf8');
if ($result = mysqli_query($connection, $query)) {
  while ($dados = mysqli_fetch_assoc($result)) {

    $C_Cardapio = $dados['Id_Cardapio'];
    $DataServ = $dados['DataCardapio'];
    $descricao = $dados['Descricao'];



    if ($par % 2) {
      echo ('<tr><td align="center">' . $C_Cardapio . '</td><td align="center">' . $DataServ . '</td><td align="center">' . $descricao . '</td><td align="center"><a href = "EditarCardapio1.php?codigo=' . $C_Cardapio . '">Editar</a></td></td><td align="center"><a href = "ExcluirCardapio.php?codigo=' . $C_Cardapio . '">Excluir</a></td></tr>');
    } else {
      echo ('<tr><td align="center">' . $C_Cardapio . '</td><td align="center">' . $DataServ . '</td><td align="center">' . $descricao . '</td><td align="center"><a href = "EditarCardapio1.php?codigo=' . $C_Cardapio . '">Editar</a></td><td align="center"><a href = "ExcluirCardapio.php?codigo=' . $C_Cardapio . '">Excluir</a></td></tr>');
    }

    $par = $par + 1;
  }
  echo '</table>';

  mysqli_free_result($result);
}
?>