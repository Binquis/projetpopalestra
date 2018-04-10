<?php

    include('../DB/Sql.php');

    class Login{        

        public function in_login($login, $pass){

            $conn = new Sql();

            $values = $conn->select('SELECT * FROM tb_admin WHERE admin_name = :LOGIN AND admin_pass = :PASS',array(

                'LOGIN' => $login,
                'PASS' => $pass,

            ));

            if(isset($values) && count($values) > 0):

                foreach ($values as $key => $value) {
                    
                    $id_admin = $value['id_admin'];
                    $login = $value['admin_name'];
                    $pass = $value['admin_pass'];

                }

                $this->createSession($id_admin, $login, $pass);
                return true;

            endif;

            return false;

        }

        protected function createSession($id_admin,$name_admin,$pass_admin){
            
            session_start();

            $_SESSION['id_admin_db'] = $id_admin;
            $_SESSION['login'] = $name_admin;
            $_SESSION['senha'] = $pass_admin;
        
            header('Location: cursos-online/siteadmin');

        }

    }



