webpackJsonp([14],{RxTA:function(t,a){},VkPQ:function(t,a,e){"use strict";Object.defineProperty(a,"__esModule",{value:!0});var i=e("mtWM"),s=e.n(i),l={data:function(){return{formacoes:[{id:"",code:"",title:"",text:"",url:""}]}},methods:{FadeIn:function(){var t=$(".movement, .cover"),a=$(".movement-delayed"),e=$(".lateral, .lateralR"),i=$("#svg");!function(t){t.fn.visible=function(a,e){void 0===e&&(e=0);var i=t(this),s=t(window),l=s.scrollTop(),o=l+s.height(),n=i.offset().top+e,c=n+i.height()-e;return(!0===a?n:c)<=o&&(!0===a?c:n)>=l}}(jQuery);var s=$(window),l=!0;t.each(function(t,a){(a=$(a)).visible(!0)&&a.addClass("placed")}),i.each(function(t,a){(a=$(a)).visible(!0)&&(l&&a.append("<img src='assets/img/elemento_animated.svg' alt=''></img>"),l=!1)}),e.each(function(t,a){(a=$(a)).visible(!0,100)&&a.addClass("placed")}),a.each(function(t,a){(a=$(a)).visible(!0,800)&&a.addClass("placed")}),s.scroll(function(s){t.each(function(t,a){(a=$(a)).visible(!0)&&a.addClass("placed")}),e.each(function(t,a){(a=$(a)).visible(!0,100)&&a.addClass("placed")}),a.each(function(t,a){(a=$(a)).visible(!0,800)&&a.addClass("placed")}),i.each(function(t,a){(a=$(a)).visible(!0)&&(l&&a.append("<img src='assets/img/elemento_animated.svg' alt=''></img>"),l=!1)})})}},mounted:function(){var t=Array.prototype.map,a=this;s.a.get("https://www.anacarolinapereira.pt/db-api/getFormacoes.php").then(function(e){var i=e.data.split("||"),s=JSON.parse(i[2]),l=[];t.call(s,function(t){l.push({id:t.id,code:t.code,title:t.title,text:t.text,url:t.link})}),a.$data.formacoes=l}).then(function(){a.FadeIn()}).then(function(){var t=window.location.href.split("/"),a=t[t.length-1];if(a.includes("#")){var e=a.split("#");if("flex"==$(".formacoes-mobile").css("display")){var i=$(".formacoes-mobile #"+e[1])[0].offsetTop;setTimeout(function(){$("html, body").animate({scrollTop:i-100},1e3)},500)}else{i=$(".formacoes #"+e[1])[0].offsetTop;setTimeout(function(){$("html, body").animate({scrollTop:i-100},1e3)},500)}}})}},o={render:function(){var t=this,a=t.$createElement,e=t._self._c||a;return e("div",{staticClass:"formacoes-wrapper"},[e("div",{staticClass:"formacoes"},t._l(t.formacoes,function(a,i){return e("div",{key:i,staticClass:"row",class:{lateral:a.id%2==0,lateralR:a.id%2!=0},attrs:{id:a.code}},[e("div",{staticClass:"wrapper"},[e("div",{class:{right:a.id%2==0,left:a.id%2!=0}},[e("div",{staticClass:"txt",domProps:{innerHTML:t._s(a.title)}}),t._v(" "),e("div",{staticClass:"line"})]),t._v(" "),e("div",{class:{left:a.id%2==0,right:a.id%2!=0}},[e("div",{staticClass:"copy"},[e("div",{staticClass:"text",domProps:{innerHTML:t._s(a.text)}}),t._v(" "),e("router-link",{attrs:{to:a.url}},[e("div",{staticClass:"btn blue"},[e("div",{staticClass:"txt"},[t._v("Saiba mais")])])])],1)])])])}),0),t._v(" "),e("div",{staticClass:"formacoes-mobile"},t._l(t.formacoes,function(a,i){return e("div",{key:i,staticClass:"row",attrs:{id:a.code}},[e("div",{staticClass:"wrapper movement"},[e("div",{staticClass:"top"},[e("div",{staticClass:"copy"},[e("div",{staticClass:"title"},[t._v(t._s(a.title))]),t._v(" "),e("div",{staticClass:"line"}),t._v(" "),e("div",{staticClass:"text",domProps:{innerHTML:t._s(a.text)}}),t._v(" "),e("router-link",{attrs:{to:a.url}},[e("div",{staticClass:"btn blue"},[e("div",{staticClass:"txt"},[t._v("Saiba mais")])])])],1)])])])}),0)])},staticRenderFns:[]};var n=e("VU/8")(l,o,!1,function(t){e("RxTA")},"data-v-6956eb88",null);a.default=n.exports}});
//# sourceMappingURL=14.b669357dace17491f519.js.map