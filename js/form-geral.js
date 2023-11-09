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

jQuery(document).ready(function() {
    jQuery(window).keydown(function(event) {
        if (event.keyCode == 13) {
            event.preventDefault();
            return false;
        }
    });
});

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
    parentElem.addEventListener("click", function(e) {
        cbclick(e, elem);
    });
}

var tipoIncubacaoCont = document.getElementById("tipo-incubacao");
checkboxesUniqueSelect(tipoIncubacaoCont, "tipo-incubacao");

$("#submit").on("click", function() {
    var att = new FormData();

    var form = document.getElementById('submit').getAttribute('data-form-name');
    var id = document.getElementById('submit').getAttribute('data-form-id');
    var nomeCandidato = document.getElementById("nome-candidato");
    var nomePromotor = document.getElementById("nome-promotor");
    var moradaPromotor = document.getElementById("morada-promotor");
    var cpPromotor = document.getElementById("cp-promotor");
    var localPromotor = document.getElementById("local-promotor");
    var ccPromotor = document.getElementById("cc-promotor");
    var nifPromotor = document.getElementById("nif-promotor");
    var dnPromotor = document.getElementById("dn-promotor");
    var habsPromotor = document.getElementById("habs-promotor");
    var profPromotor = document.getElementById("prof-promotor");
    var contactoPromotor = document.getElementById("contacto-promotor");
    var contacto2Promotor = document.getElementById("contacto2-promotor");
    var emailPromotor = document.getElementById("email-promotor");

    var nomeEmpresa = document.getElementById("nome-empresa");
    var nifEmpresa = document.getElementById("nif-empresa");
    var dataConst = document.getElementById("data-constituicao");
    var moradaEmpresa = document.getElementById("morada-empresa");
    var cpEmpresa = document.getElementById("cp-empresa");
    var localEmpresa = document.getElementById("local-empresa");
    var formaEmpresa = document.getElementById("forma-juridica");
    var caeEmpresa = document.getElementById("cae-principal");
    var cae2Empresa = document.getElementById("cae-secundario");
    var contactoEmpresa = document.getElementById("contacto-empresa");
    var emailEmpresa = document.getElementById("email-empresa");
    var siteEmpresa = document.getElementById("site-empresa");
    var trabalhadoresEmpresa = document.getElementById("n-trabalhadores");
    var setorEmpresa = document.getElementById("setor-atividade");
    var objetoEmpresa = document.getElementById("objeto-social");
    var tipoIncubacao = document.querySelector("#tipo-incubacao input[type='checkbox']:checked");

    var descProjecto = document.getElementById("desc-projecto");
    var razoesRealizacao = document.getElementById("razoes-realizacao");
    var montante = document.getElementById("montante-previsto");
    var postosCriar = document.getElementById("postos-criar");
    var razoesApresentacao = document.getElementById("razoes-apresentacao");
    var conhecimentoV21 = document.getElementById("conhecimento-v21");
    var expectativas = document.getElementById("expectativas");

    var cv = document.getElementById("cv");

    var data = {
        form: form,
        id: id,
        nomeCandidato: nomeCandidato.value,
        nomePromotor: nomePromotor.value,
        moradaPromotor: moradaPromotor.value,
        cpPromotor: cpPromotor.value,
        localPromotor: localPromotor.value,
        ccPromotor: ccPromotor.value,
        nifPromotor: nifPromotor.value,
        dnPromotor: dnPromotor.value,
        habsPromotor: habsPromotor.value,
        profPromotor: profPromotor.value,
        contactoPromotor: contactoPromotor.value,
        contacto2Promotor: contacto2Promotor.value,
        emailPromotor: emailPromotor.value,
        nomeEmpresa: nomeEmpresa.value,
        nifEmpresa: nifEmpresa.value,
        dataConst: dataConst.value,
        moradaEmpresa: moradaEmpresa.value,
        cpEmpresa: cpEmpresa.value,
        localEmpresa: localEmpresa.value,
        formaEmpresa: formaEmpresa.value,
        caeEmpresa: caeEmpresa.value,
        cae2Empresa: cae2Empresa.value,
        contactoEmpresa: contactoEmpresa.value,
        emailEmpresa: emailEmpresa.value,
        siteEmpresa: siteEmpresa.value,
        trabalhadoresEmpresa: trabalhadoresEmpresa.value,
        setorEmpresa: setorEmpresa.value,
        objetoEmpresa: objetoEmpresa.value,
        tipoIncubacao: tipoIncubacao == null ? null : tipoIncubacao.value,
        descProjecto: descProjecto.value,
        razoesRealizacao: razoesRealizacao.value,
        montante: montante.value,
        postosCriar: postosCriar.value,
        razoesApresentacao: razoesApresentacao.value,
        conhecimentoV21: conhecimentoV21.value,
        expectativas: expectativas.value,
        cv: cv.value
    };

    if (!$('input#accept-pp').is(':checked')) {
        $(".erro.accept-pp").text("Por favor, declare que leu e compreendeu a Política de Privacidade V21.");
    } else {
        $(".erro.accept-pp").text("");
    }

    // const files = document.querySelector("#cv").files;
    // if (files.length < 1) {
    //   $(".erro.cv").text("Por favor anexar o CV.");
    // } else {
    //   $(".erro.cv").text("");
    // }

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
    if (tipoIncubacao == null) {
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
        data.emailPromotor != "" &&
        (incubacao != "" || incubacao != null) &&
        data.descProjecto != "" &&
        data.razoesRealizacao != "" &&
        data.montante != "" &&
        data.postosCriar != "" &&
        data.razoesApresentacao != "" &&
        data.conhecimentoV21 != "" &&
        data.expectativas != "" &&
        //data.cv != '' &&
        controlPhone !== false &&
        $('input#accept-pp').is(':checked') == true
    ) {
        att.append("form", data.form);
        att.append("id", data.id);
        att.append("nomeCandidato", data.nomeCandidato);
        att.append("nomePromotor", data.nomePromotor);
        att.append("moradaPromotor", data.moradaPromotor);
        att.append("cpPromotor", data.cpPromotor);
        att.append("localPromotor", data.localPromotor);
        att.append("ccPromotor", data.ccPromotor);
        att.append("nifPromotor", data.nifPromotor);
        att.append("dnPromotor", data.dnPromotor);
        att.append("habsPromotor", data.habsPromotor);
        att.append("profPromotor", data.profPromotor);
        att.append("contactoPromotor", data.contactoPromotor);
        att.append("contacto2Promotor", data.contacto2Promotor);
        att.append("emailPromotor", data.emailPromotor);
        att.append("nomeEmpresa", data.nomeEmpresa);
        att.append("nifEmpresa", data.nifEmpresa);
        att.append("dataConst", data.dataConst);
        att.append("moradaEmpresa", data.moradaEmpresa);
        att.append("cpEmpresa", data.cpEmpresa);
        att.append("localEmpresa", data.localEmpresa);
        att.append("formaEmpresa", data.formaEmpresa);
        att.append("caeEmpresa", data.caeEmpresa);
        att.append("cae2Empresa", data.cae2Empresa);
        att.append("contactoEmpresa", data.contactoEmpresa);
        att.append("emailEmpresa", data.emailEmpresa);
        att.append("siteEmpresa", data.siteEmpresa);
        att.append("trabalhadoresEmpresa", data.trabalhadoresEmpresa);
        att.append("setorEmpresa", data.setorEmpresa);
        att.append("objetoEmpresa", data.objetoEmpresa);
        att.append("tipoIncubacao", data.tipoIncubacao);
        att.append("descProjecto", data.descProjecto);
        att.append("razoesRealizacao", data.razoesRealizacao);
        att.append("montante", data.montante);
        att.append("postosCriar", data.postosCriar);
        att.append("razoesApresentacao", data.razoesApresentacao);
        att.append("conhecimentoV21", data.conhecimentoV21);
        att.append("expectativas", data.expectativas);

        const files = document.querySelector("input[type=file]").files;

        if (files.length > 0) {
            for (let i = 0; i < files.length; i++) {
                let file = files[i];
                att.append("uploaded_cv", file);
            }
        }

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var resp = this.responseText.split("||");
                if (resp[0] == "true") {
                    $(".erro.submit").css("color", "#0babc5");
                    $(".erro.submit").text(resp[1].split('[]')[0]);
                    // console.log(resp);
                } else if (resp[0] == "\ntrue") {
                    $(".erro.submit").css("color", "#0babc5");
                    $(".erro.submit").text(resp[1].split('[]')[0]);
                    // console.log(resp);
                } else {
                    $(".erro.submit").css("color", "#ff0000");
                    $(".erro.submit").text(resp[1].split('[]')[0]);
                    // console.log(resp);
                }
            }
        };

        xhttp.open(
            "POST",
            "https://www.v21.pt/ajax/inscricoes.php",
            true
        );
        xhttp.send(att);
        // $.ajax({
        //     url: "/ajax/inscricoes.php",
        //     type: "POST",
        //     data: data,
        //     dataType: "json",
        //     success: function (response) {
        //       $(".erro.submit").text(response.result);

        //       setInterval(() => {
        //           $(".erro.submit").text("");
        //       }, 5000);
        //     },
        // });
    }
});

function checkEmail($email) {
    var filter = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,3}$/;
    return filter.test($email);
}