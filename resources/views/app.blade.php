<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        {{-- Fonts --}}
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        {{-- Styles --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        {{-- Scripts --}}
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans">
        <div id="app">
            <div class="container mx-auto">
                <header class="py-6">
                    <h1 class="text-2xl">{{ config('app.name') }}</h1>
                </header>

                <main class="flex">
                    <aside class="w-1/5">
                        <ul>
                            <li>
                                <router-link :to="{ name: 'home' }">Home</router-link>
                            </li>
                            <li>
                                <router-link :to="{ name: 'about' }">About</router-link>
                            </li>
                        </ul>
                    </aside>

                    <div class="flex-1">
                        <router-view></router-view>
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>
