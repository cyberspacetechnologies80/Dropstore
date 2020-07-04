var inicio=function () {
	alert('Hola');
	$(".cantidad").keyup(function(e){
		
		if($(this).val()!=''){
			if(e.keyCode==13){
				var id=$(this).attr('data-id');
				var precio=$(this).attr('data-precio');
				var cantidad=$(this).val();
				$(this).parentsUntil('.card').find('.subtotal').text('$'+(precio*cantidad)+'MXN');
				$.post('./javascript/modificarDatos.php',{
					Id:id,
					Precio:precio,
					Cantidad:cantidad
					
				},function(e){
						$("#total").text("$"+e+"MXN");
				});
			}
		}
	});
	$(".eliminar").click(function(e){
		e.preventDefault();
		var id=$(this).attr('data-id');
		$(this).parentsUntil('.producto').remove();
		$.post('./javascript/del.php',{Id:id},function(a){
			
			if(a=='0'){
				location.href="../carrito.php";
			}
		});

	});
}
$(document).on('ready',inicio);