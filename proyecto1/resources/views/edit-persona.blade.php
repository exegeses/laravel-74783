<x-layout>
    <main class="container py-4">
        <h1>Modificación de una persona</h1>

        <div class="shadow rounded col-8 mx-auto">
            <form action="/update/persona" method="post">
                @csrf
                <div class="m-4">
                    <input type="text" name="nombre"
                           value="{{ $persona->nombre }}"
                           class="form-control"
                           placeholder="Nombre: ">
                </div>
                <div class="m-4">
                    <input type="text" name="apellido"
                           value="{{ $persona->apellido }}"
                           class="form-control"
                           placeholder="Apellido: ">
                </div>
                <div class="m-4">
                    <input type="text" name="dni"
                           value="{{ $persona->dni }}"
                           class="form-control"
                           placeholder="DNI: ">
                </div>
                <div class="m-4">
                    <input type="date" name="nacimiento"
                           value="{{ $persona->nacimiento }}"
                           class="form-control">
                </div>
                <input type="hidden" name="id"
                       value="{{ $persona->id }}">

                <div class="m-4">
                    <button class="btn btn-success mb-4">Modificar</button>
                </div>
            </form>
        </div>


    </main>
</x-layout>
