<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pesquisa Cardápio</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/VerDetalhes.css">
</head>

<body>
  <section>
    <div class="form-group">
      <div class="col-md-4">
        <form action="ListagemPorDataUsuario.php" method="POST">
          <h4>Selecione a data do seu pedido para consultar</H4>
          <input type="date" name="data_card" require>
          <h5><input type="submit" name="Procurar" value="Procurar"></h5>
        </form>
      </div>

    </div>
  </section>

</body>

</html>