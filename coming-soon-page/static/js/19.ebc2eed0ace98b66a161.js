webpackJsonp([19],{"4F48":function(t,i){},xUC7:function(t,i,e){"use strict";Object.defineProperty(i,"__esModule",{value:!0});var n=e("bhzy"),a=e.n(n),o=e("mtWM"),s=e.n(o),c={data:function(){return{img:a.a,title:"",servico:[{title:"",sigla:"",about:"",why:"",sharing:""}]}},metaInfo:function(){return{title:this.title,meta:[{name:"description",content:"Ana Carolina Pereira - Clínica de Psicologia"},{name:"robots",content:"index,follow"},{property:"og:site_name",content:"Ana Carolina Pereira"},{property:"og:type",content:"website"},{property:"og:title",content:""},{property:"og:description",content:"Ana Carolina Pereira - Clínica de Psicologia"}]}},mounted:function(){var t=this,i=$(".tab.t0"),e=$(".tab.t1"),n=$(".tab.t2");$(".topic.t0").css("pointer-events","all"),$(".topic.t1").css("pointer-events","none"),$(".topic.t2").css("pointer-events","none"),i.click(function(){$(".topic.t0").animate({opacity:"1"},500),$(".topic.t1").animate({opacity:"0"},500),$(".topic.t2").animate({opacity:"0"},500),$(".topic.t0").css("pointer-events","all"),$(".topic.t1").css("pointer-events","none"),$(".topic.t2").css("pointer-events","none");var t=document.querySelector(".topic.t0");$(".topics").css("height",t.clientHeight)}),e.click(function(){$(".topic.t0").animate({opacity:"0"},500),$(".topic.t1").animate({opacity:"1"},500),$(".topic.t2").animate({opacity:"0"},500),$(".topic.t0").css("pointer-events","none"),$(".topic.t1").css("pointer-events","all"),$(".topic.t2").css("pointer-events","none");var t=document.querySelector(".topic.t1");$(".topics").css("height",t.clientHeight)}),n.click(function(){$(".topic.t0").animate({opacity:"0"},500),$(".topic.t1").animate({opacity:"0"},500),$(".topic.t2").animate({opacity:"1"},500),$(".topic.t0").css("pointer-events","none"),$(".topic.t1").css("pointer-events","none"),$(".topic.t2").css("pointer-events","all");var t=document.querySelector(".topic.t2");$(".topics").css("height",t.clientHeight)});var a=window.location.href.split("/"),o=a[a.length-1],c=Array.prototype.map;s.a.get("https://beta.anacarolinapereira.pt/db-api/getServicoInfo.php").then(function(i){var e=i.data,n=[];c.call(e,function(i){i.code==o&&(n.push({title:i.title,sigla:i.sigla,about:i.about,why:i.why,sharing:i.sharing}),t.$data.title=i.title+" - Ana Carolina Pereira - Clínica de Psicologia",t.$metaInfo.meta[0].content="SEO description",t.$metaInfo.meta[4].content=i.title+" - Ana Carolina Pereira - Clínica de Psicologia",t.$metaInfo.meta[5].content="SEO description - Facebook")}),t.$data.servico=n}).then(function(){var t=document.querySelector(".topic.t0");$(".topics").css("height",t.clientHeight)})}},r={render:function(){var t=this,i=t.$createElement,e=t._self._c||i;return e("div",[t._l(t.servico,function(i){return e("div",{key:i.id,staticClass:"slideshow-wrapper"},[e("div",{attrs:{id:"slideshow"}},[e("div",{staticClass:"slide"},[e("div",{staticClass:"copy"},[e("div",{staticClass:"title"},[t._v(t._s(i.title))])])])])])}),t._v(" "),t._l(t.servico,function(i){return e("div",{key:i.id,staticClass:"info-wrapper"},[e("div",{staticClass:"info"},[e("div",{staticClass:"tabs"},[e("div",{staticClass:"tab t0"},[e("div",{staticClass:"txt"},[t._v("\n            Sobre a\n            "),e("span",{staticClass:"especialidade"},[t._v(t._s(i.sigla))])])]),t._v(" "),t._m(0,!0),t._v(" "),t._m(1,!0)]),t._v(" "),e("div",{staticClass:"topics"},[e("div",{staticClass:"topic t0",domProps:{innerHTML:t._s(i.about)}}),t._v(" "),e("div",{staticClass:"topic t1",domProps:{innerHTML:t._s(i.why)}}),t._v(" "),e("div",{staticClass:"topic t2",domProps:{innerHTML:t._s(i.sharing)}})])])])})],2)},staticRenderFns:[function(){var t=this.$createElement,i=this._self._c||t;return i("div",{staticClass:"tab t1"},[i("div",{staticClass:"txt"},[this._v("Porquê?")])])},function(){var t=this.$createElement,i=this._self._c||t;return i("div",{staticClass:"tab t2"},[i("div",{staticClass:"txt"},[this._v("\n            Queríamos muito\n            "),i("br"),this._v("partilhar consigo\n          ")])])}]};var p=e("VU/8")(c,r,!1,function(t){e("4F48")},"data-v-b8ce3296",null);i.default=p.exports}});
//# sourceMappingURL=19.ebc2eed0ace98b66a161.js.map