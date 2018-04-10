<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Cursos Onlines</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="vendor/template/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="vendor/template/css/mdb.min.css" rel="stylesheet">

    <link href="vendor/template/css/style.css" rel="stylesheet">

    <!-- Template styles -->
    <style rel="stylesheet">
        /* TEMPLATE STYLES */
        main {padding-top: 3rem;padding-bottom: 2rem;}
        .widget-wrapper {padding-bottom: 2rem;border-bottom: 1px solid #e0e0e0;margin-bottom: 2rem;}
        .extra-margins {margin-top: 1rem;margin-bottom: 2.5rem;}
        .divider-new {margin-top: 0;}
        .navbar {background-color: #414a5c;}
        footer.page-footer {background-color: #414a5c;margin-top: 2rem;}
        .list-group-item.active {background-color: #afb3c0;border-color: #afb3c0;}
        .list-group-item:not(.active) {color: #222;}
        .list-group-item:not(.active):hover {color: #666;}
        .card {font-weight: 300;}
        .navbar .btn-group .dropdown-menu a:hover {color: #000 !important;}
        .navbar .btn-group .dropdown-menu a:active {color: #fff !important;}
    </style>
</head>

<body>

    <header>

        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="#">CSI</a>

               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Inicio
                            <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Cursos</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Cadastra-se</a>
                        </li>
                        <li class="nav-item btn-group">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sobre CSI
                            </a>
                            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Blog</a>
                                <a class="dropdown-item" href="#">Quem somos</a>
                                <a class="dropdown-item" href="#">Suporte</a>
                            </div>
                        </li>
                    </ul>
                    <form class="form-inline">
                        <?php
                            
                            if(isset($_SESSION['login']) && isset($_SESSION['login']) ):?>
                                <a href="siteadmin/">Admin</a>                                    
                            <?php 
                                else:?>
                                    <input class="form-control mr-sm-2" type="text" placeholder="Busca" aria-label="Search">
                            <?php endif;?>                        
                    </form>
                </div>
            </div>
        </nav>
        <!--/.Navbar-->

    </header>

