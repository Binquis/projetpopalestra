<?php

    include('../DB/Sql.php');
    
    $name_palestra = $_POST['f_palestra'];

    $description = $_POST['f_description'];

    $about = $_POST['f_about'];

    $destino = '../../../siteAdmin/uploads/'. $_FILES['f_image']['name'];

    $arquivo_tmp = $_FILES['f_image']['tmp_name'];

    $name_image = "/cursos-online/siteAdmin/uploads/" . $_FILES['f_image']['name'];

    $sql = new Sql();

    $sql->query("INSERT INTO tb_palestra (name_palestra,description_palestra,about_palestra,image_palestra) values (:NAME,:DESCRIPTION,:ABOUT,:IMAGE)", array(
        ":NAME" => $name_palestra,
        ":DESCRIPTION" => $description,
        ":ABOUT" => $about,
        ":IMAGE" => $name_image
    ));

    if(move_uploaded_file($arquivo_tmp, $destino)){
        $status = "<p style='color:blue;'>Cadastro efetuado com sucesso!</p>";
        header('Location: ../../../siteadmin/forms.php?status=' . $status);

    }else{
        $status = "<p style='color:red;'>Falha no cadastro!</p>";
        header('Location: ../../../siteadmin/forms.php?status=' . $status);

    }
    

    

  