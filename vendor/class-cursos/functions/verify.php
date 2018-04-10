<?php

    include('login.php');
        
        $login = new Login();

        if(isset($_POST['login']) && isset($_POST['pass'])){
            
            $result = $login->in_login($_POST['login'],$_POST['pass']);
            
            if(isset($result)):
                
                header('Location: /cursos-online/siteadmin/');
            else:
                header('Location: /cursos-online/siteadmin/login.php/');
            endif;
        }
    