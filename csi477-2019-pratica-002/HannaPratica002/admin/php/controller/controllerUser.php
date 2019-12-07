<?php
require_once "admin/php/classes/classUser.php";
$User = new User();



if(isset($_POST['edit'])){
    $dados = array(
        ":id" => $_POST['id'],
        ":name" => $_POST['name'],
        ":email" => $_POST['email'],
        ":password" => md5($_POST['password']),
        ":type" => $_POST['type']
    );
    $resp = $User->edit($dados);

}
elseif(isset($_POST['delete']))
{
    $dados = array(
        ":id" => $_POST['id']
    );
    $resp= $User->delete($dados);
}
elseif(isset($_POST['create'])){
    $dados = array(
        ":name" => $_POST['name'],
        ":email" => $_POST['email'],
        ":password" => md5($_POST['password']),
        ":type" => $_POST['type']
    );
    $resp= $User->create($dados);

}if(isset($_GET['id'])){
    $user = $User->view(array(":id" => $_GET['id']))->fetch((PDO::FETCH_OBJ));

}

$users = $User->index()->fetchAll(PDO::FETCH_OBJ);
