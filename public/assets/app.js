!function(e){var t={};function n(i){if(t[i])return t[i].exports;var r=t[i]={i:i,l:!1,exports:{}};return e[i].call(r.exports,r,r.exports,n),r.l=!0,r.exports}n.m=e,n.c=t,n.d=function(e,t,i){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:i})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var i=Object.create(null);if(n.r(i),Object.defineProperty(i,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)n.d(i,r,function(t){return e[t]}.bind(null,r));return i},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="/assets/",n(n.s=1)}([function(e,t,n){function i(e){return(i="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}$("document").ready(function(){Array.from(document.querySelectorAll("video, audio")).forEach(function(e){e.hasAttribute("data-devscast-initialized")||(e.setAttribute("data-devscast-initialized","true"),$(e).mediaelementplayer({audioWidth:"100%"}))});var e=document.querySelector(".btn-hamburguer-menu");if(e&&e.addEventListener("click",function(e){e.preventDefault(),$(".navigation").find(".menu").slideToggle(),this.classList.toggle("active"),$(window).width()<=991&&$(".navigation").find(".dropdown").on("click",function(){$(this).find(".droplist").slideToggle()})}),Array.from(document.querySelectorAll(".gallery-zoom")).forEach(function(e){e.hasAttribute("data-devscast-initialized")||(e.setAttribute("data-devscast-initialized","true"),$(e).magnificPopup({type:"image",gallery:{enabled:!0},image:{titleSrc:"title"},zoom:{enabled:!0,duration:300,easing:"ease-in-out",opener:function(e){return e.is("img")?e:e.find("img")}}}))}),$(".header.sticky").length){var t=$(".header.sticky").attr("data-offset");t="undefined"!==i(t)&&!1!==t?parseInt(t):60,$(window).on("scroll",function(){var e=$(".header.sticky").offset().top;t<=e?$(".header.sticky").addClass("scrolling"):$(".header.sticky").removeClass("scrolling")}),$(window).trigger("scroll")}var n=document.querySelector("#map");n&&n.addEventListener("click",function(e){e.preventDefault(),this.hasAttribute("data-devscast-initialized")||(this.setAttribute("data-devscast-initialized","true"),this.classList.add("touch"))})})},function(e,t,n){"use strict";function i(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}n.r(t),n(2),n(0),new(function(){function e(){var t=0<arguments.length&&void 0!==arguments[0]?arguments[0]:[];!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this.elem=t,this.IMAGE_MINETYPES=["images/jpg","images/jpeg","images/png","images/gif"],this.AUDIO_MINETYPES=["audio/mp3","audio/mwa","audio/ogg"]}var t,n;return t=e,(n=[{key:"run",value:function(){this.elems.forEach(function(e){e.addEventerListener("change",function(e){e.preventDefault(),window.alert(e.target)})})}}])&&i(t.prototype,n),e}())(".js-upload-viewer").run()},function(e,t){}]);
//# sourceMappingURL=app.js.map