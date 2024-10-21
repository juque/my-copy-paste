<x-layout>

  <x-slot:heading>Snippets</x-slot:heading>

  <p><a href="{{ route('snippets.create') }}">Nuevo</a></p>

  @foreach($snippets as $snippet)

    <x-snippet-single :snippet=$snippet />

  @endforeach

</x-layout>
