webpackJsonp([21],{"c/FM":function(t,a,i){"use strict";Object.defineProperty(a,"__esModule",{value:!0});var e=i("bhzy"),o=i.n(e),n=i("mtWM"),c=i.n(n),s={data:function(){return{img:o.a,title:"",formacao:[{title:"",about:"",why:""}]}},metaInfo:function(){return{title:this.title,meta:[{name:"description",content:"Ana Carolina Pereira - Clínica de Psicologia"},{name:"robots",content:"index,follow"},{property:"og:site_name",content:"Ana Carolina Pereira"},{property:"og:type",content:"website"},{property:"og:title",content:""},{property:"og:description",content:"Ana Carolina Pereira - Clínica de Psicologia"}]}},mounted:function(){var t=this,a=(document.querySelector(".topic.t0"),document.querySelector(".topic.t1"),document.querySelector(".topic.t2"),$(".tab.t0")),i=$(".tab.t1"),e=$(".tab.t2");a.click(function(){$(".topic.t0").animate({opacity:"1"},500),$(".topic.t1").animate({opacity:"0"},500),$(".topic.t2").animate({opacity:"0"},500)}),i.click(function(){$(".topic.t0").animate({opacity:"0"},500),$(".topic.t1").animate({opacity:"1"},500),$(".topic.t2").animate({opacity:"0"},500)}),e.click(function(){$(".topic.t0").animate({opacity:"0"},500),$(".topic.t1").animate({opacity:"0"},500),$(".topic.t2").animate({opacity:"1"},500)});var o=window.location.href.split("/"),n=o[o.length-1],s=Array.prototype.map;c.a.get("https://www.anacarolinapereira.pt/db-api/getFormacaoInfo.php").then(function(a){var i=a.data,e=[];s.call(i,function(a){a.code==n&&(e.push({title:a.title,about:a.about,why:a.why}),t.$data.title=a.title+" - Ana Carolina Pereira - Clínica de Psicologia",t.$metaInfo.meta[0].content="SEO description",t.$metaInfo.meta[4].content=a.title+" - Ana Carolina Pereira - Clínica de Psicologia",t.$metaInfo.meta[5].content="SEO description - Facebook")}),t.$data.formacao=e})}},r={render:function(){var t=this,a=t.$createElement,i=t._self._c||a;return i("div",t._l(t.formacao,function(a){return i("div",{key:a.id,staticClass:"info-wrapper"},[i("h1",{staticClass:"formacao-title"},[t._v(t._s(a.title))]),t._v(" "),i("div",{staticClass:"info"},[t._m(0,!0),t._v(" "),i("div",{staticClass:"topics"},[i("div",{staticClass:"topic t0",domProps:{innerHTML:t._s(a.about)}}),t._v(" "),i("div",{staticClass:"topic t1",domProps:{innerHTML:t._s(a.why)}}),t._v(" "),t._m(1,!0)])])])}),0)},staticRenderFns:[function(){var t=this.$createElement,a=this._self._c||t;return a("div",{staticClass:"tabs"},[a("div",{staticClass:"tab t0"},[a("div",{staticClass:"txt"},[this._v("\n            Sobre a\n            "),a("span",{staticClass:"formacao"},[this._v("formação")])])]),this._v(" "),a("div",{staticClass:"tab t1"},[a("div",{staticClass:"txt"},[this._v("Porquê?")])]),this._v(" "),a("div",{staticClass:"tab t2"},[a("div",{staticClass:"txt"},[this._v("Inscrições")])])])},function(){var t=this,a=t.$createElement,i=t._self._c||a;return i("div",{staticClass:"topic t2"},[i("div",{staticClass:"input"},[i("div",{staticClass:"form-controller"},[i("label",{attrs:{for:"name"}},[t._v("Nome completo*")]),t._v(" "),i("input",{attrs:{id:"name",type:"text"}})])]),t._v(" "),i("div",{staticClass:"input"},[i("div",{staticClass:"form-controller"},[i("label",{attrs:{for:"email"}},[t._v("E-mail*")]),t._v(" "),i("input",{attrs:{id:"email",type:"text"}})])]),t._v(" "),i("div",{staticClass:"input"},[i("div",{staticClass:"form-controller"},[i("label",{attrs:{for:"dob"}},[t._v("Data de nascimento*")]),t._v(" "),i("input",{attrs:{id:"dob",type:"text"}})])]),t._v(" "),i("div",{staticClass:"input"},[i("div",{staticClass:"form-controller"},[i("label",{attrs:{for:"city"}},[t._v("Localidade*")]),t._v(" "),i("input",{attrs:{id:"city",type:"text"}})])])])}]};var l=i("VU/8")(s,r,!1,function(t){i("d6sz")},"data-v-3d7f80e8",null);a.default=l.exports},d6sz:function(t,a){}});
//# sourceMappingURL=21.4eb4fc057c2b4f5d4be8.js.map