webpackJsonp([23],{"79pf":function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var i=a("35yB"),s=a.n(i),n=a("mtWM"),l=a.n(n),c={data:function(){return{icon:s.a,title:"",text:"",formacoes:[{id:"",title:"",text:"",url:""}]}},methods:{FadeIn:function(){var t=$(".movement, .cover"),e=$(".movement-delayed"),a=$(".lateral, .lateralR"),i=$("#svg");!function(t){t.fn.visible=function(e,a){void 0===a&&(a=0);var i=t(this),s=t(window),n=s.scrollTop(),l=n+s.height(),c=i.offset().top+a,o=c+i.height()-a;return(!0===e?c:o)<=l&&(!0===e?o:c)>=n}}(jQuery);var s=$(window),n=!0;t.each(function(t,e){(e=$(e)).visible(!0)&&e.addClass("placed")}),i.each(function(t,e){(e=$(e)).visible(!0)&&(n&&e.append("<img src='assets/img/elemento_animated.svg' alt=''></img>"),n=!1)}),a.each(function(t,e){(e=$(e)).visible(!0,100)&&e.addClass("placed")}),e.each(function(t,e){(e=$(e)).visible(!0,800)&&e.addClass("placed")}),s.scroll(function(s){t.each(function(t,e){(e=$(e)).visible(!0)&&e.addClass("placed")}),a.each(function(t,e){(e=$(e)).visible(!0,100)&&e.addClass("placed")}),e.each(function(t,e){(e=$(e)).visible(!0,800)&&e.addClass("placed")}),i.each(function(t,e){(e=$(e)).visible(!0)&&(n&&e.append("<img src='assets/img/elemento_animated.svg' alt=''></img>"),n=!1)})})}},mounted:function(){var t=Array.prototype.map,e=this;l.a.get("https://www.anacarolinapereira.pt/db-api/getFormacoesHomepage.php").then(function(a){var i=a.data.split("||"),s=JSON.parse(i[1]),n=JSON.parse(i[2]),l=[];e.title=s[0].title,e.text=s[0].text,t.call(n,function(t){l.push({id:t.id,title:t.title,text:t.text,url:t.link})}),e.$data.formacoes=l}).then(function(){e.FadeIn()})}},o={render:function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"formacoes-wrapper"},[a("div",{attrs:{id:"formacoes"}},[a("div",{staticClass:"copy-content"},[a("div",{staticClass:"title main movement"},[t._v(t._s(t.title))]),t._v(" "),a("div",{staticClass:"line movement"}),t._v(" "),a("div",{staticClass:"copy movement",domProps:{innerHTML:t._s(t.text)}})]),t._v(" "),a("div",{staticClass:"cards-wrapper"},t._l(t.formacoes,function(e){return a("div",{key:e.id,staticClass:"card movement"},[a("div",{staticClass:"card-title"},[t._v(t._s(e.title))]),t._v(" "),a("div",{staticClass:"card-copy"},[a("i",{domProps:{innerHTML:t._s(e.text)}})]),t._v(" "),a("div",{staticClass:"cta"},[a("div",{staticClass:"txt"},[t._v("saiba mais")]),t._v(" "),a("svg",{attrs:{xmlns:"http://www.w3.org/2000/svg","xmlns:xlink":"http://www.w3.org/1999/xlink",viewBox:"0 0 16 16"}},[a("path",{staticClass:"arrow",attrs:{d:"M8,0,6.545,1.455l5.506,5.506H0V9.039H12.052L6.545,14.545,8,16l8-8Z"}})])])])}),0)])])},staticRenderFns:[]};var r=a("VU/8")(c,o,!1,function(t){a("vjl1")},"data-v-3cf784ae",null);e.default=r.exports},vjl1:function(t,e){}});
//# sourceMappingURL=23.e028242d38521f7f5239.js.map