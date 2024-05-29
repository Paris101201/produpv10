      <!-- Sidebar menu-->
      <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
      <aside class="app-sidebar">
        <div class="app-sidebar__user">
          <img class="app-sidebar__user-avatar" src="<?= media(); ?>/images/logo.png" alt="User Image">
          <div>
            <p class="app-sidebar__user-name">Octavio</p>
            <p class="app-sidebar__user-designation">Frontend Developer</p>
          </div>
        </div>
        <ul class="app-menu">
          <li>
            <a class="app-menu__item" href="<?= base_url(); ?>/dashboard">
              <i class="app-menu__icon fa fa-line-chart" aria-hidden="true"></i>
              <span class="app-menu__label">
                Dashboard
              </span>
            </a>
          </li>
          <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview">
              <i class="app-menu__icon fa fa-user-plus" aria-hidden="true"></i>
              <span class="app-menu__label">
                Usuarios Master
              </span>
              <i class="treeview-indicator fa fa-angle-right"></i>
            </a>
            <ul class="treeview-menu">
              <li>
                <a class="treeview-item" href="<?= base_url(); ?>/usuariosMaster">
                  <i class="icon fa fa-circle-o"></i>
                  Usuarios
                </a>
              </li>
              <li>
                <a class="treeview-item" href="<?= base_url(); ?>/roles">
                  <i class="icon fa fa-circle-o"></i>
                  Roles
                </a>
              </li>
              <li>
                <a class="treeview-item" href="<?= base_url(); ?>/permisos">
                  <i class="icon fa fa-circle-o"></i>
                  Permisos
                </a>
              </li>
            </ul>
          </li>
          <li>
            <a class="app-menu__item" href="<?= base_url(); ?>/usuariosProdup">
              <i class="app-menu__icon fa fa-users" aria-hidden="true"></i>
              <span class="app-menu__label">
                Usuarios ProdUp
              </span>
            </a>
          </li>
          <li>
          <li>
            <a class="app-menu__item" href="<?= base_url(); ?>/productos">
              <i class="app-menu__icon fa fa-archive" aria-hidden="true"></i>
              <span class="app-menu__label">
                Productos
              </span>
            </a>
          </li>
          <li>
            <a class="app-menu__item" href="<?= base_url(); ?>/pedidos">
              <i class="app-menu__icon fa fa-shopping-cart" aria-hidden="true"></i>
              <span class="app-menu__label">
                Pedidos
              </span>
            </a>
          </li>
          <li>
            <a class="app-menu__item" href="<?= base_url(); ?>/ganancias">
              <i class="app-menu__icon fa fa-usd" aria-hidden="true"></i>
              <span class="app-menu__label">
                Ganancias
              </span>
            </a>
          </li>
          <li>
            <a class="app-menu__item" href="<?= base_url(); ?>/bancoProdup">
              <i class="app-menu__icon fa fa-university" aria-hidden="true"></i>
              <span class="app-menu__label">
                Banco ProdUp
              </span>
            </a>
          </li>
          <li>
            <a class="app-menu__item" href="<?= base_url(); ?>/salir">
              <i class="app-menu__icon fa fa-sign-in" aria-hidden="true"></i>
              <span class="app-menu__label">
                Salir
              </span>
            </a>
          </li>
        </ul>
      </aside>