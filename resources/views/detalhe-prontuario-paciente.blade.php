@extends('principal')
@section('content')
	@include('_navbar-paciente')
	<div class="container-fluid">
		<div class="py-4">
			<div class="row justify-content-center">
				<div class="col-md-8">
					@include('erros')
					@include('mensagens')
					<center><h2>Detalhe da Consulta</h2></center>
					<div class="py-4">
						<div class="card">
							<div class="card-header bg-success text-white"><i class="fas fa-procedures"></i> Orientação</div>
							<div class="card-body">
								{!! $consulta->orientacao !!}

							</div>
						</div>
					</div>

					<div class="py-4">
						<div class="card">
							<div class="card-header bg-success text-white"><i class="fas fa-prescription"></i> Prescrição</div>
							<div class="card-body">
								@if(count($consulta->prescricoes)>0)
									<ul class="list-unstyled">
										@foreach($consulta->prescricoes as $key=>$p)
											<li>{{($key+1)}}) Medicamento: {{$p->nome_remedio}}
												<ul>
													<li>Quantidade: {{$p->quantidade}} {{$p->unidade_medida}}</li>
													<li>Posologia: {{$p->periodo}}</li>
												</ul>
											</li>
										@endforeach
									</ul>
								@endif
							</div>
						</div>
					</div>
					<div class="py-4">
						<div class="card">
							<div class="card-body">
								<a href="/paciente/prontuario/listar" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Voltar</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection