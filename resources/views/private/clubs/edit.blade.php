@extends('private.master')

@section('pagetitle', trans("private.club-edit")." ".$club->id)

@section('headercontent')
<style>
    #tabla tr *{
        text-align: center !important;
    }
</style>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
    {{trans('private.clubs')}}
    <small>{{trans('private.club-edit')}}</small>
    </h1>
    <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> {{trans('private.home')}}</a></li>
    <li class="active">{{trans('private.club-edit')}}</li>
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
                        <h3 class="box-title">{{trans('private.club-edit')}} <strong>{{$club->name}}</strong></h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    {!! Form::open(['route' => ['clubs.update', $club->id], 'method' => 'PUT', 'class' => 'form-horizontal']) !!}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="titulo" class="col-sm-3 control-label">ID</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" disabled="disabled" name="id" id="id" placeholder="ID" value="{{$club->id}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="titulo" class="col-sm-3 control-label">{{trans('private.club-name')}}</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Nombre" value="{{$club->name}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="autor" class="col-sm-3 control-label">{{trans('private.club-manager')}}</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="manager" id="manager" placeholder="Manager" value="{{$club->manager}}">
                            </div>
                        </div>
                        @foreach($var as $value)
                        <div class="form-group">
                            <label for="autor" class="col-sm-3 control-label">{{trans('private.club-description')}} {{$value->locale}}</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="description[{{$value->id}}]" 
                                       id="description-{{$value->id}}" placeholder="Descripción {{$value->locale}}"
                                       value="{{$club->translation($value->locale)->first()->description ?? ""}}">
                            </div>
                        </div>
                        @endforeach
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <button type="reset" class="btn btn-default">{{trans('private.reset')}}</button>
                        <button type="submit" class="btn btn-success pull-right">{{trans('private.club-edit')}}</button>
                    </div><!-- /.box-footer -->
                    {!! Form::close() !!}
                </div><!-- /.box -->
            </div><!-- ./col -->
        </div><!-- /.row -->
        <!-- Main row -->
        <div class="row">
            <section class="col-lg-1 col-lg-offset-5">
                <a class="btn btn-small btn-default" href="{{ URL::to('private/clubs') }}">{{trans('private.return')}}</a>
            </section><!-- right col -->
        </div><!-- /.row (main row) -->
    </section><!-- /.content -->
    @stop