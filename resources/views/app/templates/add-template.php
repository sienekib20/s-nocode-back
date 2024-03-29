<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= asset('css/component.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/adminlte.min.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/fonts/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/fonts/bootstrap-icons.css') ?>">
    <script src="<?= asset('js/jquery-3.3.1.min.js') ?>"></script>
    <script src="<?= asset('js/image/load_replace.js') ?>"></script>
    <title>title</title>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="<?= asset('img/AdminLTELogo.png') ?>" alt="AdminLTELogo" height="60" width="60">
        </div>
        <?= parts('navbar') ?>
        <?= parts('sidebar') ?>
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Adicionar template</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Adicionar</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div> <!--/.content-header-->
            <section class="content">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-12">
                                <form action="" method="POST" id="add-template-form" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-6">
                                            <label class="input-label">Título template</label>
                                            <input type="text" name="titulo" id="title" class="form-control" required placeholder="Titulo">
                                        </div>
                                        <div class="col-6">
                                            <label class="input-label">Autor</label>
                                            <input type="text" name="autor" class="form-control" placeholder="Autor" required>
                                        </div>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-6">
                                            <label class="input-label">Nível de acesso</label>
                                            <select name="status" id="paystatus" class="form-control">
                                                <option value="Grátis">Template Grátis</option>
                                                <option value="Pago">Template Pago</option>
                                            </select>
                                        </div>
                                        <div class="col-6">
                                            <label class="input-label">Preço</label>
                                            <input type="text" name="preco" id="preco" class="form-control" autocomplete="off" placeholder="0.00" disabled required>
                                        </div>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-6">
                                            <label class="input-label">Edição</label>
                                            <select name="editar" id="editable" class="form-control">
                                                <option value="YES">Template Editável</option>
                                                <option value="NO">Não editável</option>
                                            </select>
                                        </div>
                                        <div class="col-6">
                                            <label class="input-label">Tipo template</label>
                                            <select name="tipo_template" id="tipo" class="form-control">
                                                <?php foreach ($tipo as $t) : ?>
                                                    <option value="<?= $t->tipo_template_id ?>"><?= $t->tipo_template ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-6">
                                            <label for="formFile" class="input-label">Carregar template</label>
                                            <input class="form-control" id="zip" name="zip" accept=".zip" type="file" id="formFile">
                                        </div>
                                        <div class="col-6">
                                            <label for="cover" class="input-label">Carregar Imagem de Capa</label>
                                            <input class="form-control" id="cover" name="cover" accept="image/*" type="file" id="cover">
                                        </div>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-6">
                                            <label class="input-label">Categoria</label>
                                            <select name="categoria_template" id="tipo" class="form-control">
                                                <?php foreach ($categorias as $c) : ?>
                                                    <option value="<?= $c->categoria_id ?>"><?= $c->categoria ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="col-6">
                                            <label class="input-label">Descreva o template</label>
                                            <textarea name="descricao" name="descricao" id="descricao" class="form-control" placeholder="Descricao" required></textarea>
                                        </div>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-6">
                                            <button class="btn btn-danger btn-block" id="btn-add-template">adicionar</button>
                                        </div>
                                    </div>
                                </form> <!--/.form-->
                            </div>
                        </div>
                    </div>
                </div>
            </section><!--/.content-->
        </div><!--/.content-wrapper-->
    </div> <!--/.wrapper-->

    <?= parts('wait') ?>
    <?= parts('footer') ?>
</body>

</html>

<div class="routes">
    <input type="hidden" value="<?= env('API_URL') ?>" id="api_route">
</div>

<script src="<?= asset('js/add-template/index.js') ?>"></script>
<script src="<?= asset('js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= asset('js/adminlte.js') ?>"></script>