function headerOnScroll(){var e=window,t=document,n=t.documentElement,o=t.getElementsByTagName("body")[0],l=e.innerWidth||n.clientWidth||o.clientWidth;l>=800&&document.documentElement.scrollTop>=400?document.getElementsByClassName("top-nav__container")[0].style.background="rgba(21, 67, 96, .9)":l>=800&&document.documentElement.scrollTop<400?document.getElementsByClassName("top-nav__container")[0].style.background="transparent":l>=600&&document.documentElement.scrollTop<75?document.getElementsByClassName("top-nav__container")[0].style.background="transparent":l<800&&l>=600&&document.documentElement.scrollTop>=75?document.getElementsByClassName("top-nav__container")[0].style.background="rgba(21, 67, 96, .9)":l<800&&l>=600&&document.documentElement.scrollTop<75?document.getElementsByClassName("top-nav__container")[0].style.background="transparent":document.getElementsByClassName("top-nav__container")[0].style.background="rgba(21, 67, 96, 1)"}function comments(){var e=document.getElementById("comments__toggled");if(null!=e)e.onclick=function(){n.style.display="none",n.style.visibility="hidden",t.setAttribute("id","comments__outer-container")};else{var t=document.getElementById("comments__outer-container"),n=document.getElementById("comments__inner-container"),o=document.getElementById("comments__title-toggle");t.onclick=function(){n.style.display="block",n.style.visibility="visible",o.style.transform="rotateX(180deg)",t.setAttribute("id","comments__toggled")}}}window.onload=function(){headerOnScroll(),comments()},window.onresize=function(){headerOnScroll()},window.onscroll=function(){headerOnScroll()};var sidebar=document.getElementsByTagName("aside")[0],toggle=document.getElementById("top-nav__toggle"),nav=document.getElementsByTagName("nav")[0];toggle.onclick=function(){nav.style.visibility="visible",nav.style.display="block",toggle.style.backgroundImage='url("./dist/css/menu_close.png")'};var comments_toggle=document.getElementById("comments__outer-container"),comments_inner=document.getElementById("comments__inner-container"),comments_arrow=document.getElementById("comments__title-toggle");comments_toggle.onclick=function(){comments_inner.style.display="block",comments_inner.style.visibility="visible",comments_arrow.style.transform="rotateX(180deg)",comments_toggle.setAttribute("id","comments__toggled")};