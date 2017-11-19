@extends('private.master')

 @section('extracode')
 <script type="text/javascript">
        function borrar(urlBorrar){
                $.ajax({
                    url: urlBorrar,
                    type: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(results) {
                        console.log(results)
                        location.reload();
                    },
                    error: function(results) {
                        location.reload();
                    }
                });
                return false;
        }
    </script>
 @stop

@section('pagetitle', trans('private.language-see'))

@section('headercontent')
<style>
    #tabla tr *{
        text-align: center !important;
    }
</style>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
    {{trans('private.languages')}}
    <small>{{trans('private.languages-subtitle')}}</small>
    </h1>
    <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> {{trans('private.welcome')}}</a></li>
    <li class="active">{{trans('private.languages-subtitle')}}</li>
    </ol>
</section>
@stop

@section('content')
<section class="content container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-xs-12">
                @if (Session::has('message'))
                <div class="callout callout-success">
                    <ul>
                    {{ Session::get('message') }}
                    </ul>
                </div>
                @endif
                <div class="row">
                    <section class="col-lg-5">
                        <a style="margin-bottom: 10px;" class="btn btn-small btn-success" href="{{ URL::to('private/languages/create') }}">{{trans('private.create')}}</a>
                    </section><!-- right col -->
                </div><!-- /.row (main row) -->
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">{{trans('private.languages')}}</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table id="tabla" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>{{trans('private.language-name')}}</th>
                                <th>{{trans('private.language-locale')}}</th>
                                <th>{{trans('private.edition')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($var as $key => $valor)
                                <tr>
                                    <td>{{ $valor->id }}</td>
                                    <td>{{ $valor->name }}</td>
                                    <td>{{ $valor->locale }}</td>
                                    <td>
                                    <a class="btn btn-small btn-warning" href="{{ URL::to('private/languages/' . $valor->id . '/edit') }}">{{trans('private.edit')}}</a>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-default-{{$valor->id}}">{{trans('private.delete')}}</button>
                                    </td>
                                </tr>
                                <div class="modal fade" id="modal-default-{{$valor->id}}" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span></button>
                                                <h4 class="modal-title">{{trans('private.language-delete')}}</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p>{{trans('private.language-sure-delete')}} <strong>{{$valor->id."-".$valor->name}}</strong>?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">{{trans('private.close')}}</button>
                                                <a class="btn btn-small btn-danger" onclick="return borrar('{{URL::to('private/languages/'.$valor->id)}}')">{{trans('private.delete')}}</a>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Locale</th>
                                <th>Edición</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- ./col -->
        </div><!-- /.row -->
</section>

@stop