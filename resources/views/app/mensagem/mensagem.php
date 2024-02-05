<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= asset('css/adminlte.min.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/fonts/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/fonts/bootstrap-icons.css') ?>">
    <title>Mensagem</title>
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
                    <h1 class="m-0">Mensagens</h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active">Mensagens</li>
                    </ol>
                  </div><!-- /.col -->
                </div><!-- /.row -->
              </div><!-- /.container-fluid -->
            </div>
            <section class="content">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body" style="overflow-x: auto;">
                        <table class="table table-bordered">
                          <thead class="bg-light">
                            <tr>
                              <td>#</td>
                              <td>Expediente</td>
                              <td>E-mail</td>
                              <td>Nº Telefone</td>
                              <td>Mensagem</td>
                              <td>Data do envio</td>
                              <td>Ação</td>
                            </tr>
                          </thead>
                          <tbody>
                            <?php foreach($mensagens as $sms): ?>
                              <tr>
                                <td><?= $sms->mensagen_id ?></td>
                                <td><?= ucfirst($sms->expediente) ?></td>
                                <td><?= $sms->mail ?></td>
                                <td><?= $sms->telefone ?></td>
                                <td><?= $sms->mensagem ?></td>
                                <td><?= $sms->created_at ?></td>
                                <td>
                                  <span>
                                    <a href="#">Ver</a>
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
                </div>
              </div>
            </section>
        </div>
    </div><!--/.wrapper-->


  <?= parts('footer') ?>


</body>

</html>
<!-- section(js) -->
<script src="<?= asset('js/jquery-3.3.1.min.js') ?>"></script>
<script src="<?= asset('js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= asset('js/adminlte.js') ?>"></script>