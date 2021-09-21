<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/VerDetalhes.css">
    <title>Cadastro Alimento</title>
</head>
<body>
<section>

<form class="form-horizontal" method="post" action="CadastrarInst.php">


<!-- Form Name -->
<div style="text-align: center;">Cadastro Instituição</div>
<br>

<!-- Text input-->
<div style="text-align: center;">
<div class="form-group">
  <label class="col-md-4 control-label" for="NomeInst">Nome Da Instituição</label>  
  <div class="col-md-4">
  <input id="NomeInst" name="NomeInst" type="text" placeholder="Nome Da Instituição" class="form-control input-md" required="">
    
  </div>
</div>
</div>
<br>
<!-- Text input-->
<div style="text-align: center;">
<div class="form-group">
  <label class="col-md-4 control-label" for="InstRespon">Responsável Pela Instituição</label>  
  <div class="col-md-4">
  <input id="InstRespon" name="InstRespon" type="text" placeholder="Nome Do Responsável" class="form-control input-md" required="">
    
  </div>
</div>
</div>
<br>
<!-- Text input-->
<div style="text-align: center;">
<div class="form-group">
  <label class="col-md-4 control-label" for="Email">E-mail</label>  
  <div class="col-md-4">
  <input id="Email" name="Email" type="text" placeholder="E-mail da Instituição" class="form-control input-md" required="">
    
  </div>
</div>
</div>
<br>
<!-- Password input-->
<div style="text-align: center;">
<div class="form-group">
  <label class="col-md-4 control-label" for="Senha">Senha</label>
  <div class="col-md-4">
    <input id="Senha" name="Senha" type="password" placeholder="Crie Sua Senha" class="form-control input-md" required="">
    
  </div>
</div>
</div>
<br>
<!-- Text input-->
<div style="text-align: center;">
<div class="form-group">
  <label class="col-md-4 control-label" for="Cep">CEP</label>  
  <div class="col-md-4">
  <input id="Cep" name="Cep" type="text" placeholder="CEP" class="form-control input-md" required="">
    
  </div>
</div>
</div>
<br>
<!-- Text input-->
<div style="text-align: center;">
<div class="form-group">
  <label class="col-md-4 control-label" for="Bairro">Bairro</label>  
  <div class="col-md-4">
  <input id="Bairro" name="Bairro" type="text" placeholder="Bairro Onde Se Situa a Instituição" class="form-control input-md" required="">
    
  </div>
</div>
</div>
<br>
<!-- Text input-->
<div style="text-align: center;">
<div class="form-group">
  <label class="col-md-4 control-label" for="Rua">Rua</label>  
  <div class="col-md-4">
  <input id="Rua" name="Rua" type="text" placeholder="Rua Onde Se Situa a Instituição" class="form-control input-md" required="">
    
  </div>
</div>
</div>
<br>
<!-- Text input-->
<div style="text-align: center;">
<div class="form-group">
  <label class="col-md-4 control-label" for="Num_Inst">Número </label>  
  <div class="col-md-4">
  <input id="Num_Inst" name="Num_Inst" type="text" placeholder="Número da Instituição" class="form-control input-md" required="">
    
  </div>
</div>
</div>
<br>
<!-- Text input-->
<div style="text-align: center;">
<div class="form-group">
  <label class="col-md-4 control-label" for="Telefone">Telefone</label>  
  <div class="col-md-4">
  <input id="Telefone" name="Telefone" type="text" placeholder="Coloque Aqui o Telefone Da Instituição" class="form-control input-md" required="">
    
  </div>
</div>
</div>
<br>
<!-- Text input-->
<div style="text-align: center;">
<div class="form-group">
  <label class="col-md-4 control-label" for="Cnpj">CNPJ</label>  
  <div class="col-md-4">
  <input id="Cnpj" name="Cnpj" type="text" placeholder="CNPJ da Instituição" class="form-control input-md" required="">
    
  </div>
</div>
</div>
<br>
<!-- Button -->
<div style="text-align: center;">
<div class="form-group">
  <label class="col-md-4 control-label" for="BtnCadastroInts"></label>
  <div class="col-md-4">
    <button type="submit" id="BtnCadastroInts" name="BtnCadastroInts" class="btn btn-primary">Cadastrar</button>
  </div>
</div>

</div>
<br>
</form>
</section>
</body>
</html>
