<?php

include("infra/conn.php");

$sql = "SELECT * FROM produtos";
$resultado = $conn->query($sql);

?>

<html>

<table border="1">
    <tr>
        <th>NOME</th>
        <th>CODIGO</th>
        <th>DESCRICAO</th>
        <th>PREÇO</th>
        <th>QUANTIDADE</th>

        <th>opções</th>
    </tr>

    <?php
    while( $produto = $resultado->fetch_assoc()) { ?>
    <tr> 
        <td><?php echo $produto['nome']; ?></td>
        <td><?php echo $produto['codigo']; ?></td>
        <td><?php echo $produto['descricao']; ?></td>
        <td><?php echo $produto['preco']; ?></td>
        <td><?php echo $produto['quantidade']; ?></td>

        <td>
<form action="component/excluir.php" method="POST">
    <input type="hidden"name="id" value="<?php echo $produto['id'];?>">
    <button type="submit">Excluir</button>
</form>
<form action="component/editar.php" method="POST">
    <input type="hidden"name="id" value="<?php echo $produto['id'];?>">
    <button type="submit">Editar</button>
</form>

        </td>
    </tr>
    <?php } ?>
</table>


</html>