<?php

    include('vendor/class-cursos/DB/Sql.php');

    $sql = new Sql();

    $values = $sql->select("SELECT * FROM tb_palestra");

    foreach ($values as $key => $value):?>
        <div class="col-lg-4">
        <!--Card-->
        <div class="card mb-r wow fadeIn" data-wow-delay="0.2s">

            <!--Card image-->
            <img class="img-fluid" src="<?php echo($value['image_palestra'])?>" alt="Card image cap">

            <!--Card content-->
            <div class="card-body">
                <!--Title-->
                <h5 class="font-bold">
                    <strong><?php echo($value['name_palestra'])?></strong>
                    <span class="badge badge-danger">Sold out</span>
                </h5>
                <hr>
                <h4>
                    <strong>Free</strong>
                </h4>
                <!--Text-->
                <p class="card-text mt-4"><?php echo($value['description_palestra'])?></p>
                <?php $id = $value['id_palestra'];?>    
                <a href="vendor/template/single.php?id=<?php echo($id);?>" class="btn btn-info btn-sm">Adquirir </a>
            </div>

        </div>
        </div>
        <!--/.Card-->

    <?php endforeach;?>
