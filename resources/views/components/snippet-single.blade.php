@props(['snippet' => null ])

@if(isRoute('snippets.show'))
  <div class="my-10 py-3 text-center border rounded-xl bg-[#ff0084] text-white">
    <a class="text-4xl" href="{{ route('snippets.edit', $snippet->id) }}">Editar este snippet</a>
  </div>
@endif

<div class="flex border mt-10 shadow-lg p-4 rounded-xl">

  <div class="mt-1 font-bold text-gray-500">#{{ $snippet->id }}</div> 

  <div class="pl-2 flex-grow">
    <div class="float-right">
      <button class="btn-copy hover:bg-slate-200 rounded-full p-2">
        <x-clipboard-icon />
      </button>
    </div>

    <p class="text-2xl">

      <a class="hover:text-red-500 font-extrabold" href="{{ route('snippets.show', $snippet) }}">

        {{ $snippet->title }}

      </a>

    </p>

    <div id="snippet-{{ $snippet->id }}" class="font-mono clipboard mt-2">

      {{ $snippet->content }}

    </div>

    <div class="prose prose-img:rounded-xl prose-headings:underline prose-a:text-blue-600">
      <x-markdown>
        {!! $snippet->note !!}
      </x-markdown>
    </div>

    <div class="tags my-3">
      @if($snippet->tags->isNotEmpty())
        @foreach ($snippet->tags as $tag)
          <span class="tag p-1.5 rounded-2xl text-white text-sm bg-color-base-500"><a href="{{ route('snippets.byTag', $tag->name) }}">{{ $tag->name }}</a></span>
        @endforeach
      @endif
    </div>
  </div>
</div>
