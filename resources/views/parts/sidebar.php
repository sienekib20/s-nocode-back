<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-danger elevation-4">
  <!-- Brand Logo -->
  <a href="<?= route('nocode') ?>" class="brand-link">
    <img src="<?= asset('img/AdminLTELogo.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Backoffice</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">

    <span class="d-block mt-1 text-dark">1</span>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="<?= route('nocode') ?>" class="nav-link <?= request()->path() == '/nocode' ? 'active' : '' ?>">
            <i class="nav-icon fas fa-home"></i>
            <p>Inicio</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= route('templates.list') ?>" class="nav-link <?= request()->path() == '/templates/list' ? 'active' : '' ?>">
            <i class="bi bi-collection-fill nav-icon pl-1"></i>
            <p>Templates</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= route('templates.categoria') ?>" class="nav-link <?= request()->path() == '/templates/categoria' ? 'active' : '' ?>">
            <i class="bi bi-layers-fill nav-icon pl-1"></i>
            <p>Categorias template</p> <!-- ficheiros audios permitidos ou nao -->
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= route('templates.add') ?>" class="nav-link <?= request()->path() == '/templates/add' ? 'active' : '' ?>">
            <i class="far fa-plus nav-icon"></i>
            <p>Adicionar template</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= route('templates.edited') ?>" class="nav-link <?= request()->path() == '/templates/edited' ? 'active' : '' ?>">
            <i class="bi bi-pencil-square nav-icon pl-1"></i>
            <p>Templates editados</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= route('templates.list') ?>" class="nav-link <?= request()->path() == '/templates/usage' ? 'active' : '' ?>">
            <i class="bi bi-person-fill nav-icon pl-1"></i>
            <p>Templates em uso</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= route('parceiros') ?>" class="nav-link <?= request()->path() == '/parceiros' ? 'active' : '' ?>">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Parceiros
              <!-- <span class="badge badge-info right">2</span> -->
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= route('planos') ?>" class="nav-link <?= request()->path() == '/planos' ? 'active' : '' ?>">
            <i class="nav-icon fas fa-list"></i>
            <p>Planos e preços</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= route('planos.aderidos') ?>" class="nav-link <?= request()->path() == '/planos/aderidos' ? 'active' : '' ?>">
            <i class="nav-icon fas fa-shopping-cart"></i>
            <p>Planos aderidos</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= route('mensagem') ?>" class="nav-link <?= request()->path() == '/mensagem' ? 'active' : '' ?>">
            <i class="nav-icon far fa-message"></i>
            <p>
              Mensagens Clientes
            </p> 
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= route('pedidos') ?>" class="nav-link <?= request()->path() == '/pedidos' ? 'active' : '' ?>">
            <i class="nav-icon far fa-arrow-up"></i>
            <p>
              Pedidos
            </p> 
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>