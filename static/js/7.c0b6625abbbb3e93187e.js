webpackJsonp([7,14,28,39],{EQHb:function(e,t){},Np6n:function(e,t,a){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var s=a("zwcc"),i=a.n(s),n=a("0w89"),o=a.n(n),r=a("pj8R"),l=a.n(r),c=a("mtWM"),d=a.n(c),m={data:function(){return{phone:i.a,email:o.a,location:l.a,tlf1:"",tlf2:"",email1:"",email2:"",address:"",horario:"",api_code:""}},methods:{openContactForm:function(){var e=document.querySelector("#contact-form-2");document.querySelector("#menu");e.style.transition="1s",e.style.transform="translate(-50%, -50%)",e.style.pointerEvents="all",$("#contact-form-2 .page").css("pointer-events","all"),document.documentElement.style.overflow="hidden",$(".menu-wrapper-mobile .menu-items").removeClass("open"),$(".menu-wrapper-mobile .btn-menu").removeClass("open"),$(".menu-wrapper-mobile .close-menu").removeClass("open"),$("#contact-form-2 .p0 .text").animate({left:0,opacity:1},500)},FadeIn:function(){var e=$(".movement, .cover"),t=$(".movement-delayed"),a=$(".lateral, .lateralR"),s=$("#svg");!function(e){e.fn.visible=function(t,a){void 0===a&&(a=0);var s=e(this),i=e(window),n=i.scrollTop(),o=n+i.height(),r=s.offset().top+a,l=r+s.height()-a;return(!0===t?r:l)<=o&&(!0===t?l:r)>=n}}(jQuery);var i=$(window),n=!0;e.each(function(e,t){(t=$(t)).visible(!0)&&t.addClass("placed")}),s.each(function(e,t){(t=$(t)).visible(!0)&&(n&&t.append("<img src='assets/img/elemento_animated.svg' alt=''></img>"),n=!1)}),a.each(function(e,t){(t=$(t)).visible(!0,100)&&t.addClass("placed")}),t.each(function(e,t){(t=$(t)).visible(!0,800)&&t.addClass("placed")}),i.scroll(function(i){e.each(function(e,t){(t=$(t)).visible(!0)&&t.addClass("placed")}),a.each(function(e,t){(t=$(t)).visible(!0,100)&&t.addClass("placed")}),t.each(function(e,t){(t=$(t)).visible(!0,800)&&t.addClass("placed")}),s.each(function(e,t){(t=$(t)).visible(!0)&&(n&&t.append("<img src='assets/img/elemento_animated.svg' alt=''></img>"),n=!1)})})}},mounted:function(){Array.prototype.map;var e=this;d.a.get("https://www.anacarolinapereira.pt/db-api/getContactosHomepage.php").then(function(t){var a=t.data;e.tlf1="+351 "+a[0].tlf_1.slice(0,3)+" "+a[0].tlf_1.slice(3,6)+" "+a[0].tlf_1.slice(6,9),""==a[0].tlf_2?$("#tlf2").css("display","none"):($("#tlf2").css("display","inline-block"),e.tlf2=" ou "+a[0].tlf_2),e.email1=a[0].email_1,""==a[0].email_2?$("#email2").css("display","none"):($("#email2").css("display","inline-block"),e.email2=a[0].email_2),e.address=a[0].address,e.horario=a[0].horario,e.api_code=a[0].google_maps_code}).then(function(){e.FadeIn()})}},v={render:function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("div",{staticClass:"contacto-wrapper movement"},[a("div",{attrs:{id:"contacto"}},[a("div",{staticClass:"left"},[a("div",{staticClass:"title main"},[e._v("Onde Estamos")]),e._v(" "),a("div",{staticClass:"line"}),e._v(" "),a("div",{staticClass:"copy"},[a("div",{staticClass:"topic"},[a("div",{staticClass:"txt bold"},[e._v("Horário de Atendimento")]),e._v(" "),a("div",{staticClass:"txt",domProps:{innerHTML:e._s(e.horario)}})]),e._v(" "),a("div",{staticClass:"topic conts"},[a("div",{staticClass:"txt bold"},[e._v("Contactos")]),e._v(" "),a("div",[a("div",{staticClass:"icon"},[a("img",{attrs:{src:e.phone,alt:""}})]),e._v(" "),a("div",{staticClass:"txt"},[a("span",{attrs:{id:"tlf1"}},[e._v(e._s(e.tlf1))]),e._v(" "),a("span",{attrs:{id:"tlf2"}},[e._v(e._s(e.tlf2))])])]),e._v(" "),a("div",[a("div",{staticClass:"icon"},[a("img",{attrs:{src:e.email,alt:""}})]),e._v(" "),a("div",{staticClass:"txt"},[a("a",{staticStyle:{color:"#95989a"},attrs:{href:"mailto:"+e.email1}},[e._v(e._s(e.email1))]),e._v(" "),a("a",{staticStyle:{color:"#95989a"},attrs:{href:"mailto:"+e.email2}},[e._v(e._s(e.email2))])])])]),e._v(" "),a("div",{staticClass:"topic"},[a("div",{staticClass:"txt bold"},[e._v("Morada")]),e._v(" "),a("div",{staticStyle:{display:"flex"}},[a("div",{staticClass:"icon"},[a("img",{attrs:{src:e.location,alt:""}})]),e._v(" "),a("div",{staticClass:"txt",domProps:{innerHTML:e._s(e.address)}})])])])]),e._v(" "),a("div",{staticClass:"right",domProps:{innerHTML:e._s(e.api_code)}})])])},staticRenderFns:[]};var u=a("VU/8")(m,v,!1,function(e){a("xfmn")},"data-v-67f495db",null);t.default=u.exports},eHuK:function(e,t){},eImG:function(e,t,a){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var s=a("jBn5"),i=a("kBGk"),n=a("Np6n"),o={components:{banner:s.default,formulario:i.default,contactos:n.default},metaInfo:function(){return{title:"Contactos - Ana Carolina Pereira - Clínica de Psicologia",meta:[{name:"description",content:"Visite a nossa clínica ou entre em contacto connosco através do nosso número de telefone ou do nosso formulário online."},{property:"og:title",content:"Contactos - Ana Carolina Pereira - Clínica de Psicologia"},{property:"og:url",content:"https://www.anacarolinapereira.pt/contactos"},{property:"og:description",content:"Visite a nossa clínica ou entre em contacto connosco através do nosso número de telefone ou do nosso formulário online."}]}}},r={render:function(){var e=this.$createElement,t=this._self._c||e;return t("div",[t("banner"),this._v(" "),t("formulario"),this._v(" "),t("contactos")],1)},staticRenderFns:[]};var l=a("VU/8")(o,r,!1,function(e){a("EQHb")},"data-v-57b14636",null);t.default=l.exports},jBn5:function(e,t,a){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var s={render:function(){this.$createElement;this._self._c;return this._m(0)},staticRenderFns:[function(){var e=this.$createElement,t=this._self._c||e;return t("div",{staticClass:"slideshow-wrapper"},[t("div",{attrs:{id:"slideshow"}},[t("div",{staticClass:"slide"},[t("div",{staticClass:"copy"},[t("div",{staticClass:"line"}),this._v(" "),t("div",{staticClass:"title"},[this._v("Contactos")])])])])])}]};var i=a("VU/8")({},s,!1,function(e){a("eHuK")},"data-v-06b5fe09",null);t.default=i.exports},kBGk:function(e,t,a){"use strict";Object.defineProperty(t,"__esModule",{value:!0});a("mtWM");var s=a("knko"),i=a.n(s),n={data:function(){return{caderno:i.a,amount:""}},methods:{closeAllSelect:function(e){var t,a,s,i,n,o=[];for(t=document.getElementsByClassName("select-items"),a=document.getElementsByClassName("select-selected"),i=t.length,n=a.length,s=0;s<n;s++)e==a[s]?o.push(s):a[s].classList.remove("select-arrow-active");for(s=0;s<i;s++)o.indexOf(s)&&t[s].classList.add("select-hide")},addSelectElements:function(e){var t,a,s,i,n,o,r,l,c,d,m;for(i=(t=document.getElementsByClassName("select-ref")).length,a=0;a<i;a++){for(n=(o=t[a].getElementsByTagName("select")[0]).length,(r=document.createElement("DIV")).setAttribute("class","select-selected"),t[a].appendChild(r),(l=document.createElement("DIV")).innerHTML=o.options[o.selectedIndex].innerHTML,r.appendChild(l),(c=document.createElement("DIV")).setAttribute("class","select-items select-hide"),s=1;s<n;s++)(d=document.createElement("DIV")).innerHTML=o.options[s].innerHTML,d.addEventListener("click",function(e){var t,a,s,i,n,o,r;for(o=(i=this.parentNode.parentNode.getElementsByTagName("select")[0]).length,n=this.parentNode.previousSibling,a=0;a<o;a++)if(i.options[a].innerHTML==this.innerHTML){for((m=document.createElement("DIV")).innerHTML=i.options[a].innerHTML,i.selectedIndex=a,n.innerHTML="",n.appendChild(m),r=(t=this.parentNode.getElementsByClassName("same-as-selected")).length,s=0;s<r;s++)t[s].removeAttribute("class");this.setAttribute("class","same-as-selected");break}n.click()}),c.appendChild(d);t[a].appendChild(c),r.addEventListener("click",function(t){t.stopPropagation(),e.closeAllSelect(this),this.nextSibling.classList.toggle("select-hide"),this.classList.toggle("select-arrow-active")})}},updateValue:function(e){var t=e.target.value;String(t).length<9&&(this.amount=t),this.$forceUpdate()},submitForm:function(){var e=$("#name"),t=$("#email"),a=$("#phone"),s=$("#message"),i=document.querySelector(".select-ref .select-selected");new MutationObserver(function(e){$(".select-ref .select-selected").text(),document.referrer}).observe(i,{attributes:!0,childList:!0,characterData:!0});var n={name:e.val(),email:t.val(),phone:a.val(),reason:i.innerText,message:s.val()},o=document.querySelector("#accept-tc-4");0==o.checked?$(".error.pp").text("Tem de aceitar as condições da Política de Privacidade."):$(".error.pp").text(""),""==n.message?$(".error.msg").text("Por favor escreva a mensagem."):$(".error.msg").text(""),"Como obteve conhecimento?"==n.reason?$(".error.reason").text("Por favor seleccione da lista."):$(".error.reason").text("");var r=0;""==n.phone?$(".error.phone").text("Por favor preencha o telefone."):String(n.phone).length<9?$(".error.phone").text("O número de telefone tem de ter 9 dígitos."):(r=9,$(".error.phone").text(""));var l=!1;""==n.email?$(".error.email").text("Por favor preencha o e-mail."):this.checkEmail(n.email)?(l=!0,$(".error.email").text("")):$(".error.email").text("O e-mail inserido não é válido.");""==n.name?$(".error.name").text("Por favor preencha o nome."):$(".error.name").text(""),""!=n.name&&""!=n.phone&&9==r&&"Como obteve conhecimento?"!=n.reason&&1==l&&""!=n.message&&1==o.checked&&$.ajax({url:"https://www.anacarolinapereira.pt/ajax/contact.php",type:"POST",data:n,dataType:"json",success:function(e){$(".error.general").text(e.result),setInterval(function(){$(".error.general").text("")},5e3)}})},checkEmail:function(e){return/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,3}$/.test(e)},FadeIn:function(){var e=$(".movement, .cover"),t=$(".movement-delayed"),a=$(".lateral, .lateralR"),s=$("#svg");!function(e){e.fn.visible=function(t,a){void 0===a&&(a=0);var s=e(this),i=e(window),n=i.scrollTop(),o=n+i.height(),r=s.offset().top+a,l=r+s.height()-a;return(!0===t?r:l)<=o&&(!0===t?l:r)>=n}}(jQuery);var i=$(window),n=!0;e.each(function(e,t){(t=$(t)).visible(!0)&&t.addClass("placed")}),s.each(function(e,t){(t=$(t)).visible(!0)&&(n&&t.append("<img src='assets/img/elemento_animated.svg' alt=''></img>"),n=!1)}),a.each(function(e,t){(t=$(t)).visible(!0,100)&&t.addClass("placed")}),t.each(function(e,t){(t=$(t)).visible(!0,800)&&t.addClass("placed")}),i.scroll(function(i){e.each(function(e,t){(t=$(t)).visible(!0)&&t.addClass("placed")}),a.each(function(e,t){(t=$(t)).visible(!0,100)&&t.addClass("placed")}),t.each(function(e,t){(t=$(t)).visible(!0,800)&&t.addClass("placed")}),s.each(function(e,t){(t=$(t)).visible(!0)&&(n&&t.append("<img src='assets/img/elemento_animated.svg' alt=''></img>"),n=!1)})})}},mounted:function(){$("span.error").text("");this.addSelectElements(this),this.FadeIn(),document.addEventListener("click",this.closeAllSelect)}},o={render:function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("div",{staticClass:"formulario movement"},[e._m(0),e._v(" "),a("div",{staticClass:"line"}),e._v(" "),a("div",{staticClass:"content"},[a("div",{staticClass:"left"},[a("div",{staticClass:"caderno",style:{"background-image":"url("+e.caderno+")"}})]),e._v(" "),a("div",{staticClass:"right"},[a("div",{staticClass:"form-wrapper"},[a("div",{staticClass:"form"},[e._m(1),e._v(" "),e._m(2),e._v(" "),a("div",{staticClass:"form-group col50"},[a("input",{attrs:{id:"phone",type:"number",placeholder:"Telefone"},domProps:{value:e.amount},on:{input:e.updateValue}}),e._v(" "),a("span",{staticClass:"error phone"})]),e._v(" "),e._m(3),e._v(" "),e._m(4),e._v(" "),a("div",{staticClass:"form-group cta",on:{click:function(t){return e.submitForm()}}},[a("button",{staticClass:"submit-msg"},[e._v("Enviar!")])]),e._v(" "),a("div",{staticClass:"form-group tc"},[a("div",{staticClass:"check"},[a("input",{attrs:{type:"checkbox",id:"accept-tc-4"}}),e._v(" "),a("label",{attrs:{for:"accept-tc-4"}},[e._v("\n                Declaro que li e compreendi o alcance da\n                "),a("router-link",{attrs:{to:"/politica-privacidade",target:"_blank"}},[e._v("Política de Privacidade")]),e._v("*\n              ")],1)]),e._v(" "),a("span",{staticClass:"error pp"})]),e._v(" "),e._m(5)])])])])])},staticRenderFns:[function(){var e=this.$createElement,t=this._self._c||e;return t("h1",{staticClass:"title"},[this._v("\n    Para qualquer questão que possamos corresponder,\n    "),t("br"),this._v("estamos, também, aqui!\n  ")])},function(){var e=this.$createElement,t=this._self._c||e;return t("div",{staticClass:"form-group col50"},[t("input",{attrs:{id:"name",type:"text",placeholder:"Nome"}}),this._v(" "),t("span",{staticClass:"error name"})])},function(){var e=this.$createElement,t=this._self._c||e;return t("div",{staticClass:"form-group col50"},[t("input",{attrs:{id:"email",type:"email",placeholder:"E-mail"}}),this._v(" "),t("span",{staticClass:"error email"})])},function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("div",{staticClass:"form-group col50 select-ref"},[a("select",{attrs:{name:"razao",id:"area"}},[a("option",{staticClass:"default",attrs:{value:"none",disabled:"",selected:""}},[e._v("Como obteve conhecimento?")]),e._v(" "),a("option",{attrs:{value:"colegas"}},[e._v("Colegas")]),e._v(" "),a("option",{attrs:{value:"div-email"}},[e._v("Divulgação por e-mail")]),e._v(" "),a("option",{attrs:{value:"redes-sociais"}},[e._v("Redes Sociais")]),e._v(" "),a("option",{attrs:{value:"site"}},[e._v("Site")]),e._v(" "),a("option",{attrs:{value:"familiares-amigos"}},[e._v("Familiares/Amigos")]),e._v(" "),a("option",{attrs:{value:"outro"}},[e._v("Outro")])]),e._v(" "),a("span",{staticClass:"error reason"})])},function(){var e=this.$createElement,t=this._self._c||e;return t("div",{staticClass:"form-group textarea"},[t("textarea",{attrs:{id:"message",placeholder:"Mensagem",cols:"30",rows:"10"}}),this._v(" "),t("span",{staticClass:"error msg"})])},function(){var e=this.$createElement,t=this._self._c||e;return t("div",{staticClass:"form-group"},[t("span",{staticClass:"error general"})])}]};var r=a("VU/8")(n,o,!1,function(e){a("wufZ")},"data-v-f51d18aa",null);t.default=r.exports},wufZ:function(e,t){},xfmn:function(e,t){}});
//# sourceMappingURL=7.c0b6625abbbb3e93187e.js.map