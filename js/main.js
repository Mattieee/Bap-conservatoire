$(document).ready(function(){$(document).scroll(function(){var n=$("#billeterie").offset().top;$(this).scrollTop()>n?($(".navbar-default").css("background","rgba(39, 39, 40,0.7)"),$(".logo").css({position:"fixed",top:"-15px",left:"0","z-index":"9999"}),$(".img_logo").css({height:"60px",width:"100px",transition:"500ms"}),$("li").hover(function(){$(this).css("background","rgba(39, 39, 40,1.0) ")},function(){$(this).css("background","transparent ")})):($(".navbar-default").css("background","transparent "),$(".navbar-default").css("transition","all .45s ease-in"),$(".logo").css("position","relative"),$(".img_logo").css({height:"300px",width:"500px"}),$("li").hover(function(){$(this).css("background","transparent ")},function(){$(this).css("background","transparent ")}))}),$(document).scroll(function(){function n(n){var o=$(window).scrollTop(),s=o+$(window).height(),i=$(n).offset().top,a=i+$(n).height();i>=o&&a<=s?function(n){$(n).removeClass(".noanimate").addClass("view")}(n):function(n){$(n).removeClass("view").addClass(".noanimate")}(n)}var o=$(".noanimate");$(window).on("scroll",function(){o.each(function(o,s){n(s)})}),/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)?($(".noanimate").removeClass(".noanimate").addClass("view"),$("#follower").css("display","none")):$("#follower").css("display","block")})});