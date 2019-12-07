<?php
require_once "admin/php/classes/classSubject.php";
$Subject = new Subject();



if(isset($_POST['edit'])){
    $dados = array(
        ":id" => $_POST['id'],
        ":name" => $_POST['name'],
        ":price" => $_POST['price']
    );
    $resp = $Subject->edit($dados);

}
elseif(isset($_POST['delete']))
{
    $dados = array(
        ":id" => $_POST['id']
    );
    $resp= $Subject->delete($dados);
}
elseif(isset($_POST['create'])){
    $dados = array(
        ":name" => $_POST['name'],
        ":price" => $_POST['price']
    );
    $resp= $Subject->create($dados);

}if(isset($_GET['id'])){
    $subject = $Subject->view(array(":id" => $_GET['id']))->fetch((PDO::FETCH_OBJ));

}

$subjects = $Subject->index()->fetchAll(PDO::FETCH_OBJ);



