@extends('master')

@section('extracode')
<!-- DataTables -->
{!!Html::script('assets/bower_components/datatables.net/js/jquery.dataTables.min.js')!!}
{!!Html::script('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')!!}
@stop

@section('content')
<div class="container">
    <div class="row">
        <div id="flujo1" class="col-lg-8 col-lg-offset-2 ">
            <h1>Todos los clubs</h1>
            <table id="tabla" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Club</th>
                    <th>Manager</th>
                </tr>
                </thead>
                <tbody>
                @foreach($var as $key => $valor)
                    <tr>
                        <td>{{ $valor->id }}</td>
                        <td>{{ $valor->name }}</td>
                        <td>{{ $valor->manager }}</td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Club</th>
                    <th>Manager</th>
                </tr>
                </tfoot>
            </table>
        </div><!-- /.8 -->
    </div> <!-- /.row-->
</div> <!-- /.container-->
<script>
  $(function () {
    $('#tabla').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
@stop



