  $(document).ready(function () {
    $('.sidebar-menu').tree()
  
 
    $('#registros').DataTable({
      'paging'      : true,
      'pageLength'  : 5,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false,
      'language':
      {
          "sProcessing":     "Procesando...",
          "sLengthMenu":     "Mostrar _MENU_ registros",
          "sZeroRecords":    "No se encontraron resultados",
          "sEmptyTable":     "Ningún dato disponible en esta tabla",
          "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
          "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
          "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
          "sInfoPostFix":    "",
          "sSearch":         "Buscar:",
          "sUrl":            "",
          "sInfoThousands":  ",",
          "sLoadingRecords": "Cargando...",
          "oPaginate": {
              "sFirst":    "Primero",
              "sLast":     "Último",
              "sNext":     "Siguiente",
              "sPrevious": "Anterior"
          },
          "oAria": {
              "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
              "sSortDescending": ": Activar para ordenar la columna de manera descendente"
          }
      }

    });
   
    $('#crear-registro').attr('disabled', true);

    $('#repetir_password').on('input', function(){
      var password_nuevo = $('#password').val();

      if ($(this).val() == password_nuevo) {
        $('#resultado_password').text('Correcto');
        $('#resultado_password').parent('.form-group').addClass('has-success').removeClass('has-error');
        $('input#password').parent('.form-group').addClass('has-success').removeClass('has-error');
        $('#crear-registro').attr('disabled', false);
      }else{
        $('#resultado_password').text('No son Iguales');
        $('#resultado_password').parent('.form-group').addClass('has-error').removeClass('has-success');
        $('input#password').parent('.form-group').addClass('has-error').removeClass('has-success');
      }
    })

  })