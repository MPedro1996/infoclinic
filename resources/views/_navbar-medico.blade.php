<nav class="navbar navbar-expand-md navbar-dark bg-success">
	<div class="container-fluid">
		<a class="navbar-brand" href="/medico">
			<i class="fa fa-user-md"></i> Médico
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<!-- Left Side Of Navbar -->
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="/">Home</a>
				</li>
				<li class="nav-item dropdown active">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-id-card-alt"></i> Conselhos Regionais <span class="caret"></span></a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="/medico/conselhos-regionais/novo"><i class="fa fa-plus"></i> Novo</a>
						<a class="dropdown-item" href="/medico/conselhos-regionais/"><i class="fa fa-list"></i> Procurar</a>
					</div>
				</li>
				<li class="nav-item dropdown active">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="far fa-calendar-alt"></i> Dias de Atendimento <span class="caret"></span></a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="/medico/vinculos/listar"><i class="fas fa-link"></i> Meus Vínculos</a>
						<a class="dropdown-item" href="/medico/dias-atendimento/listar"><i class="far fa-calendar-alt"></i> Meus Dias de Atendimento</a>
					</div>
				</li>
				<li class="nav-item active">
					<a href="/medico/consultas/listar?data_hoje=1" class="nav-link"><i class="fas fa-book"></i> Minha Agenda</a>
				</li>
			</ul>

			<!-- Right Side Of Navbar -->
			<ul class="navbar-nav ml-auto">
				<!-- Authentication Links -->
				@guest
					<li class="nav-item active">
						<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
					</li>
				@else
					<li class="nav-item dropdown active">
						<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
							{{ Auth::user()->nome }} <span class="caret"></span>
						</a>

						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="{{ route('logout') }}"
							   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
								{{ __('Sair') }}
							</a>

							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>
						</div>
					</li>
				@endguest
			</ul>
		</div>
	</div>
</nav>