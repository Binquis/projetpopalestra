<main>

<!--Main layout-->
<div class="container">
    <div class="row mt-4">

        <!--Sidebar-->
        <div class="col-lg-4 wow fadeIn" data-wow-delay="0.2s">

            <div class="widget-wrapper">
                <h4 class="h4-responsive font-bold mb-3">Categorias:</h4>
                <br>
                <div class="list-group">
                    <a href="#" class="list-group-item active">Desenvolvimento</a>
                    <a href="#" class="list-group-item">Design</a>
                    <a href="#" class="list-group-item">Marketing</a>
                    <a href="#" class="list-group-item">Negócios</a>
                    <a href="#" class="list-group-item">TI e Softwares</a>
                </div>
            </div>

            <div class="widget-wrapper">
                <h4 class="h4-responsive font-bold mb-3 mt-4">Preços:</h4>
                <br>
                <div class="list-group">
                    <a href="#" class="list-group-item active">R$100 - R$399</a>
                    <a href="#" class="list-group-item">R$400 - R$899</a>

                    <a href="#" class="list-group-item">R$900 - R$159R</a>
                    <a href="#" class="list-group-item">R$160 - R$799</a>

                </div>
            </div>
<form action="vendor/class-cursos/functions/verify.php" method="post">
            <div class="widget-wrapper wow fadeIn" data-wow-delay="0.4s">
                <h4 class="h4-responsive font-bold">Login Aluno:</h4>
                <br>
                <div class="card">
                    <div class="card-body">
                        <p>
                            <strong>Entre com seus dados</strong>
                        </p>
                        <p>Acesse sua área de cursos</p>
                        <div class="md-form">
                            <i class="fa fa-user prefix grey-text"></i>
                            <input type="text" name="login" required id="login" class="form-control">
                            <label for="form1">Seu login</label>
                        </div>
                        <div class="md-form">
                            <i class="fa fa-key prefix grey-text"></i>
                            <input type="password" name="pass" required id="senha" class="form-control">
                            <label for="form2">Sua senha</label>
                        </div>
                        <button type="submit" class="btn btn-info btn-md">Entrar</button>
</form>
                    </div>
                </div>
            </div>

        </div>
        <!--/.Sidebar-->

        <!--Main column-->
        <div class="col-lg-8">

            <!--First row-->
            <div class="row wow fadeIn" data-wow-delay="0.4s">
                <div class="col-lg-12">
                    <h2 class="h2-responsive font-bold mb-5">Palestras em destaques</h2>

                    <!--Carousel Wrapper-->
                    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                        <!--Indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                            <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                        </ol>
                        <!--/.Indicators-->
                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">   
                            
                            <!--First slide-->
                            <div class="carousel-item">
                                <img src="vendor/template/img/img-01.png" alt="First slide" class="img-fluid rounded" height"328px">
                                <div class="carousel-caption">
                                    <h3 class="font-bold red-text">
                                        <strong>PHP 7!</strong>
                                    </h3>
                                    <br>
                                </div>
                            </div>



                            <!--/First slide-->
                            <!--Second slide-->
                            <div class="carousel-item active">
                                <img src="vendor/template/img/img-02.jpg" alt="Second slide" class="img-fluid rounded" height="328px">
                                <div class="carousel-caption">
                                    <h3 class="font-bold red-text">
                                        <strong>Curso Desenvolvedor Full Stack!</strong>
                                    </h3>
                                    <br>
                                </div>
                            </div>
                            <!--/Second slide-->
                            <!--Third slide-->
                            <div class="carousel-item">
                                <img src="vendor/template/img/img-03.jpg" alt="Third slide" class="img-fluid rounded" height="328px">
                                <div class="carousel-caption">
                                    <h3 class="font-bold red-text">
                                        <strong>Curso Desenvolvedor Front End!</strong>
                                    </h3>
                                    <br>
                                </div>
                            </div>
                            <!--/Third slide-->




                        </div>
                        <!--/.Slides-->
                        <!--Controls-->
                        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <!--/.Controls-->
                    </div>
                    <!--/.Carousel Wrapper-->
                </div>
            </div>
            <!--/.First row-->
            <br>
            <hr class="extra-margins">

            <!--Second row-->
            <div class="row">
                <!--First columnn-->
                
                    
                    <?php include('vendor/class-cursos/functions/select_palestra.php');?>
                   
                
                <!--First columnn-->

                </div>
                <!--Third columnn-->
            </div>
            <!--/.Third row-->

        </div>
        <!--/.Main column-->

    </div>
</div>
<!--/.Main layout-->

</main>
