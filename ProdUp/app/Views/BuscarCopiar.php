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
            #ML{
                display: none;
            }
            #compartir2{
                display: none;
            }
            #accion{
                display: none;
            }
            #todo{
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
                                        <a class="nav-link active" href="http://localhost/ProdUp/public/BuscarCopiar">
                                            <i class="fa fa-files-o">
                                                Buscar y Copiar
                                            </i>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="http://localhost/ProdUp/public/CargaMasiva">
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
            <div class="row"  id="marcas">
                <center>
                    <h2>¿En que plataforma deseas buscar tu producto?</h2>
                </center>
                <div class="col-md-2">
                <p></p>
                </div>
                <div class="col-md-2">
                    <button class="btn" onClick="buscaML('ML')">
                        <img img src="ML.jpg" width="150px">
                    </button>
                </div>
                <div class="col-md-2">
                    <button class="btn">
                        <img img src="TEMU.png" width="150px">
                    </button>
                </div>
                <div class="col-md-2">
                    <button class="btn">
                        <img img src="amazon.png" width="150px">
                    </button>
                </div>
                <div class="col-md-2">
                    <button class="btn">
                        <img img src="Shein.png" width="150px">
                    </button>
                </div>
                <div class="col-md-2">

                </div>
            </div>
            <div class="row">
                <div class="col-md-1">

                </div>

                <div class="col-md-10" id="ML">
                    <center>
                        <h2>Busca tu producto en Mercado Libre</h2>
                        <p></p>
                    </center>
                    <p></p>
                    <form class="d-flex" role="search" action="index.php" method="post">
                        <input class="form-control me-2" placeholder="Buscar" aria-label="Search" type="text" name="id" id="id" value=""></input>
                        <input class="btn btn-outline-success" type="submit" value="Buscar"></input>
                        &nbsp;&nbsp;&nbsp;
                        <a type="button" href="http://localhost/ProdUp/public/BuscarCopiar" class="btn btn-outline-danger">Cancelar</a>
                    </form>
                </div>
                <div class="col-md-1">

                </div>
                <p></p>
            </div>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" >
                    Usuario #CGC231211000001
                     <i class="fa fa-user" aria-hidden="true"></i>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <i class="fa fa-address-book" aria-hidden="true"></i>
                            <a href="https://adminlte.io/themes/v3/index.html">
                                Mi perfil
                            </a>
                    </li>
                </ul>
            </li>
            

            
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Solicitar Negocio
                                    <i class="fa fa-handshake-o" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Comprar
                                    <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" role="button" id="compartir1" onClick="compartir('compartir2')">
                                    Mostrar productos para Compartir
                                    <i class="fa fa-share-alt" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="nav-item dropdown" id="compartir2">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="compa" disabled>
                                    Compartir
                                    <i class="fa fa-share-alt" aria-hidden="true"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                        <a href="javascript:abrir('https://api.whatsapp.com/send?phone=5543439573&text= Hola, ejemplo te desea compartir su producto!')">
                                            WhatsApp
                                        </a>
                                    </li>
                                    <li>
                                        <i class="fa fa-telegram" aria-hidden="true"></i>
                                        <a href="https://telegram.me/IDUsuarioTest" target="_blank">
                                            Telegram
                                        </a>
                                    </li>
                                    <li>
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                        <a href="javascript:abrir('https://api.whatsapp.com/send?phone=5543439573&text= Hola, ejemplo te desea compartir su producto!')">
                                            Facebook
                                        </a>
                                    </li>
                                    <li>
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                        <a href="javascript:abrir('https://api.whatsapp.com/send?phone=5543439573&text= Hola, ejemplo te desea compartir su producto!')">
                                            Instagran
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" role="button" id="todo" onClick="mostrartodo('compartir1')">
                                    Mostrar Todo
                                    <i class="fa fa-list-alt" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown" id="accion">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Acciones
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Editar</a></li>
                                    <li><a class="dropdown-item" href="#">Facebook</a></li>
                                    <li><a class="dropdown-item" href="#">Instagram</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                <input class="form-control me-12" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
                    </div>
                </div>
                <button type="button" class="btn btn-primary position-relative" id="liveToastBtn">
                <i class="fa fa-bell" aria-hidden="true"></i>
  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
    99+
    <span class="visually-hidden">unread messages</span>
  </span>
</button>
            </nav>
            <div class="toast-container position-fixed bottom-0 end-0 p-3">
  <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="logo.png" class="rounded me-2" alt="Bootstrap" width="35" height="35">
      <strong class="me-auto">Notificaciones</strong>
      <small>Hace 11 minutos</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      El usuario #CGC231211000001, solicita negocio de tu siguiente producto:
      <center>
            <h5 class="card-title" style="color:#25AE38">Producto #1</h5>
            <p></p> 
    </center>
    <img src="iphone.jpg" alt="Producto" width="50" height="50">

    </div>
  </div>
</div>

            <div class="row">
                <h2>DashBoard:</h2>
                <div class="col-md-3">
                    <div class="card" style="width: 15rem;">
                        <div class="card-body">

                            <div class="form-check" onClick="mostrarcompartir('')" align="right" >
                                <input class="form-check-input border-info-subtle" type="checkbox" id="producto1"></input>
                                <label class="form-check-label" for="Agro2"></label>
                                
                            </div>
                            <center>
                                <h5 class="card-title" style="color:#25AE38">Producto ID: 43532</h5>
                                <p></p>
                            </center>
                            <img src="iphone.jpg" alt="Producto" width="200" height="200">
                            <p></p>
                            <p class="card-text">
                                Nombre del Producto: Iphone 15
                                <br>
                                Descripcion: SmartPhone .........
                                <br>
                                Precio: $11,550.00
                                Proveedor: #CGC231211000001
                                Publicado: 29/03/2024
                                Status: ACTIVO
                                <br>
                                <i class="fa fa-pencil fa-3x"></i>Editar
                            </p>
                        </div>
                    </div>
                </div>
            </div>   
            
        <footer>
            <div class="container-fluid text-center p-3">
                <p class ="samll">ProdUp S.A. de C.V. © 2023 PRODUP Todos los derechos reservados. | Diseñado por: Ing. Cortez Garcia Carlos</p>
            </div>
        </footer>

        <script>
const toastTrigger = document.getElementById('liveToastBtn')
const toastLiveExample = document.getElementById('liveToast')

if (toastTrigger) {
  const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)
  toastTrigger.addEventListener('click', () => {
    toastBootstrap.show()
  })
}

            window.addEventListener('load',() => {
                const loader = document.querySelector('.loader')
                loader.style.visibility = 'hidden';
                loader.style.opacity = 0;
            })

            function buscaML(){
            document.getElementById('ML').style.display = 'block';
            document.getElementById('marcas').style.display = 'none';
            }

            function mostrarcompartir() {
                if ( document.getElementById("producto1").checked==true ) {
                    document.querySelector('#compa').disabled = false;
                }else{
                    document.querySelector('#compa').disabled = true;
                }
            }
            function compartir() {
                document.getElementById('compartir2').style.display = 'block';
                document.getElementById('compartir1').style.display = 'none';
                document.getElementById('todo').style.display = 'block';
            }
            function mostrartodo() {
                document.getElementById('compartir2').style.display = 'none';
                document.getElementById('compartir1').style.display = 'block';
                document.getElementById('todo').style.display = 'none';
            }

            function abrir(url) {
                open(url,'','top=300,left=800,width=800,height=800') ;
            }
            
        </script>

    </body>

</html>