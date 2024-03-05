<!DOCTYPE html>
<html lang="en">

<head>
    <title>%title%</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= asset('css/adminlte.min.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/fonts/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/fonts/bootstrap-icons.css') ?>">
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
                            <h1 class="m-0">Categorias</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Categorias</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body" style="overflow-x: auto;">
                                    <table class="table table-bordered">
                                        <thead class="bg-light">
                                            <tr>
                                                <td>#</td>
                                                <td>Categoria</td>
                                                <td>Preço</td>
                                                <td>Ação</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($categorias as $cat) : ?>
                                                <tr>
                                                    <td><?= $cat->categoria_id ?></td>
                                                    <td id="editType-name-<?= $cat->categoria_id ?>"><?= $cat->categoria ?></td>
                                                    <td><?= $cat->preco ?> KZ</td>
                                                    <td>
                                                        <span>
                                                            <a href="#" id="editT-<?= $cat->categoria_id ?>" class="edit_template_c">Editar</a>
                                                            <a href="#">Excluir</a>
                                                        </span>
                                                    </td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                    <!-- /.table -->
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- col-md-6 -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="col-12">
                                        <form action="<?= route('template.add.categoria') ?>" method="post" id="templateTypeForm">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Categoria</label>
                                                        <input type="text" name="categoria" class="form-control" placeholder="Categoria">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Preço</label>
                                                        <input type="text" name="preco" class="form-control" placeholder="0.00">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.row -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Criação</label>
                                                    <input type="text" name="data" class="form-control" placeholder="2024-01-05" disabled>
                                                </div>
                                            </div>
                                            <!-- /.row -->
                                            <div class="card"></div>
                                            <div class="card"></div>
                                            <div class="row">
                                                <div class="col-md-6 ml-auto">
                                                    <button type="submit" class="btn btn-primary btn-block" id="addTemplateType">Adicionar</button>
                                                    <button type="submit" class="btn btn-primary btn-block d-none" id="updateTemplateType">Actualizar</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- /.form -->
                                    </div>
                                    <!-- /.col-12 -->
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        </div> <!-- /.content-wrapper -->

    </div>
    <!-- /.wrapper -->
    <?= parts('wait') ?>
    <?= parts('footer') ?>


</body>

</html>
<!-- section(js) -->
<script src="<?= asset('js/jquery-3.3.1.min.js') ?>"></script>
<script src="<?= asset('js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= asset('js/adminlte.js') ?>"></script>

<script>
    const templateTypeForm = document.getElementById('templateTypeForm');
    const btnEditTemplateType = document.querySelectorAll('.edit_template_c');
    let currentId = -1;
        btnEditTemplateType.forEach(btnEdit => {
            btnEdit.addEventListener('click', (e) => {
                var id = e.target.id.split('-')[1];
                currentId = id;
                var currentItemName = document.getElementById('editType-name-'+id);
                document.querySelector('[name="categoria"]').value = currentItemName.innerText;
                var btnAddTemplateType = document.getElementById('addTemplateType');
                    btnAddTemplateType.classList.add('d-none');
                    btnAddTemplateType.nextElementSibling.classList.remove('d-none');
            });
        });
    const btnUpdateTemplateType = document.getElementById('updateTemplateType');
        btnUpdateTemplateType.addEventListener('click', (e) => {
            $('.wait-loader').removeClass('hide');
            e.preventDefault();
            const formData = new FormData(templateTypeForm);
            formData.append('id', currentId);
            const xhr = new XMLHttpRequest;
            xhr.open('POST', '/templates/type/update');
            xhr.onload = () => {
                if (xhr.status>= 200 && xhr.status< 300) {
                    setTimeout(() => {
                        $('.wait-loader').addClass('hide');
                    }, 1500);
                    var result = JSON.parse(xhr.responseText);
                    if (result == 'ok') {
                        alert('Actualizado com sucesso');
                        window.location.reload(true);
                    }
                    return;
                } 
                console.log(JSON.parse(xhr.responseText));
                alert('Algo deu errado, por favor tente mais tarde');
            };
            xhr.onerror = () => {
                setTimeout(() => {
                        $('.wait-loader').addClass('hide');
                    }, 1500);
                    alert("Erro ao enviar formulário:", JSON.parse(xhr.responseText));
            };
            xhr.send(formData);
        });                                             
</script>