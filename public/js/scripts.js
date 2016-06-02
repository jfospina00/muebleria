jQuery(document).ready(function() {

//================================================== Forms ================================================== 
	$('#form').hide();
	$('#show-form').click(function() {
		$('#form').toggle();
	});
//================================================== Modals ================================================== 
//------- Show Offer -------
	$('.showOffer').click(function(event) {
		/* Act on the event */
		event.stopImmediatePropagation();
		$id    = $(this).attr('id');
		$token = $('#_token1').val();
		$route = $(this).attr('id');
		$.post($route, {id: $id,_token:$token}, function(datos) {
		  	$('.modal-body-offer').html(datos);
		  	$('#showOffer').modal('show');
		});
	});
//------- New Order -------
	$("#btn-createOrder").click(function(){
        $("#newOffer").modal();
    });
 });
