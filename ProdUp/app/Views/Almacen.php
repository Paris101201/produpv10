<!DOCTYPE html>
    <html lang="es">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <title>Alamacen</title>
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
                        <h1>Mi Almacen</h1>
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

                                <div class="form-check" onClick="mostrarcompartir('')" align="center" >
                                    <input class="form-check-input border-info-subtle" type="checkbox" id="producto1"></input>
                                    <label class="form-check-label" for="Agro2"></label>
                                    
                                </div>
                                <center>
                                    <h5 class="card-title" style="color:#25AE38">Producto ID: 43532</h5>
                                    <p></p>
                                </center>
                                <img src="j1.jpg" alt="Producto" width="200" height="200">
                                <p></p>
                                <p class="btn btn-primary" align="center">
                                    <i align="center" class="fa fa-pencil "></i>Editar
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <b>Titulo del producto:</b>
                        <br>Jordan 1</br> 
                        <b>#Codigo de publicacion:</b>
                        <br>#1286423</br>
                        <b>Proveedor:</b>
                        <br>#CGC231211000001</br>
                        <b>Fecha de publicacion:</b>
                        <br>2024/04/03 22:24:00.000</br>
                    </div>
                    <div class="col-md-6">
                        <center>
                            <h5 class="card-title" style="color:#25AE38">Precios:</h5>
                            <p></p>
                        </center>
                        <div class="container" id="Precio1">
                            <div class="form-group row">
                                <label for="precio1" class="col-form-label col-2">
                                    Precio 1:
                                </label>
                                <div class="col-2">
                                     <input type="text" name="precio1" id="precio1" class="form-control" placeholder="Precio 1" tabindex="1">
                                </div>
                                <label for="por" class="col-form-label col-1">
                                    Por
                                </label>
                                <div class="col-2">
                                    <input type="text" name="pzas1" id="pzas1" class="form-control" placeholder="No.Pzas" tabindex="1">
                                </div>
                                <label for="hasta" class="col-form-label col-2">
                                    o hasta
                                </label>
                                 <div class="col-2">
                                    <input type="text" name="pzas1_2" id="pzas1_2" class="form-control" placeholder="No.Pzas" tabindex="1">
                                </div>
                            </div>
                        </div>
                        <div class="container" id="Precio2">
                            <div class="form-group row">
                                <label for="precio1" class="col-form-label col-2">
                                    Precio 2:
                                </label>
                                <div class="col-2">
                                    <input type="text" name="precio2" id="precio2" class="form-control" placeholder="Precio 2" tabindex="1">
                                </div>
                                <label for="por" class="col-form-label col-1">
                                    Por
                                </label>
                                <div class="col-2">
                                    <input type="text" name="pzas2" id="pzas2" class="form-control" placeholder="No.Pzas" tabindex="1">
                                </div>
                                     <label for="hasta" class="col-form-label col-2">
                                        o hasta
                                    </label>
                                    <div class="col-2">
                                        <input type="text" name="pzas2_2" id="pzas2_2" class="form-control" placeholder="No.Pzas" tabindex="1">
                                    </div>
                            </div>
                        </div>
                        <div class="container" id="Precio3">
                            <div class="form-group row">
                                <label for="precio1" class="col-form-label col-sm-2">
                                    Precio 3:
                                </label>
                                <div class="col-sm-2">
                                    <input type="text" name="precio3" id="precio3" class="form-control" placeholder="Precio 3" tabindex="1">
                                </div>
                                <label for="por" class="col-form-label col-sm-1">
                                    Por
                                </label>
                                <div class="col-sm-2">
                                    <input type="text" name="pzas3" id="pzas3" class="form-control" placeholder="No.Pzas" tabindex="1">
                                </div>
                                <label for="hasta" class="col-form-label col-sm-2">
                                    o hasta
                                </label>
                                <div class="col-sm-2">
                                    <input type="text" name="pzas3_2" id="pzas3_2" class="form-control" placeholder="No.Pzas" tabindex="1">
                                </div>
                            </div>
                        </div>
                        <div class="container" id="Precio4">
                            <div class="form-group row">
                                <label for="precio1" class="col-form-label col-sm-2">
                                    Precio 4:
                                </label>
                                 <div class="col-sm-2">
                                    <input type="text" name="precio1" id="precio1" class="form-control" placeholder="Precio 4" tabindex="1">
                                </div>
                                <label for="por" class="col-form-label col-sm-1">
                                    Por
                                </label>
                                <div class="col-sm-2">
                                    <input type="text" name="pzas4" id="pzas4" class="form-control" placeholder="No.Pzas" tabindex="1">
                                </div>
                                <label for="hasta" class="col-form-label col-sm-2">
                                    o hasta
                                </label>
                                <div class="col-sm-2">
                                    <input type="text" name="pzas4_2" id="pzas4_2" class="form-control" placeholder="No.Pzas" tabindex="1">
                                </div>
                                <div id="mas1" class="col-1">
                                    <a role="button" class="btn btn-info" onClick="muestraPrecio2('')">
                                        <span class="fa fa-plus-circle"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                
            </div>

            <script>
                window.addEventListener('load',() => {
                    const loader = document.querySelector('.loader')
                    loader.style.visibility = 'hidden';
                    loader.style.opacity = 0;
                })
            </script>


        </body>
    </html>