<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Cave à Vin</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>
        
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased bg-gray-200">
        
        @include('partials.navbar')
        <header>
            <div class="w-full bg-center bg-cover h-96 mt-5" style="background-image: url(https://images.pexels.com/photos/774455/pexels-photo-774455.jpeg);">
                <div class="flex items-center justify-center w-full h-full bg-gray-900 bg-opacity-50">
                    <div class="text-center">
                        <h1 class="text-2xl font-semibold text-white uppercase lg:text-3xl"> <span class="text-red-800 ">Votre</span> Cave à Vin</h1>
                    </div>
                </div>
            </div>
        </header>
        @yield('content')
        @include('partials.footer')
    </body>
</html>
