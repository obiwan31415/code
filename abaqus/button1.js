$(document).ready(function(){
//	$('#box').draggable();
    $("div").mouseenter(function() {
		$("div").fadeTo('fast', 1);
    });
    $("div").mouseleave(function() {
        $("div").fadeTo('fast', 0.5);
    });
	$("div").click(function(){
       //	$("div").fadeOut('slow');
		$("div").effect('bounce', {times:3}, 500);
	//	$("div").effect('slide');
	});
});
