webpackJsonp([26],{"XV/G":function(t,a){},kCo4:function(t,a,s){"use strict";Object.defineProperty(a,"__esModule",{value:!0});var e=s("mtWM"),i=s.n(e),n={data:function(){return{isActive:!1,showTabs:!1,topicos:[{id:1,topic:"topico 1",perguntas:[{p_id:"",pergunta:"pergunta",resposta:"resposta"}]}]}},methods:{openQuestion:function(t){var a=$('*[data-topic-id="'+t+'"]');$(".quest").css("font-weight","400"),$(".arrow").removeClass("rotate"),a.parent().find(".answer").hasClass("active")?($(".active").slideUp("slow"),$(".active").removeClass("active")):($(".active").slideUp("slow"),$(".active").removeClass("active"),a.parent().find(".answer").slideDown("slow"),a.css("font-weight","bold"),a.parent().find(".answer").addClass("active"),a.children().find(".arrow").addClass("rotate"))},goToTopic:function(t){var a=$('*[data-topico-id="'+t+'"]');a.hasClass("opened")||($("*[data-topico-id]").removeClass("opened"),a.addClass("opened"))}},mounted:function(){Array.prototype.map;var t=this;i.a.get("https://beta.anacarolinapereira.pt/db-api/getFaqs.php").then(function(a){var s=a.data.split("||"),e={};s=JSON.parse(s[2]).reduce(function(t,a){var s=a.faqs_id.slice(0,2);return e[s]||(e[s]={id:a.id,topic:a.topico,perguntas:[]},t.push(e[s])),e[s].perguntas.push({p_id:a.faq_id,pergunta:a.pergunta,resposta:a.resposta}),t},[]);t.$data.topicos=s}).then(function(){t.goToTopic(1)})}},r={render:function(){var t=this,a=t.$createElement,s=t._self._c||a;return s("div",{staticClass:"perguntas-wrapper"},[s("h1",[t._v("Perguntas Frequentes")]),t._v(" "),s("div",{staticClass:"perguntas"},[s("div",{staticClass:"right"},t._l(t.topicos,function(a,e){return s("div",{key:a.id,staticClass:"topic-wrapper",attrs:{"data-topico-id":a.id}},[s("div",{staticClass:"content"},t._l(t.topicos[e].perguntas,function(a){return s("div",{key:a.p_id,staticClass:"question"},[s("div",{staticClass:"quest",attrs:{"data-topic-id":a.p_id},on:{click:function(s){return t.openQuestion(a.p_id)}}},[s("div",{staticClass:"text"},[t._v(t._s(a.pergunta))]),t._v(" "),s("div",{staticClass:"icon"},[s("svg",{staticClass:"arrow",attrs:{xmlns:"http://www.w3.org/2000/svg","xmlns:xlink":"http://www.w3.org/1999/xlink",viewBox:"0 0 4.743 7.308"}},[s("defs",[s("clipPath",{attrs:{id:"a"}},[s("rect",{attrs:{width:"4.743",height:"7.308",fill:"none"}})])]),t._v(" "),s("g",{attrs:{"clip-path":"url(#a)"}},[s("path",{attrs:{d:"M3.654,4.743,0,1.088,1.088,0,3.654,2.566,6.22,0,7.308,1.088Z",transform:"translate(0 7.308) rotate(-90)",fill:"#707070"}})])])])]),t._v(" "),s("div",{staticClass:"answer"},[s("div",{staticClass:"text",domProps:{innerHTML:t._s(a.resposta)}})])])}),0)])}),0)])])},staticRenderFns:[]};var o=s("VU/8")(n,r,!1,function(t){s("XV/G")},"data-v-3c9c93da",null);a.default=o.exports}});
//# sourceMappingURL=26.d394e5da261a931d4354.js.map