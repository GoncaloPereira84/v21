$("#cp-promotor").mask("9999-999");
$("#cc-promotor").mask("99999999");
$("#nif-promotor").mask("999999999");
$("#dn-promotor").mask("99-99-9999");
$("#contacto-promotor").mask("(+351) 999 999 999");
$("#contacto2-promotor").mask("(+351) 999 999 999");

$("#nif-empresa").mask("999999999");
$("#data-constituicao").mask("99-99-9999");
$("#cp-empresa").mask("9999-999");
$("#contacto-empresa").mask("(+351) 999 999 999");

function cbclick(e, elem) {
  var cb = e.srcElement || e.target;
  if (cb.type !== "checkbox") {
    return true;
  }
  var cbxs = document.getElementById(elem).getElementsByTagName("input"),
    i = cbxs.length;
  while (i--) {
    if (cbxs[i].type && cbxs[i].type == "checkbox" && cbxs[i].id !== cb.id) {
      cbxs[i].checked = false;
    }
  }
}

function checkboxesUniqueSelect(parentElem, elem) {
  parentElem.addEventListener("click", function (e) {
    cbclick(e, elem);
  });
}

var tipoIncubacaoCont = document.getElementById("tipo-incubacao");
checkboxesUniqueSelect(tipoIncubacaoCont, "tipo-incubacao");

$("#submit").on("click", function () {
  var form = $(this).data("form-name");
  var nomeCandidato = $("#nome-candidato");
  var nomePromotor = $("#nome-promotor");
  var moradaPromotor = $("#morada-promotor");
  var cpPromotor = $("#cp-promotor");
  var localPromotor = $("#local-promotor");
  var ccPromotor = $("#cc-promotor");
  var nifPromotor = $("#nif-promotor");
  var dnPromotor = $("#dn-promotor");
  var habsPromotor = $("#habs-promotor");
  var profPromotor = $("#prof-promotor");
  var contactoPromotor = $("#contacto-promotor");
  var contacto2Promotor = $("#contacto2-promotor");
  var emailPromotor = $("#email-promotor");

  var nomeEmpresa = $("#nome-empresa");
  var nifEmpresa = $("#nif-empresa");
  var dataConst = $("#data-constituicao");
  var moradaEmpresa = $("#morada-empresa");
  var cpEmpresa = $("#cp-empresa");
  var localEmpresa = $("#local-empresa");
  var formaEmpresa = $("#forma-juridica");
  var caeEmpresa = $("#cae-principal");
  var cae2Empresa = $("#cae-secundario");
  var contactoEmpresa = $("#contacto-empresa");
  var emailEmpresa = $("#email-empresa");
  var siteEmpresa = $("#site-empresa");
  var trabalhadoresEmpresa = $("#n-trabalhadores");
  var setorEmpresa = $("#setor-atividade");
  var objetoEmpresa = $("#objeto-social");
  var tipoIncubacao = $("#tipo-incubacao input[type='checkbox']:checked");

  var descProjecto = $("#desc-projecto");
  var razoesRealizacao = $("#razoes-realizacao");
  var montante = $("#montante-previsto");
  var postosCriar = $("#postos-criar");
  var razoesApresentacao = $("#razoes-apresentacao");
  var conhecimentoV21 = $("#conhecimento-v21");
  var expectativas = $("#expectativas");

  var data = {
    form: form,
    nomeCandidato: nomeCandidato.val(),
    nomePromotor: nomePromotor.val(),
    moradaPromotor: moradaPromotor.val(),
    cpPromotor: cpPromotor.val(),
    localPromotor: localPromotor.val(),
    ccPromotor: ccPromotor.val(),
    nifPromotor: nifPromotor.val(),
    dnPromotor: dnPromotor.val(),
    habsPromotor: habsPromotor.val(),
    profPromotor: profPromotor.val(),
    contactoPromotor: contactoPromotor.val(),
    contacto2Promotor: contacto2Promotor.val(),
    emailPromotor: emailPromotor.val(),
    nomeEmpresa: nomeEmpresa.val(),
    nifEmpresa: nifEmpresa.val(),
    dataConst: dataConst.val(),
    moradaEmpresa: moradaEmpresa.val(),
    cpEmpresa: cpEmpresa.val(),
    localEmpresa: localEmpresa.val(),
    formaEmpresa: formaEmpresa.val(),
    caeEmpresa: caeEmpresa.val(),
    cae2Empresa: cae2Empresa.val(),
    contactoEmpresa: contactoEmpresa.val(),
    emailEmpresa: emailEmpresa.val(),
    siteEmpresa: siteEmpresa.val(),
    trabalhadoresEmpresa: trabalhadoresEmpresa.val(),
    setorEmpresa: setorEmpresa.val(),
    objetoEmpresa: objetoEmpresa.val(),
    tipoIncubacao: tipoIncubacao.val(),
    descProjecto: descProjecto.val(),
    razoesRealizacao: razoesRealizacao.val(),
    montante: montante.val(),
    postosCriar: postosCriar.val(),
    razoesApresentacao: razoesApresentacao.val(),
    conhecimentoV21: conhecimentoV21.val(),
    expectativas: expectativas.val(),
  };

  if(!$('input#accept-pp').is(':checked')) {
    $(".erro.accept-pp").text("Por favor, declare que leu e compreendeu a Política de Privacidade V21.");
  } else {
    $(".erro.accept-pp").text("");
  }

  if (data.expectativas == "") {
    expectativas.focus();
    $(".erro.expectativas").text("Por favor, escrever quais as expectativas acerca da incubadora.");
  } else {
    $(".erro.expectativas").text("");
  }

  if (data.conhecimentoV21 == "") {
    conhecimentoV21.focus();
    $(".erro.conhecimento-v21").text("Por favor, escrever como teve conhecimento do V21.");
  } else {
    $(".erro.conhecimento-v21").text("");
  }

  if (data.razoesApresentacao == "") {
    razoesApresentacao.focus();
    $(".erro.razoes-apresentacao").text("Por favor, escrever as razões que motivam a apresentação da candidatura.");
  } else {
    $(".erro.razoes-apresentacao").text("");
  }

  if (data.postosCriar == "") {
    postosCriar.focus();
    $(".erro.postos-criar").text("Por favor, escrever os postos de trabalho a criar.");
  } else {
    $(".erro.postos-criar").text("");
  }

  if (data.montante == "") {
    montante.focus();
    $(".erro.montante-previsto").text("Por favor, escrever montante do investimento previsto.");
  } else {
    $(".erro.montante-previsto").text("");
  }

  if (data.razoesRealizacao == "") {
    razoesRealizacao.focus();
    $(".erro.razoes-realizacao").text("Por favor, escrever as razões que motivam a realização do projeto.");
  } else {
    $(".erro.razoes-realizacao").text("");
  }

  if (data.descProjecto == "") {
    descProjecto.focus();
    $(".erro.desc-projecto").text("Por favor, descrever o projeto/ideia.");
  } else {
    $(".erro.desc-projecto").text("");
  }

  var incubacao;
  if (tipoIncubacao.length == 0) {
    $(".erro.tipo-incubacao").text("Por favor, escolher o tipo de incubação.");
    incubacao = null;
  } else {
    $(".erro.tipo-incubacao").text("");
    incubacao = data.tipoIncubacao;
  }

  var controlPhone = false;
  if (data.emailPromotor == "") {
    emailPromotor.focus();
    $(".erro.email-promotor").text("Por favor, escrever o e-mail do promotor.");
  } else {
    var verifyEmail = checkEmail(data.emailPromotor);
    if (verifyEmail) {
      controlPhone = true;
      $(".erro.email-promotor").text("");
    } else {
      emailPromotor.focus();
      $(".erro.email-promotor").text("O e-mail inserido não é válido.");
    }
  }

  if (data.contactoPromotor == "") {
    contactoPromotor.focus();
    $(".erro.contacto-promotor").text(
      "Por favor, escrever o contacto principal do promotor."
    );
  } else {
    $(".erro.contacto-promotor").text("");
  }

  if (data.profPromotor == "") {
    profPromotor.focus();
    $(".erro.prof-promotor").text(
      "Por favor, mencionar a situação profissional do promotor."
    );
  } else {
    $(".erro.prof-promotor").text(
        ""
      );
  }

  if (data.habsPromotor == "") {
    habsPromotor.focus();
    $(".erro.habs-promotor").text(
      "Por favor, mencionar as habilitações académicas do promotor."
    );
  } else {
    $(".erro.habs-promotor").text(
        ""
      ); 
  }

  if (data.dnPromotor == "") {
    dnPromotor.focus();
    $(".erro.dn-promotor").text(
      "Por favor, escrever a data de nascimento do promotor."
    );
  } else {
    $(".erro.dn-promotor").text(
        ""
      );
  }

  if (data.nifPromotor == "") {
    nifPromotor.focus();
    $(".erro.nif-promotor").text("Por favor, escrever o NIF do promotor.");
  } else {
    $(".erro.nif-promotor").text("");
  }

  if (data.ccPromotor == "") {
    ccPromotor.focus();
    $(".erro.cc-promotor").text("Por favor, escrever o nº CC do promotor.");
  } else {
    $(".erro.cc-promotor").text("");
  }

  if (data.localPromotor == "") {
    localPromotor.focus();
    $(".erro.local-promotor").text(
      "Por favor, escrever a localidade do promotor."
    );
  } else {
    $(".erro.local-promotor").text(
        ""
      );
  }

  if (data.cpPromotor == "") {
    cpPromotor.focus();
    $(".erro.cp-promotor").text(
      "Por favor, escrever o Código-Postal do promotor."
    );
  } else {
    $(".erro.cp-promotor").text(
        ""
      );
  }

  if (data.moradaPromotor == "") {
    moradaPromotor.focus();
    $(".erro.morada-promotor").text(
      "Por favor, escrever a morada do promotor."
    );
  } else {
    $(".erro.morada-promotor").text(
        ""
      );
  }

  if (data.nomePromotor == "") {
    nomePromotor.focus();
    $(".erro.nome-promotor").text("Por favor, escrever o nome do promotor.");
  } else {
    $(".erro.nome-promotor").text("");
  }

  if (data.nomeCandidato == "") {
    nomeCandidato.focus();
    $(".erro.nome-candidato").text("Por favor, escrever o nome do candidato.");
  } else {
    $(".erro.nome-candidato").text("");
  }

  if (
    data.nomeCandidato != "" &&
    data.nomePromotor != "" &&
    data.moradaPromotor != "" &&
    data.cpPromotor != "" &&
    data.localPromotor != "" &&
    data.ccPromotor != "" &&
    data.nifPromotor != "" &&
    data.dnPromotor != "" &&
    data.habsPromotor != "" &&
    data.profPromotor != "" &&
    data.contactoPromotor != "" &&
    data.contacto2Promotor != "" &&
    data.emailPromotor != "" &&
    (incubacao != "" || incubacao != null) &&
    data.descProjecto != "" &&
    data.razoesRealizacao != "" &&
    data.montante != "" &&
    data.postosCriar != "" &&
    data.razoesApresentacao != "" &&
    data.conhecimentoV21 != "" &&
    data.expectativas != "" &&
    controlPhone !== false &&
    $('input#accept-pp').is(':checked') == true
  ) {
      $.ajax({
          url: "/ajax/inscricoes.php",
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
