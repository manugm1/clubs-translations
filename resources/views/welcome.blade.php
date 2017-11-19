@extends('master')

@section('extracode')
<!-- DataTables -->
{!!Html::script('assets/bower_components/datatables.net/js/jquery.dataTables.min.js')!!}
{!!Html::script('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')!!}
{!!Html::style('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')!!}
<script>
$(document).ready(function() {
    var table = $('#tabla').DataTable();
} );
</script>
@stop

@section('content')
<div class="container">
    <div class="row" class="col-xs-12">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">{{trans('public.total-clubs')}}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="tabla" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Club</th>
                        <th>Manager</th>
                        <th>{{trans('public.club-description')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($var as $key => $valor)
                        <tr>
                            <td>{{ $valor->id }}</td>
                            <td>{{ $valor->name }}</td>
                            <td>{{ $valor->manager }}</td>
                            <td>{{ $valor->translation(\App::getLocale())->first()->description ?? ""}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Club</th>
                        <th>Manager</th>
                        <th>{{trans('public.club-description')}}</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div> <!-- /.row-->
</div> <!-- /.container-->
@stop



