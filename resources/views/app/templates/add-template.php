<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= asset('css/component.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/bootstrap-icons.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/code-viewer.css') ?>">
    <script src="<?= asset('js/jquery-3.3.1.min.js') ?>"></script>
    <script src="<?= asset('js/image/load_replace.js') ?>"></script>
    <title>title</title>
</head>

<body>

    <div class="spn-wrapper">

        <?= parts('nav.spn-navbar') ?>

        <div class="card-section">
            <div class="card-section-header">
                <div class="spn-container">
                    <div class="title">
                        <span class="default">Adcionar Template</span>
                        <small class="tw-muted">Carrega os dados do teu template</small>
                    </div>
                </div>
            </div>
        </div>


        <div class="card-section">
            <div class="card-section-contain">
                <div class="spn-container">
                    <form action="<?= route('templates.create') ?>" method="POST" class="spn-form" enctype="multipart/form-data">
                        <div class="spn-form-row">
                            <div class="spn-form-item">
                                <input type="text" name="temp_title" id="temp_title" class="form-input" autocomplete="off" required>
                                <span class="form-label">Título</span>
                            </div>
                            <div class="spn-form-item">
                                <input type="text" name="generated" id="generated" class="form-input" value="sn_0000_name_tmp" readonly required>
                                <small class="form-label">Referência gerada</small>
                                <small class="bi-copy"></small>
                            </div>
                        </div>
                        <div class="spn-form-row">
                            <div class="spn-form-"></div>
                            <div class="spn-form-item">
                                <input type="text" name="temp_description" id="temp_description" class="form-input" autocomplete="off" required>
                                <span class="form-label">Descrição</span>
                            </div>
                        </div>

                        <div class="spn-form-row">
                            <div class="spn-form-item">
                                <select name="temp_editable" id="temp_editable" class="form-input">
                                    <option value="YES">Editável</option>
                                    <option value="NO">Não editável</option>
                                </select>
                                <span class="form-label">Nível de acesso</span>
                            </div>
                            <div class="spn-form-item">
                                <select name="temp_type" id="temp_type" class="form-input">
                                    <?php foreach ($tipo as $t) : ?>
                                        <option value="<?= $t->tipo_template_id ?>"><?= $t->tipo_template ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <span class="form-label">Tipo template</span>
                            </div>
                        </div>

                        <div class="spn-form-row">
                            <div class="spn-form-item">
                                <select name="temp_payment_status" id="temp_payment_status" class="form-input">
                                    <option value="Grátis">Grátis</option>
                                    <option value="Pago">Pago</option>
                                </select>
                                <span class="form-label">Status</span>
                            </div>
                            <div></div>
                        </div>
                        <div class="spn-form-row">
                            <div class="spn-form-item">
                                <input type="text" name="temp_price" class="form-input" autocomplete="off" value="0.00" disabled required>
                                <span class="form-label">Valor</span>
                            </div>
                            <div class="spn-form-item">
                                <input type="file" id="temp_pages" name="temp_pages[]" accept=".php,.html" multiple hidden>
                                <label for="temp_pages" class="form-label">+ Páginas</label>
                            </div>
                        </div>

                        <div class="spn-form-row">
                            <div class="spn-form-item">
                                <input type="file" id="temp_assets" name="temp_assets[]" accept="image/*" multiple hidden>
                                <label for="temp_assets" class="form-label">+ Capa</label>
                            </div>
                            <div class="spn-form-item">
                                <input type="file" id="temp_images" name="temp_images[]" accept="image/*" multiple hidden>
                                <label for="temp_images" class="form-label">+ imagens</label>
                            </div>
                        </div>

                        <div class="spn-form-row">
                            <div></div>
                            <div class="spn-form-item">
                                <label id="load_code_viewer" class="form-label">Código</label>
                            </div>
                        </div>

                        <div class="spn-form-row">
                            <div class="spn-form-btn">
                                <button class="form-btn" id="btn-add-template">adicionar</button>
                                <button type="reset" class="form-btn">repôr</button>
                            </div>
                        </div>


                        <?= parts('code.spn-code-viewer') ?>

                    </form>

                    <div class="spn-give-space"></div>

                </div>
            </div>


        </div> <!--/.sp-wrapper-->

        <?= parts('alerts.alert') ?>

</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script src="<?= asset('js/add-template/index.js') ?>"></script>
<script>

    $('#load_code_viewer').click(e => {
        $('.spn-code-viewer').addClass('active');
    }); 

    let template_name = '',
        generated;
    const sec = new Date().getMilliseconds()

    document.querySelector('#temp_title').addEventListener('keydown', (e) => {
        const generated = document.querySelector('#generated');
        const reference = gerar_referencia(e.which, e.key, sec);
        generated.setAttribute('value', reference);
    });

    function gerar_referencia(value, key, seconds) {

        if (value == 8 || value == 46) {
            template_name = template_name.substr(0, template_name.length - 1);
        }

        if (value >= 65 && value <= 90) {

            if (template_name == 'name') {
                template_name = '';
            }

            template_name += key.toLowerCase();
        }

        template_name = (template_name.length == 0) ? 'name' : template_name;

        generated = "sn_00" + seconds + "_" + template_name + "_tmp";

        return generated;
    }

    /*document.querySelector('#continue-btn').addEventListener('click', (e) => {
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
    }*/
</script>