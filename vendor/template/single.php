<?php

    

    if(isset($_POST['id_palestra']) && isset($_POST['name']) && isset($_POST['email'])){
        
        include('../class-cursos/DB/Sql.php');

        $id_palestra = $_POST['id_palestra'];
        $name = $_POST['name'];
        $email  = $_POST['email'];
        if(isset($_POST['mess'])){
            $mess = $_POST['mess'];
        }else{
            $mess = null;
        }

        $sql = new Sql();

        $result = $sql->query("INSERT INTO tb_aluno (name_aluno,email_aluno,mess_aluno,id_palestra) values (:NAME,:EMAIL,:MESS,:ID_PALESTRA)", array(
            ":NAME" => $name,
            ":EMAIL" => $email,
            ":MESS" => $mess,        
            ":ID_PALESTRA" => $id_palestra
        ));
        
        echo  "<script>alert('Cadastro realizado com Sucesso!');</script>";
        echo('<script>window.location.assign("../../")</script>');
    }

?>


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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

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
                <a class="navbar-brand" href="/cursos-online">CSI</a>

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

    <main>
        <div class="container">
            
                <div class="col-md-12">
                <div class="row">
                <div class="col-md-4">
                <?php

                    include('../class-cursos/DB/Sql.php');

                    $sql = new Sql();
                        
                    $id = $_GET['id'];


                    $values = $sql->select('SELECT * FROM tb_palestra WHERE id_palestra = :ID',array(
                        ':ID' => $id
                    ));

                    foreach ($values as $key => $value) {

                        $name = $value['name_palestra'];
                        $description = $value['description_palestra'];
                        $about = $value['about_palestra'];
                        $image = $value['image_palestra'];

                    }
                ?> 


                <div class="col-lg-12">
                    <!--Card-->
                    <div class="card mb-r wow fadeIn" data-wow-delay="0.2s">

                        <!--Card image-->
                        <img class="img-fluid" src="<?php echo($image)?>" alt="Card image cap">

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h5 class="font-bold">
                                <small><?php echo($description)?></small>
                                <span class="badge badge-danger">Sold out</span>
                            </h5>
                            <hr>
                            <h4>
                                <strong><?php echo($name);?></strong>
                            </h4>
                            <!--Text-->
                            <p class="card-text mt-4"><?php echo($about)?></p>
                            
                        </div>

                    </div>
                </div>
                </div>

                 <div class="col-md-8">                    
                    <div class="col-md-12">
                        <div class="form_main">
                            <h4 class="heading"><strong>Cadastra-se </strong>  em nossa palestra<span></span></h4>
                            <div class="form">
                            <form action="single.php" method="post" id="contactFrm" name="contactFrm">                                                                                       
                                <input type="hidden" required="" placeholder="<?php echo($name);?>" value="<?php echo($id);?>" name="id_palestra" class="txt">
                                <input type="text" required="" placeholder="Digite seu nome completo" value="" name="name" class="txt">                                
                                <input type="text" required="" placeholder="Digite seu Email" value="" name="email" class="txt">                                
                                <textarea placeholder="Deixa uma mensagem do que você espera da palestra" name="mess" type="text" class="txt_3"></textarea>
                                <input type="submit" value="Efetuar Cadastro" name="submit" class="txt2">                                
                            </form>
                        </div>
                    </div>
                </div

                 </div>   

                </div>
            </div>
        </div>
    </main>                            


    <!--Footer-->
    <footer class="page-footer center-on-small-only">

        <!--Footer links-->
        <div class="container">
            <div class="row mt-4">
                <!--First column-->
                <div class="col-lg-3 col-md-6">
                    <h5 class="title mb-3">
                        <strong>Sobre Plataforma de Cursos Online</strong>
                    </h5>
                    <p>Aprenda em qualquer lugar com a CSI cursos para iOS e Android.</p>
                </div>
                <!--/.First column-->
                <hr class="w-100 clearfix d-sm-none">
                <!--Second column-->
                <div class="col-lg-2 col-md-6 ml-auto">
                    <h5 class="title mb-3">
                        <strong>Desenvolvimento</strong>
                    </h5>
                    <ul>
                        <li>
                            <a href="#!">Desenvolvimento Web</a>
                        </li>
                        <li>
                            <a href="#!">Aplicativos Móveis</a>
                        </li>
                        <li>
                            <a href="#!">Linguagens de Programação</a>
                        </li>
                        <li>
                            <a href="#!">Desenvolvimento de games</a>
                        </li>
                    </ul>
                </div>
                <!--/.Second column-->
                <hr class="w-100 clearfix d-sm-none">
                <!--Third column-->
                <div class="col-lg-2 col-md-6 ml-auto">
                    <h5 class="title mb-3">
                        <strong>Design</strong>
                    </h5>
                    <ul>
                        <li>
                            <a href="#!">Design de games</a>
                        </li>
                        <li>
                            <a href="#!">Ferramentas de Design</a>
                        </li>
                        <li>
                            <a href="#!">Design Gráfico</a>
                        </li>
                        <li>
                            <a href="#!">Web Design</a>
                        </li>
                    </ul>
                </div>
                <!--/.Third column-->
                <hr class="w-100 clearfix d-sm-none">
                <!--Fourth column-->
                <div class="col-lg-2 col-md-6 ml-auto">
                    <h5 class="title mb-3">
                        <strong>TI e Softwares</strong>
                    </h5>
                    <ul>
                        <li>
                            <a href="#!">Hardware</a>
                        </li>
                        <li>
                            <a href="#!">Sistemas Operacionais</a>
                        </li>
                        <li>
                            <a href="#!">Redes e Segurança</a>
                        </li>
                        <li>
                            <a href="#!">Outros</a>
                        </li>
                    </ul>
                </div>
                <!--/.Fourth column-->
            </div>
        </div>
        <!--/.Footer links-->

        <!--Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
                © 2018 Copyright:
                <a href=""> Cursosonline.com </a>

            </div>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->


    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

    <!-- Bootstrap dropdown -->
    <script type="text/javascript" src="js/popper.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <script>
        new WOW().init();
    </script>

</body>

</html>
