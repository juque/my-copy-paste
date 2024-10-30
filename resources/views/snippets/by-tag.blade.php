<x-layout>

<h2 class="pt-10 text-center">
  Snippets etiquetados con «<em>{{ $tag }}</em>»
</h2>

@if ($snippets->isEmpty())
    <p>No hay snippets con este tag.</p>
@else

  @foreach ($snippets as $snippet)
    <x-snippet-single :snippet=$snippet />
  @endforeach

@endif
</x-layout>
