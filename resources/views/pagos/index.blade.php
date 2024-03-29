@extends('adminlte::page')

@section('Pagos', 'BodyLife')

@section('content_header')
<link rel="stylesheet" href="/css/estilos_clientes.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="/plugins/toastr/toastr.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
@stop

@section('content')

@include('pagos.modal_eliminar_pago')
@include('pagos.modal_actualizar_pago')
@include('pagos.modal_seguimiento')

<h3>Pagos de Body Life</h3><br>
        <div id="tarjetas" class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box card-pagos">
                    <div class="inner">
                        <h3 id="total-p">??</h3>
                        <p>Pagos</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="/pagos/index" class="small-box-footer">Mas Informacion <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box card-vendido">
                    <div class="inner">
                        <h3 id="total-pagos">??</h3>
                        <p>Total Vendido</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="/pagos/index" class="small-box-footer">Mas Informacion <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>   
        </div>



    <!-- <div id="menu">
            <div class="btnBalance">
                <i id="btnBalance" data-toggle="modal"  data-target="#balanceModal" type="button"class="fas fa-balance-scale"></i>
                <p>Ver Balance</p>
            </div>
    </div> -->
    
        <div id="busqueda-avanzada">
            <p class="titulo-filtros">Busqueda Avanzada</p>
            <div class="input-group mb-3 filtros">
                <span class="input-group-text" id="basic-addon1">Fecha Ingreso</span>
                <input type="date" class="form-control filtro_fecha" placeholder="Buscar por fecha" data-column="7">
                <span class="input-group-text" id="basic-addon2">ID</span>
                <input type="text" class="form-control filtro_ide"  onkeypress="return validaNumericos(event);" placeholder="Buscar por identificacion" data-column="1">
                <span class="input-group-text" id="basic-addon2">Nombre</span>
                <input type="text" class="form-control filtro_nombre" placeholder="Buscar por Nombre" data-column="3">
            </div>
        </div>

    <table class="table table-dark table-striped " id="pagos">
    <thead>
        <tr>
            <th scope="col">N°</th>
            <th scope="col">Ide</th>
            <th scope="col">N_factura</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>                 
            <th scope="col">M-pago</th>                 
            <th scope="col">Tpago</th>                
            <th scope="col">Ingreso</th>                                
            <th scope="col">Final</th> 
            <th scope="col">Valor</th>                               
            <th scope="col">Editar</th>                                
            <th scope="col">Eliminar</th>                                                               
            <th scope="col">Seguimiento</th>                                                               
        </tr>
    </thead>

    <tfoot>
        <tr>
            <th scope="col">N°</th>
            <th scope="col">Ide</th>
            <th scope="col">N_factura</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>                 
            <th scope="col">M-pago</th>                 
            <th scope="col">Tpago</th>                
            <th scope="col">Ingreso</th>                                
            <th scope="col">Final</th> 
            <th scope="col">Valor</th>                               
            <th scope="col">Editar</th>                                
            <th scope="col">Eliminar</th>                                                               
            <th scope="col">Seguimiento</th>                                                               
        </tr>
    </tfoot>
</table>
<script src="/js/validacionNumero.js"></script>
@stop

@section('css')
    <script src="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css"></script>
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- Boostrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<!-- Fin Boostrap 5 -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
<script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>  
<script src="//cdn.datatables.net/plug-ins/1.11.4/api/sum().js"></script>
<!-- Validacion solo numero -->

<script>
$(document).ready( function () {
    jQuery.fn.dataTable.Api.register( 'sum()', function ( ) {
    return this.flatten().reduce( function ( a, b ) {
      if ( typeof a === 'string' ) {
        a = a.replace(/[^\d.-]/g, '') * 1;
      }
      if ( typeof b === 'string' ) {
        b = b.replace(/[^\d.-]/g, '') * 1;
      }
      return a + b;
    }, 0);
  });

        var table = $('#pagos').DataTable({
        drawCallback: function () {
            var api = this.api();
            var total = api.column( 9, {"filter":"applied"}).data().sum();
            $('#total-pagos').text(total);

            var api2 = this.api();
            var total2 = api2.column( 2, {"filter":"applied"}).data().count();
            $('#total-p').text(total2);
            
        },   
        
        "ajax": "{{route('pagos.index')}}", 
        "columns": [
            {data: 'id'},
            {data: 'ide'},
            {data: 'n_factura'},            
            {data: 'nombre'},
            {data: 'apellido'},
            {data: 'metodo_pago'},
            {data: 'tipo_pago'},
            {data: 'fecha_inicio'},
            {data: 'fecha_fin'},
            {data: 'valor'},
            {data:'id', "render": function (data) {
            return "<button id=\"" + data + "\" type=\"button\" name=\"btnEditar\" class=\"btnEditar btn btn-info botonEditar\"><span class=\"material-icons\">edit</span></button>";
            }},

            {data:'id', "render": function (data) {
                var ide = data;
            return "<button  id=\"" + data + "\" type=\"button\" name=\"eliminar\"  class=\"btnEliminar btn btn-danger\"> <span class=\"material-icons\">delete</span></button>";
            }},

            {data:'id', "render": function (data) {
            return "<button id=\"" + data + "\" type=\"button\" name=\"btnSeguir\" class=\"btnSeguir btn btn-warning botonSeguir\"><span class=\"material-icons\">edit</span></button>";
            }},

                   
        ]        
    });
    
        /* BUSQUEDA AVANZADA */
        $('.filtro_fecha').keyup(function(){
            table.column($(this).data('column'))
            .search($(this).val())
            .draw();
        });

        $('.filtro_ide').keyup(function(){
            table.column($(this).data('column'))
            .search($(this).val())
            .draw();
        });

        $('.filtro_nombre').keyup(function(){
            table.column($(this).data('column'))
            .search($(this).val())
            .draw();
        });
        /* FIN DEL BLOQUE DE BUSQUEDA AVANZADA */



    /* ELIMINAR PAGO */
    var id_pago;
    $(document).on('click','.btnEliminar',function(){
        var id_pago = $(this).attr('id');
        $('#eliminarModal').modal('show');
        $('#btnEliminar').on('click',function(){
            $.ajax({
            url:"eliminar/"+id_pago,
                success:function(data){
                    setTimeout(function(){
                    toastr.success('El cliente se ha eliminado satifactoriamente', 'Atencion!', {timeOut: 5000});
                        $('#eliminarModal').modal('hide');
                        $(this).removeData('eliminarModal');
                        table.ajax.reload();
                    }, 100);
                },
                error:function(data){
                    setTimeout(function(){
                        $('#eliminarModal').modal('hide');
                        toastr.error('El pago no se pudo eliminar', 'Atencion!', {timeOut: 5000});
                        table.ajax.reload();
                        }, 200);
                }
            }); 
        });
    });
    /* FIN ELIMINAR PAGO */

    /* EDITAR PAGO */
    $('#editar-pago').submit(function(e){
    e.preventDefault();
    var idp = $('#idPersona').val();
    var n_factura = $('#n_facturaPago').val();
    var idect = $('#idect').val();
    var nombrep = $('#nombrePago').val();
    var apellidop = $('#apellidoPago').val();
    var tipo_pago = $('#t_pago').val();
    var metodo_pago = $('#m_pago').val();
    var valor = $('#val').val();
    var fecha_fin = $('#f_fin').val();
    var fecha_inicio = $('#f_inicio').val();
        $.ajax({
            url:"update/"+idp,
            type: 'PUT',
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            typedata: 'json',
            data:{
                n_factura:n_factura,
                ide:idect,
                nombre:nombrep,
                apellido:apellidop,
                fecha_fin:fecha_fin,
                fecha_inicio:fecha_inicio,
                tipo_pago:tipo_pago,
                metodo_pago:metodo_pago,
                valor:valor,                
            },
           
            success:function(data){
                    setTimeout(function(){
                    $('#actualizarModal').modal('hide');
                    toastr.success('El pago se ha actualizado satifactoriamente', 'Atencion!', {timeOut: 5000});
                    table.ajax.reload();
                    }, 200);
            },
            error:function(response){
                toastr.error('Opps Algunos errores no permiten actualizar tu pago, Corrigelos!',{timeOut:5000});
                /* $('#editarIdeError').text(response.responseJSON.errors.ide);
                $('#editarNombreError').text(response.responseJSON.errors.nombre);
                $('#editarApellidosError').text(response.responseJSON.errors.apellido);
                $('#editarDireccionError').text(response.responseJSON.errors.direccion);
                $('#editarTelefonoError').text(response.responseJSON.errors.telefono);
                $('#editarCorreoError').text(response.responseJSON.errors.correo); */
            }
            
        })

    });
    /* EDITAR PAGO */


 /* GUARDAR SEGUIMIENTO */   
 $('#seguimiento-cliente').submit(function(e){
        e.preventDefault();    
        let n_facturaSeg = $('#n_facturaSeg').val();
        let idencliseg = $('#identificacionClienteSeg').val();
        let nombrecliseg = $('#nombreClienteSeg').val();
        let apellidocliseg = $('#apellidoClienteSeg').val();
        let fecha_inicioseg = $('#fecha_inicioSeg').val();
        let fecha_finseg = $('#fecha_finSeg').val();
        let diaseg = $('#diaSeg').val();        
        $.ajax({
            url: '{{route("seguimiento.create")}}',
            type: "POST",
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            dataType: 'json',
        data: 
        {
            n_factura:n_facturaSeg,
            ide:idencliseg,
            nombre:nombrecliseg,
            apellido:apellidocliseg,
            fecha_inicio:fecha_inicioseg,
            fecha_fin:fecha_finseg,
            dia:diaseg,            
        },
        
        
            success:function(data){
                
                setTimeout(function(){
                  $("#seguimientoModal").find("input,textarea,select").val("");
                  $('#seguimientoModal').modal('hide');
                  toastr.success('se ha generado el seguimiento al pago', 'Generado!', {timeOut: 5000});
                  table.ajax.reload();
                }, 20);
            },
            
            error:function(response){
                toastr.error('Opps Algunos errores no permiten guardar el seguimiento, Corrigelos!',{timeOut:5000});
                $('#ideError').text(response.responseJSON.errors.ide);                                                  
                $('#nombreError').text(response.responseJSON.errors.nombre);                                                  
                $('#apellidoError').text(response.responseJSON.errors.apellido);                                                  
                $('#inicioError').text(response.responseJSON.errors.fecha_inicio);
                $('#finError').text(response.responseJSON.errors.fecha_fin);                                                                                                                  
            }
        });       
});  
/* FIN  GUARDAR SEGUIMIENTO  */  

/* Fin */

});

</script>
<!-- LISTAR PAGO PARA EDITAR -->
<script>
    let id_pago;
    $(document).ready(function(){
        $(document).on('click','.btnEditar',function(){
            id_pago = $(this).attr('id');
                $.ajax({
                    url:"editar/"+id_pago,
                    type:'get',
                success:function(data){
                    $('#idPersona').val(data.id),
                    $('#idect').val(data.ide),
                    $('#n_facturaPago').val(data.n_factura),
                    $('#nombrePago').val(data.nombre),
                    $('#apellidoPago').val(data.apellido),
                    $('#m_pago').val(data.metodo_pago),
                    $('#t_pago').val(data.tipo_pago),
                    $('#val').val(data.valor),
                    $('#f_fin').val(data.fecha_fin),
                    $('#f_inicio').val(data.fecha_inicio),
                    $('#actualizarModal').modal('show');
                }
            });
        });
    });
</script>

<!-- FIN DE LISTAR PAGO -->

<!-- LISTAR PAGO PARA SEGUIMIENTO EN MODAL VIA AJAX -->
<script>
    let id_pag;
    $(document).ready(function(){
        $(document).on('click','.btnSeguir',function(){
            id_pag = $(this).attr('id');
                $.ajax({
                    url:"seguimiento/"+id_pag,
                    type:'get',
                success:function(data){
                    $('#identificacionClienteSeg').val(data.ide),
                    $('#n_facturaSeg').val(data.n_factura),
                    $('#nombreClienteSeg').val(data.nombre),
                    $('#nombre').text(data.nombre),
                    $('#apellido').text(data.apellido),
                    $('#modalidad').text(data.tipo_pago),
                    $('#apellidoClienteSeg').val(data.apellido),
                    $('#fecha_inicioSeg').val(data.fecha_inicio),
                    $('#fecha_finSeg').val(data.fecha_fin),
                    $('#diaSeg').val(),                   
                    $('#seguimientoModal').modal('show');
                }
            });
        });
    });
</script>
<!-- FIN -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/plug-ins/1.11.4/api/sum().js"></script>
    <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="/js/separadorDecimal.js"></script>
    <script src="/js/validaNumericos.js"></script>
@stop