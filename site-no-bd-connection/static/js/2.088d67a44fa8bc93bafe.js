webpackJsonp([2,20,22,26,27,31],{"5eAU":function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var i=a("0eVU"),s=a.n(i),n={data:function(){return{img:s.a}}},c={render:function(){this.$createElement;this._self._c;return this._m(0)},staticRenderFns:[function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"slideshow-wrapper"},[e("div",{attrs:{id:"slideshow"}},[e("div",{staticClass:"slide"},[e("div",{staticClass:"copy"},[e("h1",{staticClass:"title"},[this._v("Sobre Nós")]),this._v(" "),e("div",{staticClass:"line"})])])])])}]};var o=a("VU/8")(n,c,!1,function(t){a("964J")},"data-v-5f7fd27d",null);e.default=o.exports},"6uri":function(t,e){},"7kYI":function(t,e){},"964J":function(t,e){},AoXN:function(t,e){},"C+vq":function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var i=a("mtWM"),s=a.n(i),n=a("mbzP"),c=a.n(n),o={data:function(){return{check:c.a,title:"",text:"",topics:[{id:0,title:"",text:"",icon:""}]}},methods:{FadeIn:function(){var t=$(".movement, .cover"),e=$(".movement-delayed"),a=$(".lateral, .lateralR"),i=$("#svg");!function(t){t.fn.visible=function(e,a){void 0===a&&(a=0);var i=t(this),s=t(window),n=s.scrollTop(),c=n+s.height(),o=i.offset().top+a,r=o+i.height()-a;return(!0===e?o:r)<=c&&(!0===e?r:o)>=n}}(jQuery);var s=$(window),n=!0;t.each(function(t,e){(e=$(e)).visible(!0)&&e.addClass("placed")}),i.each(function(t,e){(e=$(e)).visible(!0)&&(n&&e.append("<img src='assets/img/elemento_animated.svg' alt=''></img>"),n=!1)}),a.each(function(t,e){(e=$(e)).visible(!0,100)&&e.addClass("placed")}),e.each(function(t,e){(e=$(e)).visible(!0,800)&&e.addClass("placed")}),s.scroll(function(s){t.each(function(t,e){(e=$(e)).visible(!0)&&e.addClass("placed")}),a.each(function(t,e){(e=$(e)).visible(!0,100)&&e.addClass("placed")}),e.each(function(t,e){(e=$(e)).visible(!0,800)&&e.addClass("placed")}),i.each(function(t,e){(e=$(e)).visible(!0)&&(n&&e.append("<img src='assets/img/elemento_animated.svg' alt=''></img>"),n=!1)})})}},mounted:function(){var t=Array.prototype.map,e=this;s.a.get("https://beta.anacarolinapereira.pt/db-api/getAbout.php").then(function(a){var i=a.data.split("||"),s=JSON.parse(i[4]),n=JSON.parse(i[5]),o=[];e.title=s[0].title,e.text=s[0].text,t.call(n,function(t){if(null==t.img_src)o.push({id:t.id,title:t.title,text:t.text,icon:c.a});else{var e=t.img_src.split("uploads");o.push({id:t.id,title:t.title,text:t.text,icon:"uploads"+e[1]})}}),e.$data.topics=o}).then(function(){e.FadeIn()})}},r={render:function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"confianca-wrapper"},[a("div",{staticClass:"confianca"},[a("div",{staticClass:"top movement"},[a("div",{staticClass:"subtext"},[t._v("AS PESSOAS CONFIAM EM NÓS")]),t._v(" "),a("h2",{staticClass:"title main"},[t._v(t._s(t.title))]),t._v(" "),a("div",{staticClass:"line"}),t._v(" "),a("div",{staticClass:"copy",domProps:{innerHTML:t._s(t.text)}})]),t._v(" "),a("div",{staticClass:"topics"},t._l(t.topics,function(e){return a("div",{key:e.id,staticClass:"topic movement"},[a("div",{staticClass:"icon",style:{"background-image":"url("+e.icon+")"}}),t._v(" "),a("h3",{staticClass:"title"},[t._v(t._s(e.title))]),t._v(" "),a("div",{staticClass:"txt",domProps:{innerHTML:t._s(e.text)}})])}),0)])])},staticRenderFns:[]};var l=a("VU/8")(o,r,!1,function(t){a("Jjmt")},"data-v-21e1f80d",null);e.default=l.exports},J4iq:function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var i=a("mtWM"),s=a.n(i),n={data:function(){return{servicos:[{id:"",title:"",subtext:"",text:""}]}},methods:{FadeIn:function(){var t=$(".movement, .cover"),e=$(".movement-delayed"),a=$(".lateral, .lateralR"),i=$("#svg");!function(t){t.fn.visible=function(e,a){void 0===a&&(a=0);var i=t(this),s=t(window),n=s.scrollTop(),c=n+s.height(),o=i.offset().top+a,r=o+i.height()-a;return(!0===e?o:r)<=c&&(!0===e?r:o)>=n}}(jQuery);var s=$(window),n=!0;t.each(function(t,e){(e=$(e)).visible(!0)&&e.addClass("placed")}),i.each(function(t,e){(e=$(e)).visible(!0)&&(n&&e.append("<img src='assets/img/elemento_animated.svg' alt=''></img>"),n=!1)}),a.each(function(t,e){(e=$(e)).visible(!0,100)&&e.addClass("placed")}),e.each(function(t,e){(e=$(e)).visible(!0,800)&&e.addClass("placed")}),s.scroll(function(s){t.each(function(t,e){(e=$(e)).visible(!0)&&e.addClass("placed")}),a.each(function(t,e){(e=$(e)).visible(!0,100)&&e.addClass("placed")}),e.each(function(t,e){(e=$(e)).visible(!0,800)&&e.addClass("placed")}),i.each(function(t,e){(e=$(e)).visible(!0)&&(n&&e.append("<img src='assets/img/elemento_animated.svg' alt=''></img>"),n=!1)})})}},mounted:function(){var t=this,e=Array.prototype.map,a=this;s.a.get("https://beta.anacarolinapereira.pt/db-api/getAbout.php").then(function(t){var i=t.data.split("||"),s=JSON.parse(i[2]),n=[];e.call(s,function(t){n.push({id:t.id,title:t.title,subtext:t.subtext,text:t.text})}),a.$data.servicos=n}).then(function(){t.FadeIn()})}},c={render:function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"servicos-wrapper"},[a("div",{staticClass:"cards-wrapper"},t._l(t.servicos,function(e){return a("div",{key:e.id,staticClass:"card movement"},[a("h3",{staticClass:"card-title"},[t._v(t._s(e.title))]),t._v(" "),a("div",{staticClass:"card-copy"},[a("span",{domProps:{innerHTML:t._s(e.text)}})])])}),0)])},staticRenderFns:[]};var o=a("VU/8")(n,c,!1,function(t){a("AoXN")},"data-v-73937d8e",null);e.default=o.exports},Jjmt:function(t,e){},ZyCZ:function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var i=a("MXBO"),s=a.n(i),n=a("mtWM"),c=a.n(n),o=a("mbzP"),r=a.n(o),l={data:function(){return{check:r.a,quote:s.a,isActive:!0,index:1,people:[{id:0,name:"",text:"",content:"",quote:"",pic:""}]}},methods:{clickIndicator:function(t,e){var a,i=document.querySelectorAll(".team .person"),s=document.querySelectorAll(".indicators .idc"),n=document.querySelectorAll(".right .txt .p");for(t>i.length&&(this.index=1),t<1&&(this.index=i.length),a=0;a<i.length;a++)i[a].className="person",n[a].className="p";for(a=0;a<s.length;a++)s[a].className=s[a].className.replace(" active",""),this.isActive=!1;i[this.index-1].className="person active",s[this.index-1].className+=" active",n[this.index-1].className+=" active",this.isActive=!0},prevSlides:function(t){this.clickIndicator(this.index-=t,1)},plusSlides:function(t){this.clickIndicator(this.index+=t,-1)},currentSlide:function(t){this.clickIndicator(this.index=t,-1)}},mounted:function(){var t=this,e=Array.prototype.map,a=this;c.a.get("https://beta.anacarolinapereira.pt/db-api/getAbout.php").then(function(t){var i=t.data.split("||"),s=JSON.parse(i[3]),n=[];e.call(s,function(t){if(null==t.img_src)n.push({id:t.id,name:t.name,text:t.cargo,content:t.description,quote:t.quote,pic:r.a});else{var e=t.img_src.split("uploads");n.push({id:t.id,name:t.name,text:t.cargo,content:t.description,quote:t.quote,pic:"uploads"+e[1]})}}),a.$data.people=n}).then(function(){t.clickIndicator(t.index,1);var e=document.querySelector(".team");document.querySelectorAll(".team .person");if(window.innerWidth<600){e.addEventListener("touchstart",function(t){var e=function(t){return t.touches||t.originalEvent.touches}(t)[0];i=e.clientX,s=e.clientY},!1),e.addEventListener("touchmove",function(t){if(i&&s){var e=t.touches[0].clientX,n=t.touches[0].clientY,c=i-e,o=s-n;document.querySelector(".team .person.active").getAttribute("data-person-id"),Math.abs(c)>Math.abs(o)&&(c>0?a.plusSlides(1):a.prevSlides(1)),i=null,s=null}},!1);var i=null,s=null}}).then(function(){var t=window.location.href.split("/"),e=t[t.length-1];if(e.includes("#")){var a=e.split("#"),i=$("#"+a[1])[0].offsetTop;setTimeout(function(){$("html, body").animate({scrollTop:i-100},1e3)},500)}})}},d={render:function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"equipa-wrapper",attrs:{id:"equipa"}},[a("div",{staticClass:"equipa"},[a("div",{staticClass:"left lateral"},[a("div",{staticClass:"person-wrapper"},[a("div",{staticClass:"team"},t._l(t.people,function(e){return a("div",{key:e.id,staticClass:"person",class:{active:t.isActive},attrs:{"data-person-id":e.id}},[a("div",{staticClass:"pic",style:{"background-image":"url("+e.pic+")"}}),t._v(" "),a("div",{staticClass:"name"},[t._v(t._s(e.name))]),t._v(" "),a("div",{staticClass:"description"},[a("i",{domProps:{innerHTML:t._s(e.text)}})])])}),0),t._v(" "),a("div",{staticClass:"indicators"},t._l(t.people,function(e){return a("div",{key:e.id,staticClass:"idc",class:{active:t.isActive},on:{click:function(a){return t.currentSlide(e.id)}}})}),0)])]),t._v(" "),a("div",{staticClass:"right lateralR"},[a("h2",{staticClass:"title main"},[t._v("A nossa equipa")]),t._v(" "),a("div",{staticClass:"line"}),t._v(" "),a("div",{staticClass:"txt"},t._l(t.people,function(e){return a("p",{key:e.id,staticClass:"p",class:{active:t.isActive},domProps:{innerHTML:t._s(e.content)}})}),0)])])])},staticRenderFns:[]};var u=a("VU/8")(l,d,!1,function(t){a("zQWo")},"data-v-530fa10e",null);e.default=u.exports},feSF:function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var i=a("5eAU"),s=a("t39n"),n=a("J4iq"),c=a("ZyCZ"),o=a("C+vq"),r=a("lbB+"),l=a("eNWK"),d=a.n(l),u={data:function(){return{FadeIn:d.a}},components:{banner:i.default,historia:s.default,servicos:n.default,equipa:c.default,confianca:o.default,marcarConsulta:r.default},metaInfo:function(){return{title:"Sobre Nós - Ana Carolina Pereira - Clínica de Psicologia",meta:[{name:"description",content:"Somos uma Clínica de Psicologia com sede em Coimbra. E uma Academia (de formação clínica, de ideias e projetos) que abraça a infância, a adolescência e a adultez. Que tem o desejo de contribuir para a promoção da saúde mental e familiar. Que tem a ambição de partilhar, e aprender, saberes. Conhecimento. Pela nossa Academia. Mas, e sobretudo, de corresponder, com rigor e seriedade, à sua confiança na nossa equipa."},{property:"og:title",content:"Sobre Nós - Ana Carolina Pereira - Clínica de Psicologia"},{property:"og:url",content:"https://www.anacarolinapereira.pt/sobre-nos"},{property:"og:description",content:"Somos uma Clínica de Psicologia com sede em Coimbra. E uma Academia (de formação clínica, de ideias e projetos) que abraça a infância, a adolescência e a adultez. Que tem o desejo de contribuir para a promoção da saúde mental e familiar. Que tem a ambição de partilhar, e aprender, saberes. Conhecimento. Pela nossa Academia. Mas, e sobretudo, de corresponder, com rigor e seriedade, à sua confiança na nossa equipa."}]}}},p={render:function(){var t=this.$createElement,e=this._self._c||t;return e("div",[e("banner"),this._v(" "),e("historia"),this._v(" "),e("servicos"),this._v(" "),e("equipa"),this._v(" "),e("confianca"),this._v(" "),e("marcar-consulta")],1)},staticRenderFns:[]};var v=a("VU/8")(u,p,!1,function(t){a("7kYI")},"data-v-5aa54431",null);e.default=v.exports},t39n:function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var i=a("mtWM"),s=a.n(i),n={data:function(){return{text1:"",text2:"",quote:""}},mounted:function(){Array.prototype.map;var t=this;s.a.get("https://beta.anacarolinapereira.pt/db-api/getAbout.php").then(function(e){var a=e.data.split("||"),i=JSON.parse(a[1]);t.text1=i[0].text,t.text2=i[0].text2,t.quote=i[0].quote})}},c={render:function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"historia-wrapper"},[a("div",{staticClass:"historia movement"},[a("div",{staticClass:"copy"},[a("h2",{staticClass:"title"},[t._v("A nossa história")]),t._v(" "),a("div",{staticClass:"container"},[a("div",{staticClass:"p"},[a("div",{staticClass:"paragraph",domProps:{innerHTML:t._s(t.text1)}}),t._v(" "),a("div",{staticClass:"line"})]),t._v(" "),a("div",{staticClass:"paragraph",domProps:{innerHTML:t._s(t.text2)}})])])])])},staticRenderFns:[]};var o=a("VU/8")(n,c,!1,function(t){a("6uri")},"data-v-78c3191a",null);e.default=o.exports},zQWo:function(t,e){}});
//# sourceMappingURL=2.088d67a44fa8bc93bafe.js.map