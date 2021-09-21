<?php
include("connect.php");
$datacardapio = $_POST['DataDisponivel'];

echo '
		<table width="80%" border="1" align="center">
		<th bgcolor="#FFFFCC" scope="col" align="center">Instituição</th>
		<th bgcolor="#FFFFCC" scope="col" align="center">Data do Serviço</th>
		<th bgcolor="#FFFFCC" scope="col" align="center">Horário De Abertura</th>
		<th bgcolor="#FFFFCC" scope="col" align="center">Horário De Fechamento</th>
		<th bgcolor="#FFFFCC" scope="col" align="center">Descrição</th>
		<th bgcolor="#FFFFCC" scope="col" align="center">VER DETALHES</th>
		
	  </tr>';
$par=1;
$query = "SELECT instituicao.nome, cardapio.DataCardapio, cardapio.Hora_de_Abertura_Cardapio, cardapio.Hora_de_Fechamento_Cardapio, cardapio.Descricao, cardapio.Id_Cardapio from cardapio, instituicao where cardapio.fk_Instituicao_ID_Inst = instituicao.ID_Inst and DataCardapio='$datacardapio'";
mysqli_set_charset( $connection, 'utf8');
if ($result=mysqli_query($connection,$query)) {
    while ($dados = mysqli_fetch_assoc($result)) {

        $nome =$dados['nome'];
        $data=$dados['DataCardapio'];
        $Hora_a=$dados['Hora_de_Abertura_Cardapio'];
        $Hora_f=$dados['Hora_de_Fechamento_Cardapio'];
        $Descri =$dados['Descricao'];
        $Id_Cardapio=$dados['Id_Cardapio'];


        if ($par % 2) {
            echo('<tr><td align="center">'.$nome.'</td><td align="center">'.$data.'</td><td align="center">'.$Hora_a.'</td><td align="center">'.$Hora_f.'</td><td align="center">'.$Descri.'</td><td align="center"><a href = "VerDetalhes.php?codigo='.$Id_Cardapio.'">Ver Detalhes</a></td></tr>');
        }
        else {
            echo('<tr><td align="center">'.$nome.'</td><td align="center">'.$data.'</td><td align="center">'.$Hora_a.'</td><td align="center">'.$Hora_f.'</td><td align="center">'.$Descri.'</td><td align="center"><a href = "VerDetalhes.php?codigo='.$Id_Cardapio.'">Ver Detalhes</a></td></tr>');        }

        $par=$par+1;
    }

    mysqli_free_result($result);
}

?>