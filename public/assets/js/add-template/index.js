
function is_empty(field) {
    if ((field.val().length == 0)) {
        alert('Campo vazio');
        field.focus();
        return;
    }
    return field.val();
}

$('document').ready(() => {

    $('[name="temp_payment_status"]').change((e) => {
        var in_ = $('[name="temp_price"]');
        (e.target.value == 'Pago') ? in_.removeAttr('disabled') : in_.attr('disabled', 'disabled');


        //console.log(in_.removeAttr('disabled'));
    });
    const pages = new Array();
    const cover = new Array();

    document.getElementById('cover').addEventListener('change', (e) => {
        var reader = new FileReader();

        var item = {
            file: null,
            name: ''
        };

        const fileName = e.target.files[0].name;

        reader.onload = function (event) {
            item.file = event.target.result
            item.name = fileName;
        };
        reader.readAsDataURL(e.target.files[0]);

        cover.push(item);
    });

    /*document.getElementById('temp_images').addEventListener('change', function (e) {
        const files = this.files;

        for (let i = 0; i < files.length; i++) {
            const reader = new FileReader();

            // Crie um objeto para representar cada página com campos 'file' e 'name'
            const image = {
                file: null,
                name: '',
            };

            const fileName = files[i].name;

            reader.onload = function (event) {
                image.file = event.target.result;
                // Associar o nome do arquivo com a página correspondente
                image.name = fileName;
                count(images.length, e, 'Imagem(ns)', '+ Carregar assets imagem');
            };

            reader.readAsDataURL(files[i]);

            images.push(image);
        }
    });

    document.getElementById('temp_pages').addEventListener('change', function (e) {
        const files = this.files;

        for (let i = 0; i < files.length; i++) {
            const reader = new FileReader();

            // Crie um objeto para representar cada página com campos 'file' e 'name'
            const page = {
                file: null,
                name: '',
            };

            const fileName = files[i].name;

            reader.onload = function (event) {
                page.file = event.target.result;
                page.name = fileName;
                count(pages.length, e, 'Página(s)', '+ Carregar páginas');
            };

            reader.readAsDataURL(files[i]);

            pages.push(page);
        }
    });

    document.getElementById('temp_assets').addEventListener('change', function (e) {
        const files = this.files;

        for (let i = 0; i < files.length; i++) {
            const reader = new FileReader();

            const asset = {
                file: null,
                name: '',
            };

            const fileName = files[i].name;

            reader.onload = function (event) {
                asset.file = event.target.result;
                asset.name = fileName;
                count(assets.length, e, 'Arquivo(s)', '+ Carregar assets css/js');
            };

            reader.readAsDataURL(files[i]);

            assets.push(asset);
        }
    });*/


    $('#btn-add-template').click((e) => {

        // 1. Verificar campos vazios

        e.preventDefault();
        
        // 2. Pegar os dados 
        let dataForm = {
            titulo: $('#title').val(), 
            referencia: $('#generated').val(), 
            descricao: $('#descricao').val(), 
            code_js : $('#code-js').val(),
            code_css : $('#code-css').val(),
            code_html : $('#code-html').val(),
            editar: $('#editable').val(), 
            preco: $('#preco').val(), 
            status: $('#paystatus').val(),
            tipo: $('#tipo').val(), 
            cover_name: cover[0].name, 
            cover_file: cover[0].file
        }
        const data = {dataForm: dataForm};
        //const data = {dataForm: dataForm, cover: 'items'};

        const url = $('#api_route').val();
        //mode: no-cors
        fetch(url, {
                method: 'POST', 
                headers: {
                    'Content-Type': 'application/json',
                }, 
                //mode: 'no-cors',
                body: JSON.stringify(dataForm),
            }).then(response => {
                if (response.ok) {
                    
                    return response.json();

                } else {
                    throw new Error('Erro na solicitação');
                }
            }).then(data => {
                console.log('Resposta da API:', data);
            }).catch(error => {
                console.error('Erro:', error);
            });
        });

});

function count(numFiles, e, type, base) {
    var label = e.target.nextElementSibling;
    var texto = label.innerText
    label.innerText = texto == base ? numFiles + ' ' + type + ' Carregada(s)' : numFiles + ' ' + type + ' Carregada(s)';

}
