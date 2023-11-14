<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Licenciaturas</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-md bg-body-tertiary">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu-principal"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu-principal">
            <div class="navbar-nav">
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">Licenciaturas</a>

                    <ul class="dropdown-menu">
                        <li class="dropdown-item">IG</li>
                        <li class="dropdown-item">CDG</li>
                    </ul>
                </div>

                <a class="nav-link" href="#">Serviços</a>
            </div>
        </div>

    </nav>

    <?php
    $user = 'root';
    $pass = '';
    try{
        $dbh = new PDO('mysql:host=localhost;dbname=web;charset=utf8', $user, $pass);
    } catch (PDOException $e){
        echo 'Deu erro.';
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
                echo $licenciatura->nome;
                echo '<br>';
            }
        ?>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script>
        function fecharImagem() {
            document.getElementById('coimbra').classList.add('d-none')
        }

        /*carousel*/
        const elemento = document.querySelector('#ultimas-noticias');
        const carousel = new bootstrap.Carousel(elemento, {
            interval: 500,
        });

        /*const modal-apresentacao = document.getElementById('modal-apresentacao')
        const myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', () => {
            myInput.focus()
        })*/

        document.getElementById('btn-enviar').onclick = function(){
            let email = document.getElementById('txt-email').value;
            let comentario = document.getElementById('txt-comentario').value;

            //fechar o modal
            let modal = document.getElementById('modal-apresentacao');


            alert(email+'\n'+comentario)
            //console.log(email, comentario)
        }

    </script>
</body>

</html>