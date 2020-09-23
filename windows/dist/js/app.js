$(".search-btn").click(function() {
	$(".search-bar").toggleClass("d-none");

});
function saatiGoster (argument) {
	var d = new Date(); //without params it defaults to "now"

	day = d.getDate();
	month = ("0" + (d.getMonth() + 1)).slice(-2);
	hours = d.getHours();
	minutes = d.getMinutes();
	
	if (day.toString().length == 1) {
		day = "0"+d.getDate();
	}else{
		day = d.getDate();
	};
	
	if (hours.toString().length == 1) {
		hours = "0"+d.getHours();
	}else{
		hours = d.getHours();
	};
	if (minutes.toString().length == 1) {
		minutes = "0"+d.getMinutes();
	}else{
		minutes = d.getMinutes();
	};
	year = d.getFullYear();

	var tarih = day + ":" + (month) + ":"+ year;
	var time = hours + ":" + minutes;
	document.getElementById('current-time').innerHTML= "<span>"+time+"</span>"+"<p>"+tarih+"</p>";
}
setInterval(saatiGoster,1000);

$(".desktop-btn-fb").click(function(){
	var x = $(".fa-facebook").position();
	
});

$(".buyut-chrome").click(function() {
	$("#window-chrome").toggleClass("fullscreenw");
	$(".buyut ").find($("i")).toggleClass('fa-window-maximize fa-window-restore');
});
$(".buyut-youtube").click(function() {
	$("#window-youtube").toggleClass("fullscreenw");
	$(".buyut ").find($("i")).toggleClass('fa-window-maximize fa-window-restore');
});


$(function() {
	$( "#window-chrome" ).draggable();
	$( "#window-youtube" ).draggable();
	$( "#window-chrome" ).resizable();
	$( "#window-youtube" ).resizable();
	$(".sortableList").sortable();
	$('.desktop-btn').draggable({cancel:false});

});


$(".kucult-chrome").click(function() {
	$("#window-chrome").removeClass("d-block");
	$("#window-chrome").addClass("d-none");
});



$(".kapat-chrome").click(function() {
	$("#window-chrome").removeClass("d-block");
	$("#window-chrome").css({
		left: '20%',
		top: '10%'
	});
	$(".g-btn").removeClass("activated");

	$("#window-chrome").addClass("d-none");
});



$(".kapat-youtube").click(function() {
	$("#window-youtube").removeClass("d-block");
	$("#window-youtube").css({
		left: '20%',
		top: '10%'
	});
	$(".y-btn").removeClass("activated");
	$("#window-youtube").addClass("d-none");
});


$(".kucult-youtube").click(function() {
	$("#window-youtube").removeClass("d-block");
	$("#window-youtube").addClass("d-none");
});


$(".google").dblclick(function() {
	$("#window-chrome").removeClass("d-none");
	$("#window-chrome").addClass("d-block");
	$(".g-btn").addClass("activated");
});


$(".youtube").dblclick(function() {
	$("#window-youtube").removeClass("d-none");
	$("#window-youtube").addClass("d-block");
	$(".y-btn").addClass("activated");
});
$(".google-t").click(function() {
	$("#window-chrome").removeClass("d-none");
	$("#window-chrome").addClass("d-block");
	$(".g-btn").addClass("activated");
});


$(".youtube-t").click(function() {
	$("#window-youtube").removeClass("d-none");
	$("#window-youtube").addClass("d-block");
	$(".y-btn").addClass("activated");
});


$(".desktop-btn-li").focusin(function(){
	$(this).css({
		background: 'rgba(173, 210, 255, .3)',
		border: ' 1px solid rgba(0, 120, 255, .8)'
	});
});
$(".desktop-btn-li").focusout(function(){
	$(this).css({
		background: 'transparent',
		border: 'none'
	});
});


