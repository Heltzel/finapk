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
        <div @click.away="open = false" class="flex flex-col flex-shrink-0 w-full text-gray-700 bg-white md:w-64 text-gray-200 bg-slate-900" x-data="{ open: false }">
            <div class="flex flex-row items-center justify-between flex-shrink-0 px-4 pt-8 pb-6">
                <a href="#" class="text-2xl font-bold tracking-widest text-yellow-400 hover:text-yellow-200 uppercase rounded-lg focus:outline-none focus:shadow-outline">
                    <span>Finaciële APK</span>
                    <span class="text-lg font-semibold tracking-widest text-yellow-400  uppercase rounded-lg focus:outline-none focus:shadow-outline">
                        Admin</span>
                </a>
                <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            {{-- <nav :class="{ 'block': open, 'hidden': !open }"
                class="flex-grow px-4 pb-4 md:block md:pb-0 md:overflow-y-auto">
                <a class="block px-4 py-2 mt-2
                        text-sm
                        text-yellow-400
                        focus:text-yellow-200
                        font-semibold
                        md:block
                        bg-slate-900
                        focus:bg-slate-600
                        hover:bg-slate-600
                        focus:shadow-outline
                        rounded-lg
                        border-2
                        focus:border-4
                        focus:border-slate-800
                        border-slate-600" href="#">Statistics</a>

                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="flex flex-row items-center w-full  px-4 py-2 mt-2 text-left
                                        text-sm
                                        text-yellow-400
                                        focus:text-yellow-200
                                        font-semibold
                                        md:block
                                        bg-slate-900
                                        focus:bg-slate-600
                                        hover:bg-slate-600
                                        focus:shadow-outline
                                        rounded-lg
                                        border-2
                                        focus:border-4
                                        focus:border-slate-800
                                        border-slate-600">
                        <span>Blog</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{ 'rotate-180': open, 'rotate-0': !open }"
                            class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="relative right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
                        <div class="px-2 py-2 bg-white rounded-md shadow bg-slate-500">
                            <a class="flex-grow px-4 pb-4 md:block md:pb-0 md:overflow-y-auto">
                                <a class="block px-4 py-2 mt-2
                                                text-sm
                                                text-yellow-400
                                                focus:text-yellow-200
                                                font-semibold
                                                md:block
                                                bg-slate-900
                                                focus:bg-slate-600
                                                hover:bg-slate-600
                                                focus:shadow-outline
                                                rounded-lg
                                                border-2
                                                focus:border-4
                                                focus:border-slate-800
                                                border-slate-600
                                                " href="#">Create / Edit</a>
                                <a class="block px-4 py-2 mt-2
                                                text-sm
                                                text-yellow-400
                                                focus:text-yellow-200
                                                font-semibold
                                                md:block
                                                bg-slate-900
                                                focus:bg-slate-600
                                                hover:bg-slate-600
                                                focus:shadow-outline
                                                rounded-lg
                                                border-2
                                                focus:border-4
                                                focus:border-slate-800
                                                border-slate-600
                                                " href="#">Blog Management</a>
                        </div>
                    </div>
                </div>
                @role('admin')
                <a class="flex-grow px-4 pb-4 md:block md:pb-0 md:overflow-y-auto">
                    <a class="block px-4 py-2 mt-2
                            text-sm
                            text-yellow-400
                            focus:text-yellow-200
                            font-semibold
                            md:block
                            bg-slate-900
                            focus:bg-slate-600
                            hover:bg-slate-600
                            focus:shadow-outline
                            rounded-lg
                            border-2
                            focus:border-4
                            focus:border-slate-800
                            border-slate-600" href="#">Assessment Builder</a>
                    <a class="flex-grow px-4 pb-4 md:block md:pb-0 md:overflow-y-auto">
                        <a class="block px-4 py-2 mt-2
                                text-sm
                                text-yellow-400
                                focus:text-yellow-200
                                font-semibold
                                md:block
                                bg-slate-900
                                focus:bg-slate-600
                                hover:bg-slate-600
                                focus:shadow-outline
                                rounded-lg
                                border-2
                                focus:border-4
                                focus:border-slate-800
                                border-slate-600" href="#">Page Builder</a>

                        <div @click.away="open = false" class="relative" x-data="{ open: false }">
                            <button @click="open = !open" class="flex flex-row items-center w-full  px-4 py-2 mt-2 text-left
                                        text-sm
                                        text-yellow-400
                                        focus:text-yellow-200
                                        font-semibold
                                        md:block
                                        bg-slate-900
                                        focus:bg-slate-600
                                        hover:bg-slate-600
                                        focus:shadow-outline
                                        rounded-lg
                                        border-2
                                        focus:border-4
                                        focus:border-slate-800
                                        border-slate-600">
                                <span>Roles and Permissions</span>
                                <svg fill="currentColor" viewBox="0 0 20 20"
                                    :class="{ 'rotate-180': open, 'rotate-0': !open }"
                                    class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <div x-show="open" x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="transform opacity-0 scale-95"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="transform opacity-100 scale-100"
                                x-transition:leave-end="transform opacity-0 scale-95"
                                class="relative right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
                                <div class="px-2 py-2 rounded-md shadow bg-slate-500 ">
                                    <a class="flex-grow px-4 pb-4 md:block md:pb-0 md:overflow-y-auto">
                                        <a class="block px-4 py-2 mt-2
                                                text-sm
                                                text-yellow-400
                                                focus:text-yellow-200
                                                font-semibold
                                                md:block
                                                bg-slate-900
                                                focus:bg-slate-600
                                                hover:bg-slate-600
                                                focus:shadow-outline
                                                rounded-lg
                                                border-2
                                                focus:border-4
                                                focus:border-slate-800
                                                border-slate-600
                                                " href="{{ route('admin.roles.index') }}">Roles
            Manager</a>
            <a class="block px-4 py-2 mt-2
                                                text-sm
                                                text-yellow-400
                                                focus:text-yellow-200
                                                font-semibold
                                                md:block
                                                bg-slate-900
                                                focus:bg-slate-600
                                                hover:bg-slate-600
                                                focus:shadow-outline
                                                rounded-lg
                                                border-2
                                                focus:border-4
                                                focus:border-slate-800
                                                border-slate-600
                                                " href="{{ route('admin.permissions.index') }}">Permissions Manager</a>
        </div>
    </div>
    </div>
    <div @click.away="open = false" class="relative" x-data="{ open: false }">
        <button @click="open = !open" class="flex flex-row items-center w-full  px-4 py-2 mt-2 text-left
                                        text-sm
                                        text-yellow-400
                                        focus:text-yellow-200
                                        font-semibold
                                        md:block
                                        bg-slate-900
                                        focus:bg-slate-600
                                        hover:bg-slate-600
                                        focus:shadow-outline
                                        rounded-lg
                                        border-2
                                        focus:border-4
                                        focus:border-slate-800
                                        border-slate-600">
            <span>{{ ucfirst(Auth::user()->name) }}</span>
            <svg fill="currentColor" viewBox="0 0 20 20" :class="{ 'rotate-180': open, 'rotate-0': !open }" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </button>
        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
            <div class="px-2 py-2 rounded-md shadow bg-slate-500">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();" class="block px-4 py-2 mt-2
                                                    text-sm
                                                    text-yellow-400
                                                    focus:text-yellow-200
                                                    font-semibold
                                                    md:block
                                                    bg-slate-900
                                                    focus:bg-slate-600
                                                    hover:bg-slate-600
                                                    focus:shadow-outline
                                                    rounded-lg
                                                    border-2
                                                    focus:border-4
                                                    focus:border-slate-800
                                                    border-slate-600">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
                <a class="flex-grow px-4 pb-4 md:block md:pb-0 md:overflow-y-auto">
                    <a class="block px-4 py-2 mt-2
                                                text-sm
                                                text-yellow-400
                                                focus:text-yellow-200
                                                font-semibold
                                                md:block
                                                bg-slate-900
                                                focus:bg-slate-600
                                                hover:bg-slate-600
                                                focus:shadow-outline
                                                rounded-lg
                                                border-2
                                                focus:border-4
                                                focus:border-slate-800
                                                border-slate-600
                                                " href="#">Link #2</a>
                    <a class="block px-4 py-2 mt-2
                                                text-sm
                                                text-yellow-400
                                                focus:text-yellow-200
                                                font-semibold
                                                md:block
                                                bg-slate-900
                                                focus:bg-slate-600
                                                hover:bg-slate-600
                                                focus:shadow-outline
                                                rounded-lg
                                                border-2
                                                focus:border-4
                                                focus:border-slate-800
                                                border-slate-600
                                                " href="#">Link #3</a>
            </div>
        </div>
    </div>
    @endrole --}}
    {{-- --}}


    <nav :class="{ 'block': open, 'hidden': !open }" class="flex-grow px-4 pb-4 md:block md:pb-0 md:overflow-y-auto">

        <div x-data="accordion" class="">
            {{-- btn Statistics --}}
            <a @click="selected =null" class="block px-4 py-2 mt-2
                        text-sm
                        text-yellow-400
                        focus:text-yellow-200
                        font-semibold
                        md:block
                        bg-slate-900
                        focus:bg-slate-600
                        hover:bg-slate-600
                        focus:shadow-outline
                        rounded-lg
                        border-2
                        focus:border-4
                        focus:border-slate-800
                        border-slate-600" href="#">Statistics</a>

            <!-- Accordion 1 -->
            <div class="">

                <!-- Head -->
                <div @click="selected != 1 ? selected = 1 : selected =null" class="flex flex-row items-center w-full  px-4 py-2 mt-2 text-left
                                        text-sm
                                        text-yellow-400
                                        focus:text-yellow-200
                                        font-semibold

                                        bg-slate-900
                                        focus:bg-slate-600
                                        hover:bg-slate-600
                                        focus:shadow-outline
                                        rounded-lg
                                        border-2
                                        focus:border-4
                                        focus:border-slate-800
                                        border-slate-600">
                    <span>Roles and Permissions</span>
                    <svg xmlns="http://www.w3.org/2000/svg" x-bind:class="selected == 1 ? 'transform rotate-180' : ''" class="h-5 w-5 transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
                <!-- Content -->
                <div class="max-h-0 overflow-hidden transition-all duration-300" x-ref="tab2" :style="selected == 1 ? 'max-height: ' + $refs.tab2.scrollHeight + 'px;' : ''">
                    <a class="flex-grow px-4 pb-4 md:block md:pb-0 md:overflow-y-auto">
                        <a class="block px-4 py-2 mt-2
                                                text-sm
                                                text-yellow-400
                                                focus:text-yellow-200
                                                font-semibold
                                                md:block
                                                bg-slate-900
                                                focus:bg-slate-600
                                                hover:bg-slate-600
                                                focus:shadow-outline
                                                rounded-lg
                                                border-2
                                                focus:border-4
                                                focus:border-slate-800
                                                border-slate-600
                                                " href="{{ route('admin.roles.index') }}">Roles
                            Manager</a>
                        <a class="block px-4 py-2 mt-2
                                                text-sm
                                                text-yellow-400
                                                focus:text-yellow-200
                                                font-semibold
                                                md:block
                                                bg-slate-900
                                                focus:bg-slate-600
                                                hover:bg-slate-600
                                                focus:shadow-outline
                                                rounded-lg
                                                border-2
                                                focus:border-4
                                                focus:border-slate-800
                                                border-slate-600
                                                " href="{{ route('admin.permissions.index') }}">Permissions Manager</a>
                </div>

            </div>
            <!-- Accordion 2 -->
            <div class="">
                <!-- Head -->
                <button @click="selected !=2? selected = 2 : selected =null" class="flex flex-row items-center w-full  px-4 py-2 mt-2 text-left
                                        text-sm
                                        text-yellow-400
                                        focus:text-yellow-200
                                        font-semibold
                                        bg-slate-900
                                        focus:bg-slate-600
                                        hover:bg-slate-600
                                        focus:shadow-outline
                                        rounded-lg
                                        border-2
                                        focus:border-4
                                        focus:border-slate-800
                                        border-slate-600">
                    <span>{{ ucfirst(Auth::user()->name) }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" x-bind:class="selected == 2 ? 'transform rotate-180' : ''" class="h-5 w-5 transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <!-- Content -->
                <div class="max-h-0 overflow-hidden transition-all duration-300" x-ref="tab2" :style="selected == 2 ? 'max-height: ' + $refs.tab2.scrollHeight + 'px;' : ''">
                    <div class="px-2 py-2 rounded-md shadow bg-slate-500 ">
                        <a class="flex-grow px-4 pb-4 md:block md:pb-0 md:overflow-y-auto">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();" class="block px-4 py-2 mt-2
                                                    text-sm
                                                    text-yellow-400
                                                    focus:text-yellow-200
                                                    font-semibold
                                                    md:block
                                                    bg-slate-900
                                                    focus:bg-slate-600
                                                    hover:bg-slate-600
                                                    focus:shadow-outline
                                                    rounded-lg
                                                    border-2
                                                    focus:border-4
                                                    focus:border-slate-800
                                                    border-slate-600">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>

                            <a class="block px-4 py-2 mt-2
                                                text-sm
                                                text-yellow-400
                                                focus:text-yellow-200
                                                font-semibold
                                                md:block
                                                bg-slate-900
                                                focus:bg-slate-600
                                                hover:bg-slate-600
                                                focus:shadow-outline
                                                rounded-lg
                                                border-2
                                                focus:border-4
                                                focus:border-slate-800
                                                border-slate-600
                                                " href="#">Username Action</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    {{-- Content --}}
    </div>
    <div class="flex w-full bg-slate-200">
        {{ $slot }}
        {{-- end --}}
    </div>


</body>

</html>
