<?php include("Includes/header.php"); ?>
<main>
    <script>
        const locationHref = window.location.href
        if (location.href === locationHref) {
            const main = document.getElementsByTagName('main');
            main[0].classList.add('center-main-cadastro');
        }
    </script>
    <?php
    include("Class/ClassConexao.php");
    include("Class/ClassCrud.php");
    $Crud = new ClassCrud();
    ?>
    <div class="form-box">
        <form action="" method="post">
            <fieldset>
                <legend>
                    <h2>Cadastro</h2>
                </legend>
                <div class="input-box">
                    <label class='contrast' for="nome">Nome</label>
                    <input class="full" type="text" name="" id="nome" required>
                </div>
                <p>Sexo: </p>
                <div class="inputBox">
                    <input type="radio" name="genero" id="feminino" value="feminino" required>
                    <label class="genero" for="feminino">Feminino</label>
                </div>
                <div class="inputBox">
                    <input type="radio" name="genero" id="masculino" value="masculino" required>
                    <label class="genero" for="masculino">Masculino</label>
                </div>
                <div class="inputBox">
                    <input type="radio" name="genero" id="outro" value="outro" required>
                    <label class="genero" for="outro">Outro</label>
                </div>
                <div class="input-box">
                    <label class='contrast' for="email">Email</label>
                    <input class="full" type="text" name="" id="email" required>
                </div>
                <input id="subm" type="submit" value="Enviar">
            </fieldset>
        </form>
    </div>
</main>
<script>
    const nameInput = document.getElementById('nome')
    const emailInput = document.getElementById('email')
    const inputs = document.getElementsByClassName('full');
    inputs[0].addEventListener('focus', function(){moveLabel(1)})
    inputs[1].addEventListener('focus', function(){moveLabel(2)})

    function moveLabel(i){
        const labels = document.getElementsByClassName('contrast')
        for (let i = 0; i < labels.length; i++) {
            labels[i].id = [i];
        }
        const label1 = document.getElementById('0');
        const label2 = document.getElementById('1');
        if(i === 1){
            if(nameInput.value == ''){
                label1.classList.toggle('labelToTop')
            }
        }else if(i === 2){
            if(emailInput.value == ''){
                label2.classList.toggle('labelToTop')
            }
        }
    }
</script>
<?php include("Includes/footer.php"); ?>