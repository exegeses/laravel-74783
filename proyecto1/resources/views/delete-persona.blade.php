<x-layout>
    <main class="container py-4">
        <h1>Baja de una persona</h1>

        <!-- formulario -->
        <div class="shadow-md rounded-md max-w-3xl my-16 bg-gray-800">
            <form action="/destroy/persona" method="post">
            @csrf
                <div class="p-6">
                    <div class="flex w-full mb-6 group">
                        <span class="p-2.6 pr-6 w-1/6 text-xl rounded-md text-orange-400">Nombre:</span>
                        <span class="p-2.5 pl-6 w-5/6 text-2xl rounded-md bg-gray-700 text-orange-400">{{ $persona->nombre }}</span>
                    </div>
                    <div class="flex w-full mb-6 group">
                        <span class="p-2.6 pr-6 w-1/6 text-xl rounded-md text-orange-400">Apellido:</span>
                        <span class="p-2.5 pl-6 w-5/6 text-2xl rounded-md bg-gray-700 text-orange-400">{{ $persona->apellido }}</span>
                    </div>
                    <div class="flex w-full mb-6 group">
                        <span class="p-2.6 pr-6 w-1/6 text-xl rounded-md text-orange-400">DNI:</span>
                        <span class="p-2.5 pl-6 w-5/6 text-2xl rounded-md bg-gray-700 text-orange-400">{{ $persona->dni }}</span>
                    </div>
                    <div class="flex w-full mb-6 group">
                        <span class="p-2.6 pr-6 w-1/6 text-xl rounded-md text-orange-400">Nacimiento:</span>
                        <span class="p-2.5 pl-6 w-5/6 text-2xl rounded-md bg-gray-700 text-orange-400">{{ $fecha }}</span>
                    </div>

                    <input type="hidden" name="id"
                           value="{{ $persona->id }}">
                    <input type="hidden" name="nombre"
                           value="{{ $persona->nombre }}">
                    <input type="hidden" name="apellido"
                           value="{{ $persona->apellido }}">

                    <div class="flex justify-between">
                        <button type="submit" class="text-white bg-orange-800 hover:bg-orange-700 border-0 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="float-left w-6 h-6 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Eliminar
                        </button>

                        <a href="/personas" type="button" class="ml-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center  bg-gray-700 text-white border-gray-600 hover:bg-gray-600 hover:border-gray-600 focus:ring-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="float-left w-6 h-6 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9.75L14.25 12m0 0l2.25 2.25M14.25 12l2.25-2.25M14.25 12L12 14.25m-2.58 4.92l-6.375-6.375a1.125 1.125 0 010-1.59L9.42 4.83c.211-.211.498-.33.796-.33H19.5a2.25 2.25 0 012.25 2.25v10.5a2.25 2.25 0 01-2.25 2.25h-9.284c-.298 0-.585-.119-.796-.33z" />
                            </svg>
                            Volver a panel
                        </a>
                    </div>

                </div>
            </form>
        </div>
        <!-- FIN formulario -->

    </main>
</x-layout>
