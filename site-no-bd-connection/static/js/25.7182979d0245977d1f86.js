webpackJsonp([25],{IzVp:function(t,i){},xUC7:function(t,i,e){"use strict";Object.defineProperty(i,"__esModule",{value:!0});var a=e("mtWM"),n=e.n(a),s=e("eNWK"),o=e.n(s),c={data:function(){return{FadeIn:o.a,title:"",servico:[{title:"",sigla:"",about:"",why:"",sharing:""}]}},metaInfo:function(){return{title:this.title,meta:[{name:"description",content:""},{property:"og:title",content:""},{property:"og:title",content:""},{property:"og:description",content:""}]}},mounted:function(){var t=this,i=$(".tab.t0"),e=$(".tab.t1"),a=$(".tab.t2");$(".topic.t0").css("pointer-events","all"),$(".topic.t1").css("pointer-events","none"),$(".topic.t2").css("pointer-events","none"),i.click(function(){$(".topic.t0").animate({opacity:"1"},0),$(".topic.t1").animate({opacity:"0"},0),$(".topic.t2").animate({opacity:"0"},0),$(".topic.t0").css("pointer-events","all"),$(".topic.t1").css("pointer-events","none"),$(".topic.t2").css("pointer-events","none");var t=document.querySelector(".topic.t0");$(".topics").css("height",t.clientHeight)}),e.click(function(){$(".topic.t0").animate({opacity:"0"},0),$(".topic.t1").animate({opacity:"1"},0),$(".topic.t2").animate({opacity:"0"},0),$(".topic.t0").css("pointer-events","none"),$(".topic.t1").css("pointer-events","all"),$(".topic.t2").css("pointer-events","none");var t=document.querySelector(".topic.t1");$(".topics").css("height",t.clientHeight)}),a.click(function(){$(".topic.t0").animate({opacity:"0"},0),$(".topic.t1").animate({opacity:"0"},0),$(".topic.t2").animate({opacity:"1"},0),$(".topic.t0").css("pointer-events","none"),$(".topic.t1").css("pointer-events","none"),$(".topic.t2").css("pointer-events","all");var t=document.querySelector(".topic.t2");$(".topics").css("height",t.clientHeight)});var s=window.location.href.split("/"),o=s[s.length-1],c=Array.prototype.map;n.a.get("https://beta.anacarolinapereira.pt/db-api/getServicoInfo.php").then(function(i){var e=i.data,a=[];c.call(e,function(i){if(i.url_code==o){a.push({title:i.title,sigla:i.sigla,about:i.about,why:i.why,sharing:i.sharing});var e=i.about.replace(/(<([^>]+)>)/gi,"").substring(0,255);t.$data.title=i.title+" - Ana Carolina Pereira - Clínica de Psicologia",t.$metaInfo.meta[0].content=e+"...",t.$metaInfo.meta[1].content=i.title+" - Ana Carolina Pereira - Clínica de Psicologia",t.$metaInfo.meta[2].content="https://www.anacarolinapereira.pt/academia/formacao/"+i.url_code,t.$metaInfo.meta[3].content=e+"..."}}),t.$data.servico=a}).then(function(){var t=document.querySelector(".topic.t0");$(".topics").css("height",t.clientHeight)})}},r={render:function(){var t=this,i=t.$createElement,e=t._self._c||i;return e("div",[t._l(t.servico,function(i){return e("div",{key:i.id,staticClass:"slideshow-wrapper"},[e("div",{attrs:{id:"slideshow"}},[e("div",{staticClass:"slide"},[e("div",{staticClass:"copy"},[e("div",{staticClass:"title"},[t._v(t._s(i.title))])])])])])}),t._v(" "),t._l(t.servico,function(i){return e("div",{key:i.id,staticClass:"info-wrapper"},[e("div",{staticClass:"info"},[e("div",{staticClass:"tabs"},[e("div",{staticClass:"tab t0"},[e("div",{staticClass:"txt"},[t._v("\n            Sobre a\n            "),e("span",{staticClass:"especialidade"},[t._v(t._s(i.sigla))])])]),t._v(" "),t._m(0,!0),t._v(" "),t._m(1,!0)]),t._v(" "),e("div",{staticClass:"topics"},[e("div",{staticClass:"topic t0",domProps:{innerHTML:t._s(i.about)}}),t._v(" "),e("div",{staticClass:"topic t1",domProps:{innerHTML:t._s(i.why)}}),t._v(" "),e("div",{staticClass:"topic t2",domProps:{innerHTML:t._s(i.sharing)}})])])])})],2)},staticRenderFns:[function(){var t=this.$createElement,i=this._self._c||t;return i("div",{staticClass:"tab t1"},[i("div",{staticClass:"txt"},[this._v("Porquê?")])])},function(){var t=this.$createElement,i=this._self._c||t;return i("div",{staticClass:"tab t2"},[i("div",{staticClass:"txt"},[this._v("\n            Queríamos muito\n            "),i("br"),this._v("partilhar consigo\n          ")])])}]};var p=e("VU/8")(c,r,!1,function(t){e("IzVp")},"data-v-4d4adc70",null);i.default=p.exports}});
//# sourceMappingURL=25.7182979d0245977d1f86.js.map