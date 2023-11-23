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
<?php require('includes/menu.php')?>

    
    <div class="container mt-5">
    
        <div id="novidades" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#novidades" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#novidades" data-bs-slide-to="1" aria-label="Slide 2"></button>    
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" >
                    <img src="http://via.placeholder.com/1200x540" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" >
                    <img src="http://via.placeholder.com/800x360" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#novidades" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#novidades" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>            
       
    </div>

    <div class="container mt-5 mb-5">
        <div class="d-flex align-items-stretch">
            <div class="color-area1 text-white fs-4 text-center p-5 flex-grow-2 d-flex align-items-center">
                <span>Auditoria e <br>Sistemas de Informação</span>
            </div>
            <div class="color-area2 text-white fs-4 text-center p-5 flex-grow-2 d-flex align-items-center">
                <span>Contabilidade e Fiscalidade</span>
            </div>
            <div class="color-area3 text-white fs-4 text-center p-5 flex-grow-2 d-flex align-items-center">
                <span>Direito</span>
            </div>
            <div class="color-area4 text-white fs-4 text-center p-5 flex-grow-2 d-flex align-items-center">
                <span>Gestão e Administração</span>
            </div>
            <div class="color-area5 text-white fs-4 text-center p-5 flex-grow-2 d-flex align-items-center">
                <span>Marketing</span>
            </div>
        </div>    
    
    </div>


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

    <script src="js/bootstrap.bundle.min.js"></script>
    <script>
    </script>
</body>
</html>