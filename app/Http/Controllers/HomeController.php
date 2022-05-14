<?php

namespace App\Http\Controllers;

use App\Model\Questionario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $questionarios = Questionario::all()->where('users_id', Auth::id());
        return view('home', ['questionarios' => $questionarios]);
    }
}
