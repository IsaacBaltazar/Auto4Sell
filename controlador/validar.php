<?php
    @session_start();
    require_once("../modelo/modelo.php");

    $pass = $_POST['txtpass'];

    $passencriptada = md5($pass);

    $params = array(
        "user"=>$_POST['txtusuario'],
        "pass"=>$passencriptada,

    );

    $db = Database::getInstance();
    $conn = $db->getConnection();
    $sesion = new Modelo($conn);

    list ($valor, $error) = $sesion->validaUsuario($params);
    if ( empty ($valor )){
        echo "<script>alert('El usuario o la contraseña son incorrectos');
        window.location.href='../html/login.html';
        </script>";
    } else {
        echo"<script>alert('Bienvenido');
        window.location.href='../html/homePageR.html';
        </script>";
    }