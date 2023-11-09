webpackJsonp([1,6,8,10,13,22,23,28,30],{"++8R":function(t,e){},"65pH":function(t,e){},"79pf":function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var i=a("35yB"),s=a.n(i),n={data:function(){return{icon:s.a,formacoes:[{id:1,title:"O Método Rorschach na prática clínica",text:"Formação clínica que pretende pensar os fundamentos conceptuais e metodológicos do método Rorschach para a sua aplicação prática na clínica da criança, do adolescente e do adulto.",icon:s.a},{id:2,title:"A Clínica da infância | Da teoria à prática clínica",text:"Formação clínica psicodinâmica que pretende pensar os fundamentos clínicos da prática infantil, para os quais conflui o método clínico que intersecta a observação e avaliação clínica, a elaboração do diagnóstico e a proposta de intervenção clínica.",icon:s.a},{id:3,title:"Escala de inteligência para crianças |WISC-III|: Aplicação, avaliação e interpretação clínica",text:"Formação clínica que pretende pensar os fundamentos conceptuais e metodológicos da WISC-III e sua respetiva tradução para a prática da avaliação psicológica e interpretação clínica.",icon:s.a},{id:4,title:"Introdução às Técnicas Projetivas",text:"Formação clínica que pretende apresentar os fundamentos teóricos e metodológicos do Teste Apercetivo de Roberts para Crianças (R.A.T.C), do Teste de Aperceção Infantil (C.A.T.-A) e do Teste de aperceção temática (T.A.T) e sua aplicação na prática clínica.",icon:s.a}]}}},o={render:function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"formacoes-wrapper"},[a("div",{attrs:{id:"formacoes"}},[t._m(0),t._v(" "),a("div",{staticClass:"cards-wrapper"},t._l(t.formacoes,function(e){return a("div",{key:e.id,staticClass:"card movement"},[a("div",{staticClass:"card-title"},[t._v(t._s(e.title))]),t._v(" "),a("div",{staticClass:"card-copy"},[a("i",{domProps:{innerHTML:t._s(e.text)}})]),t._v(" "),a("div",{staticClass:"cta"},[a("div",{staticClass:"txt"},[t._v("saiba mais")]),t._v(" "),a("svg",{attrs:{xmlns:"http://www.w3.org/2000/svg","xmlns:xlink":"http://www.w3.org/1999/xlink",viewBox:"0 0 16 16"}},[a("path",{staticClass:"arrow",attrs:{d:"M8,0,6.545,1.455l5.506,5.506H0V9.039H12.052L6.545,14.545,8,16l8-8Z"}})])])])}),0)])])},staticRenderFns:[function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"copy-content"},[e("div",{staticClass:"title main movement"},[this._v("As Nossas Formações")]),this._v(" "),e("div",{staticClass:"line movement"}),this._v(" "),e("div",{staticClass:"copy movement"},[this._v("\n        A Academia é um espaço de formação. De ideias. De projetos. De escritas.\n        Que alia o conhecimento científico à prática clínica e o aproxima de si.\n        A Academia é, e assim ambiciona, um espaço que concilia o saber técnico\n        e clínico ao pluralismo de quem sabe que, como nos ensina a tradição oral,\n        "),e("i",[this._v("A desmanchar e a fazer é que se chega a aprender")]),this._v(".\n      ")])])}]};var r=a("VU/8")(n,o,!1,function(t){a("Ci/w")},"data-v-21719ad8",null);e.default=r.exports},"8Rr2":function(t,e){},A6MN:function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var i={data:function(){return{isActive:!0,index:1,testemunhos:[{id:1,text:"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dovlore."},{id:2,text:"Another Sample text 2"},{id:3,text:"Another Sample text 3"},{id:4,text:"Another Sample text 4"}]}},methods:{showTestemunho:function(t){var e,a=document.querySelectorAll(".slider .slide"),i=document.querySelectorAll(".indicators .ind");for(t>a.length&&(this.index=1),t<1&&(this.index=a.length),e=0;e<a.length;e++)a[e].className="slide";for(e=0;e<i.length;e++)i[e].className=i[e].className.replace(" active",""),this.isActive=!1;a[this.index-1].className="slide active",i[this.index-1].className+=" active",this.isActive=!0},prevSlides:function(t){this.showTestemunho(this.index-=t)},plusSlides:function(t){this.showTestemunho(this.index+=t)},currentSlide:function(t){this.showTestemunho(this.index=t)}},mounted:function(){var t=this;this.showTestemunho(this.index);var e=document.querySelector(".slider");document.querySelectorAll(".slider .slide");if(window.innerWidth<600){e.addEventListener("touchstart",function(t){var e=function(t){return t.touches||t.originalEvent.touches}(t)[0];a=e.clientX,i=e.clientY},!1),e.addEventListener("touchmove",function(e){if(a&&i){var s=e.touches[0].clientX,n=e.touches[0].clientY,o=a-s,r=i-n;document.querySelector(".slider .slide.active").getAttribute("data-slide-id"),Math.abs(o)>Math.abs(r)&&(o>0?t.plusSlides(1):t.prevSlides(1)),a=null,i=null}},!1);var a=null,i=null}}},s={render:function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"testemunhos-wrapper"},[a("div",{staticClass:"movement",attrs:{id:"testemunhos"}},[a("div",{staticClass:"title main"},[t._v("O que dizem sobre nós")]),t._v(" "),a("div",{staticClass:"line"}),t._v(" "),a("div",{staticClass:"slider-wrapper"},[a("div",{staticClass:"slider"},t._l(t.testemunhos,function(e){return a("div",{key:e.id,staticClass:"slide",class:{active:t.isActive},attrs:{"data-slide-id":e.id},domProps:{innerHTML:t._s(e.text)}})}),0),t._v(" "),a("div",{staticClass:"indicators"},t._l(t.testemunhos,function(e){return a("div",{key:e.id,staticClass:"ind",class:{active:t.isActive},on:{click:function(a){return t.currentSlide(e.id)}}})}),0)])])])},staticRenderFns:[]};var n=a("VU/8")(i,s,!1,function(t){a("CePY")},"data-v-37f734d1",null);e.default=n.exports},Ac3d:function(t,e,a){t.exports=a.p+"static/img/chair.ceaa50c.svg"},CePY:function(t,e){},"Ci/w":function(t,e){},KJIV:function(t,e){},N3wf:function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var i=a("MXBO"),s=a.n(i),n=a("we+6"),o=a.n(n),r={data:function(){return{quote:s.a,pic:o.a}}},c={render:function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"equipa-wrapper"},[a("div",{staticClass:"equipa movement"},[a("div",{staticClass:"left"},[a("div",{staticClass:"title main"},[t._v("Conheça a nossa Equipa")]),t._v(" "),a("div",{staticClass:"pic",style:{"background-image":"url("+t.pic+")"}}),t._v(" "),a("div",{staticClass:"name"},[t._v("Ana Carolina Pereira")]),t._v(" "),a("div",{staticClass:"cargo"},[t._v("Co-founder & CTO")])]),t._v(" "),a("div",{staticClass:"right"},[a("div",{staticClass:"title main"},[t._v("Conheça a nossa Equipa")]),t._v(" "),a("div",{staticClass:"quote"},[a("div",{staticClass:"icon",style:{"background-image":"url("+t.quote+")"}}),t._v(" "),a("div",{staticClass:"txt"},[t._v("\n          Lorem ipsum dolor sit amet, consectetur adipisicing elit,\n          sed do eiusmod tempor incididunt ut ero labore et dolore magna aliqua.\n          Ut enim ad minim veniam, quis nostrud exercitation ullamco poriti\n          laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor\n          in reprehenderit in uienply voluptate velit esse cillum dolore eu fugiat\n          nulla pariatur. Excepteur sint\n        ")])]),t._v(" "),a("router-link",{attrs:{to:"/sobre-nos#equipa"}},[a("div",{staticClass:"subquote"},[t._v("Saber mais")])])],1)])])},staticRenderFns:[]};var l=a("VU/8")(r,c,!1,function(t){a("tLLU")},"data-v-fa07afcc",null);e.default=l.exports},Rxx7:function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var i=a("mtWM"),s=a.n(i),n=a("vaX0"),o=a.n(n),r=(a("Ac3d"),a("KLWT")),c=a("01bk"),l=a("gOI3"),d=a("SupS"),u=a("KzHo"),m={components:{ImgBase:r.default,ImgChair:c.default,ImgChildren:l.default,ImgMoon:d.default,ImgFrame:u.default},data:function(){return{img:o.a,slideIndex:1,slides:[{id:"",title:"",text:"",btn_txt:"",file:"",url:""}]}},methods:{bannerAnimate:function(){$("#slideshow-home > div:gt(0)").hide();this.drawLines(),setInterval(function(){$("#slideshow-home > div:first").fadeOut(0).next().fadeIn(0).end().appendTo("#slideshow-home")},7e3)},drawLines:function(){$(".nodules").addClass("start"),$(".main-path").addClass("start"),$(".main-path-fill").addClass("start")},deleteLines:function(){$(".nodules").removeClass("start"),$(".main-path").removeClass("start"),$(".main-path-fill").removeClass("start")}},mounted:function(){var t=Array.prototype.map,e=this;s.a.get("https://www.anacarolinapereira.pt/db-api/getSlideshow.php").then(function(a){var i=a.data,s=[];t.call(i,function(t){s.push({id:t.id,title:t.title,text:t.text,btn_txt:t.cta_txt,file:t.img,url:t.link})}),e.$data.slides=s}).then(function(){e.bannerAnimate()})}},v={render:function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"slideshow-wrapper"},[a("div",{attrs:{id:"slideshow-home"}},t._l(t.slides,function(e){return a("div",{key:e.id,staticClass:"slide"},[a("div",{staticClass:"svg-container"},["chair"==e.file?a("img-base",{attrs:{"img-name":"chair",viewBox:"0 0 330 340"}},[a("img-chair")],1):t._e(),t._v(" "),"children"==e.file?a("img-base",{attrs:{"img-name":"children",viewBox:"0 0 410 340"}},[a("img-children")],1):t._e(),t._v(" "),"moon"==e.file?a("img-base",{attrs:{"img-name":"moon",viewBox:"0 0 510 340"}},[a("img-moon")],1):t._e(),t._v(" "),"frame"==e.file?a("img-base",{attrs:{"img-name":"frame",viewBox:"0 0 620 340"}},[a("img-frame")],1):t._e()],1),t._v(" "),a("div",{staticClass:"copy"},[a("div",{staticClass:"title"},[t._v(t._s(e.title))]),t._v(" "),a("div",{staticClass:"text",domProps:{innerHTML:t._s(e.text)}}),t._v(" "),a("div",{staticClass:"btn white"},[a("div",{staticClass:"txt"},[t._v(t._s(e.btn_txt))])])])])}),0)])},staticRenderFns:[]};var p=a("VU/8")(m,v,!1,function(t){a("h7NC")},"data-v-4038e423",null);e.default=p.exports},TL5K:function(t,e){t.exports="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAAXCAYAAAAGAx/kAAAABHNCSVQICAgIfAhkiAAAAb9JREFUOE+dlE9OwkAUxr8XbGKmC/EEcgNhqSURT6AktlvhBnoDOIFyAnELC7yBLCAuKScQb6CLTkxEn5mW4tCZNo2znHnv9/7M9x7BctzRvMPAGYAWEWqJCU8BhN97lcFn+2SVdSP9wh3N6ww8EKFuC5DeMWMoHXGLduM9vduCVBYgvgOoWgTRYKF0xHkKi0EqExA/l4XYYDFIjGYhER2XySRrw0Bf+l6PkpLwYIMw+JGYpqwaznxpD8bvkd88JDGeDQl0bUQiasur0yf9vsiWxHi+IuBId1CZSL/ZMbKcLKrul1yBcLBrjz654zkbDoxuFHjDHI1NQbHGtidugQ2UNrAsCIyBarYZgRHKwGtkQYlMsLD9nOrREwEXxmNGvYWqZ3QLvx9gNQJhEoRaeTqL9sQh7U9eapX1z+t/xKh8mHkpg2Y9HRGjT6XBmx+OQf/NioE36XvxmtlOf55qizJjTf1/+2iyqIq1DLMqzwUxBlHg3aTvxmKz6cSUBi+l47asiy01LtoGsQ3jI3JETYfs9EiPmgtjfKg9HgXeRlt/XjulGTDgPp30WC+ZcnT7XJAySsaC1b6aRo7oZcvRQb+gp9Fjued92AAAAABJRU5ErkJggg=="},UqHI:function(t,e){t.exports="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAATCAYAAAByUDbMAAAABHNCSVQICAgIfAhkiAAAAWtJREFUOE+VlEFOwlAURe+tMdF24g5kB8JQayKuwJLYTpUVKDvQFYAroON2AOygJjQOwRWoO3DSHxOBZz4RU2gL385+c+/pf+++VzpRWhdgQKKGtUd6mX/eWX+3/UQ7Tt8JHJfJhGyp67OhKZBOnEqVWIBH5bsP5rAoTUBclBoEz1ngNo1hdjwOCd5UGTLfpTHsMB7fW2C3tGfASPmuZww7GLzU9maLt02DiLyqfaeJVuPTGKaFdpwOCVzlTXNYl1/+aWIK0rplP5wovQXRzxtFMFWB2/g37BdYSFUEoQrctinwLym9CSAmBaOgnQVuaAJci92J0h6Iu2IYuRsOJkf2t+qT8ABJBNR9nSrfHRVmqCwMDdc9XNDqWLLokqiXVPBUHMjll7OE5IlJaXlN+XRr4EyFm+OyC751Vap6WAXduXfLlAEdTPnPIEfeCVtp9WAL4VWVrtfPGLaC6l3mbK6hdQpr+sYCfFDg/QDUwoL4KuJ+yQAAAABJRU5ErkJggg=="},dAjm:function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var i=a("Rxx7"),s=a("dShX"),n=a("tUN6"),o=a("79pf"),r=a("A6MN"),c=a("z+iw"),l=a("N3wf"),d=a("qIYd"),u=a("eNWK"),m=a.n(u),v={data:function(){return{FadeIn:m.a}},components:{banner:i.default,about:s.default,especialidades:n.default,formacoes:o.default,testemunhos:r.default,parceiros:c.default,equipa:l.default,contactos:d.default},metaInfo:function(){return{title:"Ana Carolina Pereira - Clínica de Psicologia",meta:[{name:"description",content:"Ana Carolina Pereira - Clínica de Psicologia"},{name:"robots",content:"index,follow"},{property:"og:site_name",content:"Ana Carolina Pereira"},{property:"og:type",content:"website"},{property:"og:title",content:"Ana Carolina Pereira - Clínica de Psicologia"},{property:"og:description",content:"Ana Carolina Pereira - Clínica de Psicologia"}]}}},p={render:function(){var t=this.$createElement,e=this._self._c||t;return e("div",[e("banner"),this._v(" "),e("about"),this._v(" "),e("especialidades"),this._v(" "),e("formacoes"),this._v(" "),e("testemunhos"),this._v(" "),e("parceiros"),this._v(" "),e("equipa"),this._v(" "),e("contactos")],1)},staticRenderFns:[]};var f=a("VU/8")(v,p,!1,function(t){a("++8R")},"data-v-2705ebcf",null);e.default=f.exports},dShX:function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var i=a("mtWM"),s=a.n(i),n={data:function(){return{title:"",content:"",cta:"",url:""}},methods:{offsetTop:function(){var t=$(".slideshow-wrapper");$(".clinica-wrapper").css("margin-top",t.height())},openContactForm:function(){var t=document.querySelector("#contact-form-2");document.querySelector("#menu");t.style.transition=".5s",t.style.transform="translate(-50%, -50%)",t.style.pointerEvents="all",$("#contact-form-2 .page").css("pointer-events","all"),document.documentElement.style.overflow="hidden",$(".menu-wrapper-mobile .menu-items").removeClass("open"),$(".menu-wrapper-mobile .btn-menu").removeClass("open"),$(".menu-wrapper-mobile .close-menu").removeClass("open"),$("#contact-form-2 .p0 .text").animate({left:0,opacity:1},500)}},mounted:function(){this.offsetTop();Array.prototype.map;var t=this;s.a.get("https://www.anacarolinapereira.pt/db-api/getAboutHomepage.php").then(function(e){var a=e.data;t.title=a[0].title,t.content=a[0].content,t.cta=a[0].cta_txt,t.url=a[0].link})},created:function(){window.addEventListener("resize",this.offsetTop)},destroyed:function(){window.removeEventListener("resize",this.offsetTop)}},o={render:function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"clinica-wrapper"},[a("div",{attrs:{id:"clinica"}},[a("div",{staticClass:"copy-wrapper"},[a("div",{staticClass:"title main movement"},[t._v(t._s(t.title))]),t._v(" "),a("div",{staticClass:"line movement"}),t._v(" "),a("div",{staticClass:"copy movement",domProps:{innerHTML:t._s(t.content)}})]),t._v(" "),a("div",{staticClass:"ctas"},[a("router-link",{attrs:{to:t.url}},[a("div",{staticClass:"btn blue lateral"},[a("div",{staticClass:"txt"},[t._v(t._s(t.cta))])])]),t._v(" "),a("div",{staticClass:"btn white lateralR",on:{click:function(e){return t.openContactForm()}}},[a("div",{staticClass:"txt"},[t._v("Contate-nos")])])],1)])])},staticRenderFns:[]};var r=a("VU/8")(n,o,!1,function(t){a("KJIV")},"data-v-3ff54fe6",null);e.default=r.exports},h7NC:function(t,e){},"i//n":function(t,e){},qIYd:function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var i=a("UqHI"),s=a.n(i),n=a("wF+D"),o=a.n(n),r=a("TL5K"),c=a.n(r),l={data:function(){return{phone:s.a,email:o.a,location:c.a}},methods:{openContactForm:function(){var t=document.querySelector("#contact-form-2");document.querySelector("#menu");t.style.transition="1s",t.style.transform="translate(-50%, -50%)",t.style.pointerEvents="all",$("#contact-form-2 .page").css("pointer-events","all"),document.documentElement.style.overflow="hidden",$(".menu-wrapper-mobile .menu-items").removeClass("open"),$(".menu-wrapper-mobile .btn-menu").removeClass("open"),$(".menu-wrapper-mobile .close-menu").removeClass("open"),$("#contact-form-2 .p0 .text").animate({left:0,opacity:1},500)}}},d={render:function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"contacto-wrapper"},[a("div",{attrs:{id:"contacto"}},[a("div",{staticClass:"left lateral"},[a("div",{staticClass:"title main"},[t._v("Esperamos por si!")]),t._v(" "),a("div",{staticClass:"line"}),t._v(" "),a("div",{staticClass:"copy"},[a("div",{staticClass:"topic"},[a("div",{staticClass:"icon"},[a("img",{attrs:{src:t.phone,alt:""}})]),t._v(" "),a("div",{staticClass:"txt"},[t._v("Fale connosco através do +351 999 999 999 ou 232 232 232")])]),t._v(" "),a("div",{staticClass:"topic"},[a("div",{staticClass:"icon"},[a("img",{attrs:{src:t.email,alt:""}})]),t._v(" "),a("div",{staticClass:"txt"},[t._v("geral@anacarolinapereira.pt | geral@anacarolinapereira.pt")])]),t._v(" "),a("div",{staticClass:"topic"},[a("div",{staticClass:"icon"},[a("img",{attrs:{src:t.location,alt:""}})]),t._v(" "),t._m(0)])]),t._v(" "),a("div",{staticClass:"cta",on:{click:function(e){return t.openContactForm()}}},[t._m(1)])]),t._v(" "),t._m(2)])])},staticRenderFns:[function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"txt"},[this._v("\n            Rua Machado de Castro, 7, R/C\n            "),e("br"),this._v("3000-254 Coimbra\n          ")])},function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"btn blue"},[e("div",{staticClass:"txt"},[this._v("contacte-nos")])])},function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"right lateralR"},[e("iframe",{staticStyle:{border:"0"},attrs:{src:"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d761.6985185463666!2d-8.41944771182395!3d40.21364342282983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd22f90cd124ea8b%3A0x9441cdc7e59a0c9d!2sR.%20Machado%20de%20Castro%207%2C%20Coimbra!5e0!3m2!1spt-PT!2spt!4v1594136639734!5m2!1spt-PT!2spt",width:"100%",height:"100%",frameborder:"0",allowfullscreen:"","aria-hidden":"false",tabindex:"0"}})])}]};var u=a("VU/8")(l,d,!1,function(t){a("65pH")},"data-v-3eec7504",null);e.default=u.exports},tLLU:function(t,e){},tUN6:function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});a("eNWK");var i=a("mtWM"),s=a.n(i),n={data:function(){return{especialidades:[{id:1,title:"",code:"",content:"",url:"",icon:""}]}},methods:{FadeIn:function(){var t=$(".movement, .cover"),e=$(".movement-delayed"),a=$(".lateral, .lateralR"),i=$("#svg");!function(t){t.fn.visible=function(e,a){void 0===a&&(a=0);var i=t(this),s=t(window),n=s.scrollTop(),o=n+s.height(),r=i.offset().top+a,c=r+i.height()-a;return(!0===e?r:c)<=o&&(!0===e?c:r)>=n}}(jQuery);var s=$(window),n=!0;t.each(function(t,e){(e=$(e)).visible(!0)&&e.addClass("placed")}),i.each(function(t,e){(e=$(e)).visible(!0)&&(n&&e.append("<img src='assets/img/elemento_animated.svg' alt=''></img>"),n=!1)}),a.each(function(t,e){(e=$(e)).visible(!0,100)&&e.addClass("placed")}),e.each(function(t,e){(e=$(e)).visible(!0,800)&&e.addClass("placed")}),s.scroll(function(s){t.each(function(t,e){(e=$(e)).visible(!0)&&e.addClass("placed")}),a.each(function(t,e){(e=$(e)).visible(!0,100)&&e.addClass("placed")}),e.each(function(t,e){(e=$(e)).visible(!0,800)&&e.addClass("placed")}),i.each(function(t,e){(e=$(e)).visible(!0)&&(n&&e.append("<img src='assets/img/elemento_animated.svg' alt=''></img>"),n=!1)})})}},mounted:function(){var t=Array.prototype.map,e=this;s.a.get("https://www.anacarolinapereira.pt/db-api/getEspecialidadesHomepage.php").then(function(a){var i=a.data,s=[];t.call(i,function(t){var e=t.img_src.split("uploads");s.push({id:t.id,title:t.title,content:t.text,url:t.link,icon:"uploads"+e[1]})}),e.$data.especialidades=s}).then(function(){e.FadeIn()})}},o={render:function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"especialidades-wrapper"},[a("div",{attrs:{id:"especialidades"}},[t._m(0),t._v(" "),a("div",{staticClass:"especialidades"},t._l(t.especialidades,function(e){return a("div",{key:e.id,staticClass:"especialidade movement"},[a("div",{staticClass:"icon",style:{"background-image":"url("+e.icon+")"}}),t._v(" "),a("div",{staticClass:"txt-big"},[t._v(t._s(e.title))]),t._v(" "),a("div",{staticClass:"copy",domProps:{innerHTML:t._s(e.content)}}),t._v(" "),a("router-link",{attrs:{to:e.url}},[a("div",{staticClass:"cta"},[a("div",{staticClass:"text"},[t._v("saiba mais")]),t._v(" "),a("div",[a("i",{staticClass:"arrow right"})])])])],1)}),0)])])},staticRenderFns:[function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"title-wrapper movement"},[e("div",{staticClass:"title main"},[this._v("As Nossas Especialidades")]),this._v(" "),e("div",{staticClass:"line"})])}]};var r=a("VU/8")(n,o,!1,function(t){a("i//n")},"data-v-aa3eef86",null);e.default=r.exports},vaX0:function(t,e,a){t.exports=a.p+"static/img/exemplo.c8e063c.png"},"wF+D":function(t,e){t.exports="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAANCAYAAABLjFUnAAAABHNCSVQICAgIfAhkiAAAARlJREFUKFOl08FNwzAUBuD/VY2EnEtH6Ai5QnroCEVqc6WdoCMQNmCD5twghQ0QUlOOMIJHIIeYSqE8ZJMYt+RAU98s25+ff9vkr/M5CCuc0xjF3usFpI2zQEYBYFxG4RuJdJOo2WjeCWwgT0i/UjH5ac7MSFQULk4CHUhU6omAwmD6qCeBxxAhAOPZYv8G2yCz+AhDfSu760vZemQnbJHmMQG39hEcYO6On2qpZuHdAeiO7z/Ganr1qC+PQDcGtFhL6W6GTIiJMSk9IU3YPxktyihMLGiwdf5u3ok7sa69AXX3InsZ9qqvzEBNc0GmocaCNsjOZ0giloBGaPDno9SgjoSQvQ5s6V2/VA2SeNhOwPxbekdQ9cX9N45l0bQI2xcDAAAAAElFTkSuQmCC"},"z+iw":function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var i=a("1wTz"),s=a.n(i),n={data:function(){return{img:s.a,parceiros:[{id:1,img_src:s.a},{id:2,img_src:s.a},{id:3,img_src:s.a},{id:4,img_src:s.a}]}}},o={render:function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"parceiros-wrapper"},[e("div",{attrs:{id:"parceiros"}},[e("div",{staticClass:"title main movement"},[this._v("Os Nossos Parceiros")]),this._v(" "),e("div",{staticClass:"pics-wrapper"},this._l(this.parceiros,function(t){return e("div",{key:t.id,staticClass:"pic movement",style:{"background-image":"url("+t.img_src+")"}})}),0)])])},staticRenderFns:[]};var r=a("VU/8")(n,o,!1,function(t){a("8Rr2")},"data-v-1b64833c",null);e.default=r.exports}});
//# sourceMappingURL=1.f457a40c920e1bd2db48.js.map