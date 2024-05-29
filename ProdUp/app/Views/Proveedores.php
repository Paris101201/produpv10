<!DOCTYPE html>

    <html lang="es">
        
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <title>Proveedores</title>
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
                <div class="row">
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-7">
                        <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
                            <div class="container-fluid">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://localhost/ProdUp/public/CargaManual">
                                                <i class="fa fa-list">
                                                    Carga Manual
                                                </i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://localhost/ProdUp/public/BuscarCopiar">
                                                <i class="fa fa-files-o">
                                                    Buscar y Copiar
                                                </i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active" href="http://localhost/ProdUp/public/CargaMasiva">
                                                <i class="fa fa-database">
                                                    Carga Masiva
                                                </i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">
                                                <i class="fa fa-handshake-o">
                                                    Re-vender sin invertir
                                                </i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">

                    </div>

                    <div class="col-md-4">
                        <h1>Mis Proveedores</h1>
                    </div>
                    
                    <div class="col-md-4">
                        
                    </div>
                </div>
                <p><p>

                <div class="row">
                    <div class="col-md-8">
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Buscar</button>
                        </form>
                    </div>

                    <div class="col-md-4">
                        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <i class="fa fa-sliders">
                                Filtrar
                            </i>
                        </a>
                        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <i class="fa fa-wrench">
                                Acciones
                            </i>
                        </a>
                        <div class="collapse" id="collapseExample">
                            <div class="card card-body">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Categoria
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Proveedor
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Fecha Publicacion
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Estatus
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p><p>
                    <div class="col-md-3">
                        <div class="card" style="width: 15rem;">
                            <div class="card-body">
                                <img src="avatar.png" alt="Producto" width="200" height="200">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <b>Nombre del proveedor:</b>
                        <br>#CGC231211000001</br> 
                        <b>#Articulos cargados:</b>
                        <br>136</br>
                        <b>Empezaste a seguirlo:</b>
                        <br>2024/04/03 22:24:00.000</br>
                    </div>
                    <div class="col-md-6">
                        <a href="http://localhost/ProdUp/public/AlmacenProve" class="btn btn-success">
                            <i align="center" class="fa fa-eye">
                                Ver Almacen
                            </i>
                        </a>
                    </div>
                    <p></p>
                    <div class="col-md-3">
                        <div class="card" style="width: 15rem;">
                            <div class="card-body">
                                <img src="avatar2.png" alt="Producto" width="200" height="200">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <b>Nombre del proveedor:</b>
                        <br>#CGC231211000001</br> 
                        <b>#Articulos cargados:</b>
                        <br>136</br>
                        <b>Empezaste a seguirlo:</b>
                        <br>2024/04/03 22:24:00.000</br>
                    </div>
                    <div class="col-md-6">
                        <a href="http://localhost/ProdUp/public/AlmacenProve" class="btn btn-success">
                            <i align="center" class="fa fa-eye">
                                Ver Almacen
                            </i>
                        </a>
                    </div>               
                </div>

                <script>
                    window.addEventListener('load',() => {
                        const loader = document.querySelector('.loader')
                        loader.style.visibility = 'hidden';
                        loader.style.opacity = 0;
                    })
                </script>
            </div>
        </body>
    </html>