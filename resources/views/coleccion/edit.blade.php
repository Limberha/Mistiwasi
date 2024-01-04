<x-master-layout>
</x-master-layout>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coleccion</title>
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
    <main class=" w-screen h-screen  bg-white">
        <!-- component -->
        <div class="min-h-screen p-6 bg-gray4100 ">
            <div class="container max-w-screen-lg mx-auto">
                <div>
                    <h2 class="font-semibold text-2xl text-gray-600">Formulario de modificacion</h2>


                    <div class="rounded p-4 px-4 md:p-8 mb-6">
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                            <div class="text-gray-600">

                            </div>
                            <x-form enctype="multipart/form-data" method="PUT">

                                <div class="lg:col-span-2">
                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                        <div class="md:col-span-5">
                                            <label for=""
                                                class="block text-gray-700 text-sm font-semibold mb-2">Nombre</label>
                                            <input
                                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                type="text" name="nombre" id=""
                                                placeholder="nombre de coleccion" value="{{ $col->nombre }}">
                                        </div>

                                        <div class="md:col-span-5 text-right">
                                            <div class="inline-flex items-end">
                                                <button type="submit"
                                                    class=" hover:bg-blue-700 hover:text-white flex items-center justify-center px-4 font-medium bg-blue-500 text-white h-9 rounded-md">
                                                    <span class="flex items-center justify-center space-x-2">Guardar
                                                        cambios</span>
                                                </button>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </x-form>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </main>

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

</html>
