<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/assets/css/component.css?v=" <?=time() ?>>
  <link rel="stylesheet" href="/assets/css/bootstrap-icons.css">
  <script src="/assets/js/jquery-3.3.1.min.js"></script>
  <title>
    <?='Partner'?>
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

          <div class="card-section-row">
            <?php foreach($templates as $template):  ?>
            <div class="template-item">
              <div class="template-cover">
                <img src="<?=storage_path() . 'img/templates_covers'.$template->file ?>" alt="">
              </div>
              <div class="template-info">
                <span class="name"><?=$template->titulo?></span>
                <small class="tw-muted">Criado por: <span class="owner"><?=$template->autor?></span> </small>
                <div class="avaluate">
                  <small class="range"><span class="qtd">00</span> Pessoa(s) Utilizando </small>
                  <div class="ratings">
                    <small class="bi-star-fill"></small>
                    <small class="bi-star-fill"></small>
                    <small class="bi-star-fill"></small>
                    <small class="bi-star-fill"></small>
                    <small class="bi-star-fill"></small>
                  </div>
                </div>

                <div class="template-actions">
                  <a href="/template/edit/<?= $template->template_id ?>" class="btn-action" title="Editar">
                    <small class="bi-pencil-square"></small>
                  </a>
                  <a href="/template/delete/<?= $template->template_id ?>" class="btn-action" title="Remover">
                    <small class="bi-trash"></small>
                  </a>
                  <a href="/nocode/<?= $template->referencia ?>" target="_blank" class="btn-action" title="Remover">
                    <small class="bi-eye"></small>
                  </a>
                </div>
              </div>
            </div>
            <?php endforeach; ?>

            <div class="template-item">
              <div class="template-info">
                <span class="name"></span>
                <small class="tw-muted">Landing Page <span class="owner"></span> </small>
                <div class="avaluate">
                  <small class="range"><span class="qtd">100</span> Total </small>
                </div>
              </div>
            </div>

            <a href="<?= route('templates.add') ?>" class="template-add">
              <div class="add">
                <small class="bi-plus"></small>
                <small>Adicionar Template</small>
              </div>
            </a>


          </div>

        </div>


      </div>

    </div>


  </div> <!--/.sp-wrapper-->

</body>

</html>
