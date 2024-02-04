<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">Home</a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Navbar Search -->
    <li class="nav-item">
      <a class="nav-link" data-widget="navbar-search" href="#" role="button">
        <i class="fas fa-search"></i>
      </a>
      <div class="navbar-search-block">
        <form class="form-inline">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
              <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </li>

    <li class="nav-item dropdown">
      <?php if (session()->get('user_id') == null) : ?>
        <a href="<?= route('login') ?>" class="nav-link">
          <small class="text">Entrar</small>
        </a>
      <?php else : ?>
        <a class="nav-link" data-toggle="dropdown" href="#">
          <span class="text">Óla, <?= session()->get('username') ?> <i class="bi bi-chevron-down"></i> </span>
        </a>
      <?php endif; ?>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <a href="#" class="dropdown-item">
          <i class="fas fa-wrench mr-2"></i> Configurar conta
        </a>
        <div class="dropdown-divider"></div>
        <a href="<?= route('logout') ?>" class="dropdown-item">
          <i class="fas fa-power-off mr-2"></i> Terminar sessão
        </a>
        <div class="dropdown-divider"></div>
      </div>
    </li>
  </ul>
</nav>
<!-- /.navbar -->