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

// DE AQUI PARA ARRIBA CON FUNCIONES NO ESTA FUNCIONANDO




// MOSTRAR MENU
// $(document).ready(function(){
// 	$('.img-menu').on('click', function(){
// 		$('.content-nav ul').toggleClass('show')
// 	});
// });



// $(document).ready(function(){
// 	$('.crear-tema-btn').click(function(){
// 		$('#oscurecer').toggle();
// 	});
// 	$('#oscurecer').click(function(){
// 		$(this).css({display: "none"})
// 	})
// })

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

