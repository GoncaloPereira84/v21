webpackJsonp([16],{UEX4:function(t,s,e){"use strict";Object.defineProperty(s,"__esModule",{value:!0});var i=e("mtWM"),a=e.n(i),l={data:function(){return{servicos:[{id:"",code:"",title:"",text:"",url:"",order:""}]}},methods:{FadeIn:function(){var t=$(".movement, .cover"),s=$(".movement-delayed"),e=$(".lateral, .lateralR"),i=$("#svg");!function(t){t.fn.visible=function(s,e){void 0===e&&(e=0);var i=t(this),a=t(window),l=a.scrollTop(),o=l+a.height(),r=i.offset().top+e,n=r+i.height()-e;return(!0===s?r:n)<=o&&(!0===s?n:r)>=l}}(jQuery);var a=$(window),l=!0;t.each(function(t,s){(s=$(s)).visible(!0)&&s.addClass("placed")}),i.each(function(t,s){(s=$(s)).visible(!0)&&(l&&s.append("<img src='assets/img/elemento_animated.svg' alt=''></img>"),l=!1)}),e.each(function(t,s){(s=$(s)).visible(!0,100)&&s.addClass("placed")}),s.each(function(t,s){(s=$(s)).visible(!0,800)&&s.addClass("placed")}),a.scroll(function(a){t.each(function(t,s){(s=$(s)).visible(!0)&&s.addClass("placed")}),e.each(function(t,s){(s=$(s)).visible(!0,100)&&s.addClass("placed")}),s.each(function(t,s){(s=$(s)).visible(!0,800)&&s.addClass("placed")}),i.each(function(t,s){(s=$(s)).visible(!0)&&(l&&s.append("<img src='assets/img/elemento_animated.svg' alt=''></img>"),l=!1)})})}},mounted:function(){var t=Array.prototype.map,s=this;a.a.get("https://beta.anacarolinapereira.pt/db-api/getServicos.php").then(function(e){var i=e.data.split("||"),a=JSON.parse(i[2]),l=[];t.call(a,function(t){l.push({id:t.id,code:t.code,title:t.title,text:t.text,url:"/servicos"+t.link,order:t.display_order})}),s.$data.servicos=l}).then(function(){s.FadeIn()}).then(function(){var t=window.location.href.split("/"),s=t[t.length-1];if(s.includes("#")){var e=s.split("#");if("flex"==$(".servicos-mobile").css("display")){var i=$(".servicos-mobile #"+e[1])[0].offsetTop;setTimeout(function(){$("html, body").animate({scrollTop:i-100},1e3)},500)}else{i=$(".servicos #"+e[1])[0].offsetTop;setTimeout(function(){$("html, body").animate({scrollTop:i-100},1e3)},500)}}})}},o={render:function(){var t=this,s=t.$createElement,e=t._self._c||s;return e("div",{staticClass:"servicos-wrapper"},[e("div",{staticClass:"servicos"},t._l(t.servicos,function(s,i){return e("div",{key:i,staticClass:"row",class:{lateral:s.order%2==0,lateralR:s.order%2!=0},attrs:{id:s.code}},[e("div",{staticClass:"wrapper"},[e("div",{class:{right:s.order%2==0,left:s.order%2!=0}},[e("h2",{staticClass:"txt",domProps:{innerHTML:t._s(s.title)}}),t._v(" "),e("div",{staticClass:"line"})]),t._v(" "),e("div",{class:{left:s.order%2==0,right:s.order%2!=0}},[e("div",{staticClass:"copy"},[e("div",{staticClass:"text",domProps:{innerHTML:t._s(s.text)}}),t._v(" "),e("router-link",{attrs:{to:s.url}},[e("div",{staticClass:"btn blue"},[e("div",{staticClass:"txt"},[t._v("Saiba mais")])])])],1)])])])}),0),t._v(" "),e("div",{staticClass:"servicos-mobile"},t._l(t.servicos,function(s,i){return e("div",{key:i,staticClass:"row",attrs:{id:s.code}},[e("div",{staticClass:"wrapper movement"},[e("div",{staticClass:"top"},[e("div",{staticClass:"copy"},[e("div",{staticClass:"title"},[t._v(t._s(s.title))]),t._v(" "),e("div",{staticClass:"line"}),t._v(" "),e("div",{staticClass:"text",domProps:{innerHTML:t._s(s.text)}}),t._v(" "),e("router-link",{attrs:{to:s.url}},[e("div",{staticClass:"btn blue"},[e("div",{staticClass:"txt"},[t._v("Saiba mais")])])])],1)])])])}),0)])},staticRenderFns:[]};var r=e("VU/8")(l,o,!1,function(t){e("hDHx")},"data-v-bda2f5b0",null);s.default=r.exports},hDHx:function(t,s){}});
//# sourceMappingURL=16.a1ba9b4b13cf177d2a9a.js.map