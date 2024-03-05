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
                              <tr id="item-<?= $sms->mensagen_id ?>">
                                <td><?= $sms->mensagen_id ?></td>
                                <td><?= ucfirst($sms->expediente) ?></td>
                                <td><?= $sms->mail ?></td>
                                <td><?= $sms->telefone ?></td>
                                <td><?= $sms->mensagem ?></td>
                                <td><?= $sms->created_at ?></td>
                                <td>
                                  <span>
                                    <a href="#" id="link-<?= $sms->mensagen_id ?>" data-toggle="modal" data-target="#modal-default" class="load-defaults">Ver</a>
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
            <div class="modal fade" id="modal-default">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Mensagem cliente</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <small class="text-muted form-label">Id. Expediente</small>
                                    <span class="d-block text-bold val"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <small class="text-muted form-label">Nome do expediente</small>
                                    <span class="d-block text-bold val"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <small class="text-muted form-label">Endereço email</small>
                                    <span class="d-block text-bold val"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <small class="text-muted form-label">Nº telefone</small>
                                    <span class="d-block text-bold val"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <small class="text-muted form-label">Contéudo da mensagem</small>
                                    <span class="d-block val"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <small class="text-muted form-label">Opções</small>
                                    <span class="d-block text-bold val">-</span>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="modal-footer justify-content-between">
                    <div class="container">
                        <div class="row">
                            <form action="" id="sendResponse" class="col-12">
                                <div class="form-group">
                                    <label class="form-label">Respota</label>
                                    <small class="text-muted d-block my-2 mb-3">Podes enviar uma mensagem de texto que será vista como notificação para o cliente, ou ligar pra ele com o número acima referenciado</small>
                                    <textarea type="text" class="form-control" placeholder="Escreve aqui"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Enviar resposta</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
        </div>
    </div><!--/.wrapper-->


  <?= parts('footer') ?>


</body>

</html>
<!-- section(js) -->
<script src="<?= asset('js/jquery-3.3.1.min.js') ?>"></script>
<script src="<?= asset('js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= asset('js/adminlte.js') ?>"></script>

<script>
    const linkButton = document.querySelectorAll('.load-defaults');
    const val = document.querySelectorAll('.val');
        linkButton.forEach(link => {
            link.addEventListener('click', function(e) {
                var id = e.target.id.split('-')[1];
                var lineItems = document.querySelectorAll(`#item-${id} td`);
                val.forEach(function(value, key) {
                    value.innerText = lineItems[key].innerText
                });
            });
        }); 
</script>