import{B as K,C as O,Z as P,K as J,t as Z,D as $,J as z}from"./element-plus.da7f6a44.js";import{_ as G}from"./picker.6adf8056.js";import{P as H}from"./index.b75bd452.js";import{a as M}from"./useDictOptions.e00f5941.js";import{r as p}from"./index.e69109c6.js";import{r as Q}from"./role.19e43e49.js";import{e as W}from"./post.7c620106.js";import{d as X}from"./department.07f9ee5c.js";import{d as Y,s as A,r as ee,e as ue,$ as y,o as n,c as E,U as a,L as o,a as i,u as m,V as k,a7 as U,K as c,R as x}from"./@vue.e8706010.js";function be(r){return p.get({url:"/auth.admin/lists",params:r},{ignoreCancelToken:!0})}function le(r){return p.post({url:"/auth.admin/add",params:r})}function ae(r){return p.post({url:"/auth.admin/edit",params:r})}function Be(r){return p.post({url:"/auth.admin/delete",params:r})}function oe(r){return p.get({url:"/auth.admin/detail",params:r})}const te={class:"edit-popup"},re=i("div",{class:"form-tips"},"\u5EFA\u8BAE\u5C3A\u5BF8\uFF1A100*100px\uFF0C\u652F\u6301jpg\uFF0Cjpeg\uFF0Cpng\u683C\u5F0F",-1),de=i("div",{class:"form-tips"},"\u5141\u8BB8\u591A\u4EBA\u540C\u65F6\u5728\u7EBF\u767B\u5F55",-1),Ve=Y({__name:"edit",emits:["success","close"],setup(r,{expose:j,emit:v}){const w=A(),f=A(),_=ee("add"),h=ue(()=>_.value=="edit"?"\u7F16\u8F91\u7BA1\u7406\u5458":"\u65B0\u589E\u7BA1\u7406\u5458"),u=y({id:"",account:"",name:"",dept_id:[],jobs_id:[],role_id:[],avatar:"",password:"",password_confirm:"",disable:0,multipoint_login:1,root:0}),g=(s,e,t)=>{u.password&&(e||t(new Error("\u8BF7\u518D\u6B21\u8F93\u5165\u5BC6\u7801")),e!==u.password&&t(new Error("\u4E24\u6B21\u8F93\u5165\u5BC6\u7801\u4E0D\u4E00\u81F4!"))),t()},F=y({account:[{required:!0,message:"\u8BF7\u8F93\u5165\u8D26\u53F7",trigger:["blur"]}],name:[{required:!0,message:"\u8BF7\u8F93\u5165\u540D\u79F0",trigger:["blur"]}],role_id:[{type:"array",required:!0,message:"\u8BF7\u9009\u62E9\u89D2\u8272",trigger:["blur"]}],password:[{required:!0,message:"\u8BF7\u8F93\u5165\u5BC6\u7801",trigger:["blur"]}],password_confirm:[{required:!0,message:"\u8BF7\u8F93\u5165\u786E\u8BA4\u5BC6\u7801",trigger:["blur"]},{validator:g,trigger:"blur"}]}),{optionsData:b}=M({role:{api:Q},jobs:{api:W},dept:{api:X}}),R=async()=>{var s,e;await((s=w.value)==null?void 0:s.validate()),_.value=="edit"?await ae(u):await le(u),(e=f.value)==null||e.close(),v("success")},q=(s="add")=>{var e;_.value=s,(e=f.value)==null||e.open()},S=async s=>{F.password=[],F.password_confirm=[{validator:g,trigger:"blur"}];const e=await oe({id:s.id});for(const t in u)e[t]!=null&&e[t]!=null&&(u[t]=e[t])},L=()=>{v("close")};return j({open:q,setFormData:S}),(s,e)=>{const t=K,d=O,N=G,T=P,B=z,C=J,D=Z,I=$;return n(),E("div",te,[a(H,{ref_key:"popupRef",ref:f,title:m(h),async:!0,width:"550px",onConfirm:R,onClose:L},{default:o(()=>[a(I,{ref_key:"formRef",ref:w,model:u,"label-width":"84px",rules:F},{default:o(()=>[a(d,{label:"\u8D26\u53F7",prop:"account"},{default:o(()=>[a(t,{modelValue:u.account,"onUpdate:modelValue":e[0]||(e[0]=l=>u.account=l),disabled:u.root==1,placeholder:"\u8BF7\u8F93\u5165\u8D26\u53F7",clearable:""},null,8,["modelValue","disabled"])]),_:1}),a(d,{label:"\u5934\u50CF"},{default:o(()=>[i("div",null,[i("div",null,[a(N,{modelValue:u.avatar,"onUpdate:modelValue":e[1]||(e[1]=l=>u.avatar=l),limit:1},null,8,["modelValue"])]),re])]),_:1}),a(d,{label:"\u540D\u79F0",prop:"name"},{default:o(()=>[a(t,{modelValue:u.name,"onUpdate:modelValue":e[2]||(e[2]=l=>u.name=l),placeholder:"\u8BF7\u8F93\u5165\u540D\u79F0",clearable:""},null,8,["modelValue"])]),_:1}),a(d,{label:"\u5F52\u5C5E\u90E8\u95E8",prop:"dept_id"},{default:o(()=>[a(T,{class:"flex-1",modelValue:u.dept_id,"onUpdate:modelValue":e[3]||(e[3]=l=>u.dept_id=l),data:m(b).dept,clearable:"",multiple:"","node-key":"id",props:{value:"id",label:"name",disabled(l){return l.status!==1}},"check-strictly":"","default-expand-all":!0,placeholder:"\u8BF7\u9009\u62E9\u4E0A\u7EA7\u90E8\u95E8"},null,8,["modelValue","data","props"])]),_:1}),a(d,{label:"\u5C97\u4F4D",prop:"jobs_id"},{default:o(()=>[a(C,{class:"flex-1",modelValue:u.jobs_id,"onUpdate:modelValue":e[4]||(e[4]=l=>u.jobs_id=l),clearable:"",multiple:"",placeholder:"\u8BF7\u9009\u62E9\u5C97\u4F4D"},{default:o(()=>[(n(!0),E(k,null,U(m(b).jobs,(l,V)=>(n(),c(B,{key:V,label:l.name,value:l.id},null,8,["label","value"]))),128))]),_:1},8,["modelValue"])]),_:1}),a(d,{label:"\u89D2\u8272",prop:"role_id"},{default:o(()=>[a(C,{modelValue:u.role_id,"onUpdate:modelValue":e[5]||(e[5]=l=>u.role_id=l),disabled:u.root==1,class:"flex-1",multiple:"",placeholder:"\u8BF7\u9009\u62E9\u89D2\u8272",clearable:""},{default:o(()=>[u.root==1?(n(),c(B,{key:0,label:"\u7CFB\u7EDF\u7BA1\u7406\u5458",value:0})):x("",!0),(n(!0),E(k,null,U(m(b).role,(l,V)=>(n(),c(B,{key:V,label:l.name,value:l.id},null,8,["label","value"]))),128))]),_:1},8,["modelValue","disabled"])]),_:1}),a(d,{label:"\u5BC6\u7801",prop:"password"},{default:o(()=>[a(t,{modelValue:u.password,"onUpdate:modelValue":e[6]||(e[6]=l=>u.password=l),"show-password":"",clearable:"",placeholder:"\u8BF7\u8F93\u5165\u5BC6\u7801"},null,8,["modelValue"])]),_:1}),a(d,{label:"\u786E\u8BA4\u5BC6\u7801",prop:"password_confirm"},{default:o(()=>[a(t,{modelValue:u.password_confirm,"onUpdate:modelValue":e[7]||(e[7]=l=>u.password_confirm=l),"show-password":"",clearable:"",placeholder:"\u8BF7\u8F93\u5165\u786E\u8BA4\u5BC6\u7801"},null,8,["modelValue"])]),_:1}),u.root!=1?(n(),c(d,{key:0,label:"\u7BA1\u7406\u5458\u72B6\u6001"},{default:o(()=>[a(D,{modelValue:u.disable,"onUpdate:modelValue":e[8]||(e[8]=l=>u.disable=l),"active-value":0,"inactive-value":1},null,8,["modelValue"])]),_:1})):x("",!0),a(d,{label:"\u591A\u5904\u767B\u5F55"},{default:o(()=>[i("div",null,[a(D,{modelValue:u.multipoint_login,"onUpdate:modelValue":e[9]||(e[9]=l=>u.multipoint_login=l),"active-value":1,"inactive-value":0},null,8,["modelValue"]),de])]),_:1})]),_:1},8,["model","rules"])]),_:1},8,["title"])])}}});export{Ve as _,be as a,ae as b,Be as c};
