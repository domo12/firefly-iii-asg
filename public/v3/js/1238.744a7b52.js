"use strict";(globalThis["webpackChunkfirefly_iii"]=globalThis["webpackChunkfirefly_iii"]||[]).push([[1238],{1238:(e,r,s)=>{s.r(r),s.d(r,{default:()=>k});var a=s(9835),t=s(6970);const n={class:"row q-mx-md"},o={class:"col-12"},c={class:"text-h6"},i={class:"row"},u={class:"col-12 q-mb-xs"},l=(0,a._)("br",null,null,-1),d=(0,a._)("br",null,null,-1),w={class:"row q-mt-sm"},g={class:"col-12"};function h(e,r,s,h,p,m){const b=(0,a.up)("q-card-section"),_=(0,a.up)("q-card"),f=(0,a.up)("LargeTable"),y=(0,a.up)("q-page");return(0,a.wg)(),(0,a.j4)(y,null,{default:(0,a.w5)((()=>[(0,a._)("div",n,[(0,a._)("div",o,[(0,a.Wm)(_,{bordered:""},{default:(0,a.w5)((()=>[(0,a.Wm)(b,null,{default:(0,a.w5)((()=>[(0,a._)("div",c,(0,t.zw)(p.currency.name),1)])),_:1}),(0,a.Wm)(b,null,{default:(0,a.w5)((()=>[(0,a._)("div",i,[(0,a._)("div",u,[(0,a.Uk)(" Name: "+(0,t.zw)(p.currency.name),1),l,(0,a.Uk)(" Code: "+(0,t.zw)(p.currency.code),1),d])])])),_:1})])),_:1})])]),(0,a._)("div",w,[(0,a._)("div",g,[(0,a.Wm)(f,{ref:"table",loading:e.loading,page:p.page,rows:p.rows,"rows-number":p.rowsNumber,"rows-per-page":p.rowsPerPage,title:"Transactions",onOnRequest:m.onRequest},null,8,["loading","page","rows","rows-number","rows-per-page","onOnRequest"])])])])),_:1})}var p=s(1049),m=s(1484),b=s(3247);const _={name:"Show",data(){return{currency:{},rows:[],rowsNumber:1,rowsPerPage:10,page:1,code:""}},created(){this.code=this.$route.params.code,this.getCurrency()},components:{LargeTable:p.Z},methods:{onRequest:function(e){this.page=e.page,this.getCurrency()},getCurrency:function(){let e=new m.Z;e.get(this.code).then((e=>this.parseCurrency(e))),this.loading=!0;const r=new b.Z;this.rows=[],e.transactions(this.code,this.page,this.getCacheKey).then((e=>{let s=r.parseResponse(e);this.rowsPerPage=s.rowsPerPage,this.rowsNumber=s.rowsNumber,this.rows=s.rows,this.loading=!1}))},parseCurrency:function(e){this.currency={name:e.data.data.attributes.name,code:e.data.data.attributes.code}}}};var f=s(1639),y=s(9885),C=s(4458),q=s(3190),v=s(9984),P=s.n(v);const Z=(0,f.Z)(_,[["render",h]]),k=Z;P()(_,"components",{QPage:y.Z,QCard:C.Z,QCardSection:q.Z})}}]);