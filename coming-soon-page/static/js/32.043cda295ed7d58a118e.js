webpackJsonp([32],{"FFH+":function(t,e,i){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var a=i("mtWM"),n=i.n(a),o={data:function(){return{politica:[{id:1,title:"",content:""}],termos:[{id:1,title:"",content:""}]}},mounted:function(){var t=Array.prototype.map,e=this;n.a.get("https://www.anacarolinapereira.pt/db-api/getTermosCondicoes.php").then(function(i){var a=i.data.split("||"),n=JSON.parse(a[1]),o=[],s=JSON.parse(a[2]),r=[];t.call(n,function(t){o.push({id:t.id,title:t.title,content:t.content})}),t.call(s,function(t){r.push({id:t.id,title:t.title,content:t.content})}),e.$data.termos=o,e.$data.politica=r})},metaInfo:function(){return{title:"Política de Privacidade - Ana Carolina Pereira - Clínica de Psicologia",meta:[{name:"description",content:"Consulte a Política de Privacidade e os Termos e Condições para estar a par das condições de navegação do nosso site."},{name:"robots",content:"index,follow"},{property:"og:site_name",content:"Ana Carolina Pereira"},{property:"og:type",content:"website"},{property:"og:title",content:"Política de Privacidade - Ana Carolina Pereira - Clínica de Psicologia"},{property:"og:description",content:"Consulte a Política de Privacidade e os Termos e Condições para estar a par das condições de navegação do nosso site."}]}}},s={render:function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"politica-privacidade-wrapper"},[i("h1",[t._v("Política de Privacidade")]),t._v(" "),i("div",{staticClass:"topics"},t._l(t.politica,function(e){return i("div",{key:e.id,staticClass:"topic"},[i("div",{staticClass:"title"},[t._v(t._s(e.title))]),t._v(" "),i("div",{staticClass:"content",domProps:{innerHTML:t._s(e.content)}})])}),0),t._v(" "),i("h1",[t._v("Termos e Condições")]),t._v(" "),i("div",{staticClass:"topics"},t._l(t.termos,function(e){return i("div",{key:e.id,staticClass:"topic"},[i("div",{staticClass:"title"},[t._v(t._s(e.title))]),t._v(" "),i("div",{staticClass:"content",domProps:{innerHTML:t._s(e.content)}})])}),0)])},staticRenderFns:[]};var r=i("VU/8")(o,s,!1,function(t){i("R4QY")},"data-v-1090f5f6",null);e.default=r.exports},R4QY:function(t,e){}});
//# sourceMappingURL=32.043cda295ed7d58a118e.js.map