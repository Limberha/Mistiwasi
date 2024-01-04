<x-master-layout>
</x-master-layout>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <!--iconos
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/instagram.css' rel='stylesheet'>
    <link href="./dist/output.css" rel="stylesheet">
</head>

<body>
    <!-- component -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');

        :root {
            --font-family: 'Inter', sans-serif;
            --font-size: 1rem;
            --bg: white;

        }

        html,
        body {
            font-family: var(--font-family);
            /* padding-bottom: 16rem */
        }

        body {
            background-color: var(--bg);
        }

        .modal.fade .modal-content {
            opacity: 0;
            visibility: hidden;
            transform: scale(1.1);
        }

        .modal.show .modal-content {
            opacity: 1;
            visibility: visible;
            transform: scale(1);
        }

        .modal-content {
            transform: scale(1.1);
            transition: visibility 0.25s ease-out, opacity 0.25s ease-out,
                transform 0.25s ease-out;
        }

        /** Modal static */

        .modal.modal-static .modal-content {
            transform: scale(1.02);
        }
    </style>

    <main class=" items-center justify-center bg-white p-5">

        <div class="grid grid-cols-2 grid-rows-1 gap-4 m-2">
            <div>
                <h1 class="text-3xl font-bold mb-4">Catálogo de productos</h1>
            </div>
            <div>
                @canany(['crear', 'administrar'])
                    <button data-toggle="modal" type="button"
                        class="flex items-center justify-center px-4 font-medium bg-violet-500 text-black h-9 rounded-md hover:bg-gray-200 transition-all duration-300">
                        <span class="flex items-center justify-center space-x-2">Añadir Producto</span>
                    </button>
                @endcanany

            </div>
        </div>



        {{-- Modal --}}
        <div role="dialog" id="modal-example" aria-hidden="false" style="display: flex;"
            class="modal fixed top-0 left-0 z-50 w-screen h-screen bg-black/30 flex items-center flex-col justify-center p-6 fade"
            tabindex="-1">

            <div class="absolute top-0 left-0 z-[0] w-full h-full" tabindex="-1"></div>

            <article class="modal-content flex flex-col relative m-0 rounded-md bg-white sm:my-16"
                aria-labelledby="modal-title" aria-describedby="modal-body">

                <x-form enctype="multipart/form-data">
                    <header class="flex p-4 items-center justify-between">
                        <h2 class="m-0 text-xl font-medium max-w-[calc(100%_-_3rem)]">Añadir producto</h2>
                        <button type="button"
                            class="flex items-center justify-center w-8 h-8 rounded-full bg-transparent transition-colors duration-300 hover:bg-black/10"
                            data-dismiss="modal" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
                                fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" style="--size: 32rem">
                                <line x1="18" y1="6" x2="6" y2="18" style="--size: 32rem">
                                </line>
                                <line x1="6" y1="6" x2="18" y2="18" style="--size: 32rem">
                                </line>
                            </svg>
                        </button>
                    </header>
                    <main class="relative flex-[1_1_auto] p-4" style="--size: 32rem">
                        <div>
                            <label for="" class="block text-gray-700 text-sm font-bold mb-2">Nombre</label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="text" name="nombre" id="" placeholder="nombre de producto">
                        </div>
                        <div>
                            <label for="" class="block text-gray-700 text-sm font-bold mb-2">Imagen</label>
                            <input
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                type="file" name="img" id="" placeholder="nombre de producto"
                                aria-describedby="seleccion archivo">
                        </div>
                        <div>
                            <label for="" class="block text-gray-700 text-sm font-bold mb-2">Gramos</label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="number" name="gramos" id="" placeholder="gramaje">
                        </div>
                        <div>
                            <label for="" class="block text-gray-700 text-sm font-bold mb-2">Palitos
                                crochet</label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="text" name="palitos_crochet" id="" placeholder="para que crochet es ">
                        </div>
                        <div>
                            <label for="" class="block text-gray-700 text-sm font-bold mb-2">Precio</label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="number" name="precio" id="" placeholder="precio del producto">
                        </div>
                        <div>
                            <label for="" class="block text-gray-700 text-sm font-bold mb-2">Tipo de
                                fibra</label>
                            <select
                                class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                name="tipo_fibra_id" id="">
                                @foreach ($listaTF as $tf)
                                    <option value="{{ $tf->id }}">{{ $tf->tipo_fibra }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for=""
                                class="block text-gray-700 text-sm font-bold mb-2">Existencias</label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"type="number"
                                name="stock" id="" placeholder="existencias del producto">
                        </div>
                        <div>
                            <label for="" class="block text-gray-700 text-sm font-bold mb-2">Coleccion</label>
                            <select
                                class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                name="coleccion_id" id="">
                                @foreach ($listaColec as $colec)
                                    <option value="{{ $colec->id }}">{{ $colec->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="" class="block text-gray-700 text-sm font-bold mb-2">Grosor</label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="text" name="grosor" id="" placeholder="grosor del producto">
                        </div>
                    </main>

                    <footer class="flex flex-shrink-0 flex-wrap items-center justify-end flex-row p-4 gap-1"
                        style="--size: 32rem">
                        <button type="button"
                            class="flex items-center justify-center px-4 font-medium bg-gray-200 text-black h-9 rounded-md hover:bg-gray-300 transition-all duration-300"
                            data-dismiss="modal">
                            <span class="flex items-center justify-center space-x-2">Close</span></button>
                        <button type="submit"
                            class="flex items-center justify-center px-4 font-medium bg-gray-200 text-black h-9 rounded-md  ">
                            <span class="flex items-center justify-center space-x-2 ">Save changes</span>
                        </button>
                    </footer>
                </x-form>
            </article>
        </div>


        <div>
            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        {{-- tabla --}}
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead>
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Id
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Nombre
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">imagen
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Gramos
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Palitos
                                    crochet
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Precio
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Tipo de
                                    Fibra
                                </th>
                                @canany(['eliminar', 'crear', 'editar', 'administrar'])
                                    <th scope="col"
                                        class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Exsistencias
                                    </th>
                                @endcan
                                <th scope="col"
                                    class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Coleccion
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Grosor
                                </th>
                                @canany(['eliminar', 'crear', 'editar', 'administrar'])
                                    <th scope="col"
                                        class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Acciones
                                    </th>
                                @endcan
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                            @forelse ($listaProd as $lp)
                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <td scope="row"
                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                        {{ $lp->id }}</td>
                                    <td scope="row"
                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                        {{ $lp->nombre }}</td>
                                    <td scope="row"
                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                        <img src="{{ $lp->img }}" alt="" width="64">
                                    </td>
                                    <td scope="row"
                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                        {{ $lp->gramos }}</td>
                                    <td scope="row"
                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                        {{ $lp->palitos_crochet }}</td>
                                    <td scope="row"
                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                        {{ $lp->precio }}</td>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                        {{ $lp->tipo_fibra->tipo_fibra }}</td>
                                    @canany(['eliminar', 'crear', 'editar', 'administrar'])
                                        <td scope="row"
                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                            {{ $lp->stock }}</td>

                                    @endcanany
                                    <td scope="row"
                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                        {{ $lp->coleccion->nombre }}</td>
                                    <td scope="row"
                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                        {{ $lp->grosor }}</td>

                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        @canany(['editar', 'administrar'])
                                            <a class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs  bg-white hover:bg-yellow-200 hover:text-white "
                                                type="button" href="{{ url('productos/edit/' . $lp->id) }}">
                                                <span
                                                    class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        fill="currentColor" aria-hidden="true" class="h-4 w-4">
                                                        <path
                                                            d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </a>
                                        @endcan
                                        @canany(['eliminar', 'administrar'])
                                            <form action="{{ url('productos/delete/' . $lp->id) }}" method="POST"
                                                class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button
                                                    class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs  bg-white hover:bg-red-700 hover:text-white "
                                                    type="submit">
                                                    <span
                                                        class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                                                        <svg class="h-4 w-4" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 18 20">
                                                            <path
                                                                d="M17 4h-4V2a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v2H1a1 1 0 0 0 0 2h1v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6h1a1 1 0 1 0 0-2ZM7 2h4v2H7V2Zm1 14a1 1 0 1 1-2 0V8a1 1 0 0 1 2 0v8Zm4 0a1 1 0 0 1-2 0V8a1 1 0 0 1 2 0v8Z" />
                                                        </svg>
                                                    </span>
                                                </button>
                                            </form>
                                        @endcan
                                    </td>
                                </tr>
                            @empty
                                <tr>No hay datos</tr>
                            @endforelse
                        </tbody>
                        
                    </table>
                    <a href="{{ url('ventas/create') }}">
                        <button
                            class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Vender</button>
                    </a>
                </div>
            </div>
        </div>
    </main>

</body>



<footer class="text-gray-600 body-font bg-black bottom-0 w-full">
    <div class="mx-auto w-full max-w-screen-xl">
        <div class="px-4 py-6 md:flex md:items-center md:justify-between">
            <span class="text-sm text-gray-500 dark:text-gray-300 sm:text-center">© 2023 Rosalía Reynaga. All Rights
                Reserved.
            </span>
            <div class="flex mt-4 space-x-5 sm:justify-center md:mt-0">
                <a href="#" class="text-purple-400 hover:text-purple-700">
                    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 8 19">
                        <path fill-rule="evenodd"
                            d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="sr-only">Facebook page</span>
                </a>
                <a href="#" class="text-purple-400 hover:text-purple-700 ">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M16.98 0a6.9 6.9 0 0 1 5.08 1.98A6.94 6.94 0 0 1 24 7.02v9.96c0 2.08-.68 3.87-1.98 5.13A7.14 7.14 0 0 1 16.94 24H7.06a7.06 7.06 0 0 1-5.03-1.89A6.96 6.96 0 0 1 0 16.94V7.02C0 2.8 2.8 0 7.02 0h9.96zm.05 2.23H7.06c-1.45 0-2.7.43-3.53 1.25a4.82 4.82 0 0 0-1.3 3.54v9.92c0 1.5.43 2.7 1.3 3.58a5 5 0 0 0 3.53 1.25h9.88a5 5 0 0 0 3.53-1.25 4.73 4.73 0 0 0 1.4-3.54V7.02a5 5 0 0 0-1.3-3.49 4.82 4.82 0 0 0-3.54-1.3zM12 5.76c3.39 0 6.2 2.8 6.2 6.2a6.2 6.2 0 0 1-12.4 0 6.2 6.2 0 0 1 6.2-6.2zm0 2.22a3.99 3.99 0 0 0-3.97 3.97A3.99 3.99 0 0 0 12 15.92a3.99 3.99 0 0 0 3.97-3.97A3.99 3.99 0 0 0 12 7.98zm6.44-3.77a1.4 1.4 0 1 1 0 2.8 1.4 1.4 0 0 1 0-2.8z" />
                    </svg>
                    <span class="sr-only">Instagram</span>
                </a>

                <a href="#" class="text-purple-400 hover:text-purple-700">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M24 11.7c0 6.45-5.27 11.68-11.78 11.68-2.07 0-4-.53-5.7-1.45L0 24l2.13-6.27a11.57 11.57 0 0 1-1.7-6.04C.44 5.23 5.72 0 12.23 0 18.72 0 24 5.23 24 11.7M12.22 1.85c-5.46 0-9.9 4.41-9.9 9.83 0 2.15.7 4.14 1.88 5.76L2.96 21.1l3.8-1.2a9.9 9.9 0 0 0 5.46 1.62c5.46 0 9.9-4.4 9.9-9.83a9.88 9.88 0 0 0-9.9-9.83m5.95 12.52c-.08-.12-.27-.19-.56-.33-.28-.14-1.7-.84-1.97-.93-.26-.1-.46-.15-.65.14-.2.29-.75.93-.91 1.12-.17.2-.34.22-.63.08-.29-.15-1.22-.45-2.32-1.43a8.64 8.64 0 0 1-1.6-1.98c-.18-.29-.03-.44.12-.58.13-.13.29-.34.43-.5.15-.17.2-.3.29-.48.1-.2.05-.36-.02-.5-.08-.15-.65-1.56-.9-2.13-.24-.58-.48-.48-.64-.48-.17 0-.37-.03-.56-.03-.2 0-.5.08-.77.36-.26.29-1 .98-1 2.4 0 1.4 1.03 2.76 1.17 2.96.14.19 2 3.17 4.93 4.32 2.94 1.15 2.94.77 3.47.72.53-.05 1.7-.7 1.95-1.36.24-.67.24-1.25.17-1.37" />
                    </svg>
                    <span class="sr-only">Whatsapp</span>
                </a>

            </div>
        </div>
    </div>
</footer>

<!--SCRIPT NAV BAR RESPONSIVE-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>


<script>
    const buttonClose = document.querySelectorAll('[data-dismiss="modal"]')
    const modal = document.querySelector('.modal')
    const trigger = document.querySelector('[data-toggle="modal"]')



    // Static backdrop

    function getStaticClass(modal) {
        modal.classList.add('astroui-modal-static')
        document.body.style.overflow = 'hidden'
        document.body.classList.add('astroui-modal-open')
        setTimeout(() => {
            modal.classList.remove('astroui-modal-static')
        }, 100)
    }

    // Show modal

    function showModal(modal) {
        modal.style.display = 'flex'
        setTimeout(() => {
            modal.classList.add('show')
        }, 100)
        modal.setAttribute('aria-hidden', 'false')
        document.body.style.overflow = 'hidden'
        document.body.classList.add('astroui-modal-open')
    }


    // Remove modal

    function dismissModal(modal) {
        modal.classList.remove('show')
        setTimeout(() => {
            modal.style.display = 'none'
        }, 200)
        modal.setAttribute('aria-hidden', 'true')
        document.body.style.overflow = ''
        document.body.classList.remove('astroui-modal-open')
    }

    dismissModal(modal)

    //
    // Function on dismissing modal by button close

    const getDismiss = (buttonClose, modal) => {
        buttonClose.addEventListener('click', () => {
            dismissModal(modal)
        })
    }

    buttonClose.forEach((buttonClose) => {
        getDismiss(buttonClose, modal)
    })


    // Open modal

    trigger.addEventListener('click', () => {
        showModal(modal)
    })

    // Close modal with press escape

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && modal.classList.contains('show')) {
            dismissModal(modal)
        }

    })
</script>

</body>

</html>
