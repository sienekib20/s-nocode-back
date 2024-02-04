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
              <h1 class="m-0">Planos e preços</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Planos</li>
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
                        <td>Plano</td>
                        <td>Aderido por</td>
                        <!--<td>Validade</td> data atual - data de aceitacao -->
                        <td>Estado</td>
                        <td>Ação</td>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach($aderidos as $ad): ?>
                        <tr>
                          <td><?= $ad->adesao_pacote_id ?></td>
                          <td><?= $ad->plano ?></td>
                          <td><?= ucfirst($ad->parceiro) ?></td>
                         <!-- <td></td>-->
                          <td><?= $ad->state ?></td>
                          <td>
                            <span>
                              <a href="#">Ver</a>
                              <a href="#">Validar</a>
                              <a href="#">Rejeitar</a>
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
                    <form action="<?= route('template.add.categoria') ?>" method="post">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Nome parceiro</label>
                            <input type="text" name="parceiro" class="form-control" placeholder="Categoria">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Motivo da rejeição</label>
                            <textarea name="descrição" class="form-control"></textarea>
                          </div>
                        </div>
                      </div>
                      <!-- /.row -->
                      <div class="row">
                        <div class="col-md-6">
                          <label>Nível alerta</label>
                          <select name="" class="form-control">
                            <option value="">Normal</option>
                            <option value="">Baixo</option>
                            <option value="">Alta</option>
                          </select>
                        </div>
                      </div>
                      <!-- /.row -->
                      <div class="card"></div>
                      <div class="card"></div>
                      <div class="row">
                        <div class="col-md-6 ml-auto">
                          <button type="submit" class="btn btn-primary btn-block">Rejeitar</button>
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

  <?= parts('footer') ?>


</body>

</html>
<!-- section(js) -->
<script src="<?= asset('js/jquery-3.3.1.min.js') ?>"></script>
<script src="<?= asset('js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= asset('js/adminlte.js') ?>"></script>