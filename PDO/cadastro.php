<?php include("Includes/header.php"); ?>
<div style="display: none;" class="resultado"></div>
<main>
    <script>
        const locationHref = window.location.href
        if (location.href === locationHref) {
            const main = document.getElementsByTagName('main');
            main[0].classList.add('center-main-cadastro');
        }
    </script>
    <div class="form-box">
        <form name="FormCadastro" id= "FormCadastro" action="Controllers/ControllerCadastro.php" method="post" autocomplete="false">
            <fieldset>
                <legend>
                    <h2>Cadastro</h2>
                </legend>
                <div class="input-box">
                    <label class='contrast' for="nome">Nome</label>
                    <input class="full" type="text" name="Nome" id="nome">
                </div>
                <p>Sexo: </p>
                <div class="inputBox">
                    <input type="radio" name="Genero" id="feminino" value="feminino">
                    <label class="genero" for="feminino">Feminino</label>
                </div>
                <div class="inputBox">
                    <input type="radio" name="Genero" id="masculino" value="masculino">
                    <label class="genero" for="masculino">Masculino</label>
                </div>
                <div class="inputBox">
                    <input type="radio" name="Genero" id="outro" value="outro">
                    <label class="genero" for="outro">Outro</label>
                </div>
                <div class="input-box">
                    <label class='contrast' for="email">Email</label>
                    <input class="full" type="text" name="Email" id="email">
                </div>
                <div class="input-box">
                    <label class='contrast' for="cidade">Cidade</label>
                    <input class="full" type="text" name="Cidade" id="cidade">
                </div>
                <input id="subm" type="submit" value="Enviar">
            </fieldset>
        </form>
    </div>
</main>
<?php include("Includes/footer.php"); ?>