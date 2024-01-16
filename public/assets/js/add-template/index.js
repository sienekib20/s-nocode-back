$('#paystatus').change((e) => {
    var paystatus = $('#preco');
    if (e.target.value == 'Pago') {
        paystatus.removeAttr('disabled').focus();
    } else {
        paystatus.attr('disabled', 'disabled');
    }
});
$('document').ready(() => {
    const zip = new Array();
    const cover = new Array();
    const formData = new FormData();
    let objectosFormModulos;
    document.getElementById('zip').addEventListener('change', (e) => {
        formData.append('zip', e.target.files[0]);
        objectosFormModulos = Object.fromEntries(formData.entries());
    });
    document.getElementById('cover').addEventListener('change', (e) => {
        var reader = new FileReader();
        var item = {
            file: null,
            name: ''
        };
        const fileName = e.target.files[0].name;
        reader.onload = function(event) {
            item.file = event.target.result
            item.name = fileName;
        };
        reader.readAsDataURL(e.target.files[0]);
        cover.push(item);
    });
    $('#btn-add-template').click((e) => {
        e.preventDefault();
        let dataForm = {
            titulo: $('#title').val(),
            referencia: $('#generated').val(),
            descricao: $('#descricao').val(),
            code_js: $('#code-js').val(),
            code_css: $('#code-css').val(),
            code_html: $('#code-html').val(),
            editar: $('#editable').val(),
            preco: $('#preco').val(),
            status: $('#paystatus').val(),
            tipo: $('#tipo').val(),
            cover_name: cover[0].name,
            cover_file: cover[0].file,
            zip: objectosFormModulos,
            //zipFile: zip[0].file,
            //zipName: zip[0].name
        }
        const data = {
            dataForm: dataForm,
            obj: objectosFormModulos
        };
        console.log(objectosFormModulos);
        //const data = {dataForm: dataForm, cover: 'items'};
        const url = $('#api_route').val();
        //mode: no-cors
        var xhr = new XMLHttpRequest();
        xhr.open('POST', url, true);
        xhr.setRequestHeader('Content-Type', 'application/json');
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    var responseData = JSON.parse(xhr.responseText);
                    console.log('Response from the API:', responseData);
                } else {
                    console.error('Error:', xhr.statusText);
                }
            }
        };
        xhr.send(JSON.stringify(dataForm));
    });
});