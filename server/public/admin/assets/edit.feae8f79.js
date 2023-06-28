import{_ as U}from"./index.1c00187d.js";import{S as q,I as T,B as A,C as N,G as S,H as $,t as I,N as j,O as G,D as H,w as L}from"./element-plus.da7f6a44.js";import{u as M,a as O}from"./vue-router.12d45bc3.js";import{c as z,d as P,e as J,f as K}from"./system.892b9f2a.js";import{h as Q}from"./index.e69109c6.js";import{d as f,$ as F,s as W,r as X,j as Y,o as Z,c as ee,U as e,L as a,a as n,S as b}from"./@vue.e8706010.js";import"./@vueuse.1e5a6e21.js";import"./@element-plus.196c7323.js";import"./lodash-es.29c53eac.js";import"./dayjs.389eebc4.js";import"./axios.1da4aec9.js";import"./async-validator.fb49d0f5.js";import"./@ctrl.82a509e0.js";import"./@popperjs.36402333.js";import"./escape-html.e5dfadb9.js";import"./normalize-wheel-es.8aeb3683.js";import"./lodash.8ea337b2.js";import"./pinia.dfca86b4.js";import"./vue-demi.ebc8116b.js";import"./css-color-function.2f4f8b9c.js";import"./color.4de71c9d.js";import"./clone.33ea348d.js";import"./color-convert.755d189f.js";import"./color-name.e7a4e1d3.js";import"./color-string.e356f5de.js";import"./balanced-match.d2a36341.js";import"./debug.45e63973.js";import"./ms.a9ae1d6d.js";import"./nprogress.f6aab5cc.js";import"./vue-clipboard3.8fce0f2c.js";import"./clipboard.88653269.js";import"./echarts.8d7a50ae.js";import"./zrender.1084fa23.js";import"./tslib.60310f1a.js";import"./highlight.js.4ebdf9a4.js";import"./@highlightjs.2cdc8407.js";const oe={class:"article-edit"},te={class:"w-80"},ae=b("\u5B9A\u65F6\u4EFB\u52A1"),le={class:"w-80"},ue={class:"w-80"},se={class:"w-80"},re={class:"w-80"},ne=b("\u4FDD\u5B58"),me=f({name:"scheduledTaskEdit"}),Je=f({...me,setup(ie){const m=M(),w=O(),t=F({id:"",name:"",command:"",expression:"",params:"",remark:"",status:1,type:1}),{removeTab:E}=Q(),i=W(),B=F({name:[{required:!0,message:"\u8BF7\u8F93\u5165\u540D\u79F0"}],command:[{required:!0,message:"\u8BF7\u8F93\u5165thankphp\u547D\u4EE4\uFF0C\u5982vresion"}],expression:[{required:!0,message:"\u8BF7\u8F93\u5165crontab\u89C4\u5219\uFF0C\u4F8B\uFF1A5 9 * * *"}]}),v=async()=>{const u=await z({id:m.query.id});Object.keys(t).forEach(o=>{t[o]=u[o]})},d=X([]),p=async()=>{var o;await((o=i.value)==null?void 0:o.validateField(["expression"]));const u=await P({expression:t.expression});d.value=u},V=async()=>{var u;await((u=i.value)==null?void 0:u.validate()),m.query.id?await J(t):await K(t),E(),w.back()};return Y(async()=>{!m.query.id||(await v(),await p())}),(u,o)=>{const x=q,c=T,r=A,s=N,h=S,C=$,y=I,_=j,k=G,D=H,g=L,R=U;return Z(),ee("div",oe,[e(c,{class:"!border-none",shadow:"never"},{default:a(()=>[e(x,{content:u.$route.meta.title,onBack:o[0]||(o[0]=l=>u.$router.back())},null,8,["content"])]),_:1}),e(c,{class:"mt-4 !border-none",shadow:"never"},{default:a(()=>[e(D,{ref_key:"formRef",ref:i,class:"ls-form",model:t,"label-width":"85px",rules:B},{default:a(()=>[e(s,{label:"\u540D\u79F0",prop:"name"},{default:a(()=>[n("div",te,[e(r,{modelValue:t.name,"onUpdate:modelValue":o[1]||(o[1]=l=>t.name=l),placeholder:"\u8BF7\u8F93\u5165\u540D\u79F0",maxlength:"30",clearable:""},null,8,["modelValue"])])]),_:1}),e(s,{label:"\u7C7B\u578B",prop:"type"},{default:a(()=>[e(C,{modelValue:t.type,"onUpdate:modelValue":o[2]||(o[2]=l=>t.type=l)},{default:a(()=>[e(h,{label:1},{default:a(()=>[ae]),_:1})]),_:1},8,["modelValue"])]),_:1}),e(s,{label:"\u547D\u4EE4",prop:"command"},{default:a(()=>[n("div",le,[e(r,{modelValue:t.command,"onUpdate:modelValue":o[3]||(o[3]=l=>t.command=l),placeholder:"\u8BF7\u8F93\u5165thinkphp\u547D\u4EE4\uFF0C\u5982vresion",clearable:""},null,8,["modelValue"])])]),_:1}),e(s,{label:"\u53C2\u6570",prop:"params"},{default:a(()=>[n("div",ue,[e(r,{modelValue:t.params,"onUpdate:modelValue":o[4]||(o[4]=l=>t.params=l),placeholder:"\u8BF7\u8F93\u5165\u53C2\u6570\uFF0C\u4F8B:--id 8 --name \u6D4B\u8BD5",clearable:""},null,8,["modelValue"])])]),_:1}),e(s,{label:"\u72B6\u6001"},{default:a(()=>[e(y,{modelValue:t.status,"onUpdate:modelValue":o[5]||(o[5]=l=>t.status=l),"active-value":1,"inactive-value":2},null,8,["modelValue"])]),_:1}),e(s,{label:"\u89C4\u5219",prop:"expression"},{default:a(()=>[n("div",se,[e(r,{onBlur:p,modelValue:t.expression,"onUpdate:modelValue":o[6]||(o[6]=l=>t.expression=l),placeholder:"\u8BF7\u8F93\u5165crontab\u89C4\u5219\uFF0C\u4F8B\uFF1A5 9 * * *"},null,8,["modelValue"])])]),_:1}),e(s,null,{default:a(()=>[e(k,{data:d.value,style:{"max-width":"320px"}},{default:a(()=>[e(_,{prop:"time",label:"\u5E8F\u53F7","min-width":"80"}),e(_,{prop:"date",label:"\u6267\u884C\u65F6\u95F4","min-width":"240"})]),_:1},8,["data"])]),_:1}),e(s,{label:"\u5907\u6CE8",prop:"remark"},{default:a(()=>[n("div",re,[e(r,{modelValue:t.remark,"onUpdate:modelValue":o[7]||(o[7]=l=>t.remark=l),type:"textarea",autosize:{minRows:3,maxRows:6},maxlength:200,"show-word-limit":"",clearable:""},null,8,["modelValue"])])]),_:1})]),_:1},8,["model","rules"])]),_:1}),e(R,null,{default:a(()=>[e(g,{type:"primary",onClick:V},{default:a(()=>[ne]),_:1})]),_:1})])}}});export{Je as default};