<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Aetherium') }}</title>

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#e8e5dc] text-black antialiased">
    <div class="mx-auto min-h-screen max-w-7xl border-x-2 border-black bg-[#f3f1e8]">
        <header class="border-b-2 border-black">
            <div class="grid grid-cols-1 sm:grid-cols-[1fr_auto]">
                <div class="border-b-2 border-black p-5 sm:border-b-0 sm:border-r-2">
                    <div class="font-mono text-xs font-bold uppercase tracking-widest">
                        AETHERIUM / PLATFORM
                    </div>
                </div>
            </div>
        </header>
        <main>
            <section class="border-b-2 border-black">
                <div class="border-b-2 border-black p-6 sm:p-10 lg:border-b-0 lg:border-r-2 lg:p-14">
                    <div class="mb-12 flex items-center gap-3 font-mono text-xs font-bold uppercase">
                        <span class="bg-black px-2 py-1 text-[#f3f1e8]">
                            001
                        </span>
                        Platform Foundation
                    </div>
                    <h1
                        class="max-w-5xl text-[clamp(4rem,11vw,10rem)] font-black uppercase leading-[0.78] tracking-[-0.07em]">
                        Aetherium
                    </h1>
                    <div class="mt-12 max-w-2xl border-l-4 border-black pl-5">
                        <p class="text-xl font-bold leading-tight sm:text-2xl">
                            The infrastructure beneath the ecosystem.
                        </p>
                        <p class="mt-4 max-w-xl font-mono text-sm leading-6">
                            Shared services, data, identity, and APIs for
                            applications that need to work together.
                        </p>
                    </div>
                    <div class="mt-12 flex flex-wrap gap-3">
                        <a href="/docs"
                            class="border-2 border-black bg-black px-6 py-4 font-mono text-sm font-bold uppercase text-white transition-transform hover:-translate-y-1 hover:translate-x-1">
                            Read Documentation →
                        </a>
                        <a href="/status"
                            class="border-2 border-black bg-[#f3f1e8] px-6 py-4 font-mono text-sm font-bold uppercase transition-transform hover:-translate-y-1 hover:translate-x-1">
                            System Status
                        </a>
                    </div>
                </div>
            </section>
            <section>
                <div class="border-b-2 border-black p-6 sm:p-10">
                    <div class="flex items-end justify-between gap-6">
                        <div>
                            <div class="mb-3 font-mono text-xs font-bold uppercase">
                                002 / System Map
                            </div>
                            <h2 class="text-4xl font-black uppercase tracking-tight sm:text-6xl">
                                Core Systems
                            </h2>
                        </div>
                        <span class="hidden font-mono text-xs uppercase sm:block">
                            03 Modules
                        </span>
                    </div>
                </div>
                <div class="grid md:grid-cols-3">
                    <article class="border-b-2 border-black p-6 sm:p-8 md:border-b-0 md:border-r-2">
                        <div class="mb-16 flex items-start justify-between">
                            <span class="font-mono text-xs font-bold">
                                01
                            </span>
                            <span class="border-2 border-black px-2 py-1 font-mono text-[10px] font-bold uppercase">
                                CORE
                            </span>
                        </div>
                        <h3 class="text-3xl font-black uppercase">
                            Foundation
                        </h3>
                        <p class="mt-5 font-mono text-sm leading-6 text-gray-700">
                            Identity, shared data, configuration,
                            permissions, and the boring infrastructure
                            every application eventually needs.
                        </p>
                    </article>
                    <article class="border-b-2 border-black p-6 sm:p-8 md:border-b-0 md:border-r-2">
                        <div class="mb-16 flex items-start justify-between">
                            <span class="font-mono text-xs font-bold">
                                02
                            </span>
                            <span class="border-2 border-black px-2 py-1 font-mono text-[10px] font-bold uppercase">
                                API
                            </span>
                        </div>
                        <h3 class="text-3xl font-black uppercase">
                            Gateway
                        </h3>
                        <p class="mt-5 font-mono text-sm leading-6 text-gray-700">
                            One controlled entry point for services,
                            applications, and external consumers
                            across the ecosystem.
                        </p>
                    </article>
                    <article class="p-6 sm:p-8">
                        <div class="mb-16 flex items-start justify-between">
                            <span class="font-mono text-xs font-bold">
                                03
                            </span>
                            <span class="border-2 border-black px-2 py-1 font-mono text-[10px] font-bold uppercase">
                                APPS
                            </span>
                        </div>
                        <h3 class="text-3xl font-black uppercase">
                            Ecosystem
                        </h3>
                        <p class="mt-5 font-mono text-sm leading-6 text-gray-700">
                            Hospitality, finance, logistics, ERP,
                            and whatever comes next.
                        </p>
                    </article>
                </div>
            </section>
        </main>

        <footer class="border-t-2 border-black">
            <div class="grid grid-cols-1 sm:grid-cols-2">
                <div class="border-b-2 border-black p-6 font-mono text-xs uppercase sm:border-b-0 sm:border-r-2">
                    Aetherium Platform
                </div>
                <div class="p-6 font-mono text-xs uppercase sm:text-right">
                    Built underneath everything.
                </div>
            </div>
        </footer>
    </div>
</body>

</html>