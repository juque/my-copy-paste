<x-layout>
<h2>Snippets con el tag "{{ $tag }}"</h2>

@if ($snippets->isEmpty())
    <p>No hay snippets con este tag.</p>
@else
    @foreach ($snippets as $snippet)
        <div class="snippet">
            <h3>{{ $snippet->title }}</h3>
            <p>{{ $snippet->content }}</p>

            <div class="tags">
                <strong>Etiquetas:</strong>
                @foreach ($snippet->tags as $tag)
                    <span class="tag">{{ $tag->name }}</span>
                @endforeach
            </div>
        </div>
    @endforeach
@endif
</x-layout>
