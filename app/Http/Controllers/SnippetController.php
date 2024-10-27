<?php

namespace App\Http\Controllers;

use App\Models\Snippet;
use Illuminate\Http\Request;
use Spatie\Tags\Tag;

class SnippetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $tags = Tag::all();
      $snippets = Snippet::with('tags')->get();
      return view('snippets.index', ['snippets' => $snippets, 'tags' => $tags]);
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

      collect(preg_split('/[,\s]+/', $request->tags ?? ''))
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
      return view('snippets.show', ['snippet' => $snippet]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Snippet $snippet)
    {
      $tagString = $snippet->tags->pluck('name')->implode(', ');
      return view('snippets.edit', ['snippet' => $snippet, 'tagString' => $tagString]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Snippet $snippet)
    {

      $validated = $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'note' => 'nullable|string',
        'tags' => 'nullable|string'
      ]);

      $snippet->update([
        'title' => $validated['title'],
        'content' => $validated['content'],
        'note' => $validated['note']
      ]);

      // if (isset($validated['tags'])) {

      //   $tagNames = array_map('trim', explode(',', $validated['tags']));

      //   $tagNames = array_filter($tagNames);

      //   $tags = collect($tagNames)->map(function ($tagName) {
      //     return Tag::firstOrCreate(['name' => $tagName]);
      //   });

      //   $snippet->tags()->sync($tags->pluck('id'));
      // 
      // } else {
      //   $snippet->tags()->detach();
      // }

      return redirect()->route('snippets.index')
         ->with('message', 'Snippet actualizado exitosamente.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Snippet $snippet)
    {
        //
    }

    public function showByTag($tag) {
      $snippets = Snippet::withAnyTags([$tag])->get();
      return view('snippets.by-tag', compact('snippets', 'tag'));
    }
}
