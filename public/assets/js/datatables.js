$(document).ready(function(){

  $('#dataTable').DataTable({
      
    dom    : '<"row"<"col-sm-12 col-md-5"B><"col-sm-12 col-md-7"f>r>t<"row"<"col-sm-12 col-md-5"i><"col-sm-12 col-md-7"p>>',
    buttons: [
        {
            extend        : 'excelHtml5',
            filename      : 'datos_bikeshop',
            className     : 'btn',
            exportOptions : {
                columns : ':not(.no-exportar)'
            }
        },
        {
            extend        : 'pdfHtml5',
            className     : 'btn',
            download      : 'open',
			orientation   : 'landscape',
            pageSize      : 'A4',
            exportOptions : {
                columns : ':not(.no-exportar)'
            },
            customize     : function(doc){

                doc.content.splice(0,1);
                doc.pageMargins                 = [10, 50, 20, 30];
                doc.defaultStyle.fontSize       = 7;
                doc.styles.tableHeader.fontSize = 7;

                doc['header'] = (function(){
                    return {
                        columns: [
                            {
                                alignment: 'left',
                                italics  : true,
                                text     : 'BikeShop Oran',
                                fontSize : 15,
                                margin   : [10,0]
                            }
                        ],
                        margin: 20
                    }
                });

                doc['footer'] = (function(page, pages){
                    return {
                        columns: [
                            {
                                alignment: 'center',
                                text: ['Pagina ', { text: page.toString() },	' de ',	{ text: pages.toString() }]
                            }
                        ],
                        margin: 20
                    }
                });
                
                let objLayout = {};

                objLayout['hLineWidth']   = function(i){ return .5; };
				objLayout['vLineWidth']   = function(i){ return .5; };
				objLayout['hLineColor']   = function(i){ return '#aaa'; };
				objLayout['vLineColor']   = function(i){ return '#aaa'; };
				objLayout['paddingLeft']  = function(i){ return 4; };
				objLayout['paddingRight'] = function(i){ return 4; };
                doc.content[0].layout     = objLayout;
            }
        }
    ],
    select:{
        info: false
    },
    'language': {
        'sProcessing'    : 'Procesando...',
        'sLengthMenu'    : 'Mostrar _MENU_ registros',
        'sZeroRecords'   : 'No se encontraron resultados',
        'sEmptyTable'    : 'Ningún dato disponible en esta tabla',
        'sInfo'          : 'Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros',
        'sInfoEmpty'     : 'Mostrando registros del 0 al 0 de un total de 0 registros',
        'sInfoFiltered'  : '(filtrado de un total de _MAX_ registros)',
        'sInfoPostFix'   : '',
        'sSearch'        : 'Buscar:',
        'sUrl'           : '',
        'sInfoThousands' : ',',
        'sLoadingRecords': 'Cargando...',
        'oPaginate'      : {
            'sFirst'   : 'Primero',
            'sLast'    : 'Último',
            'sNext'    : 'Siguiente',
            'sPrevious': 'Anterior'
        },
        'oAria'          : {
            'sSortAscending' : ': Activar para ordenar la columna de manera ascendente',
            'sSortDescending': ': Activar para ordenar la columna de manera descendente'
        }
    }
});
});
