<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desenvolvimento para a WEB</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/web.css">
</head>
<body>
<?php

if (isset($_GET['id'])&& $_GET['id']>0 && $_GET['id']<6) {
        $areaId = $_GET['id'];
    }     
    else
    {
            header('Location:../index.php');
    }
        
?>

<?php require('../includes/menu.php')?>
    
    
    <?php
    $user = 'root';
    $pass = '';

    try {
        $dbh = new PDO('mysql:host=localhost;dbname=web;charset=utf8', $user, $pass);
    } catch (PDOException $e) {
        // attempt to retry the connection after some timeout for example
        echo $e;
    }
    ?>




<?php
$sql1 = 'SELECT * FROM areas WHERE visivel = 1 AND id = :id';
$stmt1 = $dbh->prepare($sql1);
$stmt1->bindParam(':id', $areaId);
$stmt1->execute();

?>

<div class="container mt-4">
    <?php
    while ($area = $stmt1->fetchObject()) {
        $areaid = $area->id;
        $color = $area->color;
        $nome = $area->nome;

        $sql2 = 'SELECT id, nome, edicao, visivel FROM posgraduacoes 
            WHERE areaid = :id ORDER BY visivel DESC, nome';
        $stmt2 = $dbh->prepare($sql2);
        $stmt2->bindParam(':id', $areaid);
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
            while ($pg = $stmt2->fetchObject()) {
                $nome    = $pg->nome;
                $edicao  = $pg->edicao;
                $visivel = $pg->visivel;
            ?>
                <tr>
                    <td class="text-uppercase"><?= $nome ?></td>
                    <td class="text-center"><?= $edicao ?></td>
                    <td>
                        <a href="posgraduacao.php?id=<?= $pg->id ?>" class="btn btn-primary w-100">Editar</a>
                    </td>
                    <td>
                        <?php if($visivel == 1){ ?>
                        <button data-visivel="0" data-pgid="<?= $pg->id ?>" class="btn btn-outline-danger w-100" onclick="visibilidadePg(this)">Esconder</button>
                        <?php }else{ ?>
                        <button data-visivel="1" data-pgid="<?= $pg->id ?>" class="btn btn-outline-success w-100" onclick="visibilidadePg(this)">Mostrar</button>
                        <?php } ?>
                    </td>
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

    <script>
        /*visibilidade das pós-grads*/
        function visibilidadePg(btn){
            //console.log('estou por aqui', btn);

            let pgId    = btn.dataset.pgid;
            let visivel = btn.dataset.visivel;


            var xhttp = new XMLHttpRequest();

            xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // Typical action to be performed when the document is ready:
                console.log(this.response);
                window.location.reload();
                }
            };

            xhttp.open("GET", `visibilidade.php?pgId=${pgId}&visivel=${visivel}`);  
            xhttp.send();
        }
    </script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script>
    </script>
</body>
</html>