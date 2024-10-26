@props(['snippet' => null ])

<div class="flex border mt-10 shadow-lg p-4 rounded-xl">
  <div class="mt-1">#{{ $snippet->id }}</div> 
  <div class="pl-2 flex-grow">
    <div class="float-right">
      <button class="btn-copy hover:bg-slate-200 rounded-full p-2">
        <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M8 5.00005C7.01165 5.00082 6.49359 5.01338 6.09202 5.21799C5.71569 5.40973 5.40973 5.71569 5.21799 6.09202C5 6.51984 5 7.07989 5 8.2V17.8C5 18.9201 5 19.4802 5.21799 19.908C5.40973 20.2843 5.71569 20.5903 6.09202 20.782C6.51984 21 7.07989 21 8.2 21H15.8C16.9201 21 17.4802 21 17.908 20.782C18.2843 20.5903 18.5903 20.2843 18.782 19.908C19 19.4802 19 18.9201 19 17.8V8.2C19 7.07989 19 6.51984 18.782 6.09202C18.5903 5.71569 18.2843 5.40973 17.908 5.21799C17.5064 5.01338 16.9884 5.00082 16 5.00005M8 5.00005V7H16V5.00005M8 5.00005V4.70711C8 4.25435 8.17986 3.82014 8.5 3.5C8.82014 3.17986 9.25435 3 9.70711 3H14.2929C14.7456 3 15.1799 3.17986 15.5 3.5C15.8201 3.82014 16 4.25435 16 4.70711V5.00005M15 12H12M15 16H12M9 12H9.01M9 16H9.01" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
      </button>
    </div>
    <p class="text-2xl"><a class="hover:text-red-500" href="{{ route('snippets.show', $snippet) }}">{{ $snippet->title }}</a></p>
    <p id="snippet-{{ $snippet->id }}" class="font-mono clipboard">{{ $snippet->content }}</p>
    <p class="text-sm text-gray-400">{{ $snippet->note }}</p>
    <div class="tags">
      @if($snippet->tags->isNotEmpty())
        @foreach ($snippet->tags as $tag)
          <span class="tag"><a href="{{ route('snippets.byTag', $tag->name) }}">{{ $tag->name }}</a></span>
        @endforeach
      @endif
    </div>
  </div>
</div>
