<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Introduccion</title>
        <link rel="icon" href="logo.png"/>
        <link rel="stylesheet" href="estilo.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </head>

    <body  class="p-3 m-0 border-0 bd-example m-0 border-0 bd-example-cssgrid">
        <div class="loader">
        </div>
        <p></p>
        <div class = "container">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="http://localhost/ProdUp/public/">
                        <img src="logo.png" alt="Bootstrap" width="50" height="50">ProdUp
                    </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                  </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="http://localhost/ProdUp/public/">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Mayoreo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Pool</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Saldos/Remates
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Saldos</a></li>
                                    <li><a class="dropdown-item" href="#">Remates</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Ver Ofertas</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost/ProdUp/public/Introduccion">Vender</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost/ProdUp/public/IniciarSesion/">Inicia Sesion/Registrate</a>
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">
                                <span class="fa fa-search"></span> 
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
            <p></p>
            <div class="row">
                <div class="col-md-2">

                </div>
                <div class="col-md-8">
                    <center>
                        <h1 style="color:#FFE03A">¿Listo para vender?</h1>
                        <h2 style="color:#25AE38">Aqui tienes unas herramientas para
                                                <br>cargar tu stock en ProdUp facilmente.</h2>
                    </center>
                </div>

            </div>
            <p></p>
            <div class="row">
                <div class="col-md-3">

                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 15rem;">
                        <div class="card-body">
                            <center>
                                <h5 class="card-title" style="color:#25AE38">Carga Manual</h5>
                                <p></p>
                                <i class="fa fa-list fa-5x"></i>
                                <p class="card-text">Ideal para productos <br>nuevos.</p>
                                <a href="http://localhost/ProdUp/public/CargaManual" class="btn btn-success">¡Carga Aqui!</a>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 15rem;">
                        <div class="card-body">
                            <center>
                                <h5 class="card-title" style="color:#FFE03A">Buscar y copiar</h5>
                                <p></p>
                                <i class="fa fa-files-o fa-5x"></i> 
                                <p class="card-text">Ideal para productos populares.</p>
                                <a href="http://localhost/ProdUp/public/BuscarCopiar" class="btn btn-warning">¡Carga Aqui!</a>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">

                </div>
            </div>
            <p></p>
            <div class="row">
                <div class="col-md-3">

                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 15rem;">
                        <div class="card-body">
                            <center>
                                <h5 class="card-title" style="color:#FFE03A">Carga Masiva</h5>
                                <p></p>
                                <i class="fa fa-database fa-5x"></i>
                                <p class="card-text">Ideal para productos resurtibles.</p>
                                <a href="http://localhost/ProdUp/public/CargaMasiva" class="btn btn-warning">¡Carga Aqui!</a>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 15rem;">
                        <div class="card-body">
                            <center>
                                <h5 class="card-title" style="color:#25AE38">Re-vender sin invertir</h5>
                                <p></p>
                                <i class="fa fa-handshake-o fa-5x"></i> 
                                <p class="card-text">Ideal para productos <br>nuevos.</p>
                                <<a href="http://localhost/ProdUp/public/" class="btn btn-success">¡Carga Aqui!</a>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">

                </div>
            </div>

        </div>
        <footer>
            <div class="container-fluid text-center p-3">
                <p class ="samll">ProdUp S.A. de C.V. © 2023 PRODUP Todos los derechos reservados. | Diseñado por: Ing. Cortez Garcia Carlos</p>
            </div>
        </footer>

        <script>
            window.addEventListener('load',() => {
                const loader = document.querySelector('.loader')
                loader.style.visibility = 'hidden';
                loader.style.opacity = 0;
            })

            //function mostrar(){
               // document.getElementById('img').style.display = 'block';
            //}

            //function ocultar(){
                //document.getElementById('ocultar1').style.display = 'none';
                //document.getElementById('ocultar2').style.display = 'none';
                //document.getElementById('ocultar3').style.display = 'none';
                //document.getElementById('mostrar1').style.display = 'block';
            //}
        </script>


    </body>

</html>
