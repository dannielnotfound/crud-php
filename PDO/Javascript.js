// Ajax

console.log('teste')

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

// Deletar 

function confirmBox(){alert('apagar')}

/* Confirmar antes de deletar (Alert) */ 

if(location.href.includes('selecao.php')){
  $(".deletar").on('click', function(event){
    event.preventDefault();
    let link=$(this).attr('href') ;
    if(confirm("Deseja mesmo apagar esse dado?")){
      window.location.href=link;
    }else{
      return false;
    }
  });
};  