@props(['snippet' => null, 'method' => null, 'action', 'tagString' => null])

<form class="max-w-lg mx-auto" action="{{ $action }}" method="POST">

     @csrf

     @if($method === 'PUT')
       @method('PUT')
     @endif

      <div class="mb-5">

        <x-form-label for="title">Título</x-form-label>
        <x-form-input name="title" :value="old('title', $snippet->title ?? '')" />

      </div>

      <div class="mb-5">

        <x-form-label for="content">Contenido</x-form-label>
        <x-form-input name="content" :value="old('content', $snippet->content ?? '')" /> 

      </div>

      <div class="mb-5">

        <x-form-label for="note">Nota</x-form-label>
        <x-form-textarea class="min-h-[200px]" name="note" :value="old('note', $snippet->note ?? '')" />

      </div>

      <div class="mb-5">

        <x-form-label for="tags">Tags</x-form-label>
        <x-form-input name="tags" :value="old('tags', $tagString ?? '')" /> 
          
      </div>

      <div>

        <x-form-button class="w-full" />

      </div>

</form>
