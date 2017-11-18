@extends('master')

@section('pagetitle', 'Crear un club')

@section('headercontent')
<style>
    #tabla tr *{
        text-align: center !important;
    }
</style>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
    Clubs
    <small>Crear un club</small>
    </h1>
    <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active">Crear un club</li>
    </ol>
</section>
@stop
@section('content')

<section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-xs-12">
            @if ($errors->any())
                <div class="callout callout-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">Crear club</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    {!! Form::open(['route' => 'clubs.index', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="titulo" class="col-sm-3 control-label">Nombre</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Nombre">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="autor" class="col-sm-3 control-label">Manager</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="manager" id="manager" placeholder="Manager">
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <button type="reset" class="btn btn-default">Reset</button>
                        <button type="submit" class="btn btn-success pull-right">Crear</button>
                    </div><!-- /.box-footer -->
                    {!! Form::close() !!}
                </div><!-- /.box -->
            </div><!-- ./col -->
        </div><!-- /.row -->
        <!-- Main row -->
        <div class="row">

            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable">




            </section><!-- right col -->
        </div><!-- /.row (main row) -->

    </section><!-- /.content -->
    @stop