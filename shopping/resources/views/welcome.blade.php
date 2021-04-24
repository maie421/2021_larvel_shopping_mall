<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Laravel</title>
    </head>
    <body class="antialiased">
        <div  class="h-screen bg-gray-300 flex items-center justify-center">

            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                        <a href="{{ url('/dashboard/todo') }}" class="text-sm text-gray-700 underline">todo</a>
                    @else
                        <a href="{{ route('login') }}" class="font-sans mr-8">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="font-sans">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

                <h1 class="text-4xl font-bold">메인화면입니다.</h1>
        </div>
    </body>
</html>
