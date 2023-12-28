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
                        <span class="default">Templates</span>
                        <small class="tw-muted">Todos os templates criados</small>
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
                                <div class="tdata col-3">Template</div>
                                <div class="tdata col-2">Tipo</div>
                                <div class="tdata col-1">Autor</div>
                                <div class="tdata col-1">Status</div>
                                <div class="tdata col-1">Preço</div>
                                <div class="tdata col-1">Criação</div>
                                <div class="tdata col-2">Ação</div>
                            </div>
                        </div>
                        <div class="tbody">
                            <?php if (count($templates) > 0) : ?>
                                <?php foreach ($templates as $template) : ?>
                                    <div class="trow">
                                        <div class="tdata col-1"><?= $template->template_id ?></div>
                                        <div class="tdata col-3"><?= $template->titulo ?></div>
                                        <div class="tdata col-2"><?= $template->tipo ?></div>
                                        <div class="tdata col-1"><?= $template->autor ?></div>
                                        <div class="tdata col-1"><?= $template->status ?></div>
                                        <div class="tdata col-1"><?= $template->preco ?></div>
                                        <div class="tdata col-1"><?= $template->created_at ?></div>
                                        <div class="tdata col-2">
                                            <a href=""> <i class="bi bi-eye"></i> </a>
                                            <a href=""> <i class="bi bi-pencil-square"></i> </a>
                                            <a href=""> <i class="bi bi-trash"></i> </a>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <div class="trow">
                                    <div class="tdata col-12">Sem templates disponíveis. <a href="<?= route('templates.add') ?>" class="no-style">criar</a> </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="table_actions">
                        <?php if (count($templates) > 0) : ?>
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