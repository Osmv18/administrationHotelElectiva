<?php 
    // # Credenciales como admin
    $userAdmin = "admin";
    $passwordAdmin = "123";
    // # Credenciales como user
    $user = "user";
    $password = "123";
    if($_POST){
        if($_POST['user'] == $userAdmin && $_POST['password'] == $passwordAdmin) {
            $_SESSION['user'] = $userAdmin;
            include "view/management.php";
        } else if ($_POST['user'] == $user && $_POST['password'] == $password) {
            $_SESSION['user'] = $user;
            include "view/user.php";
        } else {
            // # Hay que añadir una alerta para mostrar que es incorrecto
            $msg= "Usuario o contraseña incorrecto";
            include "view/login.php";
        }
    }else{
        $msg= NULL;
        include "view/login.php";
    }
