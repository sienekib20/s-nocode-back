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
    /*const zip = new Array();
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
        reader.onload = function (event) {
            item.file = event.target.result
            item.name = fileName;
        };
        reader.readAsDataURL(e.target.files[0]);
        cover.push(item);
    });*/
    document.getElementById("add-template-form").addEventListener("submit", (event) => {
        event.preventDefault(); // Impede o envio padrão do formulário
        $('.wait-loader').removeClass('hide');
        const fileInput = document.querySelector("#zip");
        const fileCover = document.querySelector("#cover");
        const file = fileInput.files[0];
        const fileCover_ = fileCover.files[0];
        const url = document.querySelector('#api_route').value;

        if (!file) {
            console.error("Nenhum arquivo selecionado.");
            return;
        }

        const formData = new FormData(event.target);
        
        
        //console.log(formData);

        //return;
        const xhr = new XMLHttpRequest();
        xhr.open("POST", url);
        xhr.onload = () => {
            if (xhr.status >= 200 && xhr.status < 300) {
                console.log(JSON.parse(xhr.responseText));
                setTimeout(() => {
                        $('.wait-loader').addClass('hide');
                    }, 1500);
                if (JSON.parse(xhr.responseText) == 'Salvo com sucesso') {
                    // parar o loader: 

                    alert('Criado com sucesso');
                    return;
                }
                // parar o loader
                alert('Algo deu errado, por favor tente mais tarde');
            } else {
                setTimeout(() => {
                        $('.wait-loader').addClass('hide');
                    }, 1500);
                alert("Erro ao enviar formulário:", xhr.statusText);
            }
        };
        xhr.onerror = () => {
            setTimeout(() => {
                        $('.wait-loader').addClass('hide');
                    }, 1500);
            console.error("Erro ao enviar formulário:", xhr.statusText);
            alert("Erro ao enviar formulário:", xhr.statusText);
        };
        xhr.send(formData);
    });




});