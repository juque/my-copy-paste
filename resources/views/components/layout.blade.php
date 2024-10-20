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
    <div class="max-w-sm mx-auto text-center">

      <h1 class="font-black text-4xl"><a href="{{ route('snippets.index') }}">My Copy Paste</a></h1>

      @isset($heading)
        <h3 class="text-3xl font-bold my-5">{{ $heading }}</h3>
      @endisset

    </div>

    {{ $slot }}

    <x-flash />

  </div>
</body>
</html>
