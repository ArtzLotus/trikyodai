<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manga;

class MangaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mangas = Manga::all();
        return view('mangas.index', compact('mangas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mangas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'cover_image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'status'      => 'required|string',
            'author'      => 'nullable|string',
            'artist'      => 'nullable|string',
            'genre'       => 'nullable|string',
            'release_date'=> 'nullable|date',
            'description' => 'nullable|string',
        ]);

        $path = $request->file('cover_image')->store('covers', 'public');
        
        Manga::create([
            'title' => $request->title,
            'cover_image' => $path,
            'description' => $request->description,
            'author' => $request->author,
            'artist' => $request->artist,
            'genre' => $request->genre,
            'status' => $request->status,
            'release_date' => $request->release_date,
        ]);

        return redirect()->route('mangas.index')->with('success', 'Manga created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
