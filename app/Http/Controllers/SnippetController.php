<?php

namespace App\Http\Controllers;

use App\Models\Snippet;
use Illuminate\Http\Request;

class SnippetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $snippets = Snippet::with('tags')->get();
      return view('snippets.index', ['snippets' => $snippets ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('snippets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

      $request->validate([
        'title'   => 'required',
        'content' => 'required',
        'note'    => 'required'
      ]);

      $snippet = Snippet::create($request->all());

      collect(explode(',', $request->tags ?? ''))
        ->filter()
        ->map(fn($tag) => trim($tag))
        ->whenNotEmpty(fn($tags) => $snippet->syncTags($tags->toArray()));

      return redirect()->route('snippets.index')->with('success', 'Snippet Creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Snippet $snippet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Snippet $snippet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Snippet $snippet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Snippet $snippet)
    {
        //
    }
}
