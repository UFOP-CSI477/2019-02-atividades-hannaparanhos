<?php
session_start();
if(isset($_POST['login'])){
    require_once "admin/php/classes/classUser.php";
    $User = new User();
    $dados = array(
        ":email"=>$_POST['email'],
        ":password"=>md5($_POST['password'])
    );

    $user = $User->login($dados)->rowCount();



    if($user == 1){
        $user = $User->login($dados)->fetchObject();
        $_SESSION['user_type'] = $user->type;
        $_SESSION['user_id'] = $user->id;
        header("Location: indexAdmin.php "); 
    }else{
        $falha = true;
    }
}


if(isset($_POST['logout'])){
    session_destroy();
    header("Location: login.php");
}