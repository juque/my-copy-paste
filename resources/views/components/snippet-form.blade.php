@props(['snippet' => null, 'method' => null, 'action'])

<form class="max-w-sm mx-auto" action="{{ $action }}" method="POST">

     @csrf

     @if($method === 'PUT')
       @method('PUT')
     @endif

      <div class="mb-5">

        <x-form-label for="title">Título</x-form-label>
        <x-form-input name="title" />

      </div>

      <div class="mb-5">

        <x-form-label for="content">Contenido</x-form-label>
        <x-form-input name="content" /> 

      </div>

      <div class="mb-5">

        <x-form-label for="note">Nota</x-form-label>
        <x-form-textarea name="note" />

      </div>

      <div class="mb-5">

        <x-form-label for="tags">Tags</x-form-label>
        <x-form-input name="tags" /> 
          
      </div>

      <div>

        <x-form-button />

      </div>

</form>
