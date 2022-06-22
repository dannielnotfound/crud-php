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
<script>//Animação para subir os labels quando os inputs forem clicados

const nameInput = document.getElementById("nome");
const emailInput = document.getElementById("email");
const cityInput = document.getElementById("cidade");
const inputs = document.getElementsByClassName("full");
console.log(inputs[0])
inputs[0].addEventListener("focus", function () {
  moveLabel(1);
});
inputs[1].addEventListener("focus", function () {
  moveLabel(2);
});
inputs[2].addEventListener("focus", function () {
  moveLabel(3);
});

function moveLabel(i) {
  const labels = document.getElementsByClassName("contrast");
  for (let i = 0; i < labels.length; i++) {
    labels[i].id = [i];
  }

  const label1 = document.getElementById("0");
  const label2 = document.getElementById("1");
  const label3 = document.getElementById("2");

  if (i === 1) {
    if (nameInput.value == "") {
      label1.classList.add("labelToTop");
    }
  } else if (i === 2) {
    if (emailInput.value == "") {
      label2.classList.add("labelToTop");
    }
  } else if (i === 3) {
    if (cityInput.value == "") {
      label3.classList.add("labelToTop");
    }
  }
}
</script>
<?php include("Includes/footer.php"); ?>