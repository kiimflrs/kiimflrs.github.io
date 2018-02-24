$(document).ready(function(){


	$("input").focus(function () {
		$(this).css("border", "1px solid black");
		$(this).css("box-shadow", "1px 1px 1px 1px #555")
	});

	$("input").blur(function () {
		$(this).css("border", "1px solid #ccc");
		$(this).css("box-shadow", "1px 1px 1px 1px white")
	});

});