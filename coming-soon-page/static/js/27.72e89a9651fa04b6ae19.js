webpackJsonp([27],{HAyw:function(t,e){},dShX:function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var a=n("mtWM"),i=n.n(a),s={data:function(){return{title:"",content:"",cta:"",url:""}},methods:{offsetTop:function(){var t=$(".slideshow-wrapper");$(".clinica-wrapper").css("margin-top",t.height())},openContactForm:function(){var t=document.querySelector("#contact-form-2");document.querySelector("#menu");t.style.transition=".5s",t.style.transform="translate(-50%, -50%)",t.style.pointerEvents="all",$("#contact-form-2 .page").css("pointer-events","all"),document.documentElement.style.overflow="hidden",$(".menu-wrapper-mobile .menu-items").removeClass("open"),$(".menu-wrapper-mobile .btn-menu").removeClass("open"),$(".menu-wrapper-mobile .close-menu").removeClass("open"),$("#contact-form-2 .p0 .text").animate({left:0,opacity:1},500)},FadeIn:function(){var t=$(".movement, .cover"),e=$(".movement-delayed"),n=$(".lateral, .lateralR"),a=$("#svg");!function(t){t.fn.visible=function(e,n){void 0===n&&(n=0);var a=t(this),i=t(window),s=i.scrollTop(),o=s+i.height(),c=a.offset().top+n,l=c+a.height()-n;return(!0===e?c:l)<=o&&(!0===e?l:c)>=s}}(jQuery);var i=$(window),s=!0;t.each(function(t,e){(e=$(e)).visible(!0)&&e.addClass("placed")}),a.each(function(t,e){(e=$(e)).visible(!0)&&(s&&e.append("<img src='assets/img/elemento_animated.svg' alt=''></img>"),s=!1)}),n.each(function(t,e){(e=$(e)).visible(!0,100)&&e.addClass("placed")}),e.each(function(t,e){(e=$(e)).visible(!0,800)&&e.addClass("placed")}),i.scroll(function(i){t.each(function(t,e){(e=$(e)).visible(!0)&&e.addClass("placed")}),n.each(function(t,e){(e=$(e)).visible(!0,100)&&e.addClass("placed")}),e.each(function(t,e){(e=$(e)).visible(!0,800)&&e.addClass("placed")}),a.each(function(t,e){(e=$(e)).visible(!0)&&(s&&e.append("<img src='assets/img/elemento_animated.svg' alt=''></img>"),s=!1)})})}},mounted:function(){this.offsetTop();Array.prototype.map;var t=this;i.a.get("https://beta.anacarolinapereira.pt/db-api/getAboutHomepage.php").then(function(e){var n=e.data;t.title=n[0].title,t.content=n[0].content,t.cta=n[0].cta_txt,t.url=n[0].link}).then(function(){t.FadeIn()})},created:function(){window.addEventListener("resize",this.offsetTop)},destroyed:function(){window.removeEventListener("resize",this.offsetTop)}},o={render:function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"clinica-wrapper movement"},[n("div",{attrs:{id:"clinica"}},[n("div",{staticClass:"copy-wrapper"},[n("h1",{staticClass:"title main"},[t._v(t._s(t.title))]),t._v(" "),n("div",{staticClass:"line"}),t._v(" "),n("div",{staticClass:"copy",domProps:{innerHTML:t._s(t.content)}})]),t._v(" "),n("div",{staticClass:"ctas"},[n("router-link",{attrs:{to:t.url}},[n("div",{staticClass:"btn blue"},[n("div",{staticClass:"txt"},[t._v(t._s(t.cta))])])]),t._v(" "),n("div",{staticClass:"btn white",on:{click:function(e){return t.openContactForm()}}},[n("div",{staticClass:"txt"},[t._v("Contacte-nos")])])],1)])])},staticRenderFns:[]};var c=n("VU/8")(s,o,!1,function(t){n("HAyw")},"data-v-3439e037",null);e.default=c.exports}});
//# sourceMappingURL=27.72e89a9651fa04b6ae19.js.map