<nav class="spn-navbar">
    <?php require view_path() . '/parts/over/overlay.php' ?>

    <div class="spn-container">
        <div class="spn-app">
            <small class="bi-code-slash"></small>
            <span>Nocode</span>
        </div>
        <div class="spn-nav-items">
            <!-- <div class="spn-nav-item">
                <a href="" class="nav-link">
                    <small class="bi-question-circle"></small>
                </a>
            </div> -->

            <div class="spn-nav-item">
                <a href="" class="nav-link">
                    <?php if (session()->get('user_id') == null) : ?>
                        <small class="text">Username</small>
                    <?php else : ?>
                        <small class="text">Óla, <?= session()->get('username') ?></small>
                    <?php endif; ?>
                </a>
            </div>

            <div class="spn-nav-item">
                <a href="" class="nav-link">
                    <small class="bi-bell"></small>
                </a>
            </div>

            <div class="spn-nav-item menu">
                <span class="line-menu"></span>
                <span class="line-menu"></span>
                <span class="line-menu"></span>
            </div>

        </div>

    </div>
</nav>


<div class="spn-mnav">

    <div class="loader">
        <span class="bi-code-slash"></span>
    </div>

    <div class="mnav-header">
        <span class="bi-x">Fechar</span>
    </div>
    <div class="mnav-items">
        <div class="mnav-item <?= request()->path() == '/' ? 'active' : '' ?> <?= request()->path() == '/nocode' ? 'active' : '' ?>">
            <a href="<?= route('') ?>" class="mnav-link">
                <span>Inicio</span>
            </a>
        </div>

        <div class="mnav-item <?= request()->path() == '/templates/list' ? 'active' : '' ?>">
            <a href="<?= route('templates.list') ?>" class="mnav-link">
                <span>Templates</span>
            </a>
        </div>

        <div class="mnav-item <?= request()->path() == '/templates/tipo' ? 'active' : '' ?>">
            <a href="<?= route('templates.categoria') ?>" class="mnav-link">
                <span>Categorias template</span>
            </a>
        </div>

        <div class="mnav-item <?= request()->path() == '/templates/add' ? 'active' : '' ?>">
            <a href="<?= route('templates.add') ?>" class="mnav-link">
                <span class="bi-plus">Adcionar</span>
            </a>
        </div>

        <div class="mnav-item <?= request()->path() == '/parceiros' ? 'active' : '' ?>">
            <a href="<?= route('parceiros') ?>" class="mnav-link">
                <span>Parceiros</span>
            </a>
        </div>

        <div class="mnav-item <?= request()->path() == '/parceiros' ? 'active' : '' ?>">
            <a href="<?= route('parceiros') ?>" class="mnav-link">
                <span>Pacotes aderidos</span>
            </a>
        </div>

        <div class="mnav-item <?= request()->path() == '/parceiros' ? 'active' : '' ?>">
            <a href="<?= route('parceiros') ?>" class="mnav-link">
                <span>Mensagem clientes</span>
            </a>
        </div>

        <div class="mnav-item <?= request()->path() == '/parceiros' ? 'active' : '' ?>">
            <a href="<?= route('parceiros') ?>" class="mnav-link">
                <span>Pedidos</span>
            </a>
        </div>

        <div class="mnav-item">
            <?php if (session()->auth()) : ?>
                <a href="<?= route('logout') ?>" class="mnav-link">
                    <span>Sair</span>
                </a>
            <?php else : ?>
                <a href="<?= route('login') ?>" class="mnav-link">
                    <span>Entrar</span>
                </a>
            <?php endif; ?>
        </div>

    </div>
</div>


<script>
    try {
        $('.spn-nav-item.menu').click(() => {
            $('body').css('overflow', 'hidden');
            $('.spn-mnav').addClass('active');
            $('.spn-overlay').addClass('active');
        });

        $('.mnav-header').click(() => {
            $('body').css('overflow', 'auto');
            $('.spn-mnav').removeClass('active');
            $('.spn-overlay').removeClass('active');
        });


        setTimeout(() => {
            $('.loader').addClass('hide');
        }, 1000);

    } catch (error) {
        console.error(error);
    }
</script>