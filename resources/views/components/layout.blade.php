<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <title>{{ config('app.name', 'Laravel') }}</title>
  
</head>

<body>
  <div class="container mx-auto">
    <h1 class="font-black text-6xl"><a href="{{ route('snippets.index') }}">My Copy Paste</a></h1>

    @isset($heading)
      <h3 class="text-3xl font-bold my-5">{{ $heading }}</h3>
    @endisset

    {{ $slot }}

    <x-flash />

  </div>
</body>
</html>
