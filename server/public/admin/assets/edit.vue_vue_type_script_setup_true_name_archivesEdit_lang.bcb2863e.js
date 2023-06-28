import{J as P,K as T,C as $,B as G,G as K,H,L as J,D as z}from"./element-plus.da7f6a44.js";import{P as Q}from"./index.b75bd452.js";import{r as _,g as W,t as A}from"./index.e69109c6.js";import{d as Y,r as q,s as x,e as X,$ as w,j as Z,o as s,c as p,U as a,L as t,u as ee,a as ue,V as F,a7 as c,S as b,K as f,T as k}from"./@vue.e8706010.js";function ce(o){return _.get({url:"/archives.archives/lists",params:o})}function le(o){return _.post({url:"/archives.archives/add",params:o})}function ae(o){return _.post({url:"/archives.archives/edit",params:o})}function fe(o){return _.post({url:"/archives.archives/delete",params:o})}function te(o){return _.get({url:"/archives.archives/detail",params:o})}const re={class:"edit-popup"},oe={class:"h-[500px] overflow-y-auto"},de=b(" \u5426"),se=b("\u662F"),ie=Y({name:"archivesEdit"}),_e=Y({...ie,props:{dictData:{type:Object,default:()=>({})}},emits:["success","close"],setup(o,{expose:j,emit:y}){const C=q([]),h=x(),g=x(),E=q("add"),R=X(()=>E.value=="edit"?"\u7F16\u8F91\u6863\u6848\u8868":"\u65B0\u589E\u6863\u6848\u8868"),l=w({id:"",name:"",user_id:"",idcard:"",gender:"",birthday_time:"",nation:"",native_place:"",address:"",education:"",college:"",archives_status:"",department:"",contact:"",is_flow:"",is_merry:"",join_time:"",real_time:"",see:"",situation:""}),I=w({user_id:[{required:!0,message:"\u8BF7\u9009\u62E9\u7528\u6237",trigger:["blur"]}],name:[{required:!0,message:"\u8BF7\u8F93\u5165\u59D3\u540D",trigger:["blur"]}],idcard:[{required:!0,message:"\u8BF7\u8F93\u5165\u8EAB\u4EFD\u8BC1",trigger:["blur"]}],gender:[{required:!0,message:"\u8BF7\u9009\u62E9\u6027\u522B",trigger:["blur"]}],birthday_time:[{required:!0,message:"\u8BF7\u9009\u62E9\u51FA\u751F\u65E5\u671F",trigger:["blur"]}],nation:[{required:!0,message:"\u8BF7\u8F93\u5165\u6C11\u65CF",trigger:["blur"]}],native_place:[{required:!0,message:"\u8BF7\u8F93\u5165\u7C4D\u8D2F",trigger:["blur"]}],address:[{required:!0,message:"\u8BF7\u8F93\u5165\u5730\u5740",trigger:["blur"]}],education:[{required:!0,message:"\u8BF7\u8F93\u5165\u5B66\u5386",trigger:["blur"]}],college:[{required:!0,message:"\u8BF7\u8F93\u5165\u6BD5\u4E1A\u9662\u6821",trigger:["blur"]}],archives_status:[{required:!0,message:"\u8BF7\u9009\u62E9\u515A\u7C4D\u72B6\u6001",trigger:["blur"]}],department:[{required:!0,message:"\u8BF7\u8F93\u5165\u515A\u652F\u90E8",trigger:["blur"]}],contact:[{required:!0,message:"\u8BF7\u8F93\u5165\u8054\u7CFB\u7535\u8BDD",trigger:["blur"]}],is_flow:[{required:!0,message:"\u8BF7\u9009\u62E9\u662F\u5426\u4E3A\u6D41\u52A8\u515A\u5458",trigger:["blur"]}],is_merry:[{required:!0,message:"\u8BF7\u9009\u62E9\u5A5A\u59FB\u72B6\u6001",trigger:["blur"]}],join_time:[{required:!0,message:"\u8BF7\u9009\u62E9\u52A0\u5165\u515A\u7EC4\u7EC7\u65F6\u95F4",trigger:["blur"]}],real_time:[{required:!0,message:"\u8BF7\u9009\u62E9\u6210\u4E3A\u6B63\u5F0F\u515A\u5458\u65F6\u95F4",trigger:["blur"]}],see:[{required:!0,message:"\u8BF7\u8F93\u5165\u4E3B\u8981\u7ECF\u5386",trigger:["blur"]}],situation:[{required:!0,message:"\u8BF7\u8F93\u5165\u53D1\u5C55\u515A\u5458\u60C5\u51B5",trigger:["blur"]}]}),U=async d=>{C.value=await W();for(const u in l)d[u]!=null&&d[u]!=null&&(l[u]=d[u]);l.birthday_time=A(l.birthday_time,"yyyy-mm-dd"),l.join_time=A(l.join_time,"yyyy-mm-dd"),l.real_time=A(l.real_time,"yyyy-mm-dd")},M=async d=>{const u=await te({id:d.id});U(u)},L=async()=>{var u,m;await((u=h.value)==null?void 0:u.validate());const d={...l};E.value=="edit"?await ae(d):await le(d),(m=g.value)==null||m.close(),y("success")},O=(d="add")=>{var u;E.value=d,(u=g.value)==null||u.open()},S=()=>{y("close")};return Z(async()=>{}),j({open:O,setFormData:U,getDetail:M}),(d,u)=>{const m=P,V=T,r=$,i=G,B=K,v=H,D=J,N=z;return s(),p("div",re,[a(Q,{ref_key:"popupRef",ref:g,title:ee(R),async:!0,width:"550px",onConfirm:L,onClose:S},{default:t(()=>[ue("div",oe,[a(N,{ref_key:"formRef",ref:h,model:l,"label-width":"140px",rules:I},{default:t(()=>[a(r,{label:"\u7528\u6237",prop:"user_id"},{default:t(()=>[a(V,{class:"flex-1",modelValue:l.user_id,"onUpdate:modelValue":u[0]||(u[0]=e=>l.user_id=e),clearable:"",filterable:"",placeholder:"\u8BF7\u9009\u62E9\u7528\u6237"},{default:t(()=>[(s(!0),p(F,null,c(C.value,(e,n)=>(s(),f(m,{key:n,label:`${e.account}-${e.nickname}`,value:parseInt(e.id)},null,8,["label","value"]))),128))]),_:1},8,["modelValue"])]),_:1}),a(r,{label:"\u59D3\u540D",prop:"name"},{default:t(()=>[a(i,{modelValue:l.name,"onUpdate:modelValue":u[1]||(u[1]=e=>l.name=e),clearable:"",placeholder:"\u8BF7\u8F93\u5165\u59D3\u540D"},null,8,["modelValue"])]),_:1}),a(r,{label:"\u6027\u522B",prop:"gender"},{default:t(()=>[a(v,{modelValue:l.gender,"onUpdate:modelValue":u[2]||(u[2]=e=>l.gender=e),placeholder:"\u8BF7\u9009\u62E9\u6027\u522B"},{default:t(()=>[(s(!0),p(F,null,c(o.dictData.sex,(e,n)=>(s(),f(B,{key:n,label:parseInt(e.value)},{default:t(()=>[b(k(e.name),1)]),_:2},1032,["label"]))),128))]),_:1},8,["modelValue"])]),_:1}),a(r,{label:"\u8EAB\u4EFD\u8BC1",prop:"idcard"},{default:t(()=>[a(i,{modelValue:l.idcard,"onUpdate:modelValue":u[3]||(u[3]=e=>l.idcard=e),clearable:"",placeholder:"\u8BF7\u8F93\u5165\u8EAB\u4EFD\u8BC1"},null,8,["modelValue"])]),_:1}),a(r,{label:"\u51FA\u751F\u65E5\u671F",prop:"birthday_time"},{default:t(()=>[a(D,{class:"flex-1 !flex",modelValue:l.birthday_time,"onUpdate:modelValue":u[4]||(u[4]=e=>l.birthday_time=e),clearable:"",type:"date","value-format":"YYYY-MM-DD",placeholder:"\u9009\u62E9\u51FA\u751F\u65E5\u671F"},null,8,["modelValue"])]),_:1}),a(r,{label:"\u6C11\u65CF",prop:"nation"},{default:t(()=>[a(i,{modelValue:l.nation,"onUpdate:modelValue":u[5]||(u[5]=e=>l.nation=e),clearable:"",placeholder:"\u8BF7\u8F93\u5165\u6C11\u65CF"},null,8,["modelValue"])]),_:1}),a(r,{label:"\u7C4D\u8D2F",prop:"native_place"},{default:t(()=>[a(i,{modelValue:l.native_place,"onUpdate:modelValue":u[6]||(u[6]=e=>l.native_place=e),clearable:"",placeholder:"\u8BF7\u8F93\u5165\u7C4D\u8D2F"},null,8,["modelValue"])]),_:1}),a(r,{label:"\u5730\u5740",prop:"address"},{default:t(()=>[a(i,{modelValue:l.address,"onUpdate:modelValue":u[7]||(u[7]=e=>l.address=e),clearable:"",placeholder:"\u8BF7\u8F93\u5165\u5730\u5740"},null,8,["modelValue"])]),_:1}),a(r,{label:"\u5B66\u5386",prop:"education"},{default:t(()=>[a(i,{modelValue:l.education,"onUpdate:modelValue":u[8]||(u[8]=e=>l.education=e),clearable:"",placeholder:"\u8BF7\u8F93\u5165\u5B66\u5386"},null,8,["modelValue"])]),_:1}),a(r,{label:"\u6BD5\u4E1A\u9662\u6821",prop:"college"},{default:t(()=>[a(i,{modelValue:l.college,"onUpdate:modelValue":u[9]||(u[9]=e=>l.college=e),clearable:"",placeholder:"\u8BF7\u8F93\u5165\u6BD5\u4E1A\u9662\u6821"},null,8,["modelValue"])]),_:1}),a(r,{label:"\u515A\u7C4D\u72B6\u6001",prop:"archives_status"},{default:t(()=>[a(V,{class:"flex-1",modelValue:l.archives_status,"onUpdate:modelValue":u[10]||(u[10]=e=>l.archives_status=e),clearable:"",placeholder:"\u8BF7\u9009\u62E9\u515A\u7C4D\u72B6\u6001"},{default:t(()=>[(s(!0),p(F,null,c(o.dictData.archives_status,(e,n)=>(s(),f(m,{key:n,label:e.name,value:parseInt(e.value)},null,8,["label","value"]))),128))]),_:1},8,["modelValue"])]),_:1}),a(r,{label:"\u515A\u652F\u90E8",prop:"department"},{default:t(()=>[a(V,{class:"flex-1",modelValue:l.department,"onUpdate:modelValue":u[11]||(u[11]=e=>l.department=e),clearable:"",placeholder:"\u8BF7\u9009\u62E9\u515A\u652F\u90E8"},{default:t(()=>[(s(!0),p(F,null,c(o.dictData.department,(e,n)=>(s(),f(m,{key:n,label:e.name,value:parseInt(e.value)},null,8,["label","value"]))),128))]),_:1},8,["modelValue"])]),_:1}),a(r,{label:"\u8054\u7CFB\u7535\u8BDD",prop:"contact"},{default:t(()=>[a(i,{modelValue:l.contact,"onUpdate:modelValue":u[12]||(u[12]=e=>l.contact=e),clearable:"",placeholder:"\u8BF7\u8F93\u5165\u8054\u7CFB\u7535\u8BDD"},null,8,["modelValue"])]),_:1}),a(r,{label:"\u662F\u5426\u4E3A\u6D41\u52A8\u515A\u5458",prop:"is_flow"},{default:t(()=>[a(v,{modelValue:l.is_flow,"onUpdate:modelValue":u[13]||(u[13]=e=>l.is_flow=e),placeholder:"\u8BF7\u9009\u62E9\u662F\u5426\u4E3A\u6D41\u52A8\u515A\u5458"},{default:t(()=>[a(B,{label:0},{default:t(()=>[de]),_:1}),a(B,{label:1},{default:t(()=>[se]),_:1})]),_:1},8,["modelValue"])]),_:1}),a(r,{label:"\u5A5A\u59FB\u72B6\u6001",prop:"is_merry"},{default:t(()=>[a(v,{modelValue:l.is_merry,"onUpdate:modelValue":u[14]||(u[14]=e=>l.is_merry=e),placeholder:"\u8BF7\u9009\u62E9\u5A5A\u59FB\u72B6\u6001"},{default:t(()=>[(s(!0),p(F,null,c(o.dictData.merry_status,(e,n)=>(s(),f(B,{key:n,label:parseInt(e.value)},{default:t(()=>[b(k(e.name),1)]),_:2},1032,["label"]))),128))]),_:1},8,["modelValue"])]),_:1}),a(r,{label:"\u52A0\u5165\u515A\u7EC4\u7EC7\u65F6\u95F4",prop:"join_time"},{default:t(()=>[a(D,{class:"flex-1 !flex",modelValue:l.join_time,"onUpdate:modelValue":u[15]||(u[15]=e=>l.join_time=e),clearable:"",type:"date","value-format":"YYYY-MM-DD",placeholder:"\u9009\u62E9\u52A0\u5165\u515A\u7EC4\u7EC7\u65F6\u95F4"},null,8,["modelValue"])]),_:1}),a(r,{label:"\u6210\u4E3A\u6B63\u5F0F\u515A\u5458\u65F6\u95F4",prop:"real_time"},{default:t(()=>[a(D,{class:"flex-1 !flex",modelValue:l.real_time,"onUpdate:modelValue":u[16]||(u[16]=e=>l.real_time=e),clearable:"",type:"date","value-format":"YYYY-MM-DD",placeholder:"\u9009\u62E9\u6210\u4E3A\u6B63\u5F0F\u515A\u5458\u65F6\u95F4"},null,8,["modelValue"])]),_:1}),a(r,{label:"\u4E3B\u8981\u7ECF\u5386",prop:"see"},{default:t(()=>[a(i,{modelValue:l.see,"onUpdate:modelValue":u[17]||(u[17]=e=>l.see=e),clearable:"",placeholder:"\u8BF7\u8F93\u5165\u4E3B\u8981\u7ECF\u5386",type:"textarea",rows:"4"},null,8,["modelValue"])]),_:1}),a(r,{label:"\u53D1\u5C55\u515A\u5458\u60C5\u51B5",prop:"situation"},{default:t(()=>[a(i,{modelValue:l.situation,"onUpdate:modelValue":u[18]||(u[18]=e=>l.situation=e),clearable:"",placeholder:"\u8BF7\u8F93\u5165\u53D1\u5C55\u515A\u5458\u60C5\u51B5",type:"textarea",rows:"4"},null,8,["modelValue"])]),_:1})]),_:1},8,["model","rules"])])]),_:1},8,["title"])])}}});export{_e as _,ce as a,fe as b};