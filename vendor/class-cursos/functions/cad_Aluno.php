<?php

    include('../DB/Sql.php');

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


        $status = "<p style='color:blue;'>Cadastro feito com sucesso!</p>";
        header("Location: ../../template/single.php?status=" . $status);
    