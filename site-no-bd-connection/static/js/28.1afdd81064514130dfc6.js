webpackJsonp([28],{AoXN:function(t,e){},J4iq:function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var i=a("mtWM"),s=a.n(i),n={data:function(){return{servicos:[{id:"",title:"",subtext:"",text:""}]}},methods:{FadeIn:function(){var t=$(".movement, .cover"),e=$(".movement-delayed"),a=$(".lateral, .lateralR"),i=$("#svg");!function(t){t.fn.visible=function(e,a){void 0===a&&(a=0);var i=t(this),s=t(window),n=s.scrollTop(),c=n+s.height(),l=i.offset().top+a,d=l+i.height()-a;return(!0===e?l:d)<=c&&(!0===e?d:l)>=n}}(jQuery);var s=$(window),n=!0;t.each(function(t,e){(e=$(e)).visible(!0)&&e.addClass("placed")}),i.each(function(t,e){(e=$(e)).visible(!0)&&(n&&e.append("<img src='assets/img/elemento_animated.svg' alt=''></img>"),n=!1)}),a.each(function(t,e){(e=$(e)).visible(!0,100)&&e.addClass("placed")}),e.each(function(t,e){(e=$(e)).visible(!0,800)&&e.addClass("placed")}),s.scroll(function(s){t.each(function(t,e){(e=$(e)).visible(!0)&&e.addClass("placed")}),a.each(function(t,e){(e=$(e)).visible(!0,100)&&e.addClass("placed")}),e.each(function(t,e){(e=$(e)).visible(!0,800)&&e.addClass("placed")}),i.each(function(t,e){(e=$(e)).visible(!0)&&(n&&e.append("<img src='assets/img/elemento_animated.svg' alt=''></img>"),n=!1)})})}},mounted:function(){var t=this,e=Array.prototype.map,a=this;s.a.get("https://beta.anacarolinapereira.pt/db-api/getAbout.php").then(function(t){var i=t.data.split("||"),s=JSON.parse(i[2]),n=[];e.call(s,function(t){n.push({id:t.id,title:t.title,subtext:t.subtext,text:t.text})}),a.$data.servicos=n}).then(function(){t.FadeIn()})}},c={render:function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"servicos-wrapper"},[a("div",{staticClass:"cards-wrapper"},t._l(t.servicos,function(e){return a("div",{key:e.id,staticClass:"card movement"},[a("h3",{staticClass:"card-title"},[t._v(t._s(e.title))]),t._v(" "),a("div",{staticClass:"card-copy"},[a("span",{domProps:{innerHTML:t._s(e.text)}})])])}),0)])},staticRenderFns:[]};var l=a("VU/8")(n,c,!1,function(t){a("AoXN")},"data-v-73937d8e",null);e.default=l.exports}});
//# sourceMappingURL=28.1afdd81064514130dfc6.js.map