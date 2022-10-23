<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('assets/img/finapk.png') }}" type="image/x-icon">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div x-data="{ selected: null }" class="flex-col w-full md:flex md:flex-row md:min-h-screen">
        <div @click.away="open = false"
            class="flex flex-col flex-shrink-0 w-full text-gray-700 bg-white md:w-64 text-gray-200 bg-slate-900"
            x-data="{ open: false }">
            <x-adminpanel.head project="Finaciële APK" section="Admin" />
            <nav :class="{ 'block': open, 'hidden': !open }"
                class="flex-grow px-4 pb-4 md:block md:pb-0 md:overflow-y-auto">
                <x-adminpanel.nav.button title="Statistics" href="#" />
                <x-adminpanel.nav.dropdown id="1" title="Blog">
                    <x-adminpanel.nav.button title="Create - Edit - Delete" href="#" />
                    <x-adminpanel.nav.button title="Blog Manager" href="#" />
                </x-adminpanel.nav.dropdown>
                <x-adminpanel.nav.button title="Assessment Builders" href="#" />
                <x-adminpanel.nav.button title="Page Builder" href="#" />
                <x-adminpanel.nav.dropdown id="2" title="Roles and Permissions">
                    <x-adminpanel.nav.button title="Roles Manager" href="#" />
                    <x-adminpanel.nav.button title="Permissions Manager" href="#" />
                </x-adminpanel.nav.dropdown>
                <x-adminpanel.nav.dropdown id="3" title="{{ ucfirst(Auth::user()->name) }}">
                    <x-adminpanel.nav.formlink action="route('logout')" href="route('logout')" title="Logout" />
                    <x-adminpanel.nav.button title="My Link" href="#" />
                </x-adminpanel.nav.dropdown>
            </nav>
        </div>
        <div class="flex w-full bg-slate-200">
            {{ $slot }}
        </div>
    </div>
</body>

</html>
