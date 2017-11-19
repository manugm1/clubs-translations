<nav class="navbar navbar-inverse" role="navigation">
        <!-- El logotipo y el icono que despliega el menú se agrupan
             para mostrarlos mejor en los dispositivos móviles -->
        <div class="navbar-header">
            <a class="navbar-brand" href="{{URL::to('/')}}">Prueba</a>
        </div>

        <!-- Agrupar los enlaces de navegación, los formularios y cualquier
             otro elemento que se pueda ocultar al minimizar la barra -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
			</ul>
			<ul class="nav navbar-nav navbar-right">
                @if (Auth::check())
                <li><a href="{{URL::to('private')}}" id="login-form-link">{{trans('public.enter-private')}}</a></li>
                <li><a href="#" id="login-form-link" data-toggle="modal" data-target="#modal-default">{{trans('public.out')}}</a></li>
                <div class="modal fade" id="modal-default" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span></button>
                                <h4 class="modal-title">{{trans('public.out-system')}}</h4>
                            </div>
                            <div class="modal-body">
                                <p>{{trans('public.sure-out')}}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">{{trans('public.close')}}</button>
                                <a class="btn btn-small btn-danger" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">{{trans('public.out-system')}}</a>
                                <form id="frm-logout" action="{{URL::route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                @else
                <li><a href="{{URL::to('login')}}" id="login-form-link">{{trans('public.login')}}</a></li>
                <li><a href="{{URL::to('register')}}" id="login-form-link">{{trans('public.register')}}</a></li>
                @endif
            </ul>
        </div>
</nav>