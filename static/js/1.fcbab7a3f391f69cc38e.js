webpackJsonp([1,9,11,12,16,17,18,22,33,36],{"/NAo":function(t,e){},"79pf":function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var i=a("mtWM"),s=a.n(i),n=a("mbzP"),l=a.n(n),c={data:function(){return{title:"",text:"",check:l.a,formacoes:[{id:"",title:"",text:"",url:"",icon:""}]}},methods:{FadeIn:function(){var t=$(".movement, .cover"),e=$(".movement-delayed"),a=$(".lateral, .lateralR"),i=$("#svg");!function(t){t.fn.visible=function(e,a){void 0===a&&(a=0);var i=t(this),s=t(window),n=s.scrollTop(),l=n+s.height(),c=i.offset().top+a,o=c+i.height()-a;return(!0===e?c:o)<=l&&(!0===e?o:c)>=n}}(jQuery);var s=$(window),n=!0;t.each(function(t,e){(e=$(e)).visible(!0)&&e.addClass("placed")}),i.each(function(t,e){(e=$(e)).visible(!0)&&(n&&e.append("<img src='assets/img/elemento_animated.svg' alt=''></img>"),n=!1)}),a.each(function(t,e){(e=$(e)).visible(!0,100)&&e.addClass("placed")}),e.each(function(t,e){(e=$(e)).visible(!0,800)&&e.addClass("placed")}),s.scroll(function(s){t.each(function(t,e){(e=$(e)).visible(!0)&&e.addClass("placed")}),a.each(function(t,e){(e=$(e)).visible(!0,100)&&e.addClass("placed")}),e.each(function(t,e){(e=$(e)).visible(!0,800)&&e.addClass("placed")}),i.each(function(t,e){(e=$(e)).visible(!0)&&(n&&e.append("<img src='assets/img/elemento_animated.svg' alt=''></img>"),n=!1)})})}},mounted:function(){var t=Array.prototype.map,e=this;s.a.get("https://beta.anacarolinapereira.pt/db-api/getFormacoesHomepage.php").then(function(a){var i=a.data.split("||"),s=JSON.parse(i[1]),n=JSON.parse(i[2]),c=[];e.title=s[0].title,e.text=s[0].text,t.call(n,function(t){var e;if(e=1==t.categoria_id?"formacao":2==t.categoria_id?"curso":"webinar",null==t.icon)c.push({id:t.id,title:t.title,text:t.text,url:"/academia/"+e+t.link,icon:l.a});else{var a=t.icon.split("uploads");c.push({id:t.id,title:t.title,text:t.text,url:"/academia/"+e+t.link,icon:"uploads"+a[1]})}}),e.$data.formacoes=c}).then(function(){e.FadeIn()})}},o={render:function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"formacoes-wrapper"},[a("div",{attrs:{id:"formacoes"}},[a("div",{staticClass:"copy-content"},[a("h1",{staticClass:"title main movement"},[t._v(t._s(t.title))]),t._v(" "),a("div",{staticClass:"line movement"}),t._v(" "),a("div",{staticClass:"copy movement",domProps:{innerHTML:t._s(t.text)}})]),t._v(" "),a("div",{staticClass:"cards-wrapper"},t._l(t.formacoes,function(e){return a("router-link",{key:e.id,attrs:{to:e.url}},[a("div",{staticClass:"card movement"},[a("div",{staticClass:"icon",style:{"background-image":"url("+e.icon+")"}}),t._v(" "),a("div",{staticClass:"card-title"},[t._v(t._s(e.title))]),t._v(" "),a("div",{staticClass:"card-copy"},[a("i",{domProps:{innerHTML:t._s(e.text)}})]),t._v(" "),a("div",{staticClass:"cta"},[a("div",{staticClass:"txt"},[t._v("saiba mais")]),t._v(" "),a("div",{staticClass:"arrow-cont"},[a("i",{staticClass:"arrow right"})])])])])}),1)])])},staticRenderFns:[]};var r=a("VU/8")(c,o,!1,function(t){a("BbOa")},"data-v-0f8d6847",null);e.default=r.exports},A6MN:function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var i={data:function(){return{isActive:!0,index:1,testemunhos:[{id:1,text:"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dovlore."},{id:2,text:"Another Sample text 2"},{id:3,text:"Another Sample text 3"},{id:4,text:"Another Sample text 4"}]}},methods:{showTestemunho:function(t){var e,a=document.querySelectorAll(".slider .slide"),i=document.querySelectorAll(".indicators .ind");for(t>a.length&&(this.index=1),t<1&&(this.index=a.length),e=0;e<a.length;e++)a[e].className="slide";for(e=0;e<i.length;e++)i[e].className=i[e].className.replace(" active",""),this.isActive=!1;a[this.index-1].className="slide active",i[this.index-1].className+=" active",this.isActive=!0},prevSlides:function(t){this.showTestemunho(this.index-=t)},plusSlides:function(t){this.showTestemunho(this.index+=t)},currentSlide:function(t){this.showTestemunho(this.index=t)}},mounted:function(){var t=this;this.showTestemunho(this.index);var e=document.querySelector(".slider");document.querySelectorAll(".slider .slide");if(window.innerWidth<600){e.addEventListener("touchstart",function(t){var e=function(t){return t.touches||t.originalEvent.touches}(t)[0];a=e.clientX,i=e.clientY},!1),e.addEventListener("touchmove",function(e){if(a&&i){var s=e.touches[0].clientX,n=e.touches[0].clientY,l=a-s,c=i-n;document.querySelector(".slider .slide.active").getAttribute("data-slide-id"),Math.abs(l)>Math.abs(c)&&(l>0?t.plusSlides(1):t.prevSlides(1)),a=null,i=null}},!1);var a=null,i=null}}},s={render:function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"testemunhos-wrapper"},[a("div",{staticClass:"movement",attrs:{id:"testemunhos"}},[a("div",{staticClass:"title main"},[t._v("O que dizem sobre nós")]),t._v(" "),a("div",{staticClass:"line"}),t._v(" "),a("div",{staticClass:"slider-wrapper"},[a("div",{staticClass:"slider"},t._l(t.testemunhos,function(e){return a("div",{key:e.id,staticClass:"slide",class:{active:t.isActive},attrs:{"data-slide-id":e.id},domProps:{innerHTML:t._s(e.text)}})}),0),t._v(" "),a("div",{staticClass:"indicators"},t._l(t.testemunhos,function(e){return a("div",{key:e.id,staticClass:"ind",class:{active:t.isActive},on:{click:function(a){return t.currentSlide(e.id)}}})}),0)])])])},staticRenderFns:[]};var n=a("VU/8")(i,s,!1,function(t){a("fBkB")},"data-v-962329ea",null);e.default=n.exports},Ac3d:function(t,e,a){t.exports=a.p+"static/img/chair.ceaa50c.svg"},BYRY:function(t,e){},BbOa:function(t,e){},N3wf:function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var i=a("MXBO"),s=a.n(i),n=a("mtWM"),l=a.n(n),c=a("owA6"),o=a.n(c),r={data:function(){return{arrow:o.a,quote:s.a,title:"",text:"",cta_txt:"",url:"",name:"",cargo:"",img:""}},mounted:function(){Array.prototype.map;var t=this;l.a.get("https://beta.anacarolinapereira.pt/db-api/getEquipaHomepage.php").then(function(e){var a=e.data,i=a[0].img.split("uploads");t.title=a[0].title,t.text=a[0].text,t.cta_txt=a[0].cta_txt,t.url=a[0].link,t.name=a[0].name,t.cargo=a[0].cargo,t.img="uploads"+i[1]})}},d={render:function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"equipa-wrapper"},[a("div",{staticClass:"equipa movement"},[a("div",{staticClass:"left"},[a("div",{staticClass:"pic",style:{"background-image":"url("+t.img+")"}}),t._v(" "),a("div",{staticClass:"name"},[t._v(t._s(t.name))]),t._v(" "),a("div",{staticClass:"cargo"},[t._v(t._s(t.cargo))])]),t._v(" "),a("div",{staticClass:"right"},[a("h1",{staticClass:"title main"},[t._v(t._s(t.title))]),t._v(" "),a("div",{staticClass:"quote"},[a("div",{staticClass:"icon",style:{"background-image":"url("+t.quote+")"}}),t._v(" "),a("div",{staticClass:"txt",domProps:{innerHTML:t._s(t.text)}})]),t._v(" "),a("router-link",{attrs:{to:t.url}},[a("div",{staticClass:"subquote"},[t._v("Saiba mais")]),t._v(" "),a("img",{attrs:{src:t.arrow,alt:""}})])],1)])])},staticRenderFns:[]};var u=a("VU/8")(r,d,!1,function(t){a("BYRY")},"data-v-15a327ff",null);e.default=u.exports},NsCw:function(t,e){},QlV5:function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var i=a("mtWM"),s=a.n(i),n=a("A2Z5"),l=a.n(n),c=a("PJh5"),o=a.n(c),r={data:function(){return{calendar:l.a,isActive:!0,index:1,slides:0,formacoes:[{id:"",code:"",title:"",text:"",url:"",img:"",start:"",end:"",is_full:"",last_vagas:"",is_visible:"",categoria:""}]}},methods:{showDestaque:function(t){var e,a=document.querySelectorAll(".slider .card.is-visible"),i=document.querySelectorAll(".indicators .ind");for(t>a.length&&(this.index=1),t<1&&(this.index=a.length),e=0;e<a.length;e++)a[e].classList="card is-visible";for(e=0;e<i.length;e++)i[e].className=i[e].className.replace(" active",""),this.isActive=!1;a[this.index-1].classList="card is-visible active",i[this.index-1].className+=" active",this.isActive=!0},prevSlides:function(t){this.showDestaque(this.index-=t)},plusSlides:function(t){this.showDestaque(this.index+=t)},currentSlide:function(t){this.showDestaque(this.index=t)}},mounted:function(){var t=this,e=document.querySelector(".slider");document.querySelectorAll(".slider .card.is-visible");if(window.innerWidth<600){e.addEventListener("touchstart",function(t){var e=function(t){return t.touches||t.originalEvent.touches}(t)[0];a=e.clientX,i=e.clientY},!1),e.addEventListener("touchmove",function(e){if(a&&i){var s=e.touches[0].clientX,n=e.touches[0].clientY,l=a-s,c=i-n;document.querySelector(".slider .card.is-visible.active").getAttribute("data-card-id"),Math.abs(l)>Math.abs(c)&&(l>0?t.plusSlides(1):t.prevSlides(1)),a=null,i=null}},!1);var a=null,i=null}var n=Array.prototype.map;s.a.get("https://beta.anacarolinapereira.pt/db-api/getDestaques.php").then(function(e){var a=e.data,i=[];n.call(a,function(e){var a,s,n,l,c=e.icon.split("uploads");"0000-00-00"==e.date_start?(a="disponível brevemente",s=""):(a=o()(e.date_start).format("DD-MM-YYYY"),s=o()(e.date_end).format("DD-MM-YYYY")),n=1==e.categoria_id?"formacao":2==e.categoria_id?"curso":"webinar",l=1==e.categoria_id?"formação":2==e.categoria_id?"curso":"webinar";var r=t.$data.slides++;i.push({id:r+1,code:e.code,title:e.title,text:e.text,url:"/academia/"+n+e.link,img:"uploads"+c[1],start:a,end:s,is_full:e.is_full,last_vagas:e.last_vagas,is_visible:e.is_visible,categoria:l})}),t.$data.formacoes=i}).then(function(){t.showDestaque(1),setInterval(function(){t.plusSlides(1)},5e3)})}},d={render:function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"destaques-wrapper"},[a("div",{attrs:{id:"destaques"}},[a("div",{staticClass:"slider-wrapper"},[a("div",{staticClass:"slider"},t._l(t.formacoes,function(e){return a("div",{key:e.id,staticClass:"card",class:{active:t.isActive,"is-visible":1==e.is_visible},attrs:{"data-card-id":e.id}},[a("div",{staticClass:"card-img",style:{"background-image":"url("+e.img+")"}}),t._v(" "),a("div",{staticClass:"card-content"},[a("div",{staticClass:"card-header"},[a("div",{staticClass:"card-type"},[t._v(t._s(e.categoria))]),t._v(" "),a("div",{staticClass:"card-status",class:{"is-full":1==e.is_full,"has-vagas":1==e.last_vagas}},[a("span",{class:{"is-full":1==e.is_full}},[t._v("vagas preenchidas")]),t._v(" "),a("span",{class:{"has-vagas":1==e.last_vagas}},[t._v("últimas vagas")])])]),t._v(" "),a("div",{staticClass:"card-body"},[a("h3",{staticClass:"card-title"},[t._v(t._s(e.title))]),t._v(" "),a("div",{staticClass:"card-date"},[a("router-link",{attrs:{to:e.url}},[a("div",{staticClass:"card-cta"},[a("div",{staticClass:"cta-txt"},[t._v("Saiba mais")])])]),t._v(" "),a("div",{staticClass:"txt"},[t._v("\n                  "+t._s(e.start)+"\n                  "),a("br"),t._v("\n                  "+t._s(e.end)+"\n                ")]),t._v(" "),a("div",{staticClass:"icon",style:{"background-image":"url("+t.calendar+")"}})],1)])])])}),0),t._v(" "),a("div",{staticClass:"indicators"},t._l(t.formacoes,function(e){return a("div",{key:e.id,staticClass:"ind",class:{active:t.isActive},on:{click:function(a){return t.currentSlide(e.id)}}})}),0)])])])},staticRenderFns:[]};var u=a("VU/8")(r,d,!1,function(t){a("/NAo")},"data-v-95457492",null);e.default=u.exports},Rxx7:function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var i=a("mtWM"),s=a.n(i),n=(a("Ac3d"),a("KLWT")),l=a("01bk"),c=a("gOI3"),o=a("SupS"),r=a("KzHo"),d={components:{ImgBase:n.default,ImgChair:l.default,ImgChildren:c.default,ImgMoon:o.default,ImgFrame:r.default},data:function(){return{slideIndex:1,slides:[{id:"",title:"",text:"",btn_txt:"",file:"",url:"",static_img:"",has_image:!1}]}},methods:{bannerAnimate:function(){$("#slideshow-home > a:gt(0)").hide();this.drawLines(),setInterval(function(){$("#slideshow-home > a:first").fadeOut(0).next().fadeIn(0).end().appendTo("#slideshow-home")},7e3)},drawLines:function(){$(".nodules").addClass("start"),$(".main-path").addClass("start"),$(".main-path-fill").addClass("start")},deleteLines:function(){$(".nodules").removeClass("start"),$(".main-path").removeClass("start"),$(".main-path-fill").removeClass("start")}},mounted:function(){var t=Array.prototype.map,e=this;e.deleteLines(),s.a.get("https://beta.anacarolinapereira.pt/db-api/getSlideshow.php").then(function(a){var i=a.data,s=[];t.call(i,function(t){if(null==t.static_img)s.push({id:t.id,title:t.title,text:t.text,btn_txt:t.cta_txt,file:t.img,url:t.link,static_img:"",has_image:!1});else{var e=t.static_img.split("uploads");s.push({id:t.id,title:t.title,text:t.text,btn_txt:t.cta_txt,file:t.img,url:t.link,static_img:"uploads"+e[1],has_image:!0})}}),e.$data.slides=s}).then(function(){setTimeout(function(){$("#slideshow-home").css("opacity",1),e.bannerAnimate()},1e3)})}},u={render:function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"slideshow-wrapper"},[a("div",{attrs:{id:"slideshow-home"}},t._l(t.slides,function(e){return a("a",{key:e.id,attrs:{href:e.url,target:"_blank"}},[a("div",{staticClass:"slide",class:{blue:e.id%2==0},style:{"background-image":"url("+e.static_img+")"}},[e.has_image?t._e():a("div",{staticClass:"svg-container"},["chair"==e.file?a("img-base",{attrs:{"img-name":"chair",viewBox:"0 0 330 340"}},[a("img-chair")],1):t._e(),t._v(" "),"children"==e.file?a("img-base",{attrs:{"img-name":"children",viewBox:"0 0 410 340"}},[a("img-children")],1):t._e(),t._v(" "),"moon"==e.file?a("img-base",{attrs:{"img-name":"moon",viewBox:"0 0 510 340"}},[a("img-moon")],1):t._e(),t._v(" "),"frame"==e.file?a("img-base",{attrs:{"img-name":"frame",viewBox:"0 0 620 340"}},[a("img-frame")],1):t._e()],1),t._v(" "),e.has_image?t._e():a("div",{staticClass:"copy",class:{blue:e.id%2==0}},[a("div",{staticClass:"title",class:{white:e.id%2==0}},[t._v(t._s(e.title))]),t._v(" "),a("div",{staticClass:"line"}),t._v(" "),a("div",{staticClass:"text",class:{white:e.id%2==0},domProps:{innerHTML:t._s(e.text)}}),t._v(" "),a("div",{staticClass:"btn white"},[a("div",{staticClass:"txt"},[t._v(t._s(e.btn_txt))])])])])])}),0)])},staticRenderFns:[]};var v=a("VU/8")(d,u,!1,function(t){a("n35H")},"data-v-369eefe6",null);e.default=v.exports},UNWn:function(t,e){},ctLA:function(t,e){},dAjm:function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var i=a("Rxx7"),s=a("dShX"),n=a("tUN6"),l=a("79pf"),c=a("A6MN"),o=a("z+iw"),r=a("QlV5"),d=a("N3wf"),u=a("qIYd"),v=a("eNWK"),m=a.n(v),p={data:function(){return{FadeIn:m.a}},components:{banner:i.default,about:s.default,especialidades:n.default,formacoes:l.default,testemunhos:c.default,parceiros:o.default,destaques:r.default,equipa:d.default,contactos:u.default},metaInfo:function(){return{title:"Ana Carolina Pereira - Clínica de Psicologia",meta:[{name:"description",content:"Somos uma Clínica de Psicologia. Que abraça a infância, a adolescência e a adultez. Que considera o ato psicológico (do processo de avaliação ao aconselhamento e intervenção psicológica) como de charneira entre a confiança na qualidade dos serviços profissionais especializados e a confiança de que, no espaço da relação clínica, se promova a saúde mental e familiar."},{property:"og:title",content:"Ana Carolina Pereira - Clínica de Psicologia"},{property:"og:url",content:"https://www.anacarolinapereira.pt"},{property:"og:description",content:"Somos uma Clínica de Psicologia. Que abraça a infância, a adolescência e a adultez. Que considera o ato psicológico (do processo de avaliação ao aconselhamento e intervenção psicológica) como de charneira entre a confiança na qualidade dos serviços profissionais especializados e a confiança de que, no espaço da relação clínica, se promova a saúde mental e familiar."}]}},mounted:function(){setTimeout(function(){$("#popup").addClass("active")},7e3)}},f={render:function(){var t=this.$createElement,e=this._self._c||t;return e("div",[e("banner"),this._v(" "),e("about"),this._v(" "),e("especialidades"),this._v(" "),e("formacoes"),this._v(" "),e("destaques"),this._v(" "),e("equipa"),this._v(" "),e("contactos")],1)},staticRenderFns:[]};var h=a("VU/8")(p,f,!1,function(t){a("ctLA")},"data-v-10233d43",null);e.default=h.exports},dShX:function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var i=a("mtWM"),s=a.n(i),n={data:function(){return{title:"",content:"",cta:"",url:""}},methods:{offsetTop:function(){var t=$(".slideshow-wrapper");$(".clinica-wrapper").css("margin-top",t.height())},openContactForm:function(){var t=document.querySelector("#contact-form-2");document.querySelector("#menu");t.style.transition=".5s",t.style.transform="translate(-50%, -50%)",t.style.pointerEvents="all",$("#contact-form-2 .page").css("pointer-events","all"),document.documentElement.style.overflow="hidden",$(".menu-wrapper-mobile .menu-items").removeClass("open"),$(".menu-wrapper-mobile .btn-menu").removeClass("open"),$(".menu-wrapper-mobile .close-menu").removeClass("open"),$("#contact-form-2 .p0 .text").animate({left:0,opacity:1},500)}},mounted:function(){this.offsetTop();Array.prototype.map;var t=this;s.a.get("https://beta.anacarolinapereira.pt/db-api/getAboutHomepage.php").then(function(e){var a=e.data;t.title=a[0].title,t.content=a[0].content,t.cta=a[0].cta_txt,t.url=a[0].link})},created:function(){window.addEventListener("resize",this.offsetTop)},destroyed:function(){window.removeEventListener("resize",this.offsetTop)}},l={render:function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"clinica-wrapper"},[a("div",{attrs:{id:"clinica"}},[a("div",{staticClass:"copy-wrapper"},[a("h1",{staticClass:"title main movement"},[t._v(t._s(t.title))]),t._v(" "),a("div",{staticClass:"line movement"}),t._v(" "),a("div",{staticClass:"copy movement",domProps:{innerHTML:t._s(t.content)}})]),t._v(" "),a("div",{staticClass:"ctas"},[a("router-link",{attrs:{to:t.url}},[a("div",{staticClass:"btn blue lateral"},[a("div",{staticClass:"txt"},[t._v(t._s(t.cta))])])]),t._v(" "),a("div",{staticClass:"btn white lateralR",on:{click:function(e){return t.openContactForm()}}},[a("div",{staticClass:"txt"},[t._v("Contacte-nos")])])],1)])])},staticRenderFns:[]};var c=a("VU/8")(n,l,!1,function(t){a("fd7C")},"data-v-efb0f3a6",null);e.default=c.exports},e6tF:function(t,e){},fBkB:function(t,e){},fd7C:function(t,e){},n35H:function(t,e){},owA6:function(t,e){t.exports="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciDQogICAgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHdpZHRoPSI0Ljc0MyIgaGVpZ2h0PSI3LjMwOCIgdmlld0JveD0iMCAwIDQuNzQzIDcuMzA4Ij4NCiAgICA8ZGVmcz4NCiAgICAgICAgPGNsaXBQYXRoIGlkPSJhIj4NCiAgICAgICAgICAgIDxyZWN0IHdpZHRoPSI0Ljc0MyIgaGVpZ2h0PSI3LjMwOCIgZmlsbD0ibm9uZSIvPg0KICAgICAgICA8L2NsaXBQYXRoPg0KICAgIDwvZGVmcz4NCiAgICA8ZyBjbGlwLXBhdGg9InVybCgjYSkiPg0KICAgICAgICA8cGF0aCBkPSJNMy42NTQsNC43NDMsMCwxLjA4OCwxLjA4OCwwLDMuNjU0LDIuNTY2LDYuMjIsMCw3LjMwOCwxLjA4OFoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAgNy4zMDgpIHJvdGF0ZSgtOTApIiBmaWxsPSIjMGJhYmM1Ii8+DQogICAgPC9nPg0KPC9zdmc+"},qIYd:function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var i=a("zwcc"),s=a.n(i),n=a("0w89"),l=a.n(n),c=a("pj8R"),o=a.n(c),r=a("mtWM"),d=a.n(r),u={data:function(){return{phone:s.a,email:l.a,location:o.a,tlf1:"",tlf2:"",email1:"",email2:"",address:"",api_code:""}},methods:{openContactForm:function(){var t=document.querySelector("#contact-form-2");document.querySelector("#menu");t.style.transition="1s",t.style.transform="translate(-50%, -50%)",t.style.pointerEvents="all",$("#contact-form-2 .page").css("pointer-events","all"),document.documentElement.style.overflow="hidden",$(".menu-wrapper-mobile .menu-items").removeClass("open"),$(".menu-wrapper-mobile .btn-menu").removeClass("open"),$(".menu-wrapper-mobile .close-menu").removeClass("open"),$("#contact-form-2 .p0 .text").animate({left:0,opacity:1},500)}},mounted:function(){Array.prototype.map;var t=this;d.a.get("https://beta.anacarolinapereira.pt/db-api/getContactosHomepage.php").then(function(e){var a=e.data;t.tlf1=a[0].tlf_1,""==a[0].tlf_2?$("#tlf2").css("display","none"):($("#tlf2").css("display","inline-block"),t.tlf2=" ou "+a[0].tlf_2),t.email1=a[0].email_1,""==a[0].email_2?$("#email2").css("display","none"):($("#email2").css("display","inline-block"),t.email2=a[0].email_2),t.address=a[0].address,t.api_code=a[0].google_maps_code})}},v={render:function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"contacto-wrapper"},[a("div",{attrs:{id:"contacto"}},[a("div",{staticClass:"left lateral"},[a("h1",{staticClass:"title main"},[t._v("Esperamos por si!")]),t._v(" "),a("div",{staticClass:"line"}),t._v(" "),a("div",{staticClass:"copy"},[a("div",{staticClass:"topic"},[a("div",{staticClass:"icon"},[a("img",{attrs:{src:t.phone,alt:""}})]),t._v(" "),a("div",{staticClass:"txt"},[t._v("\n            Fale connosco através do\n            "),a("span",{attrs:{id:"tlf1"}},[t._v(t._s(t.tlf1))]),t._v(" "),a("span",{attrs:{id:"tlf2"}},[t._v(t._s(t.tlf2))])])]),t._v(" "),a("div",{staticClass:"topic"},[a("div",{staticClass:"icon"},[a("img",{attrs:{src:t.email,alt:""}})]),t._v(" "),a("div",{staticClass:"txt"},[a("a",{staticStyle:{color:"#95989a"},attrs:{href:"mailto:"+t.email1}},[t._v(t._s(t.email1))]),t._v(" "),a("a",{staticStyle:{color:"#95989a"},attrs:{href:"mailto:"+t.email2}},[t._v(t._s(t.email2))])])]),t._v(" "),a("div",{staticClass:"topic"},[a("div",{staticClass:"icon"},[a("img",{attrs:{src:t.location,alt:""}})]),t._v(" "),a("div",{staticClass:"txt",domProps:{innerHTML:t._s(t.address)}})])]),t._v(" "),a("div",{staticClass:"cta",on:{click:function(e){return t.openContactForm()}}},[t._m(0)])]),t._v(" "),a("div",{staticClass:"right lateralR",domProps:{innerHTML:t._s(t.api_code)}})])])},staticRenderFns:[function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"btn blue"},[e("div",{staticClass:"txt"},[this._v("contacte-nos")])])}]};var m=a("VU/8")(u,v,!1,function(t){a("NsCw")},"data-v-96c15a2c",null);e.default=m.exports},tUN6:function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});a("eNWK");var i=a("mtWM"),s=a.n(i),n=a("mbzP"),l=a.n(n),c={data:function(){return{check:l.a,especialidades:[{id:1,title:"",code:"",content:"",url:"",icon:""}]}},methods:{FadeIn:function(){var t=$(".movement, .cover"),e=$(".movement-delayed"),a=$(".lateral, .lateralR"),i=$("#svg");!function(t){t.fn.visible=function(e,a){void 0===a&&(a=0);var i=t(this),s=t(window),n=s.scrollTop(),l=n+s.height(),c=i.offset().top+a,o=c+i.height()-a;return(!0===e?c:o)<=l&&(!0===e?o:c)>=n}}(jQuery);var s=$(window),n=!0;t.each(function(t,e){(e=$(e)).visible(!0)&&e.addClass("placed")}),i.each(function(t,e){(e=$(e)).visible(!0)&&(n&&e.append("<img src='assets/img/elemento_animated.svg' alt=''></img>"),n=!1)}),a.each(function(t,e){(e=$(e)).visible(!0,100)&&e.addClass("placed")}),e.each(function(t,e){(e=$(e)).visible(!0,800)&&e.addClass("placed")}),s.scroll(function(s){t.each(function(t,e){(e=$(e)).visible(!0)&&e.addClass("placed")}),a.each(function(t,e){(e=$(e)).visible(!0,100)&&e.addClass("placed")}),e.each(function(t,e){(e=$(e)).visible(!0,800)&&e.addClass("placed")}),i.each(function(t,e){(e=$(e)).visible(!0)&&(n&&e.append("<img src='assets/img/elemento_animated.svg' alt=''></img>"),n=!1)})})}},mounted:function(){var t=Array.prototype.map,e=this;s.a.get("https://beta.anacarolinapereira.pt/db-api/getEspecialidadesHomepage.php").then(function(a){var i=a.data,s=[];t.call(i,function(t){if(null==t.img_src)s.push({id:t.id,title:t.title,content:t.text,url:t.link,icon:l.a});else{var e=t.img_src.split("uploads");s.push({id:t.id,title:t.title,content:t.text,url:t.link,icon:"uploads"+e[1]})}}),e.$data.especialidades=s}).then(function(){e.FadeIn()})}},o={render:function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"especialidades-wrapper"},[a("div",{attrs:{id:"especialidades"}},[t._m(0),t._v(" "),a("div",{staticClass:"especialidades"},t._l(t.especialidades,function(e){return a("div",{key:e.id,staticClass:"especialidade movement"},[a("div",{staticClass:"icon",style:{"background-image":"url("+e.icon+")"}}),t._v(" "),a("h3",{staticClass:"txt-big"},[t._v(t._s(e.title))]),t._v(" "),a("div",{staticClass:"copy",domProps:{innerHTML:t._s(e.content)}}),t._v(" "),a("router-link",{attrs:{to:e.url}},[a("div",{staticClass:"cta"},[a("div",{staticClass:"text"},[t._v("saiba mais")]),t._v(" "),a("div",{staticClass:"arrow-cont"},[a("i",{staticClass:"arrow right"})])])])],1)}),0)])])},staticRenderFns:[function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"title-wrapper movement"},[e("h1",{staticClass:"title main"},[this._v("As Nossas Especialidades")]),this._v(" "),e("div",{staticClass:"line"})])}]};var r=a("VU/8")(c,o,!1,function(t){a("e6tF")},"data-v-072cfbd9",null);e.default=r.exports},"z+iw":function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var i=a("mtWM"),s=a.n(i),n={data:function(){return{parceiros:[{id:"",name:"",img_src:"",url:""}]}},methods:{FadeIn:function(){var t=$(".movement, .cover"),e=$(".movement-delayed"),a=$(".lateral, .lateralR"),i=$("#svg");!function(t){t.fn.visible=function(e,a){void 0===a&&(a=0);var i=t(this),s=t(window),n=s.scrollTop(),l=n+s.height(),c=i.offset().top+a,o=c+i.height()-a;return(!0===e?c:o)<=l&&(!0===e?o:c)>=n}}(jQuery);var s=$(window),n=!0;t.each(function(t,e){(e=$(e)).visible(!0)&&e.addClass("placed")}),i.each(function(t,e){(e=$(e)).visible(!0)&&(n&&e.append("<img src='assets/img/elemento_animated.svg' alt=''></img>"),n=!1)}),a.each(function(t,e){(e=$(e)).visible(!0,100)&&e.addClass("placed")}),e.each(function(t,e){(e=$(e)).visible(!0,800)&&e.addClass("placed")}),s.scroll(function(s){t.each(function(t,e){(e=$(e)).visible(!0)&&e.addClass("placed")}),a.each(function(t,e){(e=$(e)).visible(!0,100)&&e.addClass("placed")}),e.each(function(t,e){(e=$(e)).visible(!0,800)&&e.addClass("placed")}),i.each(function(t,e){(e=$(e)).visible(!0)&&(n&&e.append("<img src='assets/img/elemento_animated.svg' alt=''></img>"),n=!1)})})}},mounted:function(){var t=Array.prototype.map,e=this;s.a.get("https://beta.anacarolinapereira.pt/db-api/getParceirosHomepage.php").then(function(a){var i=a.data,s=[];t.call(i,function(t){var e=t.img_src.split("uploads");s.push({id:t.id,name:t.name,img_src:"uploads"+e[1],url:t.link})}),e.$data.parceiros=s}).then(function(){e.FadeIn()})}},l={render:function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"parceiros-wrapper"},[e("div",{attrs:{id:"parceiros"}},[e("div",{staticClass:"title main movement"},[this._v("Os Nossos Parceiros")]),this._v(" "),e("div",{staticClass:"pics-wrapper"},this._l(this.parceiros,function(t){return e("div",{key:t.id,staticClass:"pic movement",style:{"background-image":"url("+t.img_src+")"}})}),0)])])},staticRenderFns:[]};var c=a("VU/8")(n,l,!1,function(t){a("UNWn")},"data-v-74cc4146",null);e.default=c.exports}});
//# sourceMappingURL=1.fcbab7a3f391f69cc38e.js.map