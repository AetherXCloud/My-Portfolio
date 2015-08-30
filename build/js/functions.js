$(document).ready(function(){
	$(".icon-star").click(function(){
        $(this).toggleClass('fav');
    });
	$(".sidebar-toggle").click(function(){
        $('.sidebar').toggleClass('sidebar-active');
        $('.container').toggleClass('container-left');
    });
	$(function() {
	     var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
	     $(".sidebar ul a").each(function(){
	          if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
	          $(this).addClass("active");
	     })
	});
});

