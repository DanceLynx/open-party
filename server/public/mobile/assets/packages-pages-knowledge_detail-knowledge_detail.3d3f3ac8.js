import{l as a,D as e,N as s,o as t,c as l,w as r,f as u,b as d,e as c,t as f,j as i,x as m,C as p,r as x,a as o}from"./index.134bed81.js";import{_ as n}from"./u-parse.34733bc2.js";import{_}from"./icon_visit.9ad00ab7.js";import{a as v}from"./knowledge.96538bf2.js";import{_ as b}from"./plugin-vue_export-helper.21dcd24c.js";var w=b(a({__name:"knowledge_detail",setup(a){const b=e({});let w="";return s((a=>{w=a.id,(async a=>{b.value=await v({id:a})})(w)})),(a,e)=>{const s=i,v=m,w=p,h=x(o("u-parse"),n);return t(),l(s,{class:"news-detail bg-white"},{default:r((()=>[u(" 标题信心 "),d(s,{class:"news-detail-header py-[20rpx] px-[30rpx]"},{default:r((()=>[d(s,{class:"text-3xl font-medium"},{default:r((()=>[c(f(b.value.title),1)])),_:1}),d(s,{class:"flex mt-[20rpx] text-xs"},{default:r((()=>[b.value.author?(t(),l(s,{key:0,class:"mr-[40rpx]"},{default:r((()=>[c("作者: "+f(b.value.author),1)])),_:1})):u("v-if",!0),d(s,{class:"text-muted mr-[40rpx] flex-1"},{default:r((()=>[c(f(b.value.create_time),1)])),_:1}),d(s,{class:"flex items-center text-muted flex-none"},{default:r((()=>[d(v,{src:_,class:"w-[30rpx] h-[30rpx]"}),d(s,{class:"ml-[10rpx]"},{default:r((()=>[c(f(b.value.click),1)])),_:1})])),_:1})])),_:1})])),_:1}),u(" 咨询内容 "),d(s,{class:"news-detail-section bg-white p-[24rpx]"},{default:r((()=>[u(" 摘要 "),b.value.abstract?(t(),l(s,{key:0,class:"summary p-[20rpx] text-base"},{default:r((()=>[d(w,{class:"font-medium"},{default:r((()=>[c("摘要: ")])),_:1}),c(" "+f(b.value.abstract),1)])),_:1})):u("v-if",!0),u(" 内容 "),d(s,{class:"mt-[20rpx]"},{default:r((()=>[d(h,{html:b.value.content},null,8,["html"])])),_:1})])),_:1})])),_:1})}}}),[["__scopeId","data-v-012e3df6"]]);export{w as default};