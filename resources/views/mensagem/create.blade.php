<h1>Formulário de Cadastro de Mensagem</h1>
<hr>
<form action="/mensagem" method="POST">
	{{ csrf_field() }}
	Título:			<input type="text" name="titulo"> 				 <br>
	Descrição:		<input type="text" name="texto">			 <br>
	Agendado para:	<input type="text" name="autor"> <br>
	<input type="submit" value="Salvar">
</form>