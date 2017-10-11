function hideform(){
	$('.crear').fadeOut(300);
}
function hideoscurecer(){
	$('#oscurecer').fadeOut(300, hideform);
}

function showform(e){
	$('.crear').fadeIn(300);
}

function showoscurecer (e){
	e.preventDefault();
	$('#oscurecer').fadeIn(300, showform);
}


function activetemas(){
	$(".crear-tema").click(showoscurecer);
	$("#oscurecer").click(hideoscurecer);
}

$(document).ready (activetemas);

// ====== SHO

// MOSTRAR MENU
$(document).ready(function(){
	$('.img-menu').on('click', function(){
		$('.content-nav ul').toggleClass('show')
	});
});



// MOSTRAR/OCULTAR LOGIN

// function showcreartemas(){
// 	event.preventDefault();
// 	$('#login').animate({
// 		'top' : '0'
// 	}, 500);
// }

// function hidecreartemas(){
// 	event.preventDefault();
// 	$('#login').animate({
// 		'top' : '-100'
// 	}, 500);
// }

