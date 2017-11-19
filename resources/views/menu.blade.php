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
                <li><a href="{{URL::to('private')}}" id="login-form-link">Entrar a privada</a></li>
                <li><a href="{{URL::to('logout')}}" id="login-form-link">Salir</a></li>
                @else
                <li><a href="{{URL::to('login')}}" id="login-form-link">Login</a></li>
                <li><a href="{{URL::to('register')}}" id="login-form-link">Registro</a></li>
                @endif
            </ul>
        </div>
    </nav>