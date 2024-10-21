<x-layout>
<h2>Snippets etiquetados con "{{ $tag }}"</h2>

@if ($snippets->isEmpty())
    <p>No hay snippets con este tag.</p>
@else

  @foreach ($snippets as $snippet)
    <x-snippet-single :snippet=$snippet />
  @endforeach

@endif
</x-layout>
