$("#contact-phone").mask("(+351) 999 999 999");

$("#submit").on("click", function () {
  var nome = $("#contact-name");
  var email = $("#contact-email");
  var telefone = $("#contact-phone");
  var assunto = $("#contact-subject");
  var mensagem = $("#contact-msg");

  var data = {
    nome: nome.val(),
    email: email.val(),
    telefone: telefone.val(),
    assunto: assunto.val(),
    mensagem: mensagem.val()
  };

  if(!$('input#accept-pp').is(':checked')) {
    $(".erro.accept-pp").text("Por favor, declare que leu e compreendeu a Política de Privacidade V21.");
  } else {
    $(".erro.accept-pp").text("");
  }

  if (data.mensagem == "") {
    mensagem.focus();
    mensagem.prop('placeholder',"Por favor, escrever a mensagem.");
  } else {
    mensagem.prop('placeholder',"");
  }

  if (data.assunto == "") {
    assunto.focus();
    assunto.prop('placeholder',"Por favor, escrever o assunto.");
  } else {
    assunto.prop('placeholder',"");
  }

  var controlPhone = false;
  if (data.email == "") {
    email.focus();
    email.prop("placeholder", "Por favor, escrever o e-mail.");
  } else {
    var verifyEmail = checkEmail(data.email);
    if (verifyEmail) {
      controlPhone = true;
      email.prop("placeholder", "");
    } else {
        email.focus();
        email.prop("placeholder", "O e-mail inserido não é válido.");
    }
  }

  if (data.nome == "") {
    nome.focus();
    nome.prop('placeholder',"Por favor, escrever o nome do candidato.");
  } else {
    nome.prop('placeholder',"");
  }

  if (
    data.nome != "" &&
    data.email != "" &&
    data.assunto != "" &&
    data.mensagem != "" &&
    controlPhone !== false &&
    $('input#accept-pp').is(':checked') == true
  ) {
      $.ajax({
          url: "/ajax/contactos.php",
          type: "POST",
          data: data,
          dataType: "json",
          success: function (response) {
            $(".erro.submit").text(response.result);

            setInterval(() => {
                $(".erro.submit").text("");
            }, 5000);
          },
      });
  }
});

function checkEmail($email) {
  var filter = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,3}$/;
  return filter.test($email);
}
