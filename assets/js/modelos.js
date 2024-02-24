$(document).ready(function () {

    // Configuracion de la DataTable
    var dataTable = $('#tablaRegistros').DataTable({
        language: {
            url: 'https://cdn.datatables.net/plug-ins/1.10.24/i18n/Spanish.json'
        },
        columns: [
            { data: 'modelo_id' },
            { data: 'nombre_modelo' },
            { data: 'tipo_madera' },
            { data: 'tablas_madera_necesarias' },
            { data: 'precio' }
            
        ],
        columnDefs: [
            {
                targets: [0], // Se selecciona la columna personal_id para ocultarla
                visible: false,
            },
        ],
        scrollX: true
    });

    // Cargar datos en la DataTable
    $.ajax({
        url: 'accesodatos/modelos.php',
        dataType: 'json',
        success: function (data) {
            // Agregar datos 
            dataTable.clear().rows.add(data).draw();
        }
    });

});
