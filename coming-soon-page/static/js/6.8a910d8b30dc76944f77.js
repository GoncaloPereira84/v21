webpackJsonp([6,17,29],{J8GW:function(t,e){},Np6n:function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var s=a("UqHI"),n=a.n(s),o=a("wF+D"),i=a.n(o),r=a("TL5K"),l=a.n(r),c=a("mtWM"),d=a.n(c),m={data:function(){return{phone:n.a,email:i.a,location:l.a,tlf1:"",tlf2:"",email1:"",email2:"",address:"",api_code:""}},methods:{openContactForm:function(){var t=document.querySelector("#contact-form-2");document.querySelector("#menu");t.style.transition="1s",t.style.transform="translate(-50%, -50%)",t.style.pointerEvents="all",$("#contact-form-2 .page").css("pointer-events","all"),document.documentElement.style.overflow="hidden",$(".menu-wrapper-mobile .menu-items").removeClass("open"),$(".menu-wrapper-mobile .btn-menu").removeClass("open"),$(".menu-wrapper-mobile .close-menu").removeClass("open"),$("#contact-form-2 .p0 .text").animate({left:0,opacity:1},500)}},mounted:function(){Array.prototype.map;var t=this;d.a.get("https://www.anacarolinapereira.pt/db-api/getContactosHomepage.php").then(function(e){var a=e.data;t.tlf1=a[0].tlf_1,""==a[0].tlf_2?$("#tlf2").css("display","none"):($("#tlf2").css("display","inline-block"),t.tlf2=" ou "+a[0].tlf_2),t.email1=a[0].email_1,""==a[0].email_2?$("#email2").css("display","none"):($("#email2").css("display","inline-block"),t.email2=a[0].email_2),t.address=a[0].address,t.api_code=a[0].google_maps_code})}},p={render:function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"contacto-wrapper"},[a("div",{attrs:{id:"contacto"}},[a("div",{staticClass:"left lateral"},[a("div",{staticClass:"title main"},[t._v("Esperamos por si!")]),t._v(" "),a("div",{staticClass:"line"}),t._v(" "),a("div",{staticClass:"copy"},[a("div",{staticClass:"topic"},[a("div",{staticClass:"icon"},[a("img",{attrs:{src:t.phone,alt:""}})]),t._v(" "),a("div",{staticClass:"txt"},[t._v("\n            Fale connosco através do\n            "),a("span",{attrs:{id:"tlf1"}},[t._v(t._s(t.tlf1))]),t._v(" "),a("span",{attrs:{id:"tlf2"}},[t._v(t._s(t.tlf2))])])]),t._v(" "),a("div",{staticClass:"topic"},[a("div",{staticClass:"icon"},[a("img",{attrs:{src:t.email,alt:""}})]),t._v(" "),a("div",{staticClass:"txt"},[a("a",{staticStyle:{color:"#95989a"},attrs:{href:"mailto:"+t.email1}},[t._v(t._s(t.email1))]),t._v(" "),a("a",{staticStyle:{color:"#95989a"},attrs:{href:"mailto:"+t.email2}},[t._v(t._s(t.email2))])])]),t._v(" "),a("div",{staticClass:"topic"},[a("div",{staticClass:"icon"},[a("img",{attrs:{src:t.location,alt:""}})]),t._v(" "),a("div",{staticClass:"txt",domProps:{innerHTML:t._s(t.address)}})])]),t._v(" "),a("div",{staticClass:"cta",on:{click:function(e){return t.openContactForm()}}},[t._m(0)])]),t._v(" "),a("div",{staticClass:"right lateralR",domProps:{innerHTML:t._s(t.api_code)}})])])},staticRenderFns:[function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"btn blue"},[e("div",{staticClass:"txt"},[this._v("contacte-nos")])])}]};var v=a("VU/8")(m,p,!1,function(t){a("trsp")},"data-v-3e5648d3",null);e.default=v.exports},eImG:function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var s=a("jBn5"),n=a("Np6n"),o={components:{banner:s.default,contactos:n.default},metaInfo:function(){return{title:"Contactos - Ana Carolina Pereira - Clínica de Psicologia",meta:[{name:"description",content:"Visite a nossa clínica ou entre em contacto connosco através do nosso número de telefone ou do nosso formulário online."},{name:"robots",content:"index,follow"},{property:"og:site_name",content:"Ana Carolina Pereira"},{property:"og:type",content:"website"},{property:"og:title",content:"Contactos - Ana Carolina Pereira - Clínica de Psicologia"},{property:"og:description",content:"Visite a nossa clínica ou entre em contacto connosco através do nosso número de telefone ou do nosso formulário online."}]}}},i={render:function(){var t=this.$createElement,e=this._self._c||t;return e("div",[e("banner"),this._v(" "),e("contactos")],1)},staticRenderFns:[]};var r=a("VU/8")(o,i,!1,function(t){a("J8GW")},"data-v-680b7bda",null);e.default=r.exports},jBn5:function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var s=a("bhzy"),n=a.n(s),o={data:function(){return{img:n.a}}},i={render:function(){var t=this.$createElement;return(this._self._c||t)("div",{staticClass:"slideshow-wrapper",style:{"background-image":"url("+this.img+")"}},[this._m(0)])},staticRenderFns:[function(){var t=this.$createElement,e=this._self._c||t;return e("div",{attrs:{id:"slideshow"}},[e("div",{staticClass:"slide"},[e("div",{staticClass:"copy"},[e("div",{staticClass:"title"},[this._v("Contactos")])])])])}]};var r=a("VU/8")(o,i,!1,function(t){a("lPpj")},"data-v-e085fce4",null);e.default=r.exports},lPpj:function(t,e){},trsp:function(t,e){}});
//# sourceMappingURL=6.8a910d8b30dc76944f77.js.map