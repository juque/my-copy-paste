@props([
  'value' => null,
  'name'
])


<input {{ $attributes->merge(['class' => 'shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5']) }} type="text" name="{{ $name }}" value="{{ old('title')}}" />

@error($name)
<div class="text-red-500">
{{ $message }}
</div>
@enderror
