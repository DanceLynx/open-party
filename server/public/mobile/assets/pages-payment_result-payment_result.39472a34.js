import{l as e,D as a,aK as s,y as t,E as r,N as l,o as u,p as i,f as o,b as d,w as c,s as n,e as m,t as f,c as p,F as _,L as g,K as x,r as y,a as h,C as b,j as v}from"./index.134bed81.js";import{_ as w}from"./u-loading.e72bd4cb.js";import{_ as j}from"./u-image.d9036226.js";import{_ as k}from"./u-button.dbdc4bbd.js";import{g as O,_ as R}from"./pay.622e04e6.js";import{_ as C}from"./plugin-vue_export-helper.21dcd24c.js";import"./u-icon.3f533f9b.js";var E=C(e({__name:"payment_result",setup(e){const C={succeed:{text:"支付成功",image:"/static/images/payment/icon_succeed.png"},waiting:{text:"等待支付",image:"/static/images/payment/icon_waiting.png"}},E=a(s.LOADING),L=a({id:"",from:""}),N=t({order:{}}),A=r((()=>{const e=!!N.pay_status;return C[e?"succeed":"waiting"]})),D=()=>{g({url:"/pages/index/index"})},I=()=>{if("recharge"===L.value.from)x({url:"/packages/pages/recharge/recharge"})};return l((async e=>{try{if(!e.id)throw new Error("订单不存在");L.value=e,await new Promise(((e,a)=>{O({order_id:L.value.id,from:L.value.from}).then((a=>{Object.assign(N,a),e(a)})).catch((e=>{a(e)}))})),E.value=s.NORMAL}catch(a){console.log(a),E.value=s.ERROR}})),(e,a)=>{const s=y(h("u-empty"),w),t=y(h("u-image"),j),r=b,l=v,g=y(h("u-button"),k),x=y(h("page-status"),R);return u(),i(_,null,[o(" 页面状态 "),d(x,{status:E.value},{error:c((()=>[d(s,{text:"订单不存在",mode:"order"})])),default:c((()=>[d(l,{class:"payment-result p-[20rpx]"},{default:c((()=>[d(l,{class:"result bg-white p-[20rpx] rounded-md"},{default:c((()=>[d(l,{class:"flex flex-col items-center my-[40rpx]"},{default:c((()=>[o(" 支付状态图片 "),d(t,{class:"status-image",src:n(A).image,width:"100",height:"100",shape:"circle"},null,8,["src"]),o(" 支付状态文字 "),d(r,{class:"text-2xl font-medium mt-[20rpx]"},{default:c((()=>[m(f(n(A).text),1)])),_:1}),d(l,{class:"text-3xl font-medium mt-[20rpx]"},{default:c((()=>[m(" ¥ "+f(N.order.order_amount),1)])),_:1})])),_:1}),o(" 支付信息 "),d(l,{class:"result-info"},{default:c((()=>[d(l,{class:"result-info__item"},{default:c((()=>[d(r,null,{default:c((()=>[m("订单编号")])),_:1}),d(r,null,{default:c((()=>[m(f(N.order.order_sn),1)])),_:1})])),_:1}),d(l,{class:"result-info__item"},{default:c((()=>[d(r,null,{default:c((()=>[m("付款时间")])),_:1}),d(r,null,{default:c((()=>[m(f(N.order.pay_time),1)])),_:1})])),_:1}),d(l,{class:"result-info__item"},{default:c((()=>[d(r,null,{default:c((()=>[m("支付方式")])),_:1}),N.pay_status?(u(),p(r,{key:0},{default:c((()=>[m(f(N.order.pay_way||"-"),1)])),_:1})):(u(),p(r,{key:1},{default:c((()=>[m("未支付")])),_:1}))])),_:1})])),_:1})])),_:1}),d(l,{class:"mt-[40rpx]"},{default:c((()=>[d(l,{class:"mb-[20rpx]"},{default:c((()=>["recharge"==L.value.from?(u(),p(g,{key:0,type:"primary",shape:"circle","hover-class":"none",onClick:I},{default:c((()=>[m(" 继续充值 ")])),_:1})):o("v-if",!0)])),_:1}),d(l,{class:"mb-[20rpx]"},{default:c((()=>[d(g,{type:"primary",plain:"",shape:"circle","hover-class":"none",onClick:D},{default:c((()=>[m(" 返回首页 ")])),_:1})])),_:1})])),_:1})])),_:1})])),_:1},8,["status"])],2112)}}}),[["__scopeId","data-v-514986f8"]]);export{E as default};