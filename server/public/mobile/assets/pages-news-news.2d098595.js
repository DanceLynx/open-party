import{_ as e}from"./u-search.513f4dfa.js";import{l as a,y as s,N as t,o as l,c as i,w as r,f as c,b as d,e as o,p as n,q as _,F as f,r as m,a as u,k as p,j as w,C as x}from"./index.134bed81.js";import{_ as g}from"./u-icon.3f533f9b.js";import{_ as b}from"./news-card.571307f6.js";import{_ as j}from"./tabbar.69b45290.js";import{g as k}from"./news.4c15169f.js";import{k as h}from"./knowledge_card.fb86c95a.js";import{_ as y}from"./plugin-vue_export-helper.21dcd24c.js";import"./u-image.d9036226.js";import"./icon_visit.9ad00ab7.js";import"./u-badge.d315fb19.js";import"./util.f34da83a.js";var v=y(a({__name:"news",setup(a){const y=s({knowledge_cate_list:[],article_list:[],audio_cate_list:[]});return t((async e=>{const a=await k();y.knowledge_cate_list=a.knowledge_cate_list,y.article_list=a.article_list,y.audio_cate_list=a.audio_cate_list})),(a,s)=>{const t=m(u("u-search"),e),k=p,v=w,z=x,q=m(u("u-icon"),g),C=m(u("news-card"),b),F=m(u("tabbar"),j);return l(),i(v,{class:"news"},{default:r((()=>[c(" 搜索 "),d(k,{class:"news-search px-[24rpx] py-[14rpx] bg-white",url:"/pages/search/search"},{default:r((()=>[d(t,{placeholder:"请输入关键词搜索",disabled:"","show-action":!1})])),_:1}),d(v,{class:"article"},{default:r((()=>[d(v,{class:"flex items-center justify-between mx-[20rpx] my-[30rpx] text-2xl font-medium"},{default:r((()=>[d(v,{class:"article-title flex items-center"},{default:r((()=>[o("党史知识")])),_:1}),d(k,{url:"/packages/pages/knowledge_cate/knowledge_cate",class:"inline-block text-base"},{default:r((()=>[d(z,{class:"mr-1"},{default:r((()=>[o("更多")])),_:1}),d(q,{name:"arrow-right",size:"28rpx"})])),_:1})])),_:1}),d(v,{class:"flex flex-wrap justify-between bg-white"},{default:r((()=>[(l(!0),n(f,null,_(y.knowledge_cate_list,((e,a)=>(l(),i(h,{key:a,"knowledge-id":e.id,item:e},null,8,["knowledge-id","item"])))),128))])),_:1})])),_:1}),d(v,{class:"article"},{default:r((()=>[d(v,{class:"flex items-center justify-between mx-[20rpx] my-[30rpx] text-2xl font-medium"},{default:r((()=>[d(v,{class:"article-title flex items-center"},{default:r((()=>[o("党建参阅")])),_:1}),d(k,{url:"/packages/pages/news_list/news_list?id=3",class:"ml-auto text-base"},{default:r((()=>[d(z,{class:"mr-1"},{default:r((()=>[o("更多")])),_:1}),d(q,{name:"arrow-right",size:"28rpx"})])),_:1})])),_:1}),(l(!0),n(f,null,_(y.article_list,((e,a)=>(l(),i(C,{key:a,"news-id":e.id,item:e},null,8,["news-id","item"])))),128))])),_:1}),d(F)])),_:1})}}}),[["__scopeId","data-v-476c1210"]]);export{v as default};