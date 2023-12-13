<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/component.css?v=" <?= time() ?>>
    <link rel="stylesheet" href="/assets/css/bootstrap-icons.css">
    <script src="/assets/js/jquery-3.3.1.min.js"></script>
    <title>
        <?= 'Partner' ?>
    </title>
</head>

<body>

    <div class="spn-wrapper">
        <?= parts('nav.spn-navbar') ?>

        <div class="card-section">
            <div class="card-section-header">
                <div class="spn-container">
                    <div class="title">
                        <span class="default">Parceiros</span>
                        <small class="tw-muted">Parceiros registados na plataforma</small>
                    </div>

                    <form action="" class="form-filter has-icon-on-left">
                        <small class="bi-search"></small>
                        <input type="text" class="filter-input" placeholder="Pesquisar um template">
                    </form>
                </div>
            </div>
            <div class="card-section-contain">
                <div class="spn-container">
                    <div class="dtable">
                        <div class="thead">
                            <div class="trow">
                                <div class="tdata col-1">Id</div>
                                <div class="tdata col-3">Nome</div>
                                <div class="tdata col-1">Gênero</div>
                                <div class="tdata col-2">Email</div>
                                <div class="tdata col-1">Telefone</div>
                                <div class="tdata col-1">Templates</div>
                                <div class="tdata col-1">Criação</div>
                                <div class="tdata col-2">Ação</div>
                            </div>
                        </div>
                        <div class="tbody">
                            <?php if (count($data) > 0) : ?>
                                <div class="trow">
                                    <div class="tdata col-1"><?= $i + 1 ?></div>
                                    <div class="tdata col-3">Parceio name</div>
                                    <div class="tdata col-1">M</div>
                                    <div class="tdata col-2">parceiro@dominio.com</div>
                                    <div class="tdata col-1">9xx xxx xxx</div>
                                    <div class="tdata col-1"><?= $i ?></div>
                                    <div class="tdata col-1">2023-12-10</div>
                                    <div class="tdata col-2">
                                        <a href=""> <i class="bi bi-eye"></i> </a>
                                        <a href=""> <i class="bi bi-pencil-square"></i> </a>
                                        <a href=""> <i class="bi bi-trash"></i> </a>
                                    </div>
                                </div>
                            <?php else : ?>
                                <div class="trow">
                                    <div class="tdata col-12">Sem parceiros na plataforma</div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="table_actions">
                        <?php if (count($data) > 0) : ?>
                            <a href=""> <small class="bi bi-arrow-left"></small> anterior </a>
                            <div class="counter"> <span>1</span> de <span>3</span> </div>
                            <a href=""> próximo <small class="bi bi-arrow-right"></small> </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        </div>


    </div> <!--/.sp-wrapper-->

</body>

</html>