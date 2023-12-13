<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Licenciaturas</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>   
    
    <nav class="navbar navbar-expand-md bg-body-tertiary">
        <a href="aula7.html" class="navbar-brand">
            <img style="width:50px;" src="imagens/logotipo.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#menu-principal" 
            aria-controls="navbarNavAltMarkup" 
            aria-expanded="false" 
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

        <div class="collapse navbar-collapse" id="menu-principal">
            <div class="navbar-nav">
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle" 
                        href="#"
                        role="button" 
                        data-bs-toggle="dropdown" 
                        aria-expanded="false">Licenciaturas</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item">Gestão de Empresas</li>
                        <li class="dropdown-item">Informática de Gestão</li>
                    </ul>    
                </div>
                <a class="nav-link" href="#">Serviços</a>
            </div>
        </div>
    </nav>
  
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
    $sql = 'SELECT * FROM licenciaturas WHERE visivel = 1';
    $stmt = $dbh->prepare($sql);

    $stmt->execute();

    //echo $stmt->rowCount();

    ?>


    <div class="container">
        <h1>Licenciaturas</h1>
        <?php
            while($licenciatura = $stmt->fetchObject()){
                echo "<div>$licenciatura->nome</div>";
               
            }
        ?>
    </div>


 
    

    <script src="js/bootstrap.bundle.min.js"></script>
    <script>
    </script>
</body>
</html>