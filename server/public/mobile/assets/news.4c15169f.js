import{H as t}from"./index.134bed81.js";function a(a){return t.get({url:"/article/lists",data:a})}function r(a){return t.get({url:"/article/detail",data:a})}function e(a){return t.post({url:"/article/addCollect",data:a},{isAuth:!0})}function l(a){return t.post({url:"/article/cancelCollect",data:a},{isAuth:!0})}function n(){return t.get({url:"/article/collect"})}function u(){return t.get({url:"/news/allData"})}export{r as a,e as b,l as c,n as d,a as e,u as g};