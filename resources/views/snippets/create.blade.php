<x-layout>

  <x-slot:heading>Crear un nuevo Snippet</x-slot:heading>

  <x-snippet-form :action="route('snippets.store')" />

</x-layout>
