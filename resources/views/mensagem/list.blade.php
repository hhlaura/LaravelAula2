<h1>Lista de Mensagem</h1>
<hr>
@foreach($mensagem as $msg)
	<h3>{{$msg->autor}}</h3>
	<p><a href="/mensagem/{{$msg->id}}">{{$msg->titulo}}</a></p>
	<p>{{$msg->texto}}</p>
	<br>
@endforeach



<!-- \Carbon\Carbon::parse($atividade->scheduledto)->format('d/m/Y h:m')  -->