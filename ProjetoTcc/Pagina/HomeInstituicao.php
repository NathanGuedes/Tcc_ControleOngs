<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Pagina inicial - Sistema de login</title>
</head>
<style type="text/css">
    @import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css);
    @import url(https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.3/css/mdb.min.css);

    .hm-gradient {
        background-image: linear-gradient(to top, #f3e7e9 0%, #e3eeff 99%, #e3eeff 100%);
    }

    .darken-grey-text {
        color: #2E2E2E;
    }

    .navbar .dropdown-menu a:hover {
        color: #616161 !important;
    }

    .darken-grey-text {
        color: #2E2E2E;
    }
</style>

<body>
    <nav class="mb-4 navbar navbar-expand-lg navbar-dark bg-unique">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-3" aria-controls="navbarSupportedContent-3" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-3">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="novocardapio.php">Criar Cardápio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="CadastroAlimento.php">Adicionar Alimentos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="MeusCardapios.php">Meus Cardápios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="PedidoRealizado.php">Pedidos Realizados</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto nav-flex-icons">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php
                                                                                                                                                        include("connect.php");
                                                                                                                                                        session_start();

                                                                                                                                                        if (isset($_SESSION['login'])) {
                                                                                                                                                            echo   $_SESSION['nome'];
                                                                                                                                                        } ?><i class="fa fa-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-unique" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="SairInst.php">Sair</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

</body>

</html>