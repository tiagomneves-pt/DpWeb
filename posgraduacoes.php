<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desenvolvimento para a WEB</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/web.css">
</head>
<body>

<?php require('includes/database.php') ?>
<?php require('includes/menu.php')?>

    <?php
        $sql1 = 'SELECT * FROM areas WHERE visivel = 1 ORDER BY nome';
        $stmt1 = $dbh->prepare($sql1);
        $stmt1->execute();
        //echo $stmt1->rowCount();

        $sql2 = 'SELECT * FROM posgraduacoes WHERE visivel = 1 AND areaid = :area ORDER BY nome';
        $stmt2 = $dbh->prepare($sql2);
        /* dp bindParam() e execute() */

    ?>


    <div class="container mt-4">

        <?php 
        while($area = $stmt1->fetchObject()){
            $areaid = $area->id;
            $color = $area->color;
            $nome = $area->nome;

            $stmt2->bindParam(':area', $areaid);
            $stmt2->execute();
            ?>

            <!-- nome da area com respectiva cor -->            
            <div class="mt-2 p-3 text-white <?= $color ?>">
                <?= $nome ?>
            </div>
            <!-- as posgraduacoes de cada area -->
            <table class="table">
                <tr>
                    <th>Pós-graduação</th>
                    <th class="text-center" style="width:6rem;">Edição</th>
                    <th style="width:8rem;">&nbsp;</th>
                </tr>
                <?php 
                while($pg = $stmt2->fetchObject()){
                    $nome = $pg->nome;
                    $edicao = $pg->edicao;
                ?>
                    <tr>
                        <td class="text-uppercase"><?= $nome ?></td>
                        <td class="text-center"><?= $edicao ?></td>
                        <td><a href="#" class="btn btn-primary w-100">+ info</a></td>
                    </tr>


                <?php
                } // while das pos-graduações
                ?>
            </table>
        <?php
        } // do while das areas
        ?>

    </div>


    <footer class="position-fixed bottom-0 w-100 bg-dark-subtle mt-4">
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

    <script src="js/bootstrap.bundle.min.js"></script>
    <script>
    </script>
</body>
</html>