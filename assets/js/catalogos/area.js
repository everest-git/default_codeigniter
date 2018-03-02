$(document).ready(function() {

  	// Instrucciones a ejecutar al terminar la carga
  	$( '#frmArea').submit(function( event ){
  		alert('estoy dentro del submit frmArea');
  		event.preventDefault();
  	});
});