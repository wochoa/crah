import{H as m}from"./Header-a369a968.js";import{P as h}from"./page-header-a85ecb4e.js";import{S as g,M as w}from"./pagination.min-5176cc8d.js";import{_ as f,f as v,a as c,b as e,t as b,w as i,F as x,r as n,o as r,c as l,k as p}from"../js/app2.js";import{a as H}from"./index-62da23e9.js";import"./logo-dark-5cfa2f4b.js";const k={name:"",components:{Swiper:g,SwiperSlide:w,Header:m,PageHeader:h},data(){return{idnot:this.$route.params.id,detnot:{},swiperOptions:{slidesPerView:1,spaceBetween:30,centeredSlides:!0,autoplay:{delay:2500,disableOnInteraction:!1},pagination:{el:".swiper-pagination",clickable:!0},navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"}},title:"Noticias",items:[{text:"CRAH",href:"/"},{text:"Noticias",active:!0}]}},created(){this.cargardatos()},mounted(){},methods:{cargardatos(){var o="/noticias/"+this.idnot;H.get(o).then(s=>{this.detnot=s.data.detallenot[0]})},decodeHtml(o){console.log(o);var s=document.createElement("textarea");return s.innerHTML=o,s.value}}},y={class:"container pt-3"},F={class:"row"},S={class:"col-8"},B={class:"card p-3"},N={class:"p-3"},P=["src"],C=["src"],E=["src"],M=e("div",{slot:"pagination",class:"swiper-pagination"},null,-1),V=e("div",{slot:"button-next",class:"swiper-button-next"},null,-1),L=e("div",{slot:"button-prev",class:"swiper-button-prev"},null,-1),O=["innerHTML"],T=e("div",{class:"col-4"},[e("div",{class:"card"},[e("iframe",{src:"https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fprofile.php%3Fid%3D100076232595594&tabs=timeline&width=415&height=600&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=431428387353926",width:"415",height:"600",style:{border:"none",overflow:"hidden"},scrolling:"no",frameborder:"0",allowfullscreen:"true",allow:"autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"})])],-1);function A(o,s,D,I,t,R){const d=n("Header"),u=n("PageHeader"),a=n("swiper-slide"),_=n("swiper");return r(),v(x,null,[c(d),e("div",null,[e("div",y,[c(u,{title:t.title,items:t.items,class:"pt-5 mt-5"},null,8,["title","items"]),e("div",F,[e("div",S,[e("div",B,[e("h4",N,b(t.detnot.titulo),1),c(_,{class:"swiper-autoplay container",options:t.swiperOptions},{default:i(()=>[t.detnot.img1?(r(),l(a,{key:0},{default:i(()=>[e("img",{src:"http://gestionportales.regionhuanuco.gob.pe/storage/"+t.detnot.img1,class:"card-img-top"},null,8,P)]),_:1})):p("",!0),t.detnot.img2?(r(),l(a,{key:1},{default:i(()=>[e("img",{src:"http://gestionportales.regionhuanuco.gob.pe/storage/"+t.detnot.img2,class:"card-img-top"},null,8,C)]),_:1})):p("",!0),t.detnot.img3?(r(),l(a,{key:2},{default:i(()=>[e("img",{src:"http://gestionportales.regionhuanuco.gob.pe/storage/"+t.detnot.img3,class:"card-img-top"},null,8,E)]),_:1})):p("",!0),M,V,L]),_:1},8,["options"]),e("p",{innerHTML:t.detnot.contenido},null,8,O)])]),T])])])],64)}const Q=f(k,[["render",A]]);export{Q as default};