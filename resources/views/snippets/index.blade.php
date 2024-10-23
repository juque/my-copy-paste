<x-layout>

  <x-slot:heading>Snippets</x-slot:heading>

  <div class="my-10 py-3 text-center border rounded-xl bg-[#257180] text-white">
    <a class="text-4xl" href="{{ route('snippets.create') }}">Nuevo</a>
  </div>

  <div class="tags text-center">
    @foreach($tags as $tag)
      <span class="inline-block border bg-[#CB6040] text-white rounded-2xl p-2">
        <a href="{{ route('snippets.byTag', $tag->name) }}">{{ $tag->name }}</a>
      </span>
    @endforeach
  </div>

  @foreach($snippets as $snippet)

    <x-snippet-single :snippet=$snippet />

  @endforeach

</x-layout>
