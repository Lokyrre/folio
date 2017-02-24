$(document).ready(function () {
	$('.nav a').click(function(e){
		$(".nav").find(".active").removeClass("active");
	   	$(this).parent().addClass("active");
	});
});