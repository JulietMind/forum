function hideoscurecer(){
	$('#oscurecer').fadeOut();
}

function showform(){
	$('.crear-form').fadeIn(300);
	$('#oscurecer').click(hideoscurecer);
}
function showoscurecer (e){
	e.preventDefault();
	$('#oscurecer').fadeIn(300, showform);
}


function activetemas(){
	$(".crear-tema").click(showoscurecer);
}

// MOSTRAR MENU
$(document).ready(function(){
	$('.img-menu').on('click', function(){
		$('.content-nav ul').toggleClass('show')
	})
})

// MOSTRAR/OCULTAR CREAR TEMA

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

$(document).ready (activetemas);