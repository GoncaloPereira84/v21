webpackJsonp([23],{GRRq:function(t,i){},xUC7:function(t,i,a){"use strict";Object.defineProperty(i,"__esModule",{value:!0});var e=a("bhzy"),n=a.n(e),o=a("mtWM"),s=a.n(o),c={data:function(){return{img:n.a,title:"",servico:[{title:"",sigla:"",about:"",why:"",sharing:""}]}},metaInfo:function(){return{title:this.title,meta:[{name:"description",content:"Ana Carolina Pereira - Clínica de Psicologia"},{name:"robots",content:"index,follow"},{property:"og:site_name",content:"Ana Carolina Pereira"},{property:"og:type",content:"website"},{property:"og:title",content:""},{property:"og:description",content:"Ana Carolina Pereira - Clínica de Psicologia"}]}},mounted:function(){var t=this,i=$(".tab.t0"),a=$(".tab.t1"),e=$(".tab.t2");i.click(function(){$(".topic.t0").animate({opacity:"1"},500),$(".topic.t1").animate({opacity:"0"},500),$(".topic.t2").animate({opacity:"0"},500);var t=document.querySelector(".topic.t0");$(".topics").css("height",t.clientHeight)}),a.click(function(){$(".topic.t0").animate({opacity:"0"},500),$(".topic.t1").animate({opacity:"1"},500),$(".topic.t2").animate({opacity:"0"},500);var t=document.querySelector(".topic.t1");$(".topics").css("height",t.clientHeight)}),e.click(function(){$(".topic.t0").animate({opacity:"0"},500),$(".topic.t1").animate({opacity:"0"},500),$(".topic.t2").animate({opacity:"1"},500);var t=document.querySelector(".topic.t2");$(".topics").css("height",t.clientHeight)});var n=window.location.href.split("/"),o=n[n.length-1],c=Array.prototype.map;s.a.get("https://www.anacarolinapereira.pt/db-api/getServicoInfo.php").then(function(i){var a=i.data,e=[];c.call(a,function(i){i.code==o&&(e.push({title:i.title,sigla:i.sigla,about:i.about,why:i.why,sharing:i.sharing}),t.$data.title=i.title+" - Ana Carolina Pereira - Clínica de Psicologia",t.$metaInfo.meta[0].content="SEO description",t.$metaInfo.meta[4].content=i.title+" - Ana Carolina Pereira - Clínica de Psicologia",t.$metaInfo.meta[5].content="SEO description - Facebook")}),t.$data.servico=e}).then(function(){var t=document.querySelector(".topic.t0");$(".topics").css("height",t.clientHeight)})}},r={render:function(){var t=this,i=t.$createElement,a=t._self._c||i;return a("div",[t._l(t.servico,function(i){return a("div",{key:i.id,staticClass:"slideshow-wrapper",style:{"background-image":"url("+t.img+")"}},[a("div",{attrs:{id:"slideshow"}},[a("div",{staticClass:"slide"},[a("div",{staticClass:"copy"},[a("div",{staticClass:"title"},[t._v(t._s(i.title))])])])])])}),t._v(" "),t._l(t.servico,function(i){return a("div",{key:i.id,staticClass:"info-wrapper"},[a("div",{staticClass:"info"},[a("div",{staticClass:"tabs"},[a("div",{staticClass:"tab t0"},[a("div",{staticClass:"txt"},[t._v("\n            Sobre a\n            "),a("span",{staticClass:"especialidade"},[t._v(t._s(i.sigla))])])]),t._v(" "),t._m(0,!0),t._v(" "),t._m(1,!0)]),t._v(" "),a("div",{staticClass:"topics"},[a("div",{staticClass:"topic t0",domProps:{innerHTML:t._s(i.about)}}),t._v(" "),a("div",{staticClass:"topic t1",domProps:{innerHTML:t._s(i.why)}}),t._v(" "),a("div",{staticClass:"topic t2",domProps:{innerHTML:t._s(i.sharing)}})])])])})],2)},staticRenderFns:[function(){var t=this.$createElement,i=this._self._c||t;return i("div",{staticClass:"tab t1"},[i("div",{staticClass:"txt"},[this._v("Porquê?")])])},function(){var t=this.$createElement,i=this._self._c||t;return i("div",{staticClass:"tab t2"},[i("div",{staticClass:"txt"},[this._v("\n            Queríamos muito\n            "),i("br"),this._v("partilhar consigo\n          ")])])}]};var l=a("VU/8")(c,r,!1,function(t){a("GRRq")},"data-v-37756918",null);i.default=l.exports}});
//# sourceMappingURL=23.a8d27b73cdfddc34f817.js.map