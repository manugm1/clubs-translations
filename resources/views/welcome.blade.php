@extends('master')

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
            <form id="flujo1-form" name="flujo1-form" method="post" action="" role="form">
                
            </form>
        </div><!-- /.8 -->
    </div> <!-- /.row-->
</div> <!-- /.container-->
@stop