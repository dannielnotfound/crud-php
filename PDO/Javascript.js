//Animação para subir os labels quando os inputs forem clicados

const nameInput = document.getElementById("nome");
const emailInput = document.getElementById("email");
const cityInput = document.getElementById("cidade");
const inputs = document.getElementsByClassName("full");

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

// Ajax

$("#FormCadastro").on("submit", function (event) {
  event.preventDefault();
  let Dados = $(this).serialize();
  $.ajax({
    url: "Controllers/ControllerCadastro.php",
    type: "post",
    dataType: "html",
    data: Dados,
    success: function (Dados) {
      $(".resultado").show().html(Dados);
    },
  });
});

// Limpar dados dos inputs após novo cadastro

function clearInputs() {
  nameInput.value = "";
  emailInput.value = "";
  cityInput.value = "";
}
