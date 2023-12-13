<?php 
$pgId = $_GET['pgId'];
$visivel = $_GET['visivel'];


require('../includes/database.php');
$sql = 'UPDATE posgraduacoes SET visivel = :visivel WHERE id = :pgId';
$stmt = $dbh->prepare($sql);
$stmt->bindParam(':visivel', $visivel);
$stmt->bindParam(':pgId', $pgId);
$stmt->execute();

echo 'resposta';
die();

?>