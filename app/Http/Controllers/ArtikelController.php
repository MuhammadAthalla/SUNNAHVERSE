<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{

    public function index()
    {
        $artikels = Artikel::all();
        return view('article.index', compact('artikels'));
    }

    public function create()
    {
        return view('article.create');
    }

    public function store(Request $request)
    {
        Artikel::create($request->all());
        return redirect()->route('article.index');
    }

    public function edit(Artikel $artikels)
    {
        return view('article.edit', compact('artikels'));
    }

    public function update(Request $request, Artikel $artikels)
    {
        $artikels->update($request->all());
        return redirect()->route('article.index');
    }

    public function destroy(Artikel $artikels)
    {
        $artikels->delete();
        return redirect()->route('article.index');
    }
}
