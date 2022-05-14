<?php

namespace App\Http\Controllers;

use App\Model\Questionario;
use App\Model\Respondente;
use App\Model\Alternativa;
use App\Model\Tipo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RespondenteController extends Controller
{
    public function __construct(Respondente $respondente)
    {
        $this->respondente = $respondente;
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $tipos = Tipo::all();
        $questionarios = Questionario::all();
        return view('respondente.index', ['questionarios' => $questionarios, 'tipos' => $tipos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function create()
    {
        $alternativas = Alternativa::all();
        return view('respondente.create', ['alternativas' => $alternativas]);
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
        return view("respondente.show", ['questionario' => $questionario, 'alternativas' => $alternativas]);
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
            Respondente::create($request->all());
            return redirect()->route('respondente.index');
        }catch(\Exception $e){
            return redirect()->route('respondente.index', ['erro' => 'Erro, não foi possivel salvar'] );
        }
    }

}
