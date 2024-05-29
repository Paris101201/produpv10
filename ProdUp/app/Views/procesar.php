<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="icon" href="logo.png">
        <link rel="stylesheet" href="estilo.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </head>

    <body>
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
                            <button class="btn btn-outline-success" type="submit">Buscar</button>
                        </form>
                    </div>
                </div>
            </nav>
            <p></p>
            <div class="row"  id="ok">
                <center>
                    <h1>Felicidas tu producto se cargo satisfactoriamente</h1>
                    <img img src="logo.png" width="150px">
                    <h5>Recuerda que entre mayor productos vendas a mayor gente llegaran tus productos</h5>
                </center>
                <p></p>
            </div>
            <p></p>
            <div class="alert alert-info" role="alert">
                Tu producto se cargado correctamente. Quieres ver tu inventario da<a href="#" class="alert-link"> clik aqui </a>. ProdUp siempre inovando para ti.
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

        </script>

    </body>

</html>