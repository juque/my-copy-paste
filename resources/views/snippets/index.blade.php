<div>
<x-layout>

<h2>Snippets</h2>

<p><a href="{{ route('snippets.create') }}">Nuevo</a></p>

@foreach($snippets as $snippet)
  <div class="flex border mt-10">
    <div class="mt-1">#{{ $snippet->id }}</div> 
    <div class="pl-2">
        <p class="text-2xl">{{ $snippet->title }} </p>
        <p class="font-mono">{{ $snippet->content }}</p>
        <p class="text-sm text-gray-400">{{ $snippet->note }}</p>
    </div>
  </div>
@endforeach

</x-layout>
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
</div>
