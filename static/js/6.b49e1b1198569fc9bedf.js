webpackJsonp([6,9,33,34],{"2wuS":function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var s=a("gboL"),i=a("QX9n"),o=a("D1bE"),r={components:{banner:s.default,apresentacao:i.default,posts:o.default},metaInfo:function(){return{title:"Blog - Ana Carolina Pereira - Clínica de Psicologia",meta:[{name:"description",content:"No blog Ana Carolina Pereira pode ficar a par de artigos relacionados com a actividade da clínica e da academia!"},{property:"og:title",content:"Blog - Ana Carolina Pereira - Clínica de Psicologia"},{property:"og:url",content:"https://www.anacarolinapereira.pt/blog"},{property:"og:description",content:"No blog Ana Carolina Pereira pode ficar a par de artigos relacionados com a actividade da clínica e da academia!"}]}}},n={render:function(){var t=this.$createElement,e=this._self._c||t;return e("div",[e("banner"),this._v(" "),e("apresentacao"),this._v(" "),e("posts")],1)},staticRenderFns:[]};var c=a("VU/8")(r,n,!1,function(t){a("qCZs")},"data-v-08bdd91a",null);e.default=c.exports},"4Exu":function(t,e){},D1bE:function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var s=a("mtWM"),i=a.n(s),o=(a("PJh5"),{data:function(){return{posts:[{id:1,topic:"",copy:"",date:"",img_src:"",url_code:"",article_src:""}]}},mounted:function(){var t=Array.prototype.map,e=this;i.a.get("https://beta.anacarolinapereira.pt/db-api/getBlogPosts.php").then(function(a){var s=a.data,i=[];t.call(s,function(t){var e=t.img_src.split("uploads");i.push({id:t.id,topic:t.title,copy:t.text,date:t.date,img_src:"https://www.anacarolinapereira.pt/uploads"+e[1],url_code:t.url_code,article_src:"/blog/"+t.url_code})}),e.$data.posts=i})}}),r={render:function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"artigos-wrapper"},t._l(t.posts,function(e){return a("div",{key:e.id,staticClass:"artigos"},[a("div",{staticClass:"container"},[a("router-link",{attrs:{to:e.article_src}},[a("div",{staticClass:"title-topic",domProps:{innerHTML:t._s(e.topic)}})]),t._v(" "),a("div",{staticClass:"date-topic"},[a("span",{domProps:{innerHTML:t._s(e.date)}})]),t._v(" "),a("div",{staticClass:"copy-topic",domProps:{innerHTML:t._s(e.copy)}})],1),t._v(" "),a("router-link",{attrs:{to:e.article_src}},[a("div",{staticClass:"img"},[a("img",{attrs:{src:e.img_src,alt:""}})])])],1)}),0)},staticRenderFns:[]};var n=a("VU/8")(o,r,!1,function(t){a("FAdN")},"data-v-34cd4bce",null);e.default=n.exports},FAdN:function(t,e){},QX9n:function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var s=a("dth2"),i=a.n(s),o=(a("mtWM"),{data:function(){return{peao:i.a,text:"Gosto de me sentir “em casa”. E, por isso, moro, também, aqui. Nos pensamentos que escrevo. Nós quais anseio, sempre, confidenciando o que fui aprendendo. O que continuo a aprender. Nas conversas. Nas histórias que vou partilhando. Moro, de igual modo, no que faço. No meu ofício. Gostava que o meu tempo pudesse fazer parte do seu, neste momento em que nos escutamos. Neste encontro (não)coincidente de palavras, histórias e projectos."}},mounted:function(){Array.prototype.map}}),r={render:function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"apresentacao-wrapper"},[e("div",[e("div",{staticClass:"imgs"},[e("img",{staticClass:"peao",attrs:{src:this.peao,alt:""}})]),this._v(" "),e("div",{attrs:{id:"apresentacao"}},[e("div",{staticClass:"copy",domProps:{innerHTML:this._s(this.text)}}),this._v(" "),e("div",{staticClass:"line"})])])])},staticRenderFns:[]};var n=a("VU/8")(o,r,!1,function(t){a("4Exu")},"data-v-e696c8d6",null);e.default=n.exports},dth2:function(t,e,a){t.exports=a.p+"static/img/peao.4b34d6a.svg"},gPT2:function(t,e){},gboL:function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var s={render:function(){this.$createElement;this._self._c;return this._m(0)},staticRenderFns:[function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"slideshow-wrapper"},[e("div",{attrs:{id:"slideshow"}},[e("div",{staticClass:"slide"},[e("div",{staticClass:"copy"},[e("div",{staticClass:"line"}),this._v(" "),e("h1",{staticClass:"title"},[this._v("Blog")])])])])])}]};var i=a("VU/8")({},s,!1,function(t){a("gPT2")},"data-v-36b04270",null);e.default=i.exports},qCZs:function(t,e){}});
//# sourceMappingURL=6.b49e1b1198569fc9bedf.js.map