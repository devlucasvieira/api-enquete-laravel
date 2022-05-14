<?php

namespace App\Http\Controllers;

use App\Model\Questionario;
use App\Model\Alternativa;
use App\Model\Tipo;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionarioController extends Controller
{
    public function __construct(Questionario $questionario)
    {
        $this->questionario = $questionario;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos = Tipo::all();
        $questionarios = Questionario::all()->where('users_id', Auth::id());
        return view('questionario.index', ['questionarios' => $questionarios, 'tipos' => $tipos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos = Tipo::all();
        return view('questionario.create', ['tipos' => $tipos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        try{
            Questionario::create($request->all());
            return redirect()->route('questionario.index');
        }catch(\Exception $e){
            return redirect()->route('questionario.index', ['erro' => 'Desculpa! Não foi possivel salvar'] );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alternativas = Alternativa::where('questionarios_id', $id)->get();
        $questionario = Questionario::find($id);
        return view("questionario.show", ['questionario' => $questionario, 'alternativas' => $alternativas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipos = Tipo::all();
        $questionario = Questionario::find($id);
        return view('questionario.edit', ['questionario' => $questionario, 'tipos' => $tipos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $alternativas = Alternativa::where('questionarios_id', $id)->get();
        $questionario = Questionario::find($id);
        $questionario->update($request->all()); 
        return view('questionario.show', ['questionario' => $questionario, 'alternativas' => $alternativas]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getQuestionario($key, $id){
        $userKey = User::where('client_token', $key)->first();
        if(isset($userKey)){
            $questionario = Questionario::find($id);
            if($questionario['users_id'] == $userKey['id']){
                $alternativas = Alternativa::where('questionarios_id', $id)->get();
                return json_encode(['questionario' => $questionario, 'alternativas' => $alternativas]);
            }else{
                return json_encode(['erro' => 'Questionario nao encontrado']);
            }
        }else{
            return json_encode(['erro' => 'requisicao invalida']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $alternativas = Alternativa::all()->where('questionarios_id', $id);
            foreach($alternativas as $alternativa){
                $alternativa->delete();
            }
            $questionario = Questionario::find($id);
            $questionario->delete();
            return redirect()->route('questionario.index');
        }catch(\Exception $e){
            return redirect()->route('questionario.index', ['erro' => 'Desculpe! Não foi possivel apagar.']);
        }
    }
}