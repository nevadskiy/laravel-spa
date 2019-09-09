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
                        <section class="mb-8">
                            <h5 class="uppercase font-bold mb-5">The Brand</h5>
                            <ul>
                                <li class="text-sm">
                                    <router-link :to="{ name: 'home' }">Logo</router-link>
                                </li>
                                <li class="text-sm">
                                    <router-link :to="{ name: 'about' }">Logo Symbol</router-link>
                                </li>
                                <li class="text-sm">
                                    <router-link :to="{ name: 'about' }">Colors</router-link>
                                </li>
                                <li class="text-sm">
                                    <router-link :to="{ name: 'about' }">Typography</router-link>
                                </li>
                            </ul>
                        </section>

                        <section class="mb-8">
                            <h5 class="uppercase font-bold mb-5">Doodles</h5>
                            <ul>
                                <li class="text-sm">
                                    <router-link :to="{ name: 'home' }">Mascot</router-link>
                                </li>
                                <li class="text-sm">
                                    <router-link :to="{ name: 'about' }">Illustrations</router-link>
                                </li>
                                <li class="text-sm">
                                    <router-link :to="{ name: 'about' }">Loaders & Animations</router-link>
                                </li>
                                <li class="text-sm">
                                    <router-link :to="{ name: 'about' }">Wallpapers</router-link>
                                </li>
                            </ul>
                        </section>
                    </aside>

                    <div class="flex-1">
                        <router-view></router-view>
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>
