<?php

include("../infra/conn.php");

$id = $_POST['id'];
$nome = $_POST['nome'];
$codigo = $_POST['codigo'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];


if($preco <1){
    echo("erro: o valor não pode ser negativo");
    die();
}

$sql = "UPDATE produtos SET nome = ?, codigo = ?, descricao = ?, preco = ?, quantidade = ? WHERE id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sisdii", $nome, $codigo, $descricao, $preco, $quantidade, $id);
$stmt->execute();

header("location: ../index.php");

?>