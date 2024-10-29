@props([
    'isUpdate' => false,
    'type' => 'submit'
])

<button 
    type="{{ $type }}"
    {{ $attributes->merge([
        'class' => 'text-white bg-color-base-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center'
    ]) }}
>
    {{ $isUpdate ? 'Actualizar' : 'Crear' }}
</button>
