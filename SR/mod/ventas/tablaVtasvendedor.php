<?php include("../../funciones.php");

require_once('lib/nusoap.php');

ini_set("soap.wsdl_cache_enabled", "0");

$Columnas = array("FECHA","ID_SUCURSAL","ESTATUS","CLAVE_AGENTE","FOLIO","ID_CLIENTE","NOMBRE","CONCEPTO","SUBTOTAL","IMPUESTOS","TOTAL");//COLUMNAS GRID
//$De = date('Y-m-d');
//$A = date('Y-m-d');

try{ 
    
    if ($_POST){
        
        $Empresa = $_POST["CmbEmpresa"];
        $UserID =  $_POST["Cmbvendedores"]; 
        $De = $_POST["Fini"];
        $A =  $_POST["Ffin"]; 

        
        //parametros de la llamada
        $parametros = array();
        $parametros['sId_Empresa'] = $Empresa;
        $parametros['sId_Vendedor'] = $UserID;
        $parametros['dFechaIni'] = $De;
        $parametros['dFechaFin'] = $A;
        //ini_set("soap.wsdl_cache_enabled", "0");
        //Invocación al web service
        $WS = new SoapClient($WebService, $parametros);
        //recibimos la respuesta dentro de un objeto
        $result = $WS->VtasxVendedorGral($parametros);
        $xml = $result->VtasxVendedorGralResult->any;

        $obj = simplexml_load_string($xml);
        $Datos = $obj->NewDataSet->Table;
//echo $xml;
    }
    else{}
} catch(SoapFault $e){
  var_dump($e);
}

echo "<div class='table-responsive'>
	<table id='grid' class='table table-striped table-bordered table-condensed table-hover display compact' cellspacing='0' style='width:100%;' style='white-space: nowrap;'>
	 	<thead><tr>"; 
		
			for($i=0; $i<count($Columnas); $i++){
		  		echo "<th>".$Columnas[$i]."</th>";
			}

	  	echo "</tr></thead>
	 	<tfoot><tr>";

			for($i=0; $i<count($Columnas); $i++){
		  		echo "<th>".$Columnas[$i]."</th>";
			}
	  	
 echo "</tr></tfoot><tbody>";
    
 for($i=0; $i<count($Datos); $i++){
    echo "<tr>";
    for($j=0; $j<count($Columnas); $j++){
        echo "<td width='auto'>".$Datos[$i]->$Columnas[$j]."</td>";
    } 
    echo "</tr>";
 } 
    
  echo "</tbody></table></div>";

?>

<script type="text/javascript"> 
        
    $('#grid').DataTable( {
        fixedHeader: true,
        dom: 'lfBrtip',            
        buttons: [
            {
                extend: 'colvis',
                columns: ':not(:first-child)',
                collectionLayout: 'fixed two-column',
                text: 'Ocultar columnas'
            },
            {
                extend: 'copy',
                message: 'PDF created by PDFMake with Buttons for DataTables.',
                text: 'Copiar',
                exportOptions: {
                    modifier: {
                        page: 'all'
                    }
                }
            },
            {
                extend: 'pdf',
                text: 'PDF',
                footer:'true',
                customize: function ( doc ) {
                    // Splice the image in after the header, but before the table
                    doc.content.splice( 1, 0, {
                        
                        alignment: 'center',
                        <?php include("ImgHeader.php"); ?>
                    } );
                    // Data URL generated by http://dataurl.net/#dataurlmaker
                },
                filename: 'GridN',
                extension: '.pdf',       
                exportOptions: {
                    columns: ':visible',
                    modifier: {
                        page: 'all'
                    }
                }
            },
            {
                extend: 'csv',
                text: 'CSV',
                header:'true',
                footer:'true',
                filename: 'GridN',
                extension: '.csv',       
                exportOptions: {
                    columns: ':visible',
                    modifier: {
                        page: 'all'
                    }
                }
            },
            {
                extend: 'excel',
                message: 'PDF creado desde el sistema\n en linea del tayco.',
                footer:'true',
                text: 'XLS',
                filename: 'GridN',
                extension: '.xlsx', 
                exportOptions: {
                    columns: ':visible',
                    modifier: {
                        page: 'all'
                    }
                }
            },
            {
                extend: 'print',
                message: 'PDF creado desde el sistema\n en linea del tayco.',
                footer:'true',
                text: 'Imprimir',
                exportOptions: {
                    columns: ':visible',
                    stripHtml: false,
                    modifier: {
                        page: 'all'
                    }
                }
            },
        ],
        "pagingType": "full_numbers",
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Todo"]],
        "language": {
            "sProcessing":    "Procesando...",
            "sLengthMenu":    "Mostrar _MENU_ registros",
            "sZeroRecords":   "No se encontraron resultados",
            "sEmptyTable":    "Ningún dato disponible en esta tabla",
            "sInfo":          "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty":     "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":  "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":   "",
            "sSearch":        "Buscar:",
            "sUrl":           "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst":    "Primero",
                "sLast":    "Último",
                "sNext":    "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            },
        "scrollY": '50vh',
        "scrollX": true,
        "paging": false,
        responsive: true,
        },
        "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;
            //var api2 = this.api(), data;
            
            // Remove the formatting to get integer data for summation
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
            /*
            // Remove the formatting to get integer data for summation
            var intVal2 = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
            */

            // Total over all pages
            total = api
                .column( 10 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );

            // Total over this page
            pageTotal = api
                .column( 10, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );

            var numFormat = $.fn.dataTable.render.number( '\,', '.', 2, '$' ).display;
            $( api.column( 10 ).footer() ).html(
                numFormat(total +' total'
            );
            
            /*
            // Total over all pages 2
            total2 = api2
                .column( 5 )
                .data()
                .reduce( function (a, b) {
                    return intVal2(a) + intVal2(b);
                }, 0 );

            // Total over this page
            pageTotal2 = api2
                .column( 5, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return intVal2(a) + intVal2(b);
                }, 0 );

            // Update footer
            $( api2.column( 5 ).footer() ).html(
                '$'+pageTotal2 +' ( $'+ total2 +' total)'
            );
            */
        }

    } );


</script>

            
