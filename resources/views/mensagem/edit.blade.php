<h1>Formulário de Edição da Mensagem código {{$mensagem->id}}</h1>
<hr>

  <!-- EXIBE MENSAGENS DE ERROS -->
  @if ($errors->any())
	<div class="container">
	  <div class="alert alert-danger">
	    <ul>
	      @foreach ($errors->all() as $error)
	      <li>{{ $error }}</li>
	      @endforeach
	    </ul>
	  </div>
	</div>
  @endif

<form action="/mensagem/{{$mensagem->id}}" method="POST">
	{{ csrf_field() }}
	{{ method_field('PUT') }}
	Título: 		<input type="text" name="title" value="{{$mensagem->title}}"> 	     <br>
	Descrição:		<input type="text" name="description" value="{{$mensagem->description}}">   <br>
	Agendado para:  <input type="datetime-local" name="scheduledto" value="{{$mensagem->scheduledto}}">   <br>
	<input type="submit" value="Salvar">
</form>



  <!-- EXIBE MENSAGENS DE SUCESSO -->
@if(\Session::has('sucess'))
<div class="container>">
<div class="alert alert-sucess">
{{zSession::get('sucess')}}
</div>
</div>
@endif