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
                                <li class="font-light">
                                    <router-link active-class="font-bold" :to="{ name: 'logo' }" exact>Logo</router-link>
                                </li>
                                <li class="font-light">
                                    <router-link active-class="font-bold" :to="{ name: 'logo-symbol' }">Logo Symbol</router-link>
                                </li>
                                <li class="font-light">
                                    <router-link active-class="font-bold" :to="{ name: 'colors' }">Colors</router-link>
                                </li>
                                <li class="font-light">
                                    <router-link active-class="font-bold" :to="{ name: 'typography' }">Typography</router-link>
                                </li>
                            </ul>
                        </section>

                        <section class="mb-8">
                            <h5 class="uppercase font-bold mb-5">Doodles</h5>
                            <ul>
                                <li class="font-light">
                                    <router-link active-class="font-bold" :to="{ name: 'mascot' }">Mascot</router-link>
                                </li>
                                <li class="font-light">
                                    <router-link active-class="font-bold" :to="{ name: 'illustrations' }">Illustrations</router-link>
                                </li>
                                <li class="font-light">
                                    <router-link active-class="font-bold" :to="{ name: 'loaders-and-animations' }">Loaders & Animations</router-link>
                                </li>
                                <li class="font-light">
                                    <router-link active-class="font-bold" :to="{ name: 'wallpapers' }">Wallpapers</router-link>
                                </li>
                            </ul>
                        </section>

                        <section class="mb-8">
                            <h5 class="uppercase font-bold mb-5">Stats</h5>
                            <ul>
                                <li class="font-light">
                                    <router-link active-class="font-bold" :to="{ name: 'site-stats' }">Site stats</router-link>
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
