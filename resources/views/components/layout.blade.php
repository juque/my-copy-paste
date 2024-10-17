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
    <h1 class="font-black text-6xl">My Copy Paste</h1>

    {{ $slot }}

    <x-flash />

  </div>
</body>
</html>
