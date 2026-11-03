<?php
include("../infra/conn.php");

$id = $_POST['id'];

$sql = "SELECT * FROM produtos WHERE id = $id";

$resultado = $conn->query($sql);
$produto = $resultado->fetch_assoc();


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
        <form method="POST" action="atualizar.php">
            <div>
                <label for="nome">Nome do produto</label>
                <input name="nome" value="<?php echo $produto['nome']; ?>" id="nome" type="text">
            </div>
             <div>
                <label for="codigo">código</label>
                <input name="codigo" value="<?php echo $produto['codigo']; ?>" id="codigo" type="number">
            </div>
             <div>
                <label for="descricao">Descrição produto</label>
                <input name="descricao" value="<?php echo $produto['descricao']; ?>" id="descricao" type="text">
            </div>
             <div>
                <label for="preco">preço</label>
                <input name="preco" value="<?php echo $produto['preco']; ?>" id="preco" type="number">
            </div>
             <div>
                <label for="quantidade">quantidade</label>
                <input name="quantidade" value="<?php echo $produto['quantidade']; ?>" id="quantidade" type="number">
            </div>
            
            <input name="id" type="hidden" value="<?php echo $produto['id']; ?>" id="id" type="text">

            <div>
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>
</main>



</body>
</html>