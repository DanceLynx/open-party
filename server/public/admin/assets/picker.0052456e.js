import{B as C,d as w,f as G}from"./element-plus.da7f6a44.js";import{d as g,b as H}from"./index.e69109c6.js";import{d as h,r as v,o,c,a as E,V as F,a7 as B,P as D,T as O,U as S,S as $,e as b,w as k,L as A,K as f,u as _,k as V,R as x,s as I,Z as L}from"./@vue.e8706010.js";import{P as M}from"./index.b75bd452.js";var u=(l=>(l.SHOP_PAGES="shop",l.CUSTOM_LINK="custom",l))(u||{});const N={class:"shop-pages"},U={class:"link-list flex flex-wrap"},q=["onClick"],K=h({__name:"shop-pages",props:{modelValue:{type:Object,default:()=>({})}},emits:["update:modelValue"],setup(l,{emit:m}){const p=v([{path:"/pages/index/index",name:"\u7CFB\u7EDF\u9996\u9875",type:u.SHOP_PAGES},{path:"/pages/news/news",name:"\u5B66\u4E60\u624B\u518C",type:u.SHOP_PAGES},{path:"/pages/user/user",name:"\u4E2A\u4EBA\u4E2D\u5FC3",type:u.SHOP_PAGES},{path:"/pages/collection/collection",name:"\u6211\u7684\u6536\u85CF",type:u.SHOP_PAGES},{path:"/pages/customer_service/customer_service",name:"\u8054\u7CFB\u5BA2\u670D",type:u.SHOP_PAGES},{path:"/pages/user_set/user_set",name:"\u4E2A\u4EBA\u8BBE\u7F6E",type:u.SHOP_PAGES},{path:"/pages/as_us/as_us",name:"\u5173\u4E8E\u6211\u4EEC",type:u.SHOP_PAGES},{path:"/pages/user_data/user_data",name:"\u4E2A\u4EBA\u8D44\u6599",type:u.SHOP_PAGES},{path:"/pages/agreement/agreement",name:"\u9690\u79C1\u653F\u7B56",query:{type:"privacy"},type:u.SHOP_PAGES},{path:"/pages/agreement/agreement",name:"\u670D\u52A1\u534F\u8BAE",query:{type:"service"},type:u.SHOP_PAGES},{path:"/pages/search/search",name:"\u641C\u7D22",type:u.SHOP_PAGES},{path:"/packages/pages/user_wallet/user_wallet",name:"\u6211\u7684\u94B1\u5305",type:u.SHOP_PAGES},{path:"/packages/pages/member_list/member_list",name:"\u515A\u5458\u98CE\u91C7",type:u.SHOP_PAGES},{path:"/packages/pages/knowledge_cat/knowledge_cat",name:"\u515A\u53F2\u77E5\u8BC6",type:u.SHOP_PAGES}]),d=a=>{m("update:modelValue",a)};return(a,n)=>(o(),c("div",N,[E("div",U,[(o(!0),c(F,null,B(p.value,(r,e)=>(o(),c("div",{class:D(["link-item border border-br px-5 py-[5px] rounded-[3px] cursor-pointer mr-[10px] mb-[10px]",{"border-primary text-primary":l.modelValue.path==r.path&&l.modelValue.name==r.name}]),key:e,onClick:t=>d(r)},O(r.name),11,q))),128))])]))}}),R={class:"custom-link mt-[30px]"},T={class:"flex flex-wrap items-center"},j=$(" \u81EA\u5B9A\u4E49\u94FE\u63A5 "),z={class:"ml-4 flex-1 min-w-[100px]"},Z=E("div",{class:"form-tips"}," \u8BF7\u586B\u5199\u5B8C\u6574\u7684\u5E26\u6709\u201Chttps://\u201D\u6216\u201Chttp://\u201D\u7684\u94FE\u63A5\u5730\u5740\uFF0C\u94FE\u63A5\u7684\u57DF\u540D\u5FC5\u987B\u5728\u5FAE\u4FE1\u516C\u4F17\u5E73\u53F0\u8BBE\u7F6E\u4E1A\u52A1\u57DF\u540D ",-1),J=h({__name:"custom-link",props:{modelValue:{type:Object,default:()=>({})}},emits:["update:modelValue"],setup(l,{emit:m}){const p=d=>{m("update:modelValue",{path:"/pages/webview/webview",query:{url:d},type:u.CUSTOM_LINK})};return(d,a)=>{var r;const n=C;return o(),c("div",R,[E("div",T,[j,E("div",z,[S(n,{"model-value":(r=l.modelValue.query)==null?void 0:r.url,placeholder:"\u8BF7\u8F93\u5165\u94FE\u63A5\u5730\u5740",onInput:p},null,8,["model-value"])])]),Z])}}}),Q={class:"link flex"},W={class:"flex-1 pl-4"},X=h({__name:"index",props:{modelValue:{type:Object,required:!0}},emits:["update:modelValue"],setup(l,{emit:m}){const p=l,d=v([{name:"\u7CFB\u7EDF\u9875\u9762",type:u.SHOP_PAGES,link:{}},{name:"\u81EA\u5B9A\u4E49\u94FE\u63A5",type:u.CUSTOM_LINK,link:{}}]),a=b({get(){var e;return(e=d.value.find(t=>t.type==n.value))==null?void 0:e.link},set(e){d.value.forEach(t=>{t.type==n.value&&(t.link=e)})}}),n=v(u.SHOP_PAGES),r=e=>{n.value=e};return k(a,e=>{!e.type||m("update:modelValue",e)}),k(()=>p.modelValue,e=>{n.value=e.type,a.value=e},{immediate:!0}),(e,t)=>{const i=w,P=G;return o(),c("div",Q,[S(P,{"default-active":n.value,class:"w-[160px] min-h-[350px] link-menu",onSelect:r},{default:A(()=>[(o(!0),c(F,null,B(d.value,(s,y)=>(o(),f(i,{index:s.type,key:y},{default:A(()=>[E("span",null,O(s.name),1)]),_:2},1032,["index"]))),128))]),_:1},8,["default-active"]),E("div",W,[_(u).SHOP_PAGES==n.value?(o(),f(K,{key:0,modelValue:_(a),"onUpdate:modelValue":t[0]||(t[0]=s=>V(a)?a.value=s:null)},null,8,["modelValue"])):x("",!0),_(u).CUSTOM_LINK==n.value?(o(),f(J,{key:1,modelValue:_(a),"onUpdate:modelValue":t[1]||(t[1]=s=>V(a)?a.value=s:null)},null,8,["modelValue"])):x("",!0)])])}}});const Y=g(X,[["__scopeId","data-v-10be03e2"]]),ee=h({__name:"picker",props:{modelValue:{type:Object},disabled:{type:Boolean,default:!1}},emits:["update:modelValue"],setup(l,{emit:m}){const p=l,d=I(),a=v({path:"",type:u.SHOP_PAGES}),n=()=>{m("update:modelValue",a.value)},r=b(()=>{var e,t,i;switch((e=p.modelValue)==null?void 0:e.type){case u.SHOP_PAGES:return p.modelValue.name;case u.CUSTOM_LINK:return(t=p.modelValue.query)==null?void 0:t.url;default:return(i=p.modelValue)==null?void 0:i.name}});return k(()=>p.modelValue,e=>{e!=null&&e.type&&(a.value=e)},{immediate:!0}),(e,t)=>{const i=H,P=C;return o(),c("div",{class:"link-picker flex-1",onClick:t[2]||(t[2]=s=>{var y;return!l.disabled&&((y=_(d))==null?void 0:y.open())})},[S(P,{"model-value":_(r),placeholder:"\u8BF7\u9009\u62E9\u94FE\u63A5",readonly:"",disabled:l.disabled},{suffix:A(()=>{var s;return[(s=l.modelValue)!=null&&s.path?(o(),f(i,{key:1,name:"el-icon-Close",onClick:t[0]||(t[0]=L(y=>!l.disabled&&m("update:modelValue",{}),["stop"]))})):(o(),f(i,{key:0,name:"el-icon-ArrowRight"}))]}),_:1},8,["model-value","disabled"]),S(M,{ref_key:"popupRef",ref:d,width:"700px",title:"\u94FE\u63A5\u9009\u62E9",onConfirm:n},{default:A(()=>[S(Y,{modelValue:a.value,"onUpdate:modelValue":t[1]||(t[1]=s=>a.value=s)},null,8,["modelValue"])]),_:1},512)])}}});const ne=g(ee,[["__scopeId","data-v-a42918e4"]]);export{ne as _};