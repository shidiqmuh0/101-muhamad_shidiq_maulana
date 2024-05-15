<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anime;

class AnimeController extends Controller
{
    public function index()
    {
        $animes = Anime::all();
        return view('anime.index', compact('animes'));
    }

    public function create()
    {
        return view('anime.create');
    }

    public function store(Request $request)
    {
        $anime = new Anime;
        $anime->title = $request->title;
        $anime->description = $request->description;
        // Tambahkan field lain sesuai kebutuhan
        $anime->save();

        return redirect()->route('home');
    }

    public function show($id)
    {
        $anime = Anime::findOrFail($id);
        return view('anime.show', compact('anime'));
    }

    public function edit($id)
    {
        $anime = Anime::findOrFail($id);
        return view('anime.edit', compact('anime'));
    }

    public function update(Request $request, $id)
    {
        $anime = Anime::findOrFail($id);
        $anime->title = $request->title;
        $anime->description = $request->description;
        // Update field lain sesuai kebutuhan
        $anime->save();

        return redirect()->route('home');
    }

    public function destroy($id)
    {
        $anime = Anime::findOrFail($id);
        $anime->delete();

        return redirect()->route('home');
    }
}
