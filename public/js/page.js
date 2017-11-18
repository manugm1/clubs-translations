$(function() {

    $('#flujo1-form-link').click(function(e) {
		$("#flujo1").delay(100).fadeIn(100);
 		$("#flujo2").fadeOut(100);
		$("#flujo3").fadeOut(100);
		$('#flujo2-form-link').parent().removeClass('active'); //accede a <li> (padre de <a>) y le quita la clase "active"
		$('#flujo3-form-link').parent().removeClass('active'); //accede a <li> (padre de <a>) y le quita la clase "active"
		$(this).parent().addClass('active'); //accede a <li> (padre de <a>) y le añade la clase active
		e.preventDefault();
	});

	$('#flujo2-form-link').click(function(e) {
		$("#flujo2").delay(100).fadeIn(100);
 		$("#flujo1").fadeOut(100);
		$("#flujo3").fadeOut(100);
		$('#flujo1-form-link').parent().removeClass('active'); //accede a <li> (padre de <a>) y le quita la clase "active"
		$('#flujo3-form-link').parent().removeClass('active'); //accede a <li> (padre de <a>) y le quita la clase "active"
		$(this).parent().addClass('active'); //accede a <li> (padre de <a>) y le añade la clase active
		e.preventDefault();
	});
});
