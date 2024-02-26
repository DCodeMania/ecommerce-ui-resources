<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>{{ $title ?? 'Page Title' }}</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @livewireStyles
</head>

<body class="bg-slate-200 dark:bg-slate-700">
  @livewire('partials.navbar')
  {{-- <main class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto"> --}}
  <main>
    {{ $slot }}
  </main>
  @livewire('partials.footer')
  @livewireScripts
</body>

</html>
