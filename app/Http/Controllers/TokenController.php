<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TokenController extends Controller
{

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        $user = Auth::user();
        $client_token = md5(substr( md5(Auth::user()->email), 0, 4) . '%' . date('H:i:s'));
        $user->client_token = $client_token;
        $user->save();        
        return redirect()->route('token');
    }

}
