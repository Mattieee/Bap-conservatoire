$(document).ready(function(){$(".menu-item>a").addClass("mon_scroll"),$(".mon_scroll").on("click",function(o){if(""!==this.hash){o.preventDefault();var n=this.hash;$("html, body").animate({scrollTop:$(n).offset().top},800,function(){window.location.hash=n})}})});