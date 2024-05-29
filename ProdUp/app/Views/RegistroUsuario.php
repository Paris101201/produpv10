<?php
    //use App\Controllers\ProdUp;
    //use CodeIgniter\Controller;
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Registro</title>
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
                <strong>Nota: Todos los campos marcados un * son obligatorios</strong>   
                <form class="row g-4" method="POST">
                    <div class="col-md-3">
                        <label for="Nombre" class="form-label">*Nombre(s):</label>
                        <input type="text" class="form-control" id="Nombre" required>
                    </div>
                    <div class="col-md-3">
                        <label for="ApPaterno" class="form-label">*Apellido Paterno:</label>
                        <input type="text" class="form-control" id="ApPaterno" required>
                    </div>
                    <div class="col-md-3">
                        <label for="ApMaterno" class="form-label">Apellido Materno:</label>
                        <input type="text" class="form-control" id="ApMaterno" >
                    </div>
                    <div class="col-md-3">
                        <label for="CorreoElec" class="form-label">*Correo Electronico:</label>
                        <input type="email" class="form-control" id="CorreoElec" required>
                    </div>
                    <div class="col-md-3">
                        <label for="NoCel" class="form-label">*No. Celular:</label>
                        <div class="input-group">
                            <span class="input-group-text" id="52">+52</span>
                            <input type="tel" class="form-control" id="NoCel" required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="CP" class="form-label">*CP:</label>
                        <div class="input-group-append">
                            <input type="text" class="form-control" id="CP" name="CP" minlength="5" maxlength="5" required>
                            <button id="cp" class="btn btn-primary" type="button" name ="cp"> 
                                <span class="fa fa-search"></span> 
                            </button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="Estado" class="form-label" name="estado">*Estado:</label>
                        <input type="text" class="form-control" id="Estado" name="Estado" required disabled>
                    </div>
                    <div class="col-md-3">
                        <label for="DelMuni" class="form-label">*Delegacion o Municipio:</label>
                        <input type="text" class="form-control" id="DelMuni" required disabled>
                    </div>
                    <div class="col-md-3">
                        <label for="Colonia" class="form-label">*Colonia:</label>
                        <input type="text" class="form-control" id="Colonia" required disabled>
                    </div>
                    <div class="col-md-3">
                        <label for="Direccion" class="form-label">*Direccion:</label>
                        <input type="text" class="form-control" id="Direccion" required>
                    </div>
                    <div class="col-md-3">
                        <label for="NoInt" class="form-label">*No. Interior:</label>
                        <input type="text" class="form-control" id="NoInt" required>
                    </div>
                    <div class="col-md-3">
                        <label for="NoExt" class="form-label">No. Exterior:</label>
                        <input type="text" class="form-control" id="NoExt">
                    </div>
                    <div class="col-md-12">
                        <label for="Referencias" class="form-label">*Referencias del domicilio,ejemplo: Entres calles..., frente a..., etc:</label>
                        <input type="text" class="form-control" id="Referencias" required>
                    </div>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                        Informacion sobre pagos
                    </button>
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="fa fa-info-circle fs-5" id="staticBackdropLabel">
                                        Informacion Pagos
                                    </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <p>Recuerda que para poder vender en produp.com.mx
                                        es necesaria la siguiente informacion:
                                        <n>RFC, CURP y No. de Cuenta Bancaria.</n>
                                        Sin estos datos no podras vender en la plataforma.
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
                                        Aceptar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="RFC" class="form-label">RFC:</label>
                        <input type="text" class="form-control" id="RFC" minlength="12" maxlength="13">
                    </div>
                    <div class="col-md-4">
                        <label for="CURP" class="form-label">CURP:</label>
                        <input type="text" class="form-control" id="CURP" minlength="18" maxlength="18">
                    </div>
                    <div class="col-md-4">
                        <label for="NoCuentaClabe" class="form-label">No. de clabe inter-bancaria:</label>
                        <input type="text" class="form-control" id="NoCuentaClabe">
                    </div>
                    <strong>*Recuerda que la contrase&ntilde;a debe tener como minimo 8 caracteres:</strong>
                    <div class="col-md-3">
                        <div class="input-group-append">
                            <input ID="txtPassword" type="password" Class="form-control" placeholder="Crea tu Contrase&ntilde;a" required>
                            <div class="input-group-append">
                                <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> 
                                    <span class="fa fa-eye-slash icon"></span> 
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group-append">
                            <input ID="txtPassword2" type="password" Class="form-control" placeholder="Confirma tu Contrase&ntilde;a" required>
                            <div class="input-group-append">
                                <button id="show_password2" class="btn btn-primary" type="button" onclick="mostrarPassword2()"> 
                                    <span class="fa fa-eye-slash icon"></span> 
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked>
                                <label class="form-check-label" for="defaultCheck1">
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        Terminos y Condiciones
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </button>
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">
                                                        Terminos y Condiciones
                                                    </h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                    <p>AQUI VAN A ESTAR TODOS TUS TERMINOS Y CONDICIONES
                                                    ESTE DOCUMENTO TAMBIEN ESTARA POR APARTE PARA CUALQUIER
                                                    CONSULTA
                                                    AQUI VAN A ESTAR TODOS TUS TERMINOS Y CONDICIONES
                                                    ESTE DOCUMENTO TAMBIEN ESTARA POR APARTE PARA CUALQUIER
                                                    CONSULTA
                                                    AQUI VAN A ESTAR TODOS TUS TERMINOS Y CONDICIONES
                                                    ESTE DOCUMENTO TAMBIEN ESTARA POR APARTE PARA CUALQUIER
                                                    CONSULTA
                                                    AQUI VAN A ESTAR TODOS TUS TERMINOS Y CONDICIONES
                                                    ESTE DOCUMENTO TAMBIEN ESTARA POR APARTE PARA CUALQUIER
                                                    CONSULTA
                                                    AQUI VAN A ESTAR TODOS TUS TERMINOS Y CONDICIONES
                                                    ESTE DOCUMENTO TAMBIEN ESTARA POR APARTE PARA CUALQUIER
                                                    CONSULTA
                                                    AQUI VAN A ESTAR TODOS TUS TERMINOS Y CONDICIONES
                                                    ESTE DOCUMENTO TAMBIEN ESTARA POR APARTE PARA CUALQUIER
                                                    CONSULTA
                                                    AQUI VAN A ESTAR TODOS TUS TERMINOS Y CONDICIONES
                                                    ESTE DOCUMENTO TAMBIEN ESTARA POR APARTE PARA CUALQUIER
                                                    CONSULTA
                                                    AQUI VAN A ESTAR TODOS TUS TERMINOS Y CONDICIONES
                                                    ESTE DOCUMENTO TAMBIEN ESTARA POR APARTE PARA CUALQUIER
                                                    CONSULTA
                                                    AQUI VAN A ESTAR TODOS TUS TERMINOS Y CONDICIONES
                                                    ESTE DOCUMENTO TAMBIEN ESTARA POR APARTE PARA CUALQUIER
                                                    CONSULTA
                                                    AQUI VAN A ESTAR TODOS TUS TERMINOS Y CONDICIONES
                                                    ESTE DOCUMENTO TAMBIEN ESTARA POR APARTE PARA CUALQUIER
                                                    CONSULTA</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Aceptar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                            </input>
                        </div>
                    </div>
                    <div class="col-3">
                        <button class="btn btn-success" >Registrate</button>
                    </div>
                    <p></p>
                </form> 
                <p></p>
            </div>
        </div>
        <footer>
            <div class="container-fluid text-center p-3">
                <p class ="samll">ProdUp S.A. de C.V. © 2023 PRODUP Todos los derechos reservados. | Diseñado por: Ing. Cortez Garcia Carlos</p>
            </div>
        </footer>

    <script type="text/javascript">
            $("#CP").blur(function(e){
                $.ajax({type: "POST",
                cache: false,
                async: true,
                url: consulta_cp,
                data: {"CP":$("#CP").val()},
                dataType: "text",
                success: function(datos)
                    {
                        var respuesta_json = jQuery.parseJSON(datos);
                        $("Estado").val(respuesta_json.Estado)
                    },
                        error: function(err_get_records)
                        {

                        }
                });
            });
    </script>

    </body>
</html>

