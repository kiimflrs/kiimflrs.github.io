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


function clear() {

    document.getElementById("sign-up-form").reset();
};


list.onclick = function(e) {
	e.preventDefault();

	var elm = e.target;
	var audio = document.getElementById('audio');
	var source = document.getElementById('audio-src');
	var con = document.getElementById('image');
	
	con.src = elm.getAttribute('src');
	source.src = elm.getAttribute('data-value');
	audio.load(); //call this to just preload the audio without playing
	//audio.play(); //call this to play the song right away
	
};

// list.onclick = function(a) {
// 	a.preventDefault();

// 	var xyz = a.target;
// 	var con = document.getElementById('image');
// 	var source = document.getElementsByTagName('img');

// 	con.src = xyz.getAttribute('src');
// };
