<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/web.css">
</head>
<body>

<?php
//id da pg
$pgId = $_GET['id'];
require('../includes/database.php');
$sql = 'SELECT * FROM posgraduacoes WHERE id = :id';
$stmt = $dbh->prepare($sql);
$stmt->bindParam(':id', $pgId);
$stmt->execute();

$pg = $stmt->fetchObject();
?>

<p class="display-3 text-center"><?= $pg->nome ?></p>

<div class="w-50 mx-auto border border-3 p-4">
    <form action="editarPosgraduacao.php" method="GET">
        <input name="pgId" type="hidden" value="<?= $pg->id ?>">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input name="nome" value="<?= $pg->nome ?>" type="text" class="form-control" id="nome" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="mb-3">
            <label for="edicao" class="form-label">Edição</label>
            <input name="edicao" value="<?= $pg->edicao ?>" type="number" class="form-control" id="edicao" placeholder="Edição">
        </div>
        <div class="mb-3 form-check">
            <input name="visivel" type="checkbox" class="form-check-input" id="visivel"
                <?php if($pg->visivel == 1) echo 'checked'; ?>>
            <label class="form-check-label" for="visivel">Visível</label>
        </div>
        <button type="submit" class="btn btn-primary">Alterar</button>
    </form>
</div>



<script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>