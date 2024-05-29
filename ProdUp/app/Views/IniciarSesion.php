
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Iniciar_Sesion</title>
        <link rel="icon" href="logo.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type='text/javascript' src="muestracontra.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>    
    </head>

    <body>
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
                                <a class="nav-link" href="#">Pool</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Mayoreo</a>
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
            <div class="row">

                <div class="col-md-4">
                </div>

                <from class="col-md-4" method="post">
                    <center><img src="usuario.png" width="150" height="150"></center>
                    <p></p>
                    <div class="card">
                        <div class="card-header">
                            Inicia Sesion en ProdUp
                          </div>
                        <div class="card-body">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="Ingresa tu correo" >
                                <label for="floatingInput">Ingresa tu correo</label>
                            </div>
                            <div class="input-group-append">
                                    <input ID="txtPassword" type="password" Class="form-control" placeholder="Ingresa tu Contrase&ntilde;a">
                                    <div class="input-group-append">
                                        <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> 
                                            <span class="fa fa-eye-slash icon"></span> 
                                        </button>
                                    </div>
                            </div>
                            <p></p>
                            <a class="link-danger" href="http://localhost/ProdUp/public/RegistroUsuario/" >
                                <strong><u>¿Olvidaste tu Contra&ntilde;a?</u></strong>
                                <span class="fa fa-info-circle"></span>
                            </a>
                            <p></p>
                            <center><button type="submit" class="btn btn-primary">Iniciar Sesion</button></center>
                        </div>
                    </div>
                </form>
                ¿No tienes cuenta? 
                <a class="link" href="http://localhost/ProdUp/public/RegistroUsuario/" > 
                    <strong><u>Registrate aqui</u></strong>
                    <span class="fa fa-file-text"></span>
                </a>

                <div class="col-md-4">
                </div>
            </div>
    </body>
    <footer>
        <div class="container-fluid text-center p-5">
            <p class ="samll">ProdUp S.A. de C.V. © 2023 PRODUP Todos los derechos reservados. | Diseñado por: Ing. Cortez Garcia Carlos</p>
        </div>
    </footer>
</html>