<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Option;

class OptionController extends Controller
{
    public function index()
    {
        $options = Option::where('active', true)->get();
        return view('options.index', compact('options'));
    }

    public function showUpdateForm()
    {
        return view('options.update');
    }

    public function updateOptions(Request $request)
    {
        Option::query()->update(['active' => false]);

        foreach ($request->options as $optionName) {
            Option::create(['name' => $optionName, 'active' => true]);
        }

        return redirect()->route('options.index')->with('success', 'Opções atualizadas com sucesso!');
    }
}
