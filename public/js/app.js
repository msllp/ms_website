!function(t){function n(r){if(e[r])return e[r].exports;var o=e[r]={i:r,l:!1,exports:{}};return t[r].call(o.exports,o,o.exports,n),o.l=!0,o.exports}var e={};n.m=t,n.c=e,n.i=function(t){return t},n.d=function(t,e,r){n.o(t,e)||Object.defineProperty(t,e,{configurable:!1,enumerable:!0,get:r})},n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,"a",e),e},n.o=function(t,n){return Object.prototype.hasOwnProperty.call(t,n)},n.p="",n(n.s=2)}([function(t,n){$.ajaxSetup({headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")}}),$(".ms-form").submit(function(t){t.preventDefault();var n=$(this).attr("action"),e=new FormData($(this)[0]);$.ajax({url:n,type:"POST",xhr:function(){return myXhr=$.ajaxSettings.xhr(),myXhr.upload,myXhr},success:completeHandler=function(t){alert("Your action taken succefully.!"),console},error:errorHandler=function(t,n,e){alert("Something went wrong!")},data:e,cache:!1,contentType:!1,processData:!1},"json")}),$(".action-btn-post").click(function(){event.preventDefault(),$(".ms-form").submit()})},function(t,n){},function(t,n,e){e(0),t.exports=e(1)}]);