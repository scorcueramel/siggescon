<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" integrity="sha512-rqQltXRuHxtPWhktpAZxLHUVJ3Eombn3hvk9PHjV/N5DMUYnzKPC1i3ub0mEXgFzsaZNeJcoE0YHq0j/GFsdGg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Styles -->
        @livewireStyles
         
        @stack('css')
        <!-- Scripts -->
       {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}} 
       <link rel="stylesheet" href="{{ asset('css/app.css') }}">
       <script src="{{ asset('js/app.js') }}" defer></script>

    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-100 bg-gray-100">
           
            @livewire('navigation')

            <!-- Page Heading -->

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        <script>
            console.log('PRUEBA');
        </script>
        @stack('modals')

        @stack('js')

        @livewireScripts
    </body>
</html>
