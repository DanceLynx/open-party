import{U,E as M,F as N,C as q,D as H,P as I}from"./element-plus.da7f6a44.js";import{a as O}from"./role.19e43e49.js";import{P as $}from"./index.b75bd452.js";import{s as j}from"./index.e69109c6.js";import{m as z}from"./menu.4593c189.js";import{d as G,s as p,r as c,$ as J,o as v,c as Q,U as o,L as u,M as W,K as X,a as k,n as y}from"./@vue.e8706010.js";const Y={class:"edit-popup"},ne=G({__name:"auth",emits:["success","close"],setup(Z,{expose:C,emit:f}){const t=p(),_=p(),r=p(),x=c(!1),d=c(!0),i=c(!1),h=c([]),m=c([]),s=J({id:"",name:"",desc:"",sort:0,menu_id:[]}),b={name:[{required:!0,message:"\u8BF7\u8F93\u5165\u540D\u79F0",trigger:["blur"]}]},g=()=>{i.value=!0,z().then(e=>{m.value=e,h.value=j(e),y(()=>{D()}),i.value=!1})},E=()=>{var a,n;const e=(a=t.value)==null?void 0:a.getCheckedKeys(),l=(n=t.value)==null?void 0:n.getHalfCheckedKeys();return e==null||e.unshift.apply(e,l),e},D=()=>{s.menu_id.forEach(e=>{y(()=>{var l;(l=t.value)==null||l.setChecked(e,!0,!1)})})},w=e=>{const l=m.value;for(let a=0;a<l.length;a++)t.value.store.nodesMap[l[a].id].expanded=e},F=e=>{var l,a;e?(l=t.value)==null||l.setCheckedKeys(h.value.map(n=>n.id)):(a=t.value)==null||a.setCheckedKeys([])},A=async()=>{var e,l;await((e=_.value)==null?void 0:e.validate()),s.menu_id=E(),await O(s),(l=r.value)==null||l.close(),f("success")},K=()=>{f("close")},R=()=>{var e;(e=r.value)==null||e.open()},B=async e=>{for(const l in s)e[l]!=null&&e[l]!=null&&(s[l]=e[l])};return g(),C({open:R,setFormData:B}),(e,l)=>{const a=N,n=U,V=q,S=M,T=H,L=I;return v(),Q("div",Y,[o($,{ref_key:"popupRef",ref:r,title:"\u5206\u914D\u6743\u9650",async:!0,width:"550px",onConfirm:A,onClose:K},{default:u(()=>[W((v(),X(T,{class:"ls-form",ref_key:"formRef",ref:_,rules:b,model:s,"label-width":"60px"},{default:u(()=>[o(S,{class:"h-[400px] sm:h-[600px]"},{default:u(()=>[o(V,{label:"\u6743\u9650",prop:"menu_id"},{default:u(()=>[k("div",null,[o(a,{label:"\u5C55\u5F00/\u6298\u53E0",onChange:w}),o(a,{label:"\u5168\u9009/\u4E0D\u5168\u9009",onChange:F}),o(a,{modelValue:d.value,"onUpdate:modelValue":l[0]||(l[0]=P=>d.value=P),label:"\u7236\u5B50\u8054\u52A8"},null,8,["modelValue"]),k("div",null,[o(n,{ref_key:"treeRef",ref:t,data:m.value,props:{label:"name",children:"children"},"check-strictly":!d.value,"node-key":"id","default-expand-all":x.value,"show-checkbox":""},null,8,["data","check-strictly","default-expand-all"])])])]),_:1})]),_:1})]),_:1},8,["model"])),[[L,i.value]])]),_:1},512)])}}});export{ne as _};
