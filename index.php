<?php
include("infra/conn.php");


if($_SERVER['REQUEST_METHOD'] == 'POST'){

$nome = $_POST['nome'];
$codigo = $_POST['codigo'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];


if($preco <1){
    echo("erro: o valor não pode ser negativo");
    die();
}

$sql = "INSERT INTO produtos (nome, codigo, descricao , preco, quantidade) VALUES (?,?,?,?,?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sisdi", $nome, $codigo, $descricao, $preco, $quantidade);
$stmt->execute();

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de produtos</title>
</head>
<body>
    
<main>
    <div>
        <form method="POST" action="">
            <div>
                <label for="nome">Nome do produto</label>
                <input name="nome" id="nome" type="text">
            </div>
             <div>
                <label for="codigo">código</label>
                <input name="codigo" id="codigo" type="number">
            </div>
             <div>
                <label for="descricao">Descrição produto</label>
                <input name="descricao" id="descricao" type="text">
            </div>
             <div>
                <label for="preco">preço</label>
                <input name="preco" id="preco" type="number">
            </div>
             <div>
                <label for="quantidade">quantidade</label>
                <input name="quantidade" id="quantidade" type="number">
            </div>

            <div>
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>



    <div>
        <h2>Produtos cadastrados</h2>
        <?php include("component/listar.php") ?>
    </div>
</main>



</body>
</html>