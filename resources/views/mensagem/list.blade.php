<h1>Lista de Mensagem</h1>
<hr>

<!-- EXIBE MENSAGENS DE SUCESSO -->
@if(\Session::has('success'))
<div class="container">
	<div class="alert alert-success">
		{{\Session::get('success')}}
	</div>
</div>
@endif

@auth
<p><a href="/mensagem/create">Criar novo registro</a></p>
@endauth


@foreach($mensagem as $msg)
<h3>{{$msg->autor}}</h3>
<p><a href="/mensagem/{{$msg->id}}">{{$msg->titulo}}</a></p>
<p>{{$msg->texto}}</p>
<a href="/mensagem/{{$msg->id}}">Visualizar</a> 
<a href="/mensagem/{{$msg->id}}/edit">Editar</a> 
<a href="/mensagem/{{$msg->id}}/delete">Deletar</a> 
<p><a href="/mensagem/create">Criar novo registro</a></p>

<br>
@endforeach

{{  $mensagem->links()  }}

<!-- \Carbon\Carbon::parse($atividade->scheduledto)->format('d/m/Y h:m')  -->