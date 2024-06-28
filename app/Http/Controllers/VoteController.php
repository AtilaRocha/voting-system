<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VoteController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'option_id' => 'required|exists:options,id', 
        ]);
        $vote = new Vote([
            'user_id' => Auth::id(), 
            'option_id' => $request->input('option_id'), 
            'ip_address' => $request->ip(), 
        ]);
        $vote->save();
        return redirect()->route('options.index')->with('success', 'Voto registrado com sucesso!');
    }
}
