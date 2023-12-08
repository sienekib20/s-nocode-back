<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/assets/css/component.css?v=" <?=time() ?>>
  <link rel="stylesheet" href="/assets/css/bootstrap-icons.css">
  <script src="/assets/js/jquery-3.3.1.min.js"></script>
  <title></title>
</head>

<body>

  <div class="spn-wrapper">
    <?php require view_path() . '/parts/nav/spn-navbar.php' ?>

    <div class="card-section">
      <div class="card-section-header">
        <div class="spn-container">
          <div class="title">
            <span class="default">Overview</span>
            <small class="tw-muted">Informação geral</small>
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
            <div class="template-item">
              <div class="template-info">
                <span class="name">Landing Pages</span>
                <small class="tw-muted"><span class="owner"></span> </small>
                <div class="avaluate">
                  <small class="range">Total <span class="qtd">04</span> </small>
                </div>
              </div>
            </div>
            <div class="template-item">
              <div class="template-info">
                <span class="name">Parceiros</span>
                <small class="tw-muted"><span class="owner"></span> </small>
                <div class="avaluate">
                  <small class="range">Total <span class="qtd">00</span> </small>
                </div>
              </div>
            </div>
            <div class="template-item">
              <div class="template-info">
                <span class="name">Templates em uso</span>
                <small class="tw-muted"><span class="owner"></span> </small>
                <div class="avaluate">
                  <small class="range">Total <span class="qtd">01</span> </small>
                </div>
              </div>
            </div>

            <a href="/templates/add" class="template-add">
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
