<x-layout>
<h2>Crear un nuevo Snippet</h2>
<form action="{{ route('snippets.store') }}" method="post">

     @csrf

      <div>

        <label for="title">Title</label>

        <input type="text" name="title" value="{{ old('title')}}" />

        @error('title')
        <div>
          {{ $message }}
        </div>
        @enderror

      </div>

      <div>

        <label for="title">Content</label>

        <input type="text" name="content" value="{{ old('content') }}" />

        @error('content')
        <div>
          {{ $message }}
        </div>
        @enderror

      </div>

      <div>

        <label for="title">Note</label>

        <input type="text" name="note" value="{{ old('note') }}" />

        @error('note')
        <div>
          {{ $message }}
        </div>
        @enderror

      </div>

      <div>

        <button type="submit" class="">Create</button>

      </div>

</form>
</x-layout>
