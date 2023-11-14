<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 8</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>



    <div class="position-absolute z-3 d-none">
        <!--d-none = display-none = esconder-->
        <img style="width: 200px;" src="imagens/CC_logo.png" alt="">
    </div>

    <nav class="navbar navbar-expand-md bg-body-tertiary">
        <a href="aula7.html" class="navbar-brand">
            <img style="width: 200px;" src="imagens/CC_logo.png" alt="">
        </a>

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


    <div id="coimbra" class="position-absolute top-50 start-50 translate-middle">
        <img class="w-100" src="imagens/coimbra.jpg" alt="paisagem">
        <div class="position-absolute">
            <button onclick="fecharImagem()" type="button" class="btn btn-close" aria-label="Close">

            </button>
        </div>

    </div>

    </div>



    <div class="container">
        <div class="row">
            <div class="col-10 bg-secondary-subtle">
                <div>
                    <!--<img class="img-fluid w-100" src="https://via.placeholder.com/400x180" alt="">-->



                    <div id="ultimas-noticias" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-item active">
                                <img src="http://via.placeholder.com/200x90" class="d-block w-100" alt="Avatar 1">
                            </div>
                            <div class="carousel-item">
                                <img src="http://via.placeholder.com/400x180" class="d-block w-100" alt="Avatar 2">
                            </div>
                            <div class="carousel-item">
                                <img src="http://via.placeholder.com/800x360" class="d-block w-100" alt="Avatar 3">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 pt-3">
                        <p class="fw-bold fs-5">Eventos</p>
                        <span>Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
                            "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                            voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                            cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id
                            est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam
                            libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod
                            maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
                            Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut
                            et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a
                            sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis
                            doloribus asperiores repellat."</span>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 pt-3">
                        <p class="fw-bold fs-5">Noticias</p>
                        <span>Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
                            "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                            voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                            cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id
                            est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam
                            libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod
                            maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
                            Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut
                            et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a
                            sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis
                            doloribus asperiores repellat."</span>
                    </div>
                    <div class="d-md-none d-lg-block col-12 col-md-6 col-lg-4 pt-3">
                        <p class="fw-bold fs-5">Festas</p>
                        <span>Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
                            "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                            voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                            cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id
                            est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam
                            libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod
                            maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
                            Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut
                            et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a
                            sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis
                            doloribus asperiores repellat."</span>
                    </div>
                </div>
            </div>
            <div class="col-2 bg-warning-subtle">
                <form action="">
                    <div class="p-2">
                        <input type="text" class="mb-3 form-control form-control-sm" placeholder="insira email"
                            required>
                        <input type="text" class="mb-3 form-control form-control-sm" placeholder="insira nome" required>
                        <button class="btn btn-sm btn-success w-100">Inscrever</button>
                    </div>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Comentar
                    </button>
                    <div>
                        <div id="email-modal">[Email]</div>
                        <div id="comentario-modal">[Comentário]</div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Novo comentário</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Email:</label>
                            <input type="email" class="form-control" id="txt-email" placeholder="Correio eletrónico">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Comentário:</label>
                            <textarea class="form-control" id="txt-comentario" placeholder="Escreva aqui o seu comentário"></textarea>

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button id="btn-enviar" type="button" class="btn btn-primary" data-bs-dismiss="modal">Enviar</button>
                </div>
            </div>
        </div>
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