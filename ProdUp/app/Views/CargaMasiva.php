<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Carga Masiva</title>
        <link rel="icon" href="logo.png">
        <link rel="stylesheet" href="estilo.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <style>
        #ocultar2{
            display: none;
        }
        #ocultar3{
            display: none;
        }
        #regiration_form fieldset:not(:first-of-type) {
            display: none;
        }
        </style>
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
            <p></p>
            <div class="row">
                <div class="col-md-4">

                </div>
                <div class="col-md-4">

                </div>
                <div class="col-md-4" id="ocultar1">
                    <button class="btn btn-success" onClick="mostrarocultar('ocultar2')">
                        Carga productos
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">

                </div>

                <div class="col-md-8" id="ocultar2">
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>   
                    <form id="regiration_form" novalidate action="action.php"  method="post">
                        <fieldset>
                            <h2>Paso 1: Descarga el siguiente formato en Excel</h2>
                            <div class="form-group">
                                <center>
                                    <a href="http://localhost/ProdUp/public/CARGA_MASIVA.xlsx"">
                                        <img src="Excel.png" width="150" height="150">
                                    </a>
                                    <p></p>
                                    <h5>¡Click en la imagen para descargar!</h5>
                                </center>
                            </div>
                            <a type="button" href="http://localhost/ProdUp/public/CargaMasiva" class="previous btn btn-danger">Cancelar</a>
                            <input type="button" name="next" class="next btn btn-success" value="Siguiente"></input>
                        </fieldset>
                        <fieldset>
                            <h2>Paso 2: Una vez llenado el formato carga aqui el archivo</h2>
                            <div class="form-group">
                                <label>Carga tu Archivo</label>
                                <div>
                                    <input type="file" name="file" id="file" accept=".xls,.xlsx">
                                </div>
                            </div>
                            <input type="button" name="previous" class="previous btn btn-warning" value="Regresar"></input>
                            <input type="button" name="next" class="next btn btn-success" value="Siguiente" onClick="Validar2('')"></input>
                        </fieldset>
                    </form>
                
            </div>
            <p></p>
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

            function mostrarocultar(){
            document.getElementById('ocultar2').style.display = 'block';
            document.getElementById('ocultar1').style.display = 'none';
            }

            function cargar(){
            document.getElementById('ocultar3').style.display = 'block';
            }

            $(document).ready(function(){
                    var current = 1,current_step,next_step,steps;
                    steps = $("fieldset").length;
                    $(".next").click(function(){
                        current_step = $(this).parent();
                        next_step = $(this).parent().next();
                        next_step.show();
                        current_step.hide();
                        setProgressBar(++current);
                    });
                    $(".previous").click(function(){
                        current_step = $(this).parent();
                        next_step = $(this).parent().prev();
                        next_step.show();
                        current_step.hide();
                        setProgressBar(--current);
                    });
                    setProgressBar(current);
                    // Change progress bar action
                    function setProgressBar(curStep){
                        var percent = parseFloat(100 / steps) * curStep;
                        percent = percent.toFixed();
                        $(".progress-bar")
                        .css("width",percent+"%")
                        .html(percent+"%");   
                    }
                    });

        </script>

    </body>

</html>
