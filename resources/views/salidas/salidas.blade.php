<x-master-layout>
</x-master-layout>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />

    <!--iconos
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/instagram.css' rel='stylesheet'>
    <link href="./dist/output.css" rel="stylesheet">
</head>

<body class="font-josefin bg-slate-100">
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
                <h1 class="text-3xl font-bold mb-4">Modulo de ventas</h1>
            </div>
            <hr>
            <div>
                <div class="col-span-6">
                    <div class="mb-6">
                        <label for=""
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Productos</label>
                        <select
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            name="prod" id="prod">
                            <option selected>Selecciona uno</option>
                            @forelse ($prods as $p)
                                <option value="{{ $p->id }}" data-precio="{{ $p->precio }}"
                                    data-stock="{{ $p->stock }}" data-img="{{ $p->img }}"
                                    data-nombre="{{ $p->nombre }}">{{ $p->nombre }}</option>
                            @empty
                                <option>No hay datos</option>
                            @endforelse

                        </select>
                    </div>
                </div>
                <div>
                    <a type="button"
                        class="flex items-center justify-center px-4 font-medium bg-violet-500 text-black h-9 rounded-md hover:bg-gray-200 transition-all duration-300"
                        id="btnAdd">
                        <span class="flex items-center justify-center space-x-2">Añadir al carrito</span>
                    </a>
                </div>
            </div>

        </div>



        {{-- tabla --}}
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <x-form id="frmSalida">
                    <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead>
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Id
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                        Nombre
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                        Cantidad
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Precio
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Eliminar
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="salida" class="divide-y divide-gray-200 dark:divide-gray-700">
                            </tbody>
                        </table>

                    </div>

                </x-form>

            </div>
        </div>




    </main>

    <body class="relative h-screen">

    

    <footer class="text-gray-600 body-font bg-black mt-3 absolute bottom-0 inset-x-0 p-4">
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
</body>


    <!--SCRIPT NAV BAR RESPONSIVE-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>


    <script>
        let btnAdd = document.getElementById("btnAdd");
        btnAdd.onclick = function(e) {
            let prod = document.getElementById("prod");
            let id = prod.value;
            let cantidadInputs = document.querySelectorAll('input[name="id[]"]');
            let idExiste = Array.from(cantidadInputs).some(input => input.value === id);

            if (idExiste) {
                // Si el ID ya existe, incrementar la cantidad en lugar de agregar un nuevo elemento
                let existingElement = Array.from(cantidadInputs).find(input => input.value === id);
                let cantidadInput = existingElement.parentNode.nextElementSibling.querySelector(
                    'input[name="cantidad[]"]');
                cantidadInput.value = parseInt(cantidadInput.value) + 1;
            } else {
                let el = `
                <tr class=" px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">
                    <td>
                <input type="text" class="form-control" name="id[]" placeholder="" value="${prod.value}" readonly>
                    </td>
                    <td>
                <input type="text" class="form-control" name="" placeholder="" value="${prod.options[prod.selectedIndex].dataset.nombre}" readonly>
                    </td>
                    <td>
                <input type="number" class="form-control" name="cantidad[]" placeholder="" value="1" min="1" max="${prod.options[prod.selectedIndex].dataset.stock}">
                    </td>
                    <td>
                <input type="text" class="form-control" name="precio[]" placeholder="" value="${prod.options[prod.selectedIndex].dataset.precio}" readonly>
                    </td>
                    <td>
                    <a href="#" id="btnDel" class="btn btn-danger" onclick="eliminar(this)">Eliminar</a>
                    </td>
                    
                </tr>
                
                        `;
                let f = document.getElementById("salida");
                f.insertAdjacentHTML('beforeend', el);
            }
        };

        function eliminar(elemento) {
            elemento.parentNode.parentNode.remove();
        }
    </script>
</body>

</html>
