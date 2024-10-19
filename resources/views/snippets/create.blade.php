<x-layout>

  <x-slot:heading>
      Crear un nuevo Snippet
  </x-slot:heading>

<form class="max-w-sm mx-auto" action="{{ route('snippets.store') }}" method="post">

     @csrf

      <div class="mb-5">

        <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Title</label>

        <input class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" type="text" name="title" value="{{ old('title')}}" />

        @error('title')
        <div class="text-red-500">
          {{ $message }}
        </div>
        @enderror

      </div>

      <div class="mb-5">

        <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Content</label>

        <input class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" type="text" name="content" value="{{ old('content') }}" />

        @error('content')
        <div class="text-red-500">
          {{ $message }}
        </div>
        @enderror

      </div>

      <div class="mb-5">

        <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Note</label>

        <input class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" type="text" name="note" value="{{ old('note') }}" />

        @error('note')
        <div class="text-red-500">
          {{ $message }}
        </div>
        @enderror

      </div>

      <div class="mb-5">
          
        <label for="tags" class="block mb-2 text-sm font-medium text-gray-900">Tags</label>

        <input class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" type="text" name="tags" value="{{ old('tags') }}" />

      </div>

      <div>

        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Create</button>

      </div>

</form>
</x-layout>
