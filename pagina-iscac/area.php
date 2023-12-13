<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desenvolvimento para a WEB</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/web.css">
</head>
<body>
<?php

//$_GET -> variável global do php
    if(isset($_GET['id'])){
        $areaID = $_GET['id'];
    } else{
        header('Location:index.php');
    }


?>
<?php require('includes/database.php') ?>
<?php require('includes/menu.php')?>

<?php
$sql = 'SELECT id, nome, edicao FROM posgraduacoes WHERE areaid = :id AND visivel = 1';
$stmt = $dbh->prepare($sql);
$stmt->bindParam(':id', $areaID);
$stmt->execute();

if($stmt && $stmt->rowCount() > 0){
?>
    <div class="container mt-5">
        <p>Existem <?= $stmt->rowCount() ?> pós graduações</p>
    </div>

<?php
}
?>

    <footer class="position-fixed bottom-0 w-100 bg-dark-subtle mt-5">
        <div class="container p-4">
            <div class="row">
                <div class="col-4">
                    <div>Coimbra Business School</div>
                    <div>Quinta Agrícola - Bencanta</div>
                    <div>3045-601 Coimbra</div>
                </div>
                <div class="col-4">
                    <div>Tel.: +351 239 802 187</div>
                    <div>Fax: +351 239 445 445</div>
                    <div>Email: bs (at) iscac.pt</div>
                </div>
                <div class="col-4 text-end">
                    <a href="#" target="_blank" class="p-1">
                    <i class="bi bi-meta" style="font-size: 2rem; color: cornflowerblue;"></i></a>
                    <a href="#" target="_blank" class="p-1">
                    <i class="bi bi-linkedin" style="font-size: 2rem; color: cornflowerblue;"></i></a>
                    
                </div>
            </div>
        </div>
            
    </footer>
</body>
</html>