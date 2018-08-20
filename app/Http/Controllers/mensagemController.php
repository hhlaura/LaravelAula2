<?php

namespace App\Http\Controllers;

use App\Mensagem;
use Illuminate\Http\Request;

class MensagemController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
$listamensagem = Mensagem::all();
return view('Mensagem.list',['Mensagem' => $listamensagem]);
}

/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
return view('Mensagem.create');
}


/**
* Store a newly created resource in storage.
*
* @param \Illuminate\Http\Request $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request){
//faço a validade dos campos

//vetor com as mensagens de erro
$mensagem = array(
'title.required' => 'É obrigatório um título para a Mensagem',
'description.required' => 'É obrigatório uma descrição para a Mensagem',
'scheduledto.required' => 'É obrigatório o cadastro da data/hora da Mensagem',
);

//vetor com as espevcificacoes de calidacoes
$regras = array(
'title' => 'required|string|max:255',
'description.required' => 'required',
'scheduledto' => 'required|string',
);

//cria o objeto com as regras de validacao
$validador = Validador::make($request->all(), $regras, $mensagem);

//executa as validacoes
if($validador->fails()){
return redirect('Mensagem/create')
->withErrors($validador)
->withInput($request->all);
}

//se passou pelas validações, processa e salva no banco...
$obj_Mensagem = new Mensagem();
$obj_Mensagem->title= $request['title'];
$obj_Mensagem->description= $request['description'];
$obj_Mensagem->scheduledto= $request['scheduledto'];
$obj_Mensagem->save();

return redirect('/Mensagem')->with('success','Mensagem criada com sucesso!!');
}

/**
* Display the specified resource.
*
* @param \App\Mensagem $Mensagem
* @return \Illuminate\Http\Response
*/
public function show($id)
{
$Mensagem = Mensagem::find($id);
return view('Mensagem.show',['Mensagem' => $Mensagem]);
}

/**
* Show the form for editing the specified resource.
*
* @param \App\Mensagem $Mensagem
* @return \Illuminate\Http\Response
*/
public function edit(Mensagem $Mensagem)
{
//
}

/**
* Update the specified resource in storage.
*
* @param \Illuminate\Http\Request $request
* @param \App\Mensagem $Mensagem
* @return \Illuminate\Http\Response
*/
public function update(Request $request, Mensagem $Mensagem)
{
//
}

/**
* Remove the specified resource from storage.
*
* @param \App\Mensagem $Mensagem
* @return \Illuminate\Http\Response
*/
public function destroy(Mensagem $Mensagem)
{
//
}
}