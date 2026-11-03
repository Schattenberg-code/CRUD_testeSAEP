<?php

include("../infra/conn.php");

$id = $_POST['id'];

$sql = "DELETE FROM produtos WHERE id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

header("location: ../index.php");

?>