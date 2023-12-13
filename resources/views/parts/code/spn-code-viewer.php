<div class="spn-code-viewer">

    <div class="code-viewer-contain">

        <div class="code-viewer-header">
            <div class="switch-item active"> <span class="">html</span> </div>
            <div class="switch-item"> <span class="">css</span> </div>
            <div class="switch-item"> <span class="">js</span> </div>
            <div class="auto-close"> <span class="bi bi-x"></span> </div>
            <div class="auto-close"> Salvar </div>
        </div>

        <div class="code-viewer-body">
            <textarea name="html" class="switch-contain-item active" placeholder="<!-- cola o codigo html -->"></textarea>
            <textarea name="css" class="switch-contain-item" placeholder="/* stylesheet */"></textarea>
            <textarea name="js" class="switch-contain-item" placeholder="// javascript: Evite variáveis como i, index, key, de preferencias com estilo próprio"></textarea>
        </div>

    </div> <!-- code-viewer-contain -->



</div> <!-- spn-code-viewer -->

<script>
    const switch_items = document.querySelectorAll('.switch-item');
    const switch_contain = document.querySelectorAll('.switch-contain-item');

    switch_items.forEach((item, index) => {
        item.addEventListener('click', (e) => {
            e.preventDefault();
            switch_items.forEach(switem => switem.classList.remove('active'));
            switch_contain.forEach(contain => contain.classList.remove('active'));
    
            item.classList.add('active');
            switch_contain[index].classList.add('active');
        });
    });

    document.querySelector('.auto-close').addEventListener('click', (e) => {
        const code_viewer = document.querySelector('.spn-code-viewer');
            code_viewer.classList.remove('active');
    });
</script>