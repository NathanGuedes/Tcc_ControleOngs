<?php
include("connect.php");
$codCard = $_GET['codigo'];
$quant=0;

echo '
		<table width="100%" border="1" align="center">
		<th bgcolor="#FFFFCC" scope="col" align="center">ID</th>
		<th bgcolor="#FFFFCC" scope="col" align="center">Nome Do Solicitante</th>
		<th bgcolor="#FFFFCC" scope="col" align="center">Telefone</th>
		<th bgcolor="#FFFFCC" scope="col" align="center">CPF</th>
		<th bgcolor="#FFFFCC" scope="col" align="center">Quantidade Pedida </tr>';

$query = "SELECT usuario.Id_Usu, usuario.nome, usuario.CPF, usuario.Telefone,passe.Quantidade_Pedida, passe.Id_passe from passe, usuario where passe.fk_id_usuario=usuario.ID_Usu and passe.fk_Cardapio_Id_Cardapio='$codCard'";
mysqli_set_charset( $connection, 'utf8');
if ($result=mysqli_query($connection,$query)) {
    while ($dados = mysqli_fetch_assoc($result)) {

        $nome=$dados['nome'];
        $cpf=$dados['CPF'];
        $Tel=$dados['Telefone'];
        $quant_Pedida=$dados['Quantidade_Pedida'];
        $id_passe=$dados['Id_passe'];
        $quant= ($quant + $quant_Pedida);


            echo('<tr><td align="center">'.$id_passe.'</td><td align="center">'.$nome.'</td><td align="center">'.$Tel.'</td><td align="center">'.$cpf.'</td><td align="center">'.$quant_Pedida.'</td></tr>');

    }

    mysqli_free_result($result);
}
echo '</table><br><br>';

echo '<table width="20%" border="1" align="auto">
    <th bgcolor="#FFFFCC" scope="col" align="center">Quantidade Total Pedida</th>
    
    <tr><td align="center">'.$quant.'</td></tr>
    </table>';


?>