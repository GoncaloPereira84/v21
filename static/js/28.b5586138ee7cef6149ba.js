webpackJsonp([28],{ZyCZ:function(t,e,i){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var s=i("MXBO"),a=i.n(s),n=i("mtWM"),c=i.n(n),l={data:function(){return{quote:a.a,isActive:!0,index:1,people:[{id:0,name:"",text:"",content:"",quote:"",pic:""}]}},methods:{clickIndicator:function(t,e){var i,s=document.querySelectorAll(".team .person"),a=document.querySelectorAll(".indicators .idc"),n=document.querySelectorAll(".right .txt .p");for(t>s.length&&(this.index=1),t<1&&(this.index=s.length),i=0;i<s.length;i++)s[i].className="person",n[i].className="p";for(i=0;i<a.length;i++)a[i].className=a[i].className.replace(" active",""),this.isActive=!1;s[this.index-1].className="person active",a[this.index-1].className+=" active",n[this.index-1].className+=" active",this.isActive=!0},prevSlides:function(t){this.clickIndicator(this.index-=t,1)},plusSlides:function(t){this.clickIndicator(this.index+=t,-1)},currentSlide:function(t){this.clickIndicator(this.index=t,-1)}},mounted:function(){var t=this,e=Array.prototype.map,i=this;c.a.get("https://beta.anacarolinapereira.pt/db-api/getAbout.php").then(function(t){var s=t.data.split("||"),a=JSON.parse(s[3]),n=[];e.call(a,function(t){var e=t.img_src.split("uploads");n.push({id:t.id,name:t.name,text:t.cargo,content:t.description,quote:t.quote,pic:"uploads"+e[1]})}),i.$data.people=n}).then(function(){t.clickIndicator(t.index,1);var e=document.querySelector(".team");document.querySelectorAll(".team .person");if(window.innerWidth<600){e.addEventListener("touchstart",function(t){var e=function(t){return t.touches||t.originalEvent.touches}(t)[0];s=e.clientX,a=e.clientY},!1),e.addEventListener("touchmove",function(t){if(s&&a){var e=t.touches[0].clientX,n=t.touches[0].clientY,c=s-e,l=a-n;document.querySelector(".team .person.active").getAttribute("data-person-id"),Math.abs(c)>Math.abs(l)&&(c>0?i.plusSlides(1):i.prevSlides(1)),s=null,a=null}},!1);var s=null,a=null}}).then(function(){var t=window.location.href.split("/"),e=t[t.length-1];if(e.includes("#")){var i=e.split("#"),s=$("#"+i[1])[0].offsetTop;setTimeout(function(){$("html, body").animate({scrollTop:s-100},1e3)},500)}})}},r={render:function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"equipa-wrapper",attrs:{id:"equipa"}},[i("div",{staticClass:"equipa"},[i("div",{staticClass:"left lateral"},[i("div",{staticClass:"person-wrapper"},[i("div",{staticClass:"team"},t._l(t.people,function(e){return i("div",{key:e.id,staticClass:"person",class:{active:t.isActive},attrs:{"data-person-id":e.id}},[i("div",{staticClass:"pic",style:{"background-image":"url("+e.pic+")"}}),t._v(" "),i("div",{staticClass:"name"},[t._v(t._s(e.name))]),t._v(" "),i("div",{staticClass:"description"},[i("i",{domProps:{innerHTML:t._s(e.text)}})])])}),0),t._v(" "),i("div",{staticClass:"indicators"},t._l(t.people,function(e){return i("div",{key:e.id,staticClass:"idc",class:{active:t.isActive},on:{click:function(i){return t.currentSlide(e.id)}}})}),0)])]),t._v(" "),i("div",{staticClass:"right lateralR"},[i("h2",{staticClass:"title main"},[t._v("A nossa equipa")]),t._v(" "),i("div",{staticClass:"line"}),t._v(" "),i("div",{staticClass:"txt"},t._l(t.people,function(e){return i("p",{key:e.id,staticClass:"p",class:{active:t.isActive},domProps:{innerHTML:t._s(e.content)}})}),0)])])])},staticRenderFns:[]};var o=i("VU/8")(l,r,!1,function(t){i("wQqd")},"data-v-5ae21fd8",null);e.default=o.exports},wQqd:function(t,e){}});
//# sourceMappingURL=28.b5586138ee7cef6149ba.js.map