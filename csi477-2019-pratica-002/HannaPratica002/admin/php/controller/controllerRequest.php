<?php
require_once "admin/php/classes/classRequest.php";
require_once "admin/php/classes/classSubject.php";

$Request = new Request();

if(isset($_POST['edit'])){
    $dados = array(
        ":id" => $_POST['id'],
        ":name" => $_POST['name'],
        ":price" => $_POST['price']
    );
    $resp = $Request->edit($dados);

}
elseif(isset($_POST['delete']))
{
    $dados = array(
        ":id" => $_POST['id']
    );
    $resp= $Request->delete($dados);
}
elseif(isset($_POST['create'])){
    $dados = array(
        ":name" => $_POST['name'],
        ":price" => $_POST['price']
    );
    $resp= $Request->create($dados);

}if(isset($_GET['id'])){
    $request = $Request->view(array(":id" => $_GET['id']))->fetch((PDO::FETCH_OBJ));

}

$request = $Request->indexAdm()->fetchAll(PDO::FETCH_OBJ);


