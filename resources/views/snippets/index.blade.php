<div>
<x-layout>

<h2>Snippets</h2>

<p><a href="{{ route('snippets.create') }}">Nuevo</a></p>

@foreach($snippets as $snippet)
  <div class="border mt-10">
    <p>{{ $snippet->id }}. {{ $snippet->content }}</p>
    <p>{{ $snippet->note }}</p>
  </div>
@endforeach

</x-layout>
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
</div>
