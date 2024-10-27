<x-layout>

  <x-slot:heading>Editar Snippet</x-slot:heading>

  <x-snippet-form 
    :snippet="$snippet" method="PUT" 
    :action="route('snippets.update', $snippet)" 
    :tagString="$tagString"
   />

</x-layout>
