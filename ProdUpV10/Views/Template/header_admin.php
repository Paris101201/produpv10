<!DOCTYPE html>
  <!-- IDIOMA DE LA PAGINA -->
  <html lang="es">
    <head>
      <!-- Codificacion de nuestro archivo, sirve para los caracteres especiales -->
      <meta charset="utf-8">
      <!-- Descripcion de la pagina dentro del navegador -->
      <meta name="description" content="ProdUp tu tienda ">
      <!-- Para la compatibilidad del navegador Edge de Microsoft -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- Vista responsiva -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Creador de la aplicacion -->
      <meta name="author" content="Cortez Garcia Carlos Guillermo">
      <!-- Color para el template mod-celular -->
      <meta name="theme-color" content="#009688">
      <!--LOGO DE LA PAGINA-->
      <link rel="icon" href="<?= media(); ?>/images/favicon.ico">
      <!--TITULO DE LA PAGINA-->
      <title><?= $data['page_tag'] ?></title>
      <!--HOJA DE ESTILO Y HERRAMIENTAS DE ESTILO EXCLUSIVAS PARA PRODUP-->
      <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/main.css">
      <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/style.css">
      <!-- Fuentes-iconos css-->
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body class="app sidebar-mini">
      <!-- Navbar Barra de Navegacion-->
      <!-- Titulo de la barra -->
      <header class="app-header">
        <a class="app-header__logo" href="<?= base_url(); ?>/dashboard">
           Master ProdUp
        </a>
        <!-- Boton de la barra izquierda -->
        <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
        <!-- Navbar Barra de Navegacion menu derecho-->
        <ul class="app-nav">
          <li class="app-search">
            <input class="app-search__input" type="search" placeholder="Buscar">
            <button class="app-search__button"><i class="fa fa-search"></i></button>
          </li>
          <!-- Menu de Notificacion -->
          <!-- <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
            <ul class="app-notification dropdown-menu dropdown-menu-right">
              <li class="app-notification__title">You have 4 new notifications.</li>
              <div class="app-notification__content">
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Lisa sent you a mail</p>
                      <p class="app-notification__meta">2 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Mail server not working</p>
                      <p class="app-notification__meta">5 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Transaction complete</p>
                      <p class="app-notification__meta">2 days ago</p>
                    </div></a></li>
                <div class="app-notification__content">
                  <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                      <div>
                        <p class="app-notification__message">Lisa sent you a mail</p>
                        <p class="app-notification__meta">2 min ago</p>
                      </div></a></li>
                  <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                      <div>
                        <p class="app-notification__message">Mail server not working</p>
                        <p class="app-notification__meta">5 min ago</p>
                      </div></a></li>
                  <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                      <div>
                        <p class="app-notification__message">Transaction complete</p>
                        <p class="app-notification__meta">2 days ago</p>
                      </div></a></li>
                </div>
              </div>
              <li class="app-notification__footer"><a href="#">See all notifications.</a></li>
            </ul>
          </li> -->
          <!-- Menu de opciones para Usuario-->
          <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
            <ul class="dropdown-menu settings-menu dropdown-menu-right">
              <li>
                <a class="dropdown-item" href="<?= base_url(); ?>/ajustes">
                  <i class="fa fa-cog fa-lg"></i>
                  Ajustes
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="<?= base_url(); ?>/perfil">
                  <i class="fa fa-user fa-lg"></i>
                  Perfil
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="<?= base_url(); ?>/salir">
                  <i class="fa fa-sign-out fa-lg"></i>
                  Salir
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </header>
      <?php require_once("nav_admin.php"); ?>