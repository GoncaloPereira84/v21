webpackJsonp([4,10,16,19],{"2gXi":function(a,e){},ElQA:function(a,e,t){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var i=t("mtWM"),s=t.n(i),n=t("nIlH"),o=t.n(n),r={data:function(){return{img:o.a,text:""}},methods:{FadeIn:function(){var a=$(".movement, .cover"),e=$(".movement-delayed"),t=$(".lateral, .lateralR"),i=$("#svg");!function(a){a.fn.visible=function(e,t){void 0===t&&(t=0);var i=a(this),s=a(window),n=s.scrollTop(),o=n+s.height(),r=i.offset().top+t,c=r+i.height()-t;return(!0===e?r:c)<=o&&(!0===e?c:r)>=n}}(jQuery);var s=$(window),n=!0;a.each(function(a,e){(e=$(e)).visible(!0)&&e.addClass("placed")}),i.each(function(a,e){(e=$(e)).visible(!0)&&(n&&e.append("<img src='assets/img/elemento_animated.svg' alt=''></img>"),n=!1)}),t.each(function(a,e){(e=$(e)).visible(!0,100)&&e.addClass("placed")}),e.each(function(a,e){(e=$(e)).visible(!0,800)&&e.addClass("placed")}),s.scroll(function(s){a.each(function(a,e){(e=$(e)).visible(!0)&&e.addClass("placed")}),t.each(function(a,e){(e=$(e)).visible(!0,100)&&e.addClass("placed")}),e.each(function(a,e){(e=$(e)).visible(!0,800)&&e.addClass("placed")}),i.each(function(a,e){(e=$(e)).visible(!0)&&(n&&e.append("<img src='assets/img/elemento_animated.svg' alt=''></img>"),n=!1)})})}},mounted:function(){Array.prototype.map;var a=this;s.a.get("https://beta.anacarolinapereira.pt/db-api/getFormacoes.php").then(function(e){var t=e.data.split("||"),i=JSON.parse(t[1]);a.$data.text=i[0].text}).then(function(){a.FadeIn()})}},c={render:function(){var a=this,e=a.$createElement,t=a._self._c||e;return t("div",{staticClass:"apresentacao-wrapper movement"},[t("div",[t("div",{staticClass:"img"},[t("div",{style:{"background-image":"url("+a.img+")"}})]),a._v(" "),t("div",{attrs:{id:"apresentacao"}},[t("h2",{staticClass:"title"},[a._v("A Academia")]),a._v(" "),t("div",{staticClass:"line"}),a._v(" "),t("div",{staticClass:"copy",domProps:{innerHTML:a._s(a.text)}},[a._v("Texto de apresentação para as formações.")])])])])},staticRenderFns:[]};var d=t("VU/8")(r,c,!1,function(a){t("drfC")},"data-v-2df9beb4",null);e.default=d.exports},Xpst:function(a,e,t){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var i=t("knko"),s=t.n(i),n={data:function(){return{img:s.a}}},o={render:function(){this.$createElement;this._self._c;return this._m(0)},staticRenderFns:[function(){var a=this.$createElement,e=this._self._c||a;return e("div",{staticClass:"slideshow-wrapper"},[e("div",{attrs:{id:"slideshow"}},[e("div",{staticClass:"slide"},[e("div",{staticClass:"copy"},[e("div",{staticClass:"line"}),this._v(" "),e("h1",{staticClass:"title"},[this._v("Academia")])])])])])}]};var r=t("VU/8")(n,o,!1,function(a){t("n04S")},"data-v-7c3866ba",null);e.default=r.exports},Z2nq:function(a,e,t){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var i=t("Xpst"),s=t("ElQA"),n=t("achz"),o={components:{banner:i.default,apresentacao:s.default,formacoes:n.default},metaInfo:function(){return{title:"Academia - Ana Carolina Pereira - Clínica de Psicologia",meta:[{name:"description",content:"A Academia. Pretende ser um espaço de conhecimento. De descoberta e exploração. De um horizonte aberto e infinito. Com capacidade de olhar desde o alto. De liberdade, portanto. De observar e aprender. Como uma garça. No fundo, será isso: a Academia como um espaço que nos possibilite voar para o infinito, pelo que aprendemos e pelo que partilhamos. Com e para pessoas. Com e para curiosos por aprender. E partilhar."},{property:"og:title",content:"Academia - Ana Carolina Pereira - Clínica de Psicologia"},{property:"og:url",content:"https://www.anacarolinapereira.pt/academia"},{property:"og:description",content:"A Academia. Pretende ser um espaço de conhecimento. De descoberta e exploração. De um horizonte aberto e infinito. Com capacidade de olhar desde o alto. De liberdade, portanto. De observar e aprender. Como uma garça. No fundo, será isso: a Academia como um espaço que nos possibilite voar para o infinito, pelo que aprendemos e pelo que partilhamos. Com e para pessoas. Com e para curiosos por aprender. E partilhar."}]}}},r={render:function(){var a=this.$createElement,e=this._self._c||a;return e("div",[e("banner"),this._v(" "),e("apresentacao"),this._v(" "),e("formacoes")],1)},staticRenderFns:[]};var c=t("VU/8")(o,r,!1,function(a){t("2gXi")},"data-v-0e1d659a",null);e.default=c.exports},achz:function(a,e,t){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var i=t("mtWM"),s=t.n(i),n=t("A2Z5"),o=t.n(n),r=t("PJh5"),c=t.n(r),d={data:function(){return{calendar:o.a,formacoes:[{id:"",code:"",title:"",text:"",url:"",img:"",start:"",end:"",is_full:"",last_vagas:"",is_visible:"",categoria:""}]}},methods:{FadeIn:function(){var a=$(".movement, .cover"),e=$(".movement-delayed"),t=$(".lateral, .lateralR"),i=$("#svg");!function(a){a.fn.visible=function(e,t){void 0===t&&(t=0);var i=a(this),s=a(window),n=s.scrollTop(),o=n+s.height(),r=i.offset().top+t,c=r+i.height()-t;return(!0===e?r:c)<=o&&(!0===e?c:r)>=n}}(jQuery);var s=$(window),n=!0;a.each(function(a,e){(e=$(e)).visible(!0)&&e.addClass("placed")}),i.each(function(a,e){(e=$(e)).visible(!0)&&(n&&e.append("<img src='assets/img/elemento_animated.svg' alt=''></img>"),n=!1)}),t.each(function(a,e){(e=$(e)).visible(!0,100)&&e.addClass("placed")}),e.each(function(a,e){(e=$(e)).visible(!0,800)&&e.addClass("placed")}),s.scroll(function(s){a.each(function(a,e){(e=$(e)).visible(!0)&&e.addClass("placed")}),t.each(function(a,e){(e=$(e)).visible(!0,100)&&e.addClass("placed")}),e.each(function(a,e){(e=$(e)).visible(!0,800)&&e.addClass("placed")}),i.each(function(a,e){(e=$(e)).visible(!0)&&(n&&e.append("<img src='assets/img/elemento_animated.svg' alt=''></img>"),n=!1)})})}},mounted:function(){var a=Array.prototype.map,e=this;s.a.get("https://beta.anacarolinapereira.pt/db-api/getFormacaoInfo.php").then(function(t){var i=t.data,s=[];a.call(i,function(a){var e,t,i,n,o=a.icon.split("uploads");"0000-00-00"==a.date_start?(e="disponível brevemente",t=""):(e=c()(a.date_start).format("DD-MM-YYYY"),t=c()(a.date_end).format("DD-MM-YYYY")),i=1==a.categoria_id?"formacao":2==a.categoria_id?"curso":"webinar",n=1==a.categoria_id?"formação":2==a.categoria_id?"curso":"webinar",s.push({id:a.id,code:a.code,title:a.title,text:a.text,url:"/academia/"+i+a.link,img:"https://beta.anacarolinapereira.pt/uploads"+o[1],start:e,end:t,is_full:a.is_full,last_vagas:a.last_vagas,is_visible:a.is_visible,categoria:n})}),e.$data.formacoes=s}).then(function(){e.FadeIn()})}},l={render:function(){var a=this,e=a.$createElement,t=a._self._c||e;return t("div",{staticClass:"formacoes-wrapper"},[t("div",{staticClass:"formacoes"},[t("div",{staticClass:"cards-wrapper"},a._l(a.formacoes,function(e){return t("div",{key:e.id,staticClass:"card movement",class:{"is-visible":1==e.is_visible}},[t("div",{staticClass:"card-img",style:{"background-image":"url("+e.img+")"}}),a._v(" "),t("div",{staticClass:"card-content"},[t("div",{staticClass:"card-header"},[t("div",{staticClass:"card-type"},[a._v(a._s(e.categoria))]),a._v(" "),t("div",{staticClass:"card-status",class:{"is-full":1==e.is_full,"has-vagas":1==e.last_vagas}},[t("span",{class:{"is-full":1==e.is_full}},[a._v("vagas preenchidas")]),a._v(" "),t("span",{class:{"has-vagas":1==e.last_vagas}},[a._v("últimas vagas")])])]),a._v(" "),t("div",{staticClass:"card-body"},[t("h3",{staticClass:"card-title"},[a._v(a._s(e.title))]),a._v(" "),t("div",{staticClass:"card-date"},[t("div",{staticClass:"txt"},[a._v("\n                "+a._s(e.start)+"\n                "),t("br"),a._v("\n                "+a._s(e.end)+"\n              ")]),a._v(" "),t("div",{staticClass:"icon",style:{"background-image":"url("+a.calendar+")"}})])])]),a._v(" "),t("router-link",{attrs:{to:e.url}},[t("div",{staticClass:"card-cta"},[t("div",{staticClass:"txt"},[a._v("Saiba mais")])])])],1)}),0)])])},staticRenderFns:[]};var v=t("VU/8")(d,l,!1,function(a){t("j/2d")},"data-v-e45cddc4",null);e.default=v.exports},drfC:function(a,e){},"j/2d":function(a,e){},n04S:function(a,e){},nIlH:function(a,e,t){a.exports=t.p+"static/img/garca.4c3cf1f.svg"}});
//# sourceMappingURL=4.5df106b8c2da379a4e1b.js.map