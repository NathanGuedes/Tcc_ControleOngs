<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/VerDetalhes.css">
    <title>Detalhes Cardapio</title>
</head>
<body>
<section>
    <br>
    <div>
        <?php
        include("connect.php");
        session_start();
        $codigo = $_GET['codigo'];
        $query = "SELECT instituicao.ID_Inst, instituicao.nome,instituicao.email,instituicao.Telefone,instituicao.Rua,instituicao.Bairro,instituicao.CEP,instituicao.Num_Inst,instituicao.CNPJ ,cardapio.DataCardapio, cardapio.Hora_de_Abertura_Cardapio, cardapio.Hora_De_Fechamento_Cardapio, cardapio.Descricao,cardapio.Quantidade_Disponivel FROM cardapio, instituicao where cardapio.fk_Instituicao_ID_Inst = instituicao.ID_Inst and Id_Cardapio  = $codigo";
        if ($result=mysqli_query($connection,$query)) {
            while ($dados = mysqli_fetch_assoc($result)) {
                $data=$dados['DataCardapio'];
                $D_Abertura=$dados['Hora_de_Abertura_Cardapio'];
                $D_Fechamento=$dados['Hora_De_Fechamento_Cardapio'];
                $Descricao=$dados['Descricao'];
                $Q_Disponivel=$dados['Quantidade_Disponivel'];
                $nome = $dados['nome'];
                $email = $dados['email'];
                $telefone = $dados['Telefone'];
                $rua = $dados['Rua'];
                $bairro = $dados['Bairro'];
                $numInt = $dados['Num_Inst'];
                $cep = $dados['CEP'];
                echo '<h1>Detalhes do Cardápio</h1>';
                echo '<b>Data: </b>' .$data;
                echo '<br>';
                echo '<b>Horário de Abertura: </b>' .$D_Abertura;
                echo '<br>';
                echo '<b>Horário de Fechamento: </b>' .$D_Fechamento;
                echo '<br>';
                echo '<b>Descrição do Cardápio: </b>' .$Descricao;
                echo '<br>';
                echo '<b>Quantidade Disponivel: </b>' .$Q_Disponivel;
                echo '<br>';
                echo '<h1>Informações Da Instituição</h1>';
                echo '<b>Nome: </b>' . $nome;
                echo '<br>';
                echo '<b>Email: </b>' . $email;
                echo '<br>';
                echo '<b>Telefone: </b>' . $telefone;
                echo '<br>';
                echo '<b>Rua: </b>' . $rua;
                echo '<br>';
                echo '<b>Bairro: </b>' . $bairro;
                echo '<br>';
                echo '<b>Número: </b>' . $numInt;
                echo '<br>';
                echo '<b>Cep: </b>' . $cep;
                echo '<br><br>';

            }
            mysqli_free_result($result);
        }

        echo '<form action="SalvarReserva.php" method="post">' ;

        echo '<b>Quantidade a ser reservada </b>';
        echo '<input type="number" name="quantidade"  id="quantidade" size="1" maxlength="3" " required>';
        echo '<br><br>';
        echo '<input type="submit" name="reservar" value="Reservar">';
        echo '<input type="hidden" name="C_Card"  id="C_Card" value='.$codigo.'>';
        echo '</form>';
        echo '<input type="submit" name="Voltar" value="Voltar a Cardapios Dispniveis" onclick="history.go(-1)" >';

        ?>
    </div>
    <br>
</section>
</body>
</html>