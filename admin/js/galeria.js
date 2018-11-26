$(document).ready(function($){
	var id_producto = $(this).attr('data-id');
	Dropzone.options.myDrop = {
		uploadMultiple: true,
		maxFileSize: 2,
		acceptedFiles: 'image/*',
		init: function init(){
			this.on('error', function(){
				alert("Error al subir Archivo");
			});
		}
	}

	$(function(){
	  $(".identifyingClass").click(function(){
	    var my_id_value = $(this).data('id');
	    
	    $(".modal-body #hiddenValue").val(my_id_value);
	  })
	});

});