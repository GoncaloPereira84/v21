webpackJsonp([1,6,9,11,14,16,21,26,28,35],{"79pf":function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var s=a("mtWM"),i=a.n(s),n={data:function(){return{title:"",text:"",formacoes:[{id:"",title:"",text:"",url:""}]}},methods:{FadeIn:function(){var t=$(".movement, .cover"),e=$(".movement-delayed"),a=$(".lateral, .lateralR"),s=$("#svg");!function(t){t.fn.visible=function(e,a){void 0===a&&(a=0);var s=t(this),i=t(window),n=i.scrollTop(),c=n+i.height(),o=s.offset().top+a,l=o+s.height()-a;return(!0===e?o:l)<=c&&(!0===e?l:o)>=n}}(jQuery);var i=$(window),n=!0;t.each(function(t,e){(e=$(e)).visible(!0)&&e.addClass("placed")}),s.each(function(t,e){(e=$(e)).visible(!0)&&(n&&e.append("<img src='assets/img/elemento_animated.svg' alt=''></img>"),n=!1)}),a.each(function(t,e){(e=$(e)).visible(!0,100)&&e.addClass("placed")}),e.each(function(t,e){(e=$(e)).visible(!0,800)&&e.addClass("placed")}),i.scroll(function(i){t.each(function(t,e){(e=$(e)).visible(!0)&&e.addClass("placed")}),a.each(function(t,e){(e=$(e)).visible(!0,100)&&e.addClass("placed")}),e.each(function(t,e){(e=$(e)).visible(!0,800)&&e.addClass("placed")}),s.each(function(t,e){(e=$(e)).visible(!0)&&(n&&e.append("<img src='assets/img/elemento_animated.svg' alt=''></img>"),n=!1)})})}},mounted:function(){var t=Array.prototype.map,e=this;i.a.get("https://beta.anacarolinapereira.pt/db-api/getFormacoesHomepage.php").then(function(a){var s=a.data.split("||"),i=JSON.parse(s[1]),n=JSON.parse(s[2]),c=[];e.title=i[0].title,e.text=i[0].text,t.call(n,function(t){c.push({id:t.id,title:t.title,text:t.text,url:t.link})}),e.$data.formacoes=c}).then(function(){e.FadeIn()})}},c={render:function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"formacoes-wrapper"},[a("div",{attrs:{id:"formacoes"}},[a("div",{staticClass:"copy-content"},[a("h1",{staticClass:"title main movement"},[t._v(t._s(t.title))]),t._v(" "),a("div",{staticClass:"line movement"}),t._v(" "),a("div",{staticClass:"copy movement",domProps:{innerHTML:t._s(t.text)}})]),t._v(" "),a("div",{staticClass:"cards-wrapper"},t._l(t.formacoes,function(e){return a("div",{key:e.id,staticClass:"card movement"},[a("div",{staticClass:"card-title"},[t._v(t._s(e.title))]),t._v(" "),a("div",{staticClass:"card-copy"},[a("i",{domProps:{innerHTML:t._s(e.text)}})]),t._v(" "),a("router-link",{attrs:{to:e.url}},[a("div",{staticClass:"cta"},[a("div",{staticClass:"txt"},[t._v("saiba mais")]),t._v(" "),a("div",{staticClass:"arrow-cont"},[a("i",{staticClass:"arrow right"})])])])],1)}),0)])])},staticRenderFns:[]};var o=a("VU/8")(n,c,!1,function(t){a("CpL4")},"data-v-683e6b81",null);e.default=o.exports},A2Z5:function(t,e){t.exports="data:image/svg+xml;base64,PHN2ZyBpZD0iR3J1cG9fMzQxIiBkYXRhLW5hbWU9IkdydXBvIDM0MSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjEuNTE0IiBoZWlnaHQ9IjY4LjM1NiIgdmlld0JveD0iMCAwIDYxLjUxNCA2OC4zNTYiPg0KICA8cGF0aCBpZD0iQ2FtaW5ob18yMzgiIGRhdGEtbmFtZT0iQ2FtaW5obyAyMzgiIGQ9Ik0tMTQxLjA5MiwxNy4wNzFoNC43NjhhMS45NTcsMS45NTcsMCwwLDAsMS45NTUtMS45NTVWMTAuMzQ4YTEuOTU3LDEuOTU3LDAsMCwwLTEuOTU1LTEuOTU1aC00Ljc2OGExLjk1NywxLjk1NywwLDAsMC0xLjk1NSwxLjk1NXY0Ljc2OEExLjk1NywxLjk1NywwLDAsMC0xNDEuMDkyLDE3LjA3MVptLjA0OC02LjY3NWg0LjY3M3Y0LjY3M2gtNC42NzNabS0uMDQ4LDE5LjM1OWg0Ljc2OGExLjk1NywxLjk1NywwLDAsMCwxLjk1NS0xLjk1NVYyMy4wMzFhMS45NTcsMS45NTcsMCwwLDAtMS45NTUtMS45NTVoLTQuNzY4YTEuOTU3LDEuOTU3LDAsMCwwLTEuOTU1LDEuOTU1VjI3LjhBMS45NTcsMS45NTcsMCwwLDAtMTQxLjA5MiwyOS43NTRabS4wNDgtNi42NzVoNC42NzN2NC42NzNoLTQuNjczWk0tMTU0LjcsMTcuMDcxaDQuNzY4YTEuOTU3LDEuOTU3LDAsMCwwLDEuOTU1LTEuOTU1VjEwLjM0OGExLjk1NywxLjk1NywwLDAsMC0xLjk1NS0xLjk1NUgtMTU0LjdhMS45NTcsMS45NTcsMCwwLDAtMS45NTUsMS45NTV2NC43NjhBMS45NTcsMS45NTcsMCwwLDAtMTU0LjcsMTcuMDcxWm0uMDQ4LTYuNjc1aDQuNjczdjQuNjczaC00LjY3M1ptLTIyLjQ5MywyMi43NjloLTQuNzY4YTEuOTU3LDEuOTU3LDAsMCwwLTEuOTU1LDEuOTU1djQuNzY4YTEuOTU3LDEuOTU3LDAsMCwwLDEuOTU1LDEuOTU1aDQuNzY4YTEuOTU3LDEuOTU3LDAsMCwwLDEuOTU1LTEuOTU1VjM1LjEyQTEuOTU3LDEuOTU3LDAsMCwwLTE3Ny4xNDMsMzMuMTY1Wm0tLjA0OCw2LjY3NWgtNC42NzNWMzUuMTY4aDQuNjczWm0uMDQ4LTMxLjQ0N2gtNC43NjhhMS45NTcsMS45NTcsMCwwLDAtMS45NTUsMS45NTV2NC43NjhhMS45NTcsMS45NTcsMCwwLDAsMS45NTUsMS45NTVoNC43NjhhMS45NTcsMS45NTcsMCwwLDAsMS45NTUtMS45NTVWMTAuMzQ4QTEuOTU3LDEuOTU3LDAsMCwwLTE3Ny4xNDMsOC4zOTNabS0uMDQ4LDYuNjc1aC00LjY3M1YxMC40aDQuNjczWk0tMTU0LjcsMjkuNDU3aDQuNzY4YTEuOTU3LDEuOTU3LDAsMCwwLDEuOTU1LTEuOTU1VjIyLjczNGExLjk1NywxLjk1NywwLDAsMC0xLjk1NS0xLjk1NUgtMTU0LjdhMS45NTcsMS45NTcsMCwwLDAtMS45NTUsMS45NTVWMjcuNUExLjk1NywxLjk1NywwLDAsMC0xNTQuNywyOS40NTdabS4wNDgtNi42NzVoNC42NzN2NC42NzNoLTQuNjczWm0yMS4yNzYtMzQuNzA2aC00LjI4MXYtMS41MzFBMy4wNDgsMy4wNDgsMCwwLDAtMTQwLjctMTYuNWgtLjQ2YTMuMDQ4LDMuMDQ4LDAsMCwwLTMuMDQ1LDMuMDQ1djEuNTMxSC0xNzQuMDN2LTEuNTMxYTMuMDQ4LDMuMDQ4LDAsMCwwLTMuMDQ1LTMuMDQ1aC0uNDZhMy4wNDgsMy4wNDgsMCwwLDAtMy4wNDUsMy4wNDV2MS41MzFoLTQuMjgxYTUuMDE5LDUuMDE5LDAsMCwwLTUuMDEzLDUuMDEzdjUzLjc2YTUuMDEyLDUuMDEyLDAsMCwwLDUuMDA3LDUuMDA3aDUxLjVhNS4wMTIsNS4wMTIsMCwwLDAsNS4wMDctNS4wMDdWLTYuOTExYTUuMDE5LDUuMDE5LDAsMCwwLTUuMDEzLTUuMDEzWm0tOC44MjgtMS41MzFBMS4wNDMsMS4wNDMsMCwwLDEtMTQxLjE2LTE0LjVoLjQ2YTEuMDQzLDEuMDQzLDAsMCwxLDEuMDQyLDEuMDQydjEuNTMxSC0xNDIuMlptLTM2LjM3NSwwYTEuMDQzLDEuMDQzLDAsMCwxLDEuMDQyLTEuMDQyaC40NmExLjA0MywxLjA0MywwLDAsMSwxLjA0MiwxLjA0MnYxLjUzMWgtMi41NDR2LTEuNTMxWm00OC4yMTQsNjAuM2EzLjAwNywzLjAwNywwLDAsMS0zLDNoLTUxLjVhMy4wMDcsMy4wMDcsMCwwLDEtMy0zdi0uMDA2YTQuOTg3LDQuOTg3LDAsMCwwLDMuMDExLDEuMDA4aDQwLjZhNC45OCw0Ljk4LDAsMCwwLDMuNTQ1LTEuNDY4bDEwLjM1NS0xMC4zNTVabS0xMS4zNzctMi4yNzhhNC4yODQsNC4yODQsMCwwLDAsLjEyMS0xLjAxVjM2Ljg3OGEyLjI4OCwyLjI4OCwwLDAsMSwyLjI4Ni0yLjI4Nmg2LjY4NGE0LjI4Myw0LjI4MywwLDAsMCwxLjAxLS4xMjFabTExLjM3Ny00Mi4xODdoLTQyLjY2NmExLDEsMCwwLDAtMSwxLDEsMSwwLDAsMCwxLDFoNDIuNjY2VjMwLjNhMi4yODksMi4yODksMCwwLDEtMi4yODYsMi4yODZoLTYuNjg0YTQuMjkzLDQuMjkzLDAsMCwwLTQuMjg5LDQuMjg4djYuNjg0YTIuMjg5LDIuMjg5LDAsMCwxLTIuMjg2LDIuMjg2aC0zOC45NTNhMy4wMTQsMy4wMTQsMCwwLDEtMy4wMTEtMy4wMTFWNC4zODhoMTAuODM3YTEsMSwwLDAsMCwxLTEsMSwxLDAsMCwwLTEtMWgtMTAuODM3di05LjNhMy4wMTQsMy4wMTQsMCwwLDEsMy4wMTEtMy4wMTFoNC4yODF2Mi45NDRhMy4wNDgsMy4wNDgsMCwwLDAsMy4wNDUsMy4wNDUsMSwxLDAsMCwwLDEtMSwxLDEsMCwwLDAtMS0xLDEuMDQzLDEuMDQzLDAsMCwxLTEuMDQyLTEuMDQyVi05LjkyMkgtMTQ0LjJ2Mi45NDRhMy4wNDgsMy4wNDgsMCwwLDAsMy4wNDUsMy4wNDUsMSwxLDAsMCwwLDEtMSwxLDEsMCwwLDAtMS0xQTEuMDQzLDEuMDQzLDAsMCwxLTE0Mi4yLTYuOTc3Vi05LjkyMmg4LjgyOGEzLjAxNCwzLjAxNCwwLDAsMSwzLjAxMSwzLjAxMVptLTQ2Ljc4LDE4LjM5NGgtNC43NjhhMS45NTcsMS45NTcsMCwwLDAtMS45NTUsMS45NTVWMjcuNWExLjk1NywxLjk1NywwLDAsMCwxLjk1NSwxLjk1NWg0Ljc2OGExLjk1NywxLjk1NywwLDAsMCwxLjk1NS0xLjk1NVYyMi43MzRBMS45NTcsMS45NTcsMCwwLDAtMTc3LjE0MywyMC43NzlabS0uMDQ4LDYuNjc1aC00LjY3M1YyMi43ODJoNC42NzNabTguODg2LTEwLjM4M2g0Ljc2OGExLjk1NywxLjk1NywwLDAsMCwxLjk1NS0xLjk1NVYxMC4zNDhhMS45NTcsMS45NTcsMCwwLDAtMS45NTUtMS45NTVILTE2OC4zYTEuOTU3LDEuOTU3LDAsMCwwLTEuOTU1LDEuOTU1djQuNzY4QTEuOTU3LDEuOTU3LDAsMCwwLTE2OC4zLDE3LjA3MVptLjA0OC02LjY3NWg0LjY3M3Y0LjY3M2gtNC42NzNabTEzLjYwNSwyOS40NDVhMSwxLDAsMCwwLTEtLjk1NCwxLDEsMCwwLDAtMSwxLDEuOTU3LDEuOTU3LDAsMCwwLDEuOTU1LDEuOTU1aDQuNzY4YTEuOTU3LDEuOTU3LDAsMCwwLDEuOTU1LTEuOTU1VjM1LjEyYTEuOTU3LDEuOTU3LDAsMCwwLTEuOTU1LTEuOTU1SC0xNTQuN2ExLjk1NywxLjk1NywwLDAsMC0xLjk1NSwxLjk1NVYzNi41YTEsMSwwLDAsMCwxLDEsMSwxLDAsMCwwLDEtMVYzNS4xNjhoNC42NzNWMzkuODRaTS0xNjguMywyOS40NTdoNC43NjhhMS45NTcsMS45NTcsMCwwLDAsMS45NTUtMS45NTVWMjIuNzM0YTEuOTU3LDEuOTU3LDAsMCwwLTEuOTU1LTEuOTU1SC0xNjguM2ExLjk1NywxLjk1NywwLDAsMC0xLjk1NSwxLjk1NVYyNy41QTEuOTU3LDEuOTU3LDAsMCwwLTE2OC4zLDI5LjQ1N1ptLjA0OC02LjY3NWg0LjY3M3Y0LjY3M2gtNC42NzNabS0uMDQ4LDE5LjA2MWg0Ljc2OGExLjk1NywxLjk1NywwLDAsMCwxLjk1NS0xLjk1NVYzNS4xMmExLjk1NywxLjk1NywwLDAsMC0xLjk1NS0xLjk1NUgtMTY4LjNhMS45NTcsMS45NTcsMCwwLDAtMS45NTUsMS45NTV2NC43NjhBMS45NTcsMS45NTcsMCwwLDAtMTY4LjMsNDEuODQzWm0uMDQ4LTYuNjc1aDQuNjczVjM5Ljg0aC00LjY3M1oiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE4OS44NzQgMTYuNSkiIGZpbGw9IiMwYmFiYzUiLz4NCjwvc3ZnPg0K"},A6MN:function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var s={data:function(){return{isActive:!0,index:1,testemunhos:[{id:1,text:"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dovlore."},{id:2,text:"Another Sample text 2"},{id:3,text:"Another Sample text 3"},{id:4,text:"Another Sample text 4"}]}},methods:{showTestemunho:function(t){var e,a=document.querySelectorAll(".slider .slide"),s=document.querySelectorAll(".indicators .ind");for(t>a.length&&(this.index=1),t<1&&(this.index=a.length),e=0;e<a.length;e++)a[e].className="slide";for(e=0;e<s.length;e++)s[e].className=s[e].className.replace(" active",""),this.isActive=!1;a[this.index-1].className="slide active",s[this.index-1].className+=" active",this.isActive=!0},prevSlides:function(t){this.showTestemunho(this.index-=t)},plusSlides:function(t){this.showTestemunho(this.index+=t)},currentSlide:function(t){this.showTestemunho(this.index=t)}},mounted:function(){var t=this;this.showTestemunho(this.index);var e=document.querySelector(".slider");document.querySelectorAll(".slider .slide");if(window.innerWidth<600){e.addEventListener("touchstart",function(t){var e=function(t){return t.touches||t.originalEvent.touches}(t)[0];a=e.clientX,s=e.clientY},!1),e.addEventListener("touchmove",function(e){if(a&&s){var i=e.touches[0].clientX,n=e.touches[0].clientY,c=a-i,o=s-n;document.querySelector(".slider .slide.active").getAttribute("data-slide-id"),Math.abs(c)>Math.abs(o)&&(c>0?t.plusSlides(1):t.prevSlides(1)),a=null,s=null}},!1);var a=null,s=null}}},i={render:function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"testemunhos-wrapper"},[a("div",{staticClass:"movement",attrs:{id:"testemunhos"}},[a("div",{staticClass:"title main"},[t._v("O que dizem sobre nós")]),t._v(" "),a("div",{staticClass:"line"}),t._v(" "),a("div",{staticClass:"slider-wrapper"},[a("div",{staticClass:"slider"},t._l(t.testemunhos,function(e){return a("div",{key:e.id,staticClass:"slide",class:{active:t.isActive},attrs:{"data-slide-id":e.id},domProps:{innerHTML:t._s(e.text)}})}),0),t._v(" "),a("div",{staticClass:"indicators"},t._l(t.testemunhos,function(e){return a("div",{key:e.id,staticClass:"ind",class:{active:t.isActive},on:{click:function(a){return t.currentSlide(e.id)}}})}),0)])])])},staticRenderFns:[]};var n=a("VU/8")(s,i,!1,function(t){a("fBkB")},"data-v-962329ea",null);e.default=n.exports},Ac3d:function(t,e,a){t.exports=a.p+"static/img/chair.ceaa50c.svg"},BYRY:function(t,e){},CpL4:function(t,e){},HoDo:function(t,e){},Mn5U:function(t,e){},N3wf:function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var s=a("MXBO"),i=a.n(s),n=a("mtWM"),c=a.n(n),o=a("owA6"),l=a.n(o),r={data:function(){return{arrow:l.a,quote:i.a,title:"",text:"",cta_txt:"",url:"",name:"",cargo:"",img:""}},mounted:function(){Array.prototype.map;var t=this;c.a.get("https://beta.anacarolinapereira.pt/db-api/getEquipaHomepage.php").then(function(e){var a=e.data,s=a[0].img.split("uploads");t.title=a[0].title,t.text=a[0].text,t.cta_txt=a[0].cta_txt,t.url=a[0].link,t.name=a[0].name,t.cargo=a[0].cargo,t.img="uploads"+s[1]})}},d={render:function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"equipa-wrapper"},[a("div",{staticClass:"equipa movement"},[a("div",{staticClass:"left"},[a("div",{staticClass:"pic",style:{"background-image":"url("+t.img+")"}}),t._v(" "),a("div",{staticClass:"name"},[t._v(t._s(t.name))]),t._v(" "),a("div",{staticClass:"cargo"},[t._v(t._s(t.cargo))])]),t._v(" "),a("div",{staticClass:"right"},[a("h1",{staticClass:"title main"},[t._v(t._s(t.title))]),t._v(" "),a("div",{staticClass:"quote"},[a("div",{staticClass:"icon",style:{"background-image":"url("+t.quote+")"}}),t._v(" "),a("div",{staticClass:"txt",domProps:{innerHTML:t._s(t.text)}})]),t._v(" "),a("router-link",{attrs:{to:t.url}},[a("div",{staticClass:"subquote"},[t._v("Saiba mais")]),t._v(" "),a("img",{attrs:{src:t.arrow,alt:""}})])],1)])])},staticRenderFns:[]};var u=a("VU/8")(r,d,!1,function(t){a("BYRY")},"data-v-15a327ff",null);e.default=u.exports},Pv1V:function(t,e){},QlV5:function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var s=a("mtWM"),i=a.n(s),n=a("A2Z5"),c=a.n(n),o=a("PJh5"),l=a.n(o),r={data:function(){return{calendar:c.a,isActive:!0,index:1,formacoes:[{id:"",code:"",title:"",text:"",url:"",img:"",start:"",end:"",is_full:"",last_vagas:"",is_visible:"",categoria:""}]}},methods:{showDestaque:function(t){var e,a=document.querySelectorAll(".slider .card"),s=document.querySelectorAll(".indicators .ind");for(t>a.length&&(this.index=1),t<1&&(this.index=a.length),e=0;e<a.length;e++)a[e].className="card is-visible";for(e=0;e<s.length;e++)s[e].className=s[e].className.replace(" active",""),this.isActive=!1;a[this.index-1].className="card is-visible active",s[this.index-1].className+=" active",this.isActive=!0},prevSlides:function(t){this.showDestaque(this.index-=t)},plusSlides:function(t){this.showDestaque(this.index+=t)},currentSlide:function(t){this.showDestaque(this.index=t)}},mounted:function(){var t=this,e=this,a=document.querySelector(".slider");document.querySelectorAll(".slider .card");if(window.innerWidth<600){a.addEventListener("touchstart",function(t){var e=function(t){return t.touches||t.originalEvent.touches}(t)[0];s=e.clientX,n=e.clientY},!1),a.addEventListener("touchmove",function(t){if(s&&n){var a=t.touches[0].clientX,i=t.touches[0].clientY,c=s-a,o=n-i;document.querySelector(".slider .card.is-visible.active").getAttribute("data-card-id"),Math.abs(c)>Math.abs(o)&&(c>0?e.plusSlides(1):e.prevSlides(1)),s=null,n=null}},!1);var s=null,n=null}var c=Array.prototype.map;i.a.get("https://beta.anacarolinapereira.pt/db-api/getFormacaoInfo.php").then(function(t){var a=t.data,s=[];c.call(a,function(t){if(1==t.is_destaque){var e,a,i,n,c=t.img_src.split("uploads");"0000-00-00"==t.date_start?(e="disponível brevemente",a=""):(e=l()(t.date_start).format("DD-MM-YYYY"),a=l()(t.date_end).format("DD-MM-YYYY")),i=1==t.categoria_id?"formacao":2==t.categoria_id?"curso":"webinar",n=1==t.categoria_id?"formação":2==t.categoria_id?"curso":"webinar",s.push({id:t.id,code:t.code,title:t.title,text:t.text,url:"/academia/"+i+t.link,img:"uploads"+c[1],start:e,end:a,is_full:t.is_full,last_vagas:t.last_vagas,is_visible:t.is_visible,categoria:n})}}),e.$data.formacoes=s}).then(function(){e.showDestaque(t.index),setInterval(function(){t.plusSlides(t.index)},5e3)})}},d={render:function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"destaques-wrapper"},[a("div",{attrs:{id:"destaques"}},[a("div",{staticClass:"slider-wrapper"},[a("div",{staticClass:"slider"},t._l(t.formacoes,function(e){return a("div",{key:e.id,staticClass:"card",class:{active:t.isActive,"is-visible":1==e.is_visible},attrs:{"data-card-id":e.id}},[a("div",{staticClass:"card-img",style:{"background-image":"url("+e.img+")"}}),t._v(" "),a("div",{staticClass:"card-content"},[a("div",{staticClass:"card-header"},[a("div",{staticClass:"card-type"},[t._v(t._s(e.categoria))]),t._v(" "),a("div",{staticClass:"card-status",class:{"is-full":1==e.is_full,"has-vagas":1==e.last_vagas}},[a("span",{class:{"is-full":1==e.is_full}},[t._v("vagas preenchidas")]),t._v(" "),a("span",{class:{"has-vagas":1==e.last_vagas}},[t._v("últimas vagas")])])]),t._v(" "),a("div",{staticClass:"card-body"},[a("h3",{staticClass:"card-title"},[t._v(t._s(e.title))]),t._v(" "),a("div",{staticClass:"card-date"},[a("router-link",{attrs:{to:e.url}},[a("div",{staticClass:"card-cta"},[a("div",{staticClass:"cta-txt"},[t._v("Saiba mais")])])]),t._v(" "),a("div",{staticClass:"txt"},[t._v("\n                  "+t._s(e.start)+"\n                  "),a("br"),t._v("\n                  "+t._s(e.end)+"\n                ")]),t._v(" "),a("div",{staticClass:"icon",style:{"background-image":"url("+t.calendar+")"}})],1)])])])}),0),t._v(" "),a("div",{staticClass:"indicators"},t._l(t.formacoes,function(e){return a("div",{key:e.id,staticClass:"ind",class:{active:t.isActive},on:{click:function(a){return t.currentSlide(e.id)}}})}),0)])])])},staticRenderFns:[]};var u=a("VU/8")(r,d,!1,function(t){a("Pv1V")},"data-v-24bb1126",null);e.default=u.exports},Rxx7:function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var s=a("mtWM"),i=a.n(s),n=(a("Ac3d"),a("KLWT")),c=a("01bk"),o=a("gOI3"),l=a("SupS"),r=a("KzHo"),d={components:{ImgBase:n.default,ImgChair:c.default,ImgChildren:o.default,ImgMoon:l.default,ImgFrame:r.default},data:function(){return{slideIndex:1,slides:[{id:"",title:"",text:"",btn_txt:"",file:"",url:""}]}},methods:{bannerAnimate:function(){$("#slideshow-home > div:gt(0)").hide();this.drawLines(),setInterval(function(){$("#slideshow-home > div:first").fadeOut(0).next().fadeIn(0).end().appendTo("#slideshow-home")},7e3)},drawLines:function(){$(".nodules").addClass("start"),$(".main-path").addClass("start"),$(".main-path-fill").addClass("start")},deleteLines:function(){$(".nodules").removeClass("start"),$(".main-path").removeClass("start"),$(".main-path-fill").removeClass("start")}},mounted:function(){var t=Array.prototype.map,e=this;i.a.get("https://beta.anacarolinapereira.pt/db-api/getSlideshow.php").then(function(a){var s=a.data,i=[];t.call(s,function(t){i.push({id:t.id,title:t.title,text:t.text,btn_txt:t.cta_txt,file:t.img,url:t.link})}),e.$data.slides=i}).then(function(){e.bannerAnimate()})}},u={render:function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"slideshow-wrapper"},[a("div",{attrs:{id:"slideshow-home"}},t._l(t.slides,function(e){return a("div",{key:e.id,staticClass:"slide",class:{blue:e.id%2==0}},[a("div",{staticClass:"svg-container"},["chair"==e.file?a("img-base",{attrs:{"img-name":"chair",viewBox:"0 0 330 340"}},[a("img-chair")],1):t._e(),t._v(" "),"children"==e.file?a("img-base",{attrs:{"img-name":"children",viewBox:"0 0 410 340"}},[a("img-children")],1):t._e(),t._v(" "),"moon"==e.file?a("img-base",{attrs:{"img-name":"moon",viewBox:"0 0 510 340"}},[a("img-moon")],1):t._e(),t._v(" "),"frame"==e.file?a("img-base",{attrs:{"img-name":"frame",viewBox:"0 0 620 340"}},[a("img-frame")],1):t._e()],1),t._v(" "),a("div",{staticClass:"copy",class:{blue:e.id%2==0}},[a("div",{staticClass:"title",class:{white:e.id%2==0}},[t._v(t._s(e.title))]),t._v(" "),a("div",{staticClass:"line"}),t._v(" "),a("div",{staticClass:"text",class:{white:e.id%2==0},domProps:{innerHTML:t._s(e.text)}}),t._v(" "),a("div",{staticClass:"btn white"},[a("div",{staticClass:"txt"},[t._v(t._s(e.btn_txt))])])])])}),0)])},staticRenderFns:[]};var M=a("VU/8")(d,u,!1,function(t){a("Mn5U")},"data-v-193f6ff2",null);e.default=M.exports},UNWn:function(t,e){},UqHI:function(t,e){t.exports="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAATCAYAAAByUDbMAAAABHNCSVQICAgIfAhkiAAAAWtJREFUOE+VlEFOwlAURe+tMdF24g5kB8JQayKuwJLYTpUVKDvQFYAroON2AOygJjQOwRWoO3DSHxOBZz4RU2gL385+c+/pf+++VzpRWhdgQKKGtUd6mX/eWX+3/UQ7Tt8JHJfJhGyp67OhKZBOnEqVWIBH5bsP5rAoTUBclBoEz1ngNo1hdjwOCd5UGTLfpTHsMB7fW2C3tGfASPmuZww7GLzU9maLt02DiLyqfaeJVuPTGKaFdpwOCVzlTXNYl1/+aWIK0rplP5wovQXRzxtFMFWB2/g37BdYSFUEoQrctinwLym9CSAmBaOgnQVuaAJci92J0h6Iu2IYuRsOJkf2t+qT8ABJBNR9nSrfHRVmqCwMDdc9XNDqWLLokqiXVPBUHMjll7OE5IlJaXlN+XRr4EyFm+OyC751Vap6WAXduXfLlAEdTPnPIEfeCVtp9WAL4VWVrtfPGLaC6l3mbK6hdQpr+sYCfFDg/QDUwoL4KuJ+yQAAAABJRU5ErkJggg=="},dAjm:function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var s=a("Rxx7"),i=a("dShX"),n=a("tUN6"),c=a("79pf"),o=a("A6MN"),l=a("z+iw"),r=a("QlV5"),d=a("N3wf"),u=a("qIYd"),M=a("eNWK"),v=a.n(M),m={data:function(){return{FadeIn:v.a}},components:{banner:s.default,about:i.default,especialidades:n.default,formacoes:c.default,testemunhos:o.default,parceiros:l.default,destaques:r.default,equipa:d.default,contactos:u.default},metaInfo:function(){return{title:"Ana Carolina Pereira - Clínica de Psicologia",meta:[{name:"description",content:"Somos uma Clínica de Psicologia. Que abraça a infância, a adolescência e a adultez. Que considera o ato psicológico (do processo de avaliação ao aconselhamento e intervenção psicológica) como de charneira entre a confiança na qualidade dos serviços profissionais especializados e a confiança de que, no espaço da relação clínica, se promova a saúde mental e familiar."},{name:"robots",content:"index,follow"},{property:"og:site_name",content:"Ana Carolina Pereira"},{property:"og:type",content:"website"},{property:"og:title",content:"Ana Carolina Pereira - Clínica de Psicologia"},{property:"og:description",content:"Somos uma Clínica de Psicologia. Que abraça a infância, a adolescência e a adultez. Que considera o ato psicológico (do processo de avaliação ao aconselhamento e intervenção psicológica) como de charneira entre a confiança na qualidade dos serviços profissionais especializados e a confiança de que, no espaço da relação clínica, se promova a saúde mental e familiar."}]}},mounted:function(){setTimeout(function(){$("#popup").addClass("active")},7e3)}},L={render:function(){var t=this.$createElement,e=this._self._c||t;return e("div",[e("banner"),this._v(" "),e("about"),this._v(" "),e("especialidades"),this._v(" "),e("formacoes"),this._v(" "),e("destaques"),this._v(" "),e("equipa"),this._v(" "),e("contactos")],1)},staticRenderFns:[]};var w=a("VU/8")(m,L,!1,function(t){a("p3r7")},"data-v-5f13bd4b",null);e.default=w.exports},dShX:function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var s=a("mtWM"),i=a.n(s),n={data:function(){return{title:"",content:"",cta:"",url:""}},methods:{offsetTop:function(){var t=$(".slideshow-wrapper");$(".clinica-wrapper").css("margin-top",t.height())},openContactForm:function(){var t=document.querySelector("#contact-form-2");document.querySelector("#menu");t.style.transition=".5s",t.style.transform="translate(-50%, -50%)",t.style.pointerEvents="all",$("#contact-form-2 .page").css("pointer-events","all"),document.documentElement.style.overflow="hidden",$(".menu-wrapper-mobile .menu-items").removeClass("open"),$(".menu-wrapper-mobile .btn-menu").removeClass("open"),$(".menu-wrapper-mobile .close-menu").removeClass("open"),$("#contact-form-2 .p0 .text").animate({left:0,opacity:1},500)}},mounted:function(){this.offsetTop();Array.prototype.map;var t=this;i.a.get("https://beta.anacarolinapereira.pt/db-api/getAboutHomepage.php").then(function(e){var a=e.data;t.title=a[0].title,t.content=a[0].content,t.cta=a[0].cta_txt,t.url=a[0].link})},created:function(){window.addEventListener("resize",this.offsetTop)},destroyed:function(){window.removeEventListener("resize",this.offsetTop)}},c={render:function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"clinica-wrapper"},[a("div",{attrs:{id:"clinica"}},[a("div",{staticClass:"copy-wrapper"},[a("h1",{staticClass:"title main movement"},[t._v(t._s(t.title))]),t._v(" "),a("div",{staticClass:"line movement"}),t._v(" "),a("div",{staticClass:"copy movement",domProps:{innerHTML:t._s(t.content)}})]),t._v(" "),a("div",{staticClass:"ctas"},[a("router-link",{attrs:{to:t.url}},[a("div",{staticClass:"btn blue lateral"},[a("div",{staticClass:"txt"},[t._v(t._s(t.cta))])])]),t._v(" "),a("div",{staticClass:"btn white lateralR",on:{click:function(e){return t.openContactForm()}}},[a("div",{staticClass:"txt"},[t._v("Contacte-nos")])])],1)])])},staticRenderFns:[]};var o=a("VU/8")(n,c,!1,function(t){a("fd7C")},"data-v-efb0f3a6",null);e.default=o.exports},fBkB:function(t,e){},fd7C:function(t,e){},hEhU:function(t,e){},owA6:function(t,e){t.exports="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciDQogICAgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHdpZHRoPSI0Ljc0MyIgaGVpZ2h0PSI3LjMwOCIgdmlld0JveD0iMCAwIDQuNzQzIDcuMzA4Ij4NCiAgICA8ZGVmcz4NCiAgICAgICAgPGNsaXBQYXRoIGlkPSJhIj4NCiAgICAgICAgICAgIDxyZWN0IHdpZHRoPSI0Ljc0MyIgaGVpZ2h0PSI3LjMwOCIgZmlsbD0ibm9uZSIvPg0KICAgICAgICA8L2NsaXBQYXRoPg0KICAgIDwvZGVmcz4NCiAgICA8ZyBjbGlwLXBhdGg9InVybCgjYSkiPg0KICAgICAgICA8cGF0aCBkPSJNMy42NTQsNC43NDMsMCwxLjA4OCwxLjA4OCwwLDMuNjU0LDIuNTY2LDYuMjIsMCw3LjMwOCwxLjA4OFoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAgNy4zMDgpIHJvdGF0ZSgtOTApIiBmaWxsPSIjMGJhYmM1Ii8+DQogICAgPC9nPg0KPC9zdmc+"},p3r7:function(t,e){},qIYd:function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var s=a("UqHI"),i=a.n(s),n=a("wF+D"),c=a.n(n),o=a("TL5K"),l=a.n(o),r=a("mtWM"),d=a.n(r),u={data:function(){return{phone:i.a,email:c.a,location:l.a,tlf1:"",tlf2:"",email1:"",email2:"",address:"",api_code:""}},methods:{openContactForm:function(){var t=document.querySelector("#contact-form-2");document.querySelector("#menu");t.style.transition="1s",t.style.transform="translate(-50%, -50%)",t.style.pointerEvents="all",$("#contact-form-2 .page").css("pointer-events","all"),document.documentElement.style.overflow="hidden",$(".menu-wrapper-mobile .menu-items").removeClass("open"),$(".menu-wrapper-mobile .btn-menu").removeClass("open"),$(".menu-wrapper-mobile .close-menu").removeClass("open"),$("#contact-form-2 .p0 .text").animate({left:0,opacity:1},500)}},mounted:function(){Array.prototype.map;var t=this;d.a.get("https://beta.anacarolinapereira.pt/db-api/getContactosHomepage.php").then(function(e){var a=e.data;t.tlf1=a[0].tlf_1,""==a[0].tlf_2?$("#tlf2").css("display","none"):($("#tlf2").css("display","inline-block"),t.tlf2=" ou "+a[0].tlf_2),t.email1=a[0].email_1,""==a[0].email_2?$("#email2").css("display","none"):($("#email2").css("display","inline-block"),t.email2=a[0].email_2),t.address=a[0].address,t.api_code=a[0].google_maps_code})}},M={render:function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"contacto-wrapper"},[a("div",{attrs:{id:"contacto"}},[a("div",{staticClass:"left lateral"},[a("h1",{staticClass:"title main"},[t._v("Esperamos por si!")]),t._v(" "),a("div",{staticClass:"line"}),t._v(" "),a("div",{staticClass:"copy"},[a("div",{staticClass:"topic"},[a("div",{staticClass:"icon"},[a("img",{attrs:{src:t.phone,alt:""}})]),t._v(" "),a("div",{staticClass:"txt"},[t._v("\n            Fale connosco através do\n            "),a("span",{attrs:{id:"tlf1"}},[t._v(t._s(t.tlf1))]),t._v(" "),a("span",{attrs:{id:"tlf2"}},[t._v(t._s(t.tlf2))])])]),t._v(" "),a("div",{staticClass:"topic"},[a("div",{staticClass:"icon"},[a("img",{attrs:{src:t.email,alt:""}})]),t._v(" "),a("div",{staticClass:"txt"},[a("a",{staticStyle:{color:"#95989a"},attrs:{href:"mailto:"+t.email1}},[t._v(t._s(t.email1))]),t._v(" "),a("a",{staticStyle:{color:"#95989a"},attrs:{href:"mailto:"+t.email2}},[t._v(t._s(t.email2))])])]),t._v(" "),a("div",{staticClass:"topic"},[a("div",{staticClass:"icon"},[a("img",{attrs:{src:t.location,alt:""}})]),t._v(" "),a("div",{staticClass:"txt",domProps:{innerHTML:t._s(t.address)}})])]),t._v(" "),a("div",{staticClass:"cta",on:{click:function(e){return t.openContactForm()}}},[t._m(0)])]),t._v(" "),a("div",{staticClass:"right lateralR",domProps:{innerHTML:t._s(t.api_code)}})])])},staticRenderFns:[function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"btn blue"},[e("div",{staticClass:"txt"},[this._v("contacte-nos")])])}]};var v=a("VU/8")(u,M,!1,function(t){a("HoDo")},"data-v-c44a5862",null);e.default=v.exports},tUN6:function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});a("eNWK");var s=a("mtWM"),i=a.n(s),n={data:function(){return{especialidades:[{id:1,title:"",code:"",content:"",url:"",icon:""}]}},methods:{FadeIn:function(){var t=$(".movement, .cover"),e=$(".movement-delayed"),a=$(".lateral, .lateralR"),s=$("#svg");!function(t){t.fn.visible=function(e,a){void 0===a&&(a=0);var s=t(this),i=t(window),n=i.scrollTop(),c=n+i.height(),o=s.offset().top+a,l=o+s.height()-a;return(!0===e?o:l)<=c&&(!0===e?l:o)>=n}}(jQuery);var i=$(window),n=!0;t.each(function(t,e){(e=$(e)).visible(!0)&&e.addClass("placed")}),s.each(function(t,e){(e=$(e)).visible(!0)&&(n&&e.append("<img src='assets/img/elemento_animated.svg' alt=''></img>"),n=!1)}),a.each(function(t,e){(e=$(e)).visible(!0,100)&&e.addClass("placed")}),e.each(function(t,e){(e=$(e)).visible(!0,800)&&e.addClass("placed")}),i.scroll(function(i){t.each(function(t,e){(e=$(e)).visible(!0)&&e.addClass("placed")}),a.each(function(t,e){(e=$(e)).visible(!0,100)&&e.addClass("placed")}),e.each(function(t,e){(e=$(e)).visible(!0,800)&&e.addClass("placed")}),s.each(function(t,e){(e=$(e)).visible(!0)&&(n&&e.append("<img src='assets/img/elemento_animated.svg' alt=''></img>"),n=!1)})})}},mounted:function(){var t=Array.prototype.map,e=this;i.a.get("https://beta.anacarolinapereira.pt/db-api/getEspecialidadesHomepage.php").then(function(a){var s=a.data,i=[];t.call(s,function(t){var e=t.img_src.split("uploads");i.push({id:t.id,title:t.title,content:t.text,url:t.link,icon:"uploads"+e[1]})}),e.$data.especialidades=i}).then(function(){e.FadeIn()})}},c={render:function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"especialidades-wrapper"},[a("div",{attrs:{id:"especialidades"}},[t._m(0),t._v(" "),a("div",{staticClass:"especialidades"},t._l(t.especialidades,function(e){return a("div",{key:e.id,staticClass:"especialidade movement"},[a("div",{staticClass:"icon",style:{"background-image":"url("+e.icon+")"}}),t._v(" "),a("h3",{staticClass:"txt-big"},[t._v(t._s(e.title))]),t._v(" "),a("div",{staticClass:"copy",domProps:{innerHTML:t._s(e.content)}}),t._v(" "),a("router-link",{attrs:{to:e.url}},[a("div",{staticClass:"cta"},[a("div",{staticClass:"text"},[t._v("saiba mais")]),t._v(" "),a("div",{staticClass:"arrow-cont"},[a("i",{staticClass:"arrow right"})])])])],1)}),0)])])},staticRenderFns:[function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"title-wrapper movement"},[e("h1",{staticClass:"title main"},[this._v("As Nossas Especialidades")]),this._v(" "),e("div",{staticClass:"line"})])}]};var o=a("VU/8")(n,c,!1,function(t){a("hEhU")},"data-v-328ab5a4",null);e.default=o.exports},"wF+D":function(t,e){t.exports="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAANCAYAAABLjFUnAAAABHNCSVQICAgIfAhkiAAAARlJREFUKFOl08FNwzAUBuD/VY2EnEtH6Ai5QnroCEVqc6WdoCMQNmCD5twghQ0QUlOOMIJHIIeYSqE8ZJMYt+RAU98s25+ff9vkr/M5CCuc0xjF3usFpI2zQEYBYFxG4RuJdJOo2WjeCWwgT0i/UjH5ac7MSFQULk4CHUhU6omAwmD6qCeBxxAhAOPZYv8G2yCz+AhDfSu760vZemQnbJHmMQG39hEcYO6On2qpZuHdAeiO7z/Ganr1qC+PQDcGtFhL6W6GTIiJMSk9IU3YPxktyihMLGiwdf5u3ok7sa69AXX3InsZ9qqvzEBNc0GmocaCNsjOZ0giloBGaPDno9SgjoSQvQ5s6V2/VA2SeNhOwPxbekdQ9cX9N45l0bQI2xcDAAAAAElFTkSuQmCC"},"z+iw":function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var s=a("mtWM"),i=a.n(s),n={data:function(){return{parceiros:[{id:"",name:"",img_src:"",url:""}]}},methods:{FadeIn:function(){var t=$(".movement, .cover"),e=$(".movement-delayed"),a=$(".lateral, .lateralR"),s=$("#svg");!function(t){t.fn.visible=function(e,a){void 0===a&&(a=0);var s=t(this),i=t(window),n=i.scrollTop(),c=n+i.height(),o=s.offset().top+a,l=o+s.height()-a;return(!0===e?o:l)<=c&&(!0===e?l:o)>=n}}(jQuery);var i=$(window),n=!0;t.each(function(t,e){(e=$(e)).visible(!0)&&e.addClass("placed")}),s.each(function(t,e){(e=$(e)).visible(!0)&&(n&&e.append("<img src='assets/img/elemento_animated.svg' alt=''></img>"),n=!1)}),a.each(function(t,e){(e=$(e)).visible(!0,100)&&e.addClass("placed")}),e.each(function(t,e){(e=$(e)).visible(!0,800)&&e.addClass("placed")}),i.scroll(function(i){t.each(function(t,e){(e=$(e)).visible(!0)&&e.addClass("placed")}),a.each(function(t,e){(e=$(e)).visible(!0,100)&&e.addClass("placed")}),e.each(function(t,e){(e=$(e)).visible(!0,800)&&e.addClass("placed")}),s.each(function(t,e){(e=$(e)).visible(!0)&&(n&&e.append("<img src='assets/img/elemento_animated.svg' alt=''></img>"),n=!1)})})}},mounted:function(){var t=Array.prototype.map,e=this;i.a.get("https://beta.anacarolinapereira.pt/db-api/getParceirosHomepage.php").then(function(a){var s=a.data,i=[];t.call(s,function(t){var e=t.img_src.split("uploads");i.push({id:t.id,name:t.name,img_src:"uploads"+e[1],url:t.link})}),e.$data.parceiros=i}).then(function(){e.FadeIn()})}},c={render:function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"parceiros-wrapper"},[e("div",{attrs:{id:"parceiros"}},[e("div",{staticClass:"title main movement"},[this._v("Os Nossos Parceiros")]),this._v(" "),e("div",{staticClass:"pics-wrapper"},this._l(this.parceiros,function(t){return e("div",{key:t.id,staticClass:"pic movement",style:{"background-image":"url("+t.img_src+")"}})}),0)])])},staticRenderFns:[]};var o=a("VU/8")(n,c,!1,function(t){a("UNWn")},"data-v-74cc4146",null);e.default=o.exports}});
//# sourceMappingURL=1.8fdcd596845f772c9faf.js.map