<h1>Formulário de Cadastro de Atividade</h1>
<hr>
<form action="/atividade" method="post">
	{{ csrf_field() }}
	Título:			<input type="text" name="title"> 				 <br>
	Descrição:		<input type="text" name="description">			 <br>
	Agendado para:	<input type="datetime-local" name="scheduledto"> <br>
	<input type="submit" value="Salvar">
	</form>