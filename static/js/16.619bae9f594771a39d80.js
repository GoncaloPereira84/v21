webpackJsonp([16],{YLCj:function(e,t,a){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var r=a("mtWM"),o=a.n(r),s=a("1ZI0"),i=a.n(s),n={data:function(){return{balloon:i.a,title:"",amount:"",formacao:[{title:"",about:"",why:""}]}},metaInfo:function(){return{title:this.title,meta:[{name:"description",content:""},{property:"og:title",content:""},{property:"og:url",content:""},{property:"og:description",content:""}]}},methods:{updateValue:function(e){var t=e.target.value;String(t).length<9&&(this.amount=t),this.$forceUpdate()},closeAllSelect:function(e){var t,a,r,o,s,i=[];for(t=document.getElementsByClassName("select-items"),a=document.getElementsByClassName("select-selected"),o=t.length,s=a.length,r=0;r<s;r++)e==a[r]?i.push(r):a[r].classList.remove("select-arrow-active");for(r=0;r<o;r++)i.indexOf(r)&&t[r].classList.add("select-hide")},addSelectElements:function(e){var t,a,r,o,s,i,n,c,l,d,p;for(o=(t=document.getElementsByClassName("select-referral")).length,a=0;a<o;a++){for(s=(i=t[a].getElementsByTagName("select")[0]).length,(n=document.createElement("DIV")).setAttribute("class","select-selected"),t[a].appendChild(n),(c=document.createElement("DIV")).innerHTML=i.options[i.selectedIndex].innerHTML,n.appendChild(c),(l=document.createElement("DIV")).setAttribute("class","select-items select-hide"),r=1;r<s;r++)(d=document.createElement("DIV")).innerHTML=i.options[r].innerHTML,d.addEventListener("click",function(e){var t,a,r,o,s,i,n;for(i=(o=this.parentNode.parentNode.getElementsByTagName("select")[0]).length,s=this.parentNode.previousSibling,a=0;a<i;a++)if(o.options[a].innerHTML==this.innerHTML){for((p=document.createElement("DIV")).innerHTML=o.options[a].innerHTML,o.selectedIndex=a,s.innerHTML="",s.appendChild(p),n=(t=this.parentNode.getElementsByClassName("same-as-selected")).length,r=0;r<n;r++)t[r].removeAttribute("class");this.setAttribute("class","same-as-selected");break}s.click()}),l.appendChild(d);t[a].appendChild(l),n.addEventListener("click",function(t){t.stopPropagation(),e.closeAllSelect(this),this.nextSibling.classList.toggle("select-hide"),this.classList.toggle("select-arrow-active")})}},getFormDataInscricao:function(){var e=new FormData,t=document.querySelector(".formacao-title"),a=document.getElementById("name"),r=document.getElementById("dob"),o=document.getElementById("age"),s=document.getElementById("address"),i=document.getElementById("pc"),n=document.getElementById("city"),c=document.getElementById("phone"),l=document.getElementById("email"),d=document.getElementById("nif"),p=document.getElementById("name-recibo"),v=document.getElementById("address-recibo"),m=document.getElementById("pc-recibo"),u=document.getElementById("nif-recibo"),f=document.getElementById("education"),_=document.getElementById("experience"),h=document.getElementById("profissao"),b=document.getElementById("local-trabalho"),C=document.getElementById("local-ensino"),g=document.getElementById("curso"),x=document.getElementById("ano-curso"),y=document.getElementById("q1"),E=document.getElementById("q2"),q=document.getElementById("q3"),P=document.querySelector(".select-referral .select-selected");new MutationObserver(function(e){$(".select-referral .select-selected").text(),document.referrer}).observe(P,{attributes:!0,childList:!0,characterData:!0});var I=document.getElementById("comp"),w=document.querySelector("#accept-tc-3"),S=document.querySelector("#optout"),B={formacao:t.innerText,name:a.value,dob:r.value,age:o.value,address:s.value,pc:i.value,city:n.value,phone:c.value,email:l.value,nif:d.value,name_recibo:p.value,address_recibo:v.value,pc_recibo:m.value,nif_recibo:u.value,education:f.value,experience:_.value,profissao:h.value,local_trabalho:b.value,local_ensino:C.value,curso:g.value,ano_curso:x.value,q1:y.value,q2:E.value,q3:q.value,referral:P.innerText,file:I.value};""==B.name?$(".error-name").text("Por favor preencher o nome completo."):$(".error-name").text(""),""==B.dob?$(".error-dob").text("Por favor preencher a data de nascimento."):$(".error-dob").text(""),""==B.age?$(".error-age").text("Por favor preencher a idade."):$(".error-age").text(""),""==B.address?$(".error-address").text("Por favor preencher a morada."):$(".error-address").text(""),""==B.pc?$(".error-pc").text("Por favor preencher o Código-Postal."):$(".error-pc").text(""),""==B.city?$(".error-city").text("Por favor preencher a cidade."):$(".error-city").text("");var A=0;""==B.phone?$(".error-phone").text("Por favor preencha o telefone."):String(B.phone).length<9?$(".error-phone").text("O número de telefone tem de ter 9 dígitos."):(A=9,$(".error-phone").text("")),""==B.age?$(".error-age").text("Por favor preencher a idade."):$(".error-age").text("");var L=!1;""!=B.email?this.checkEmail(B.email)?(L=!0,$(".error-email").text("")):$(".error-email").text("O e-mail fornecido não é válido."):$(".error-email").text("Por favor preencher o e-mail.");var k=0;""==B.nif?$(".error-nif").text("Por favor preencher o nº de contribuinte."):String(B.nif).length<9?$(".error-nif").text("O número de contribuinte tem de ter 9 dígitos."):(k=9,$(".error-nif").text("")),""==B.name_recibo?$(".error-name-recibo").text("Por favor preencher o nome completo."):$(".error-name-recibo").text(""),""==B.address_recibo?$(".error-address-recibo").text("Por favor preencher a morada."):$(".error-address-recibo").text(""),""==B.pc_recibo?$(".error-pc-recibo").text("Por favor preencher o Código-Postal."):$(".error-pc-recibo").text("");var T=0;if(""==B.nif_recibo?$(".error-nif-recibo").text("Por favor preencher o nº de contribuinte."):String(B.nif_recibo).length<9?$(".error-nif-recibo").text("O número de contribuinte tem de ter 9 dígitos."):(T=9,$(".error-nif-recibo").text("")),""==B.education?$(".error-education").text("Por favor preencher a Formação Académica."):$(".error-education").text(""),""==B.experience?$(".error-experience").text("Por favor preencher a Experiência Profissional."):$(".error-experience").text(""),""==B.profissao?$(".error-profisao").text("Por favor preencher a Profissão."):$(".error-profisao").text(""),""==B.local_trabalho?$(".error-local-trabalho").text("Por favor preencher o local/instituição de trabalho."):$(".error-local-trabalho").text(""),""==B.q1?$(".error-q1").text("Por favor responder a esta pergunta."):$(".error-q1").text(""),""==B.q2?$(".error-q2").text("Por favor responder a esta pergunta."):$(".error-q2").text(""),""==B.q3?$(".error-q3").text("Por favor responder a esta pergunta."):$(".error-q3").text(""),"SELECCIONE..."==B.referral?$(".error-referral").text("Por favor seleccione da lista."):$(".error-referral").text(""),document.querySelector("#comp").files.length<1?$(".error-comp").text("Por favor anexar comprovativo de pagamento."):$(".error-comp").text(""),0==w.checked?$(".error-pp").text("Tem de aceitar as condições da Política de Privacidade."):$(".error-pp").text(""),""!=B.name&&""!=B.dob&&""!=B.age&&""!=B.address&&""!=B.pc&&""!=B.city&&""!=B.phone&&9==A&&1==L&&""!=B.nif&&9==k&&""!=B.name_recibo&&""!=B.address_recibo&&""!=B.pc_recibo&&""!=B.nif_recibo&&9==T&&""!=B.education&&""!=B.experience&&""!=B.profissao&&""!=B.local_trabalho&&""!=B.q1&&""!=B.q2&&""!=B.q3&&"SELECCIONE..."!=B.referral&&""!=B.file&&1==w.checked){document.querySelectorAll(".error").innerText="",0==S.checked?B.optout="O utilizador deseja receber informações sobre as iniciativas desenvolvidas por ACP - Clínica de Psicologia.":B.optout="O utilizador não deseja receber informações sobre as iniciativas desenvolvidas por ACP - Clínica de Psicologia.",e.append("formacao",B.formacao),e.append("name",B.name),e.append("dob",B.dob),e.append("age",B.age),e.append("address",B.address),e.append("pc",B.pc),e.append("city",B.city),e.append("phone",B.phone),e.append("email",B.email),e.append("nif",B.nif),e.append("name_recibo",B.name_recibo),e.append("address_recibo",B.address_recibo),e.append("pc_recibo",B.pc_recibo),e.append("nif_recibo",B.nif_recibo),e.append("education",B.education),e.append("experience",B.experience),e.append("profissao",B.profissao),e.append("local_trabalho",B.local_trabalho),e.append("local_ensino",B.local_ensino),e.append("curso",B.curso),e.append("ano_curso",B.ano_curso),e.append("q1",B.q1),e.append("q2",B.q2),e.append("q3",B.q3),e.append("referral",B.referral),e.append("optout",B.optout);var M=document.querySelector("input[type=file]").files;if(M.length>0)for(var H=0;H<M.length;H++){var N=M[H];e.append("uploaded_file",N)}var D=new XMLHttpRequest;D.onreadystatechange=function(){if(4==this.readyState&&200==this.status){var e=this.responseText.split("||");"true"==e[0]?($(".server-msg").css("color","#0babc5"),$(".server-msg").text(e[1])):($(".server-msg").css("color","#ff0000"),$(".server-msg").text(e[1]))}},D.open("POST","https://www.anacarolinapereira.pt/ajax/inscricao-formacao.php",!0),D.send(e)}else $(".server-msg").text("Há campos com erros. Por favor, verificar.")},checkEmail:function(e){return/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,3}$/.test(e)}},mounted:function(){var e=this;e.addSelectElements(e),document.addEventListener("click",e.closeAllSelect);document.querySelector(".topic.t0"),document.querySelector(".topic.t1"),document.querySelector(".topic.t2");var t=$(".tab.t0"),a=$(".tab.t1"),r=$(".tab.t2");$(".topic.t0").css("pointer-events","all"),$(".topic.t1").css("pointer-events","none"),$(".topic.t2").css("pointer-events","none"),t.click(function(){$(".topic.t0").animate({opacity:"1"},0),$(".topic.t1").animate({opacity:"0"},0),$(".topic.t2").animate({opacity:"0"},0),$(".topic.t0").css("pointer-events","all"),$(".topic.t1").css("pointer-events","none"),$(".topic.t2").css("pointer-events","none");var e=document.querySelector(".topic.t0");$(".topics").css("height",e.clientHeight),window.innerWidth<600&&$([document.documentElement,document.body]).animate({scrollTop:$(".topics").offset().top-100},0)}),a.click(function(){$(".topic.t0").animate({opacity:"0"},0),$(".topic.t1").animate({opacity:"1"},0),$(".topic.t2").animate({opacity:"0"},0),$(".topic.t0").css("pointer-events","none"),$(".topic.t1").css("pointer-events","all"),$(".topic.t2").css("pointer-events","none");var e=document.querySelector(".topic.t1");$(".topics").css("height",e.clientHeight),window.innerWidth<600&&$([document.documentElement,document.body]).animate({scrollTop:$(".topics").offset().top-100},0)}),r.click(function(){$(".topic.t0").animate({opacity:"0"},0),$(".topic.t1").animate({opacity:"0"},0),$(".topic.t2").animate({opacity:"1"},0),$(".topic.t0").css("pointer-events","none"),$(".topic.t1").css("pointer-events","none"),$(".topic.t2").css("pointer-events","all");var e=document.querySelector(".topic.t2");$(".topics").css("height",e.clientHeight),window.innerWidth<600&&$([document.documentElement,document.body]).animate({scrollTop:$(".topics").offset().top-100},0)});var s=window.location.href.split("/"),i=s[s.length-1],n=Array.prototype.map;o.a.get("https://www.anacarolinapereira.pt/db-api/getFormacaoInfo.php").then(function(t){var a=t.data,r=[];n.call(a,function(t){if(t.url_code==i){r.push({title:t.title,about:t.about,why:t.why});var a=t.text.replace(/(<([^>]+)>)/gi,"").substring(0,255);e.$data.title=t.title+" - Ana Carolina Pereira - Clínica de Psicologia",e.$metaInfo.meta[0].content=a+"...",e.$metaInfo.meta[1].content=t.title+" - Ana Carolina Pereira - Clínica de Psicologia",e.$metaInfo.meta[2].content="https://www.anacarolinapereira.pt/academia/formacao/"+t.url_code,e.$metaInfo.meta[3].content=a+"..."}}),e.$data.formacao=r}).then(function(){document.querySelector(".topic.t2");var e=document.querySelectorAll(".topic"),t=[];Array.prototype.max=function(){return Math.max.apply(null,this)},Array.prototype.min=function(){return Math.min.apply(null,this)},n.call(e,function(e){t.push(e.clientHeight)}),$(".topics").css("height",t.max()),window.addEventListener("resize",function(){$(".topics").css("height",t.max())})})}},c={render:function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("div",e._l(e.formacao,function(t){return a("div",{key:t.id,staticClass:"info-wrapper"},[a("h1",{staticClass:"formacao-title"},[e._v(e._s(t.title))]),e._v(" "),a("div",{staticClass:"info"},[e._m(0,!0),e._v(" "),a("div",{staticClass:"topics"},[a("div",{staticClass:"topic t0",domProps:{innerHTML:e._s(t.about)}}),e._v(" "),a("div",{staticClass:"topic t1",domProps:{innerHTML:e._s(t.why)}}),e._v(" "),a("div",{staticClass:"topic t2"},[a("span",{staticStyle:{"margin-bottom":"10px"}},[e._v("(*) Campos de preenchimento obrigatório")]),e._v(" "),a("form",{attrs:{method:"post",enctype:"multipart/form-data"}},[a("div",{staticClass:"form-wrapper"},[a("div",{staticClass:"title"},[e._v("1. Dados Pessoais")]),e._v(" "),e._m(1,!0),e._v(" "),e._m(2,!0),e._v(" "),e._m(3,!0),e._v(" "),e._m(4,!0),e._v(" "),e._m(5,!0),e._v(" "),e._m(6,!0),e._v(" "),a("div",{staticClass:"input col50"},[a("div",{staticClass:"form-controller"},[a("label",{attrs:{for:"phone"}},[e._v("Contacto telefónico *")]),e._v(" "),a("input",{attrs:{id:"phone",type:"number"},domProps:{value:e.amount},on:{input:e.updateValue}}),e._v(" "),a("span",{staticClass:"error error-phone"})])]),e._v(" "),e._m(7,!0),e._v(" "),a("div",{staticClass:"input col25"},[a("div",{staticClass:"form-controller"},[a("label",{attrs:{for:"nif"}},[e._v("Nº de Contribuinte *")]),e._v(" "),a("input",{attrs:{id:"nif",type:"number"},domProps:{value:e.amount},on:{input:e.updateValue}}),e._v(" "),a("span",{staticClass:"error error-nif"})])])]),e._v(" "),a("div",{staticClass:"form-wrapper"},[a("div",{staticClass:"title"},[e._v("2. Dados para emissão de recibo")]),e._v(" "),e._m(8,!0),e._v(" "),e._m(9,!0),e._v(" "),e._m(10,!0),e._v(" "),a("div",{staticClass:"input col33"},[a("div",{staticClass:"form-controller"},[a("label",{attrs:{for:"nif-recibo"}},[e._v("Nº de Contribuinte *")]),e._v(" "),a("input",{attrs:{id:"nif-recibo",type:"number"},domProps:{value:e.amount},on:{input:e.updateValue}}),e._v(" "),a("span",{staticClass:"error error-nif-recibo"})])])]),e._v(" "),e._m(11,!0),e._v(" "),e._m(12,!0),e._v(" "),e._m(13,!0),e._v(" "),e._m(14,!0),e._v(" "),a("div",{staticClass:"form-wrapper"},[a("div",{staticClass:"input col100"},[a("div",{staticClass:"check accept-tc"},[a("div",{staticClass:"input-container1"},[a("input",{attrs:{type:"checkbox",id:"accept-tc-3"}}),e._v(" "),a("label",{attrs:{for:"accept-tc-3"}},[e._v("\n                      Declaro que li e compreendi o alcance da\n                      "),a("router-link",{attrs:{to:"/politica-privacidade",target:"_blank"}},[e._v("Política de Privacidade")]),e._v("*\n                    ")],1)]),e._v(" "),a("span",{staticClass:"error error-pp"})]),e._v(" "),e._m(15,!0)])]),e._v(" "),a("div",{staticClass:"form-wrapper",staticStyle:{"justify-content":"flex-end"}},[a("div",{staticClass:"input col100"},[a("div",{staticClass:"form-controller",staticStyle:{"align-items":"flex-end"}},[a("span",[e._v("(*) Campos de preenchimento obrigatório")]),e._v(" "),a("div",{staticClass:"cta",on:{click:function(t){return e.getFormDataInscricao()}}},[a("div",{staticClass:"txt"},[e._v("Submeter Candidatura")])]),e._v(" "),a("span",{staticClass:"server-msg"})])])])])])])])])}),0)},staticRenderFns:[function(){var e=this.$createElement,t=this._self._c||e;return t("div",{staticClass:"tabs"},[t("div",{staticClass:"tab t0"},[t("h3",{staticClass:"txt"},[this._v("\n            Sobre a\n            "),t("span",{staticClass:"formacao"},[this._v("formação")])])]),this._v(" "),t("h3",{staticClass:"tab t1"},[t("div",{staticClass:"txt"},[this._v("Programa")])]),this._v(" "),t("h3",{staticClass:"tab t2"},[t("div",{staticClass:"txt"},[this._v("Inscrições")])])])},function(){var e=this.$createElement,t=this._self._c||e;return t("div",{staticClass:"input col100"},[t("div",{staticClass:"form-controller"},[t("label",{attrs:{for:"name"}},[this._v("Nome completo *")]),this._v(" "),t("input",{attrs:{id:"name",type:"text"}}),this._v(" "),t("span",{staticClass:"error error-name"})])])},function(){var e=this.$createElement,t=this._self._c||e;return t("div",{staticClass:"input col50"},[t("div",{staticClass:"form-controller"},[t("label",{attrs:{for:"dob"}},[this._v("Data de nascimento *")]),this._v(" "),t("input",{attrs:{id:"dob",type:"date"}}),this._v(" "),t("span",{staticClass:"error error-dob"})])])},function(){var e=this.$createElement,t=this._self._c||e;return t("div",{staticClass:"input col50"},[t("div",{staticClass:"form-controller"},[t("label",{attrs:{for:"age"}},[this._v("Idade *")]),this._v(" "),t("input",{attrs:{id:"age",type:"number"}}),this._v(" "),t("span",{staticClass:"error error-age"})])])},function(){var e=this.$createElement,t=this._self._c||e;return t("div",{staticClass:"input col33"},[t("div",{staticClass:"form-controller"},[t("label",{attrs:{for:"address"}},[this._v("Morada *")]),this._v(" "),t("input",{attrs:{id:"address",type:"text"}}),this._v(" "),t("span",{staticClass:"error error-address"})])])},function(){var e=this.$createElement,t=this._self._c||e;return t("div",{staticClass:"input col33"},[t("div",{staticClass:"form-controller"},[t("label",{attrs:{for:"pc"}},[this._v("Código-Postal *")]),this._v(" "),t("input",{attrs:{id:"pc",type:"text"}}),this._v(" "),t("span",{staticClass:"error error-pc"})])])},function(){var e=this.$createElement,t=this._self._c||e;return t("div",{staticClass:"input col33"},[t("div",{staticClass:"form-controller"},[t("label",{attrs:{for:"city"}},[this._v("Localidade *")]),this._v(" "),t("input",{attrs:{id:"city",type:"text"}}),this._v(" "),t("span",{staticClass:"error error-city"})])])},function(){var e=this.$createElement,t=this._self._c||e;return t("div",{staticClass:"input col50"},[t("div",{staticClass:"form-controller"},[t("label",{attrs:{for:"email"}},[this._v("E-mail *")]),this._v(" "),t("input",{attrs:{id:"email",type:"text"}}),this._v(" "),t("span",{staticClass:"error error-email"})])])},function(){var e=this.$createElement,t=this._self._c||e;return t("div",{staticClass:"input col100"},[t("div",{staticClass:"form-controller"},[t("label",{attrs:{for:"name-recibo"}},[this._v("Nome completo *")]),this._v(" "),t("input",{attrs:{id:"name-recibo",type:"text"}}),this._v(" "),t("span",{staticClass:"error error-name-recibo"})])])},function(){var e=this.$createElement,t=this._self._c||e;return t("div",{staticClass:"input col33"},[t("div",{staticClass:"form-controller"},[t("label",{attrs:{for:"address-recibo"}},[this._v("Morada *")]),this._v(" "),t("input",{attrs:{id:"address-recibo",type:"text"}}),this._v(" "),t("span",{staticClass:"error error-address-recibo"})])])},function(){var e=this.$createElement,t=this._self._c||e;return t("div",{staticClass:"input col33"},[t("div",{staticClass:"form-controller"},[t("label",{attrs:{for:"pc-recibo"}},[this._v("Código-Postal *")]),this._v(" "),t("input",{attrs:{id:"pc-recibo",type:"text"}}),this._v(" "),t("span",{staticClass:"error error-pc-recibo"})])])},function(){var e=this.$createElement,t=this._self._c||e;return t("div",{staticClass:"form-wrapper"},[t("div",{staticClass:"title"},[this._v("3. Formação Académica")]),this._v(" "),t("div",{staticClass:"input col100"},[t("div",{staticClass:"form-controller"},[t("label",{attrs:{for:"education"}},[this._v("Formação Académica relevante *")]),this._v(" "),t("textarea",{attrs:{id:"education",cols:"30",rows:"10",placeholder:"Escreva aqui a sua Formação Académica relevante."}}),this._v(" "),t("span",{staticClass:"error error-education"})])])])},function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("div",{staticClass:"form-wrapper"},[a("div",{staticClass:"title"},[e._v("4. Experiência Profissional (se aplicável)")]),e._v(" "),a("div",{staticClass:"input col100"},[a("div",{staticClass:"form-controller"},[a("label",{attrs:{for:"experience"}},[e._v("Experiência Profissional relevante *")]),e._v(" "),a("textarea",{attrs:{id:"experience",cols:"30",rows:"10",placeholder:"Escreva aqui a sua Experiência Profissional relevante."}}),e._v(" "),a("span",{staticClass:"error error-experience"})])]),e._v(" "),a("div",{staticClass:"input col50"},[a("div",{staticClass:"form-controller"},[a("label",{attrs:{for:"profissao"}},[e._v("Profissão atual *")]),e._v(" "),a("input",{attrs:{id:"profissao",type:"text"}})])]),e._v(" "),a("div",{staticClass:"input col50"},[a("div",{staticClass:"form-controller"},[a("label",{attrs:{for:"local-trabalho"}},[e._v("Local de trabalho/instituição atual *")]),e._v(" "),a("input",{attrs:{id:"local-trabalho",type:"text"}})])]),e._v(" "),a("div",{staticClass:"subtitle"},[e._v("Estudantes (se aplicável)")]),e._v(" "),a("div",{staticClass:"input col33"},[a("div",{staticClass:"form-controller"},[a("label",{attrs:{for:"local-ensino"}},[e._v("Instituição de ensino")]),e._v(" "),a("input",{attrs:{id:"local-ensino",type:"text"}})])]),e._v(" "),a("div",{staticClass:"input col33"},[a("div",{staticClass:"form-controller"},[a("label",{attrs:{for:"curso"}},[e._v("Curso")]),e._v(" "),a("input",{attrs:{id:"curso",type:"text"}})])]),e._v(" "),a("div",{staticClass:"input col33"},[a("div",{staticClass:"form-controller"},[a("label",{attrs:{for:"ano-curso"}},[e._v("Ano de frequência do curso")]),e._v(" "),a("input",{attrs:{id:"ano-curso",type:"text"}})])])])},function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("div",{staticClass:"form-wrapper"},[a("div",{staticClass:"title"},[e._v("5. Candidatura")]),e._v(" "),a("div",{staticClass:"intro-text"},[a("p",[e._v("Informa-se que as candidaturas a nós remetidas serão sujeitas a processo de seleção.")]),e._v(" "),a("p",[e._v("\n                  Gostaríamos que nos ajudasse a promover uma comunicação próxima e transparente consigo de modo a\n                  que esta formação possa ser tão relevante para si como a nossa intenção e desejo. Assim, e uma vez\n                  que a sua opinião é, para nós, essencial, nomeadamente por nos permitir, continuamente, maximizar\n                  as iniciativas desenvolvidas pela nossa Academia, pedíamos-lhe que respondesse, de forma sucinta, a três questões:\n                ")])]),e._v(" "),a("div",{staticClass:"input col100"},[a("div",{staticClass:"form-controller"},[a("label",{attrs:{for:"q1"}},[e._v("5.1. Quais as suas expetativas para esta formação? *")]),e._v(" "),a("textarea",{attrs:{id:"q1",cols:"30",rows:"5",placeholder:"Escreva aqui"}}),e._v(" "),a("span",{staticClass:"error error-q1"})])]),e._v(" "),a("div",{staticClass:"input col100"},[a("div",{staticClass:"form-controller"},[a("label",{attrs:{for:"q2"}},[e._v("5.2. Qual a sua motivação para participar nesta formação? *")]),e._v(" "),a("textarea",{attrs:{id:"q2",cols:"30",rows:"5",placeholder:"Escreva aqui"}}),e._v(" "),a("span",{staticClass:"error error-q2"})])]),e._v(" "),a("div",{staticClass:"input col100"},[a("div",{staticClass:"form-controller"},[a("label",{attrs:{for:"q3"}},[e._v("5.3. Quais as competências que imagina alcançar aquando da conclusão da formação? *")]),e._v(" "),a("textarea",{attrs:{id:"q3",cols:"30",rows:"5",placeholder:"Escreva aqui"}}),e._v(" "),a("span",{staticClass:"error error-q3"})])])])},function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("div",{staticClass:"form-wrapper"},[a("div",{staticClass:"title"},[e._v("6. Onde nos conheceu *")]),e._v(" "),a("div",{staticClass:"input col100"},[a("div",{staticClass:"form-controller"},[a("div",{staticClass:"select-referral"},[a("select",{attrs:{id:"where",name:"where"}},[a("option",{staticClass:"default",attrs:{value:"none",disabled:"",selected:""}},[e._v("Seleccione...")]),e._v(" "),a("option",{attrs:{value:"motivo-1"}},[e._v("Colegas")]),e._v(" "),a("option",{attrs:{value:"motivo-2"}},[e._v("Divulgação por e-mail")]),e._v(" "),a("option",{attrs:{value:"motivo-3"}},[e._v("Redes Sociais")]),e._v(" "),a("option",{attrs:{value:"motivo-4"}},[e._v("Site")]),e._v(" "),a("option",{attrs:{value:"motivo-5"}},[e._v("Familiares/Amigos")]),e._v(" "),a("option",{attrs:{value:"outro"}},[e._v("Outro")])])]),e._v(" "),a("span",{staticClass:"error error-referral"})])]),e._v(" "),a("div",{staticClass:"input col100"},[a("div",{staticClass:"form-controller comp"},[a("label",{attrs:{for:"comp"}},[e._v("Anexar comprovativo de pagamento *")]),e._v(" "),a("input",{attrs:{id:"comp",type:"file",name:"uploaded_file"}}),e._v(" "),a("span",{staticClass:"error error-comp"})])])])},function(){var e=this.$createElement,t=this._self._c||e;return t("div",{staticClass:"check optout"},[t("div",{staticClass:"input-container1"},[t("input",{attrs:{type:"checkbox",id:"optout"}}),this._v(" "),t("label",{attrs:{for:"optout"}},[this._v("Caso não deseje receber informações sobre as iniciativas desenvolvidas por ACP – Clínica de Psicologia, por favor, indique-nos assinalando esta opção que, em absoluto, respeitaremos a sua decisão.")])])])}]};var l=a("VU/8")(n,c,!1,function(e){a("eoKK")},"data-v-d83a4a0c",null);t.default=l.exports},eoKK:function(e,t){}});
//# sourceMappingURL=16.619bae9f594771a39d80.js.map