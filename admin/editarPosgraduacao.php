<?php 
$pgId = $_GET['pgId'];
$nome = $_GET['nome'];
$ed   = $_GET['edicao'];

if(isset($_GET['visivel'])){
    $v = 1;  
}else{
    $v = 0;
}

require('../includes/database.php');
$sql = 'UPDATE posgraduacoes SET nome = :n, edicao = :e, visivel = :v WHERE id = :id';
$stmt = $dbh->prepare($sql);
$stmt->bindParam(':n', $nome);
$stmt->bindParam(':e', $ed);
$stmt->bindParam(':v', $v);
$stmt->bindParam(':id', $pgId);
$stmt->execute();

header('Location:posgraduacao.php?id='.$pgId);
die();

?>