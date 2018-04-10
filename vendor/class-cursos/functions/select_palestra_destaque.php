<?php

    include('vendor/class-cursos/DB/Sql.php');

    $sql = new Sql();

    $values = $sql->select("SELECT * FROM tb_palestra WHERE cat = true");

    foreach ($values as $key => $value):?>
        <!--First slide-->
      <div class="carousel-item">
        <img src="<?php echo($value['image_palestra']);?>" alt="First slide" class="img-fluid rounded" height"328px">
        <div class="carousel-caption">
            <h3 class="font-bold red-text">
                <strong><?php echo($value['name_palestra']);?></strong>
            </h3>
            <br>
        </div>
    </div>

<?php endforeach;?>