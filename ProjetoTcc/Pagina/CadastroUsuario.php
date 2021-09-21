<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/VerDetalhes.css">
    <title>Cadastro de Usuario</title>
</head>
<body>
<section>

<form class="form-horizontal" method="post" action="CadastrarUsuario.php">


<!-- Form Name -->

<div style="text-align: center;"> Cadastro de Usuario</div>
<br>
<!-- Text input-->
<div class="form-group">
 <div style="text-align: center;"> <label class="col-md-4 control-label" for="Nome" br>Nome e Sobrenome</label>  </div>

  <div class="col-md-4">
 <div style="text-align: center;"> <input id="Nome" name="Nome" type="text" placeholder="Ex: Nathan Guedes" class="form-control input-md" required=""> </div>
    
  </div>
</div>
<br>
<!-- Text input-->
<div class="form-group">
 <div style="text-align: center;"> <label class="col-md-4 control-label" for="Email">E-mail</label> </div>
  
  <div class="col-md-4">
<div style="text-align: center;">  <input id="Email" name="Email" type="text" placeholder="Ex: joaodasilva@gmail.com" class="form-control input-md" required=""> </div>
   
  </div>
</div>
<br>
<!-- Text input-->
<div class="form-group">
 <div style="text-align: center;"> <label class="col-md-4 control-label" for="Cpf">CPF</label>  </div>
  <div class="col-md-4">
 <div style="text-align: center;"> <input id="Cpf" name="Cpf" type="text" placeholder="123.456.789-00" class="form-control input-md"> </div>
    
  </div>
</div>
<br>
<!-- Password input-->
<div class="form-group">
<div style="text-align: center;">  <label class="col-md-4 control-label" for="Senha">Senha</label> </div>
  <div class="col-md-4">
  <div style="text-align: center;">  <input id="Senha" name="Senha" type="password" placeholder="Coloque Sua Senha Aqui" class="form-control input-md" required=""> </div>
    
  </div>
</div>
<br>
<!-- Text input-->
<div class="form-group">
 <div style="text-align: center;"> <label class="col-md-4 control-label" for="DataDeNascimento">Data De Nascimento</label>  </div>
  <div class="col-md-4">
 <div style="text-align: center;"> <input id="DataDeNascimento" name="DataDeNascimento" type="date" placeholder="01/01/1999" class="form-control input-md" required=""> </div>
    
  </div>
</div>
<!-- Multiple Radios (inline) -->
<div class="form-group">
 <div style="text-align: center;"> <label class="col-md-4 control-label" for="Sexo">Sexo</label> </div>
  <div class="col-md-4"> 
   <div style="text-align: center;"> <label class="radio-inline" for="Sexo-0">
  
     <input type="radio" name="Sexo" id="Sexo-0" value="m" checked="checked">

    Masculino </div>

      <div style="text-align: center;"> <label class="radio-inline" for="Sexo-1">
     <input type="radio" name="Sexo" id="Sexo-1" value="f">
   
      Feminino </div>
  </div>
</div>

    <div class="form-group">
        <div style="text-align: center;"> <label class="col-md-4 control-label" for="quant_depen">Quantidade Dependente</label>  </div>
        <div class="col-md-4">
            <div style="text-align: center;"> <input id="quant_depen" name="q_dependente" type="text" placeholder="123" class="form-control input-md"> </div>

        </div>
    </div>
<!-- Text input-->
<div class="form-group">
  <div style="text-align: center;"> <label class="col-md-4 control-label" for="Cep">CEP</label> </div>
 
  <div class="col-md-4">
 <div style="text-align: center;"> <input id="Cep" name="Cep" type="text" placeholder="Digite seu CEP" class="form-control input-md" required=""> </div>
    
  </div>
</div>
<br>
<!-- Text input-->
<div class="form-group">
 <div style="text-align: center;"> <label class="col-md-4 control-label" for="Telefone">Telefone</label>  </div>

  <div class="col-md-4">
 <div style="text-align: center;"> <input id="Telefone" name="Telefone" type="text" placeholder="(DD) 9 9999-9999" class="form-control input-md" required=""> </div>
    
  </div>
</div>
<br>
<!-- Button -->
<div class="form-group">
 <div style="text-align: center;"> <label class="col-md-4 control-label" for="BtnCadastro"></label> </div>
 <br>
  <div class="col-md-4">
  <div style="text-align: center;">  <button id="BtnCadastro" name="BtnCadastro" class="btn btn-primary">Cadastrar</button> </div>
  </div>
</div>


</form>
</section>
</body>
</html>