webpackJsonp([9],{Ac3d:function(t,e,i){t.exports=i.p+"static/img/chair.ceaa50c.svg"},Rxx7:function(t,e,i){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var a=i("mtWM"),s=i.n(a),n=(i("Ac3d"),i("KLWT")),l=i("01bk"),d=i("gOI3"),r=i("SupS"),o=i("KzHo"),c={components:{ImgBase:n.default,ImgChair:l.default,ImgChildren:d.default,ImgMoon:r.default,ImgFrame:o.default},data:function(){return{slideIndex:1,slides:[{id:"",title:"",text:"",btn_txt:"",file:"",url:""}]}},methods:{bannerAnimate:function(){$("#slideshow-home > div:gt(0)").hide();this.drawLines(),setInterval(function(){$("#slideshow-home > div:first").fadeOut(0).next().fadeIn(0).end().appendTo("#slideshow-home")},7e3)},drawLines:function(){$(".nodules").addClass("start"),$(".main-path").addClass("start"),$(".main-path-fill").addClass("start")},deleteLines:function(){$(".nodules").removeClass("start"),$(".main-path").removeClass("start"),$(".main-path-fill").removeClass("start")}},mounted:function(){var t=Array.prototype.map,e=this;e.deleteLines(),s.a.get("https://beta.anacarolinapereira.pt/db-api/getSlideshow.php").then(function(i){var a=i.data,s=[];t.call(a,function(t){s.push({id:t.id,title:t.title,text:t.text,btn_txt:t.cta_txt,file:t.img,url:t.link})}),e.$data.slides=s}).then(function(){setTimeout(function(){$("#slideshow-home").css("opacity",1),e.bannerAnimate()},1e3)})}},m={render:function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"slideshow-wrapper"},[i("div",{attrs:{id:"slideshow-home"}},t._l(t.slides,function(e){return i("div",{key:e.id,staticClass:"slide",class:{blue:e.id%2==0}},[i("div",{staticClass:"svg-container"},["chair"==e.file?i("img-base",{attrs:{"img-name":"chair",viewBox:"0 0 330 340"}},[i("img-chair")],1):t._e(),t._v(" "),"children"==e.file?i("img-base",{attrs:{"img-name":"children",viewBox:"0 0 410 340"}},[i("img-children")],1):t._e(),t._v(" "),"moon"==e.file?i("img-base",{attrs:{"img-name":"moon",viewBox:"0 0 510 340"}},[i("img-moon")],1):t._e(),t._v(" "),"frame"==e.file?i("img-base",{attrs:{"img-name":"frame",viewBox:"0 0 620 340"}},[i("img-frame")],1):t._e()],1),t._v(" "),i("div",{staticClass:"copy",class:{blue:e.id%2==0}},[i("div",{staticClass:"title",class:{white:e.id%2==0}},[t._v(t._s(e.title))]),t._v(" "),i("div",{staticClass:"line"}),t._v(" "),i("div",{staticClass:"text",class:{white:e.id%2==0},domProps:{innerHTML:t._s(e.text)}}),t._v(" "),i("div",{staticClass:"btn white"},[i("div",{staticClass:"txt"},[t._v(t._s(e.btn_txt))])])])])}),0)])},staticRenderFns:[]};var u=i("VU/8")(c,m,!1,function(t){i("jNjM")},"data-v-2feac6e4",null);e.default=u.exports},jNjM:function(t,e){}});
//# sourceMappingURL=9.e955c1e7e0430309e9ee.js.map