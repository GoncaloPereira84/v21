webpackJsonp([27],{pFzN:function(t,a){},t39n:function(t,a,e){"use strict";Object.defineProperty(a,"__esModule",{value:!0});var i=e("mtWM"),s=e.n(i),n={data:function(){return{text1:"",text2:"",quote:""}},methods:{FadeIn:function(){var t=$(".movement, .cover"),a=$(".movement-delayed"),e=$(".lateral, .lateralR"),i=$("#svg");!function(t){t.fn.visible=function(a,e){void 0===e&&(e=0);var i=t(this),s=t(window),n=s.scrollTop(),c=n+s.height(),o=i.offset().top+e,l=o+i.height()-e;return(!0===a?o:l)<=c&&(!0===a?l:o)>=n}}(jQuery);var s=$(window),n=!0;t.each(function(t,a){(a=$(a)).visible(!0)&&a.addClass("placed")}),i.each(function(t,a){(a=$(a)).visible(!0)&&(n&&a.append("<img src='assets/img/elemento_animated.svg' alt=''></img>"),n=!1)}),e.each(function(t,a){(a=$(a)).visible(!0,100)&&a.addClass("placed")}),a.each(function(t,a){(a=$(a)).visible(!0,800)&&a.addClass("placed")}),s.scroll(function(s){t.each(function(t,a){(a=$(a)).visible(!0)&&a.addClass("placed")}),e.each(function(t,a){(a=$(a)).visible(!0,100)&&a.addClass("placed")}),a.each(function(t,a){(a=$(a)).visible(!0,800)&&a.addClass("placed")}),i.each(function(t,a){(a=$(a)).visible(!0)&&(n&&a.append("<img src='assets/img/elemento_animated.svg' alt=''></img>"),n=!1)})})}},mounted:function(){Array.prototype.map;var t=this;s.a.get("https://www.anacarolinapereira.pt/db-api/getAbout.php").then(function(a){var e=a.data.split("||"),i=JSON.parse(e[1]);t.text1=i[0].text,t.text2=i[0].text2,t.quote=i[0].quote}).then(function(){t.FadeIn()})}},c={render:function(){var t=this,a=t.$createElement,e=t._self._c||a;return e("div",{staticClass:"historia-wrapper"},[e("div",{staticClass:"historia movement"},[e("div",{staticClass:"copy"},[e("h2",{staticClass:"title"},[t._v("A nossa história")]),t._v(" "),e("div",{staticClass:"container"},[e("div",{staticClass:"p"},[e("div",{staticClass:"paragraph",domProps:{innerHTML:t._s(t.text1)}}),t._v(" "),e("div",{staticClass:"line"})]),t._v(" "),e("div",{staticClass:"paragraph",domProps:{innerHTML:t._s(t.text2)}})])])])])},staticRenderFns:[]};var o=e("VU/8")(n,c,!1,function(t){e("pFzN")},"data-v-54c090b1",null);a.default=o.exports}});
//# sourceMappingURL=27.3cf80417fd81e0999f64.js.map