<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/assets/css/component.css?v=" <?=time() ?>>
  <link rel="stylesheet" href="/assets/css/bootstrap-icons.css">
  <script src="/assets/js/jquery-3.3.1.min.js"></script>
  <script src="/assets/js/image/load_replace.js"></script>
  <title>title</title>
</head>

<body>

  <div class="spn-wrapper">
    <?= parts('nav.spn-navbar') ?>

    <div class="card-section">
      <div class="card-section-header">
        <div class="spn-container">
          <div class="title">
            <span class="default">1. Antes de começar</span>
            <small class="tw-muted">Dê um nome ao seu template</small>
          </div>
        </div>
      </div>

      <div class="card-section-contain">
        <div class="spn-container">
          <form action="" class="spn-form">
            <div class="spn-form-row">
              <div class="spn-form-item default">
                <span class="tw-muted" style="line-height: 25px; display: flex; gap: 10px;"> <small
                    class="icon-warning">!</small> Antes de tudo dê um nome ao seu template, segundo a sua escolha,
                  para gerar uma referência com o qual vais definir a nova rota dos links internos do seu projeto.
                  Por exemplo: href="path/to/your/file".</span>
              </div>
              <div class="spn-form-item default">
                <span class="tw-muted">Quando gerada uma Referência Vá nos teus links internos e substitua o
                  caminho po este <br> <br> <i>storage/templates/referência_gerada/nome_do_seu_arquivo.*</i></span>
              </div>
            </div>

            <div class="spn-form-row"></div>

            <div class="spn-form-row">
              <div class="spn-form-item">
                <input type="text" class="form-input" name="template_name" required>
                <small class="form-label">Template name</small>
              </div>
              <div class="spn-form-item">
                <input type="text" name="generated" class="form-input" readonly>
                <small class="form-label">Referência gerada</small>
                <small class="bi-copy"></small>
              </div>
            </div>

            <div class="spn-form-row"></div>
            <div class="spn-form-row"></div>

            <div class="spn-form-row">
              <button class="spn-btn" id="continue-btn">Continuar</button>
            </div>
          </form>
        </div>
      </div>
    </div>


    <div class="card-section minimize">
      <div class="card-section-header">
        <div class="spn-container">
          <div class="title">
            <span class="default">Adcionar Template</span>
            <small class="tw-muted">Carrega os dados do teu template</small>
          </div>
        </div>
      </div>

      <div class="card-section-contain">
        <div class="spn-container">
          <form action="/templates/upload" method="POST" class="spn-form" enctype="multipart/form-data">

            <div class="spn-form-row">
              <div class="spn-form-item mh">
                <input type="file" id="temp_cover" name="temp_cover" accept="image/*" hidden>
                <label for="temp_cover" class="form-label">
                  <span>+ Carregar capa</span>
                  <img src="">
                </label>
              </div>
            </div>

            <div class="spn-form-row">
              <div class="spn-form-item">
                <input type="text" name="temp_title" id="temp_title" class="form-input" autocomplete="off" required>
                <span class="form-label">Título</span>
              </div>
              <div class="spn-form-item">
                <input type="text" name="temp_description" id="temp_description" class="form-input" autocomplete="off"
                  required>
                <span class="form-label">Descrição</span>
              </div>
            </div>

            <div class="spn-form-row">
              <div class="spn-form-item">
                <select name="temp_editable" id="temp_editable" class="form-input">
                  <option value="Y">Permitir editar</option>
                  <option value="N">Não Permitir</option>
                </select>
                <span class="form-label">Editar</span>
              </div>
              <div class="spn-form-item">
                <select name="temp_type" id="temp_type" class="form-input">
                  <option value="Landing Page">Landing Page</option>
                  <option value="Dashboard">Dashboard</option>
                  <option value="Outro">Outro</option>
                </select>
                <span class="form-label">Tipo template</span>
              </div>
            </div>

            <div class="spn-form-row">
              <div class="spn-form-item">
                <select name="temp_payment_status" id="temp_payment_status" class="form-input">
                  <option value="G">Grátis</option>
                  <option value="P">Pago</option>
                </select>
                <span class="form-label">Status</span>
              </div>

              <div class="spn-form-item">
                <input type="text" name="temp_price" class="form-input" autocomplete="off" disabled required>
                <span class="form-label">Valor</span>
              </div>

            </div>

            <div class="spn-form-row">
              <div class="spn-form-item">
                <input type="file" id="temp_images" name="temp_images[]" accept="image/*" multiple hidden>
                <label for="temp_images" class="form-label">+ Carregar assets imagem</label>
              </div>

              <div class="spn-form-item">
                <input type="file" id="temp_pages" name="temp_pages[]" accept=".html,.htm" multiple hidden>
                <label for="temp_pages" class="form-label">+ Carregar páginas</label>
              </div>
            </div>

            <div class="spn-form-row">
              <div class=""></div>
              <div class="spn-form-item">
                <input type="file" id="temp_assets" name="temp_assets[]" accept=".css,.js" multiple hidden>
                <label for="temp_assets" class="form-label">+ Carregar assets css/js</label>
              </div>
            </div>

            <div class="spn-form-row">
              <div class="spn-form-btn">
                <button class="form-btn" id="btn-add-template">adicionar</button>
                <button type="reset" class="form-btn">repôr</button>
              </div>
            </div>

          </form>

          <div class="spn-give-space"></div>

        </div>
      </div>


    </div> <!--/.sp-wrapper-->

    <?= parts('alerts.alert') ?>

</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="/assets/js/add-template/index.js"></script>
<script>
  document.querySelector('#continue-btn').addEventListener('click', (e) => {
    e.preventDefault();
    const generated = document.querySelector('[name="generated"]').value;
    if (generated.length == 1) {

      popup_contain.classList.add('active');

      setTimeout(() => {
        popup.classList.add('active');
        popup_msg.innerText = '';
        popup_title.innerText = '';
        popup_msg.innerText = 'Precisas gerar uma referência antes de continuar';
        popup_title.innerText = 'Aviso';
        song_notification(popu_audio);

      }, 100);
      return 0;
    }
    selector('.minimize').classList.remove('minimize');
    console.log(generated.length);
  });

  function song_notification(alert) {
    alert.stopped = true;
    alert.play();
  }
</script>
