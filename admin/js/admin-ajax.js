$(document).ready(function(){
	$('#guardar_registro').on('submit', function(e){
		e.preventDefault();
		var datos = $(this).serializeArray();
		$.ajax({
			type: $(this).attr('method'),
			data: datos,
			url: $(this).attr('action'),
			dataType: 'json',
			success: function(data){
				console.log(data);
				var resultado = data;
				if (resultado.respuesta == 'exito') {
					swal(
						'Correcto',
						'Se guardo corectamente',
						'success'
					)

				$("#crear-categoria").click(function(){
					$("form")[0].reset();
				});

				}else{
					swal(
						'Error',
						'Hubo un error',
						'error'
					)
				}
			}
		})
	});
	//Se ejecuta cuando hay un archivo
	$('#guardar_registro-archivo').on('submit', function(e){
		e.preventDefault();
		var datos = new FormData(this);
		$.ajax({
			type: $(this).attr('method'),
			data: datos,
			url: $(this).attr('action'),
			dataType: 'json',
			contentType: false,
			processData: false,
			async: true,
			cache: false,
			success: function(data){
				console.log(data);
				var resultado = data;
				if (resultado.respuesta == 'exito') {
					swal(
						'Correcto',
						'Se guardo corectamente',
						'success'
					)

				$("#crear-categoria").click(function(){
					$("form")[0].reset();
				});

				}else{
					swal(
						'Error',
						'Hubo un error',
						'error'
					)
				}
			}
		})
	});
	//Eliminar un Registro
	$('.borrar_registro').on('click', function(e){
		e.preventDefault();
		var id = $(this).attr('data-id');
		var tipo = $(this).attr('data-tipo');
		swal({
		  title: '¿Estas Seguro?',
		  text: "Un registro eliminado no se puede recuperar!",
		  type: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Si, Eliminar!',
		  cancelButtonText: 'Cancelar'
		}).then((result) => {
			if (result.value) {
				$.ajax({
					type: 'post',
					data: {
						'id': id,
						'registro' : 'eliminar'
					},
					url: 'modelo-'+tipo+'.php',
					success:function(data){
						console.log(data);
						var resultado = JSON.parse(data);
						if (resultado.respuesta == 'exito') {
							swal(
						      'Eliminado!',
						      'Registro Eliminado.',
						      'success'
					    	)
					    	jQuery('[data-id="'+resultado.id_eliminado+'"]').parents('tr').remove();
						}else{
							swal(
								'Error!',
	                           	'No se pudo Eliminar!',
	                           	'error'
	                        )
						}
					}
				})
		    }
		});

	});

	//Cargar Galeria
	$('.info_galeria').on('click', function(e){
		e.preventDefault();
		var id_producto = $(this).attr('data-id');
		// console.log(id_producto);
		$.ajax({
			type: 'post',
			data: {
				'id_producto': id_producto
			},
			url: 'info_galeria.php',
			success:function(respuesta){	
				$("#div-results").html(respuesta);
			}
		})
	});

	//Info Venta
	$('.info_venta').on('click', function(e){
		e.preventDefault();
		var id_factura = $(this).attr('data-id');
		// console.log(id_producto);
		$.ajax({
			type: 'post',
			data: {
				'id_factura': id_factura
			},
			url: 'ver_pedido.php',
			success:function(respuesta){	
				$("#div-results_v").html(respuesta);
				
			}
		})
	});
	//Actualizar el estado de un Producto
	$('.actualizar_e').on('click', function(e){
		e.preventDefault();
		var id_factura = $(this).attr('data-id');
		// console.log(id_factura);
		$.ajax({
			type: 'post',
			data: {
				'id_factura': id_factura
			},
			url: 'select_e.php',
			success:function(respuesta){
				
			}
		})
	});
});