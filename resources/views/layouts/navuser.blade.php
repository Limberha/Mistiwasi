<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <title>Usuarios | Misti Wasi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />

    <!--iconos
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/instagram.css' rel='stylesheet'>
    <link href="./dist/output.css" rel="stylesheet">

</head>

<body class="font-josefin bg-slate-100">

    <!--NAV-->
    <header>
        <nav
            class="
          flex flex-wrap
          items-center
          justify-between
          w-full
          py-4
          md:py-0
          px-4
          text-lg text-purple-400
          bg-black">
            <div>
                <a href="{{ url('/') }}">
                    <img src="src/img/logoMW2.png" alt="" class="w-32">
                </a>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" id="menu-button" class="h-8 w-8 cursor-pointer md:hidden block "
                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>

            <div class="hidden w-full md:flex md:items-center md:w-auto" id="menu">
                <ul
                    class="
              pt-4
              text-xl text-slate-100
              md:flex
              md:justify-between 
              md:pt-0">
                    <li>
                        <a class="md:p-4 py-2 block hover:text-purple-700" href="{{ url('/') }}">Inicio</a>
                    </li>
                    <li>
                        <a class="md:p-4 py-2 block hover:text-purple-700" href="{{ url('permission') }}">Permisos</a>
                    </li>
                    <li>
                        <a class="md:p-4 py-2 block hover:text-purple-700" href="{{ url('role') }}">Roles</a>
                    </li>
                    <li>
                        <a class="md:p-4 py-2 block hover:text-purple-700" href="{{ url('user') }}">Usuarios</a>
                    </li>


                    @if (Route::has('login'))
                        <div class="">
                            @auth

                                <div class="hidden sm:flex sm:items-center sm:ms-6 ">
                                    <x-dropdown align="right" width="48">
                                        <x-slot name="trigger">
                                            <button
                                                class="inline-flex items-center px-3 py-2 border border-transparent leading-4 rounded-md transition ease-in-out duration-150">
                                                <div>{{ Auth::user()->name }}</div>

                                                <div class="ms-1 bg-black">
                                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd"
                                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </div>
                                            </button>
                                        </x-slot>

                                        <x-slot name="content">
                                            <x-dropdown-link :href="route('profile.edit')">
                                                {{ __('Profile') }}
                                            </x-dropdown-link>

                                            <!-- Authentication -->
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf

                                                <x-dropdown-link :href="route('logout')"
                                                    onclick="event.preventDefault();
                                                                        this.closest('form').submit();">
                                                    {{ __('Log Out') }}
                                                </x-dropdown-link>
                                            </form>
                                        </x-slot>
                                    </x-dropdown>
                                </div>
                            @else
                                <li>
                                    <a href="{{ route('login') }}" class="md:p-4 py-2 hover:text-purple-700">Login</a>
                                </li>


                                @if (Route::has('register'))
                                    <li>
                                        <a href="{{ route('register') }}"
                                            class="md:p-4 py-2 hover:text-purple-700">Register</a>
                                    </li>
                                @endif
                            @endauth
                        </div>
                    @endif
                </ul>
            </div>
        </nav>

    </header>


    <main class="justify-items-center">
        {{ $slot }}
    </main>

    <!--SCRIPT NAV BAR RESPONSIVE-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>

    <script>
        // Initialization for ES Users
        import {
            Collapse,
            Dropdown,
            initTE,
        } from "tw-elements";

        initTE({
            Collapse,
            Dropdown
        });
    </script>
    <script>
        import {
            Ripple,
            Input,
            initTE,
        } from "tw-elements";

        initTE({
            Ripple,
            Input
        });
    </script>
    <script>
        const button = document.querySelector('#menu-button');
        const menu = document.querySelector('#menu');


        button.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
    <!--ICONOS https://ionic.io/ionicons/usage-->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>
