webpackJsonp([34],{"1NUb":function(t,a){},D1bE:function(t,a,s){"use strict";Object.defineProperty(a,"__esModule",{value:!0});var r=s("mtWM"),i=s.n(r),e=s("PJh5"),c=s.n(e),o={data:function(){return{posts:[{id:1,topic:"",copy:"",date:"",img_src:"",url_code:"",article_src:""}]}},mounted:function(){var t=Array.prototype.map,a=this;i.a.get("https://beta.anacarolinapereira.pt/db-api/getBlogPosts.php").then(function(s){var r=s.data,i=[];t.call(r,function(t){var a=t.img_src.split("uploads"),s=t.text.replace(/(<([^>]+)>)/gi,"").substring(0,255);i.push({id:t.id,topic:t.title,copy:s+"...",date:c()(t.date).format("DD-MM-YYYY"),img_src:"https://beta.anacarolinapereira.pt/uploads"+a[1],url_code:t.url_code,article_src:"/blog/"+t.url_code})}),a.$data.posts=i})}},n={render:function(){var t=this,a=t.$createElement,s=t._self._c||a;return s("div",{staticClass:"artigos-wrapper"},t._l(t.posts,function(a){return s("div",{key:a.id,staticClass:"artigos"},[s("div",{staticClass:"container"},[s("router-link",{attrs:{to:a.article_src}},[s("div",{staticClass:"title-topic",domProps:{innerHTML:t._s(a.topic)}})]),t._v(" "),s("div",{staticClass:"date-topic"},[s("span",{domProps:{innerHTML:t._s(a.date)}})]),t._v(" "),s("div",{staticClass:"copy-topic",domProps:{innerHTML:t._s(a.copy)}})],1),t._v(" "),s("router-link",{attrs:{to:a.article_src}},[s("div",{staticClass:"img"},[s("img",{attrs:{src:a.img_src,alt:""}})])])],1)}),0)},staticRenderFns:[]};var p=s("VU/8")(o,n,!1,function(t){s("1NUb")},"data-v-302dc221",null);a.default=p.exports}});
//# sourceMappingURL=34.16ce198dc10a036ad4c3.js.map