webpackJsonp([5,13,32,34],{1309:function(t,a){},"3tHI":function(t,a,e){"use strict";Object.defineProperty(a,"__esModule",{value:!0});var s=e("mtWM"),i=e.n(s),n=e("nIlH"),r=e.n(n),c={data:function(){return{img:r.a,text:""}},mounted:function(){Array.prototype.map;var t=this;i.a.get("https://beta.anacarolinapereira.pt/db-api/getFormacoes.php").then(function(a){var e=a.data.split("||"),s=JSON.parse(e[1]);t.$data.text=s[0].text})}},o={render:function(){var t=this,a=t.$createElement,e=t._self._c||a;return e("div",{staticClass:"apresentacao-wrapper movement"},[e("div",[e("div",{staticClass:"img"},[e("div",{style:{"background-image":"url("+t.img+")"}})]),t._v(" "),e("div",{attrs:{id:"apresentacao"}},[e("h2",{staticClass:"title"},[t._v("A Academia")]),t._v(" "),e("div",{staticClass:"line"}),t._v(" "),e("div",{staticClass:"copy",domProps:{innerHTML:t._s(t.text)}},[t._v("Texto de apresentação para as formações.")])])])])},staticRenderFns:[]};var l=e("VU/8")(c,o,!1,function(t){e("VTdd")},"data-v-38bcf23e",null);a.default=l.exports},CyVU:function(t,a){},NXaP:function(t,a,e){"use strict";Object.defineProperty(a,"__esModule",{value:!0});var s=e("mUnp"),i=e("3tHI"),n=e("VkPQ"),r={components:{banner:s.default,apresentacao:i.default,formacoes:n.default},metaInfo:function(){return{title:"Formações - Ana Carolina Pereira - Clínica de Psicologia",meta:[{name:"description",content:"Texto descritivo das Formações."},{name:"robots",content:"index,follow"},{property:"og:site_name",content:"Ana Carolina Pereira"},{property:"og:type",content:"website"},{property:"og:title",content:"Formações - Ana Carolina Pereira - Clínica de Psicologia"},{property:"og:description",content:"Texto descritivo das Formações."}]}}},c={render:function(){var t=this.$createElement,a=this._self._c||t;return a("div",[a("banner"),this._v(" "),a("apresentacao"),this._v(" "),a("formacoes")],1)},staticRenderFns:[]};var o=e("VU/8")(r,c,!1,function(t){e("gFSJ")},"data-v-32f98f74",null);a.default=o.exports},VTdd:function(t,a){},VkPQ:function(t,a,e){"use strict";Object.defineProperty(a,"__esModule",{value:!0});var s=e("mtWM"),i=e.n(s),n=e("2ba8"),r=e.n(n),c=e("PJh5"),o=e.n(c),l={data:function(){return{calendar:r.a,formacoes:[{id:"",code:"",title:"",text:"",url:"",img:"",start:"",end:"",is_full:"",last_vagas:"",is_visible:""}]}},methods:{FadeIn:function(){var t=$(".movement, .cover"),a=$(".movement-delayed"),e=$(".lateral, .lateralR"),s=$("#svg");!function(t){t.fn.visible=function(a,e){void 0===e&&(e=0);var s=t(this),i=t(window),n=i.scrollTop(),r=n+i.height(),c=s.offset().top+e,o=c+s.height()-e;return(!0===a?c:o)<=r&&(!0===a?o:c)>=n}}(jQuery);var i=$(window),n=!0;t.each(function(t,a){(a=$(a)).visible(!0)&&a.addClass("placed")}),s.each(function(t,a){(a=$(a)).visible(!0)&&(n&&a.append("<img src='assets/img/elemento_animated.svg' alt=''></img>"),n=!1)}),e.each(function(t,a){(a=$(a)).visible(!0,100)&&a.addClass("placed")}),a.each(function(t,a){(a=$(a)).visible(!0,800)&&a.addClass("placed")}),i.scroll(function(i){t.each(function(t,a){(a=$(a)).visible(!0)&&a.addClass("placed")}),e.each(function(t,a){(a=$(a)).visible(!0,100)&&a.addClass("placed")}),a.each(function(t,a){(a=$(a)).visible(!0,800)&&a.addClass("placed")}),s.each(function(t,a){(a=$(a)).visible(!0)&&(n&&a.append("<img src='assets/img/elemento_animated.svg' alt=''></img>"),n=!1)})})}},mounted:function(){var t=Array.prototype.map,a=this;i.a.get("https://beta.anacarolinapereira.pt/db-api/getFormacaoInfo.php").then(function(e){var s=e.data,i=[];t.call(s,function(t){var a,e,s=t.img_src.split("uploads");"0000-00-00"==t.date_start?(a="disponível brevemente",e=""):(a=o()(t.date_start).format("DD-MM-YYYY"),e=o()(t.date_end).format("DD-MM-YYYY")),i.push({id:t.id,code:t.code,title:t.title,text:t.text,url:t.link,img:"uploads"+s[1],start:a,end:e,is_full:t.is_full,last_vagas:t.last_vagas,is_visible:t.is_visible})}),a.$data.formacoes=i}).then(function(){a.FadeIn()})}},d={render:function(){var t=this,a=t.$createElement,e=t._self._c||a;return e("div",{staticClass:"formacoes-wrapper"},[e("div",{staticClass:"formacoes"},[e("div",{staticClass:"cards-wrapper"},t._l(t.formacoes,function(a){return e("div",{key:a.id,staticClass:"card movement",class:{"is-visible":1==a.is_visible}},[e("div",{staticClass:"card-img",style:{"background-image":"url("+a.img+")"}}),t._v(" "),e("div",{staticClass:"card-content"},[e("div",{staticClass:"card-header"},[e("div",{staticClass:"card-type"},[t._v("formação")]),t._v(" "),e("div",{staticClass:"card-status",class:{"is-full":1==a.is_full,"has-vagas":1==a.last_vagas}},[e("span",{class:{"is-full":1==a.is_full}},[t._v("vagas preenchidas")]),t._v(" "),e("span",{class:{"has-vagas":1==a.last_vagas}},[t._v("últimas vagas")])])]),t._v(" "),e("div",{staticClass:"card-body"},[e("h3",{staticClass:"card-title"},[t._v(t._s(a.title))]),t._v(" "),e("div",{staticClass:"card-date"},[e("div",{staticClass:"txt"},[t._v("\n                "+t._s(a.start)+"\n                "),e("br"),t._v("\n                "+t._s(a.end)+"\n              ")]),t._v(" "),e("div",{staticClass:"icon",style:{"background-image":"url("+t.calendar+")"}})])])]),t._v(" "),e("router-link",{attrs:{to:a.url}},[e("div",{staticClass:"card-cta"},[e("div",{staticClass:"txt"},[t._v("Saiba mais")])])])],1)}),0)])])},staticRenderFns:[]};var v=e("VU/8")(l,d,!1,function(t){e("CyVU")},"data-v-2b73195b",null);a.default=v.exports},gFSJ:function(t,a){},mUnp:function(t,a,e){"use strict";Object.defineProperty(a,"__esModule",{value:!0});var s=e("knko"),i=e.n(s),n={data:function(){return{img:i.a}}},r={render:function(){this.$createElement;this._self._c;return this._m(0)},staticRenderFns:[function(){var t=this.$createElement,a=this._self._c||t;return a("div",{staticClass:"slideshow-wrapper"},[a("div",{attrs:{id:"slideshow"}},[a("div",{staticClass:"slide"},[a("div",{staticClass:"copy"},[a("h1",{staticClass:"title"},[this._v("Formações")])])])])])}]};var c=e("VU/8")(n,r,!1,function(t){e("1309")},"data-v-2831e054",null);a.default=c.exports},nIlH:function(t,a,e){t.exports=e.p+"static/img/garca.4c3cf1f.svg"}});
//# sourceMappingURL=5.f2e31233c67d22d18594.js.map