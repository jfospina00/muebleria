jQuery(document).ready(function() {

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
	$("#btn-newOffer").click(function(){
        $("#newOffer").modal();
    });
//------- New Product -------
    $("#btn-newProduct").click(function(){
        $("#newProduct").modal();
    });
 });

//=============================================== Simple ===============================================
//------- Buttons -------
	$count = 1; 
	$('#btn-add-imageProduct').click(function(event) {
		/* Act on the event */
		if($count <= 5){
			$('#content-btn-add-imageProduct').append('<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ctnt-btn-add-imageProduct" level="lvl-'+$count+'"><input type="file" class="form-control" name="imageProduct'+$count+'" value=""></div>');
			$count++;				
			if($count > 5){
				$(this).removeClass('btn-warning').addClass('btn-default');
				$(this).attr('id', '');
			}
		}
	});