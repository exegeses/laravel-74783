<x-layout>
    <main class="container py-4">
        <h1>Alta de una persona</h1>

        <div class="shadow rounded col-8 mx-auto">
            <form action="/store/persona" method="post">
                @csrf
                <div class="m-4">
                    <input type="text" name="nombre"
                           value=""
                           class="form-control"
                           placeholder="Nombre: ">
                </div>
                <div class="m-4">
                    <input type="text" name="apellido"
                           value=""
                           class="form-control"
                           placeholder="Apellido: ">
                </div>
                <div class="m-4">
                    <input type="text" name="dni"
                           value=""
                           class="form-control"
                           placeholder="DNI: ">
                </div>
                <div class="m-4">
                    <input type="date" name="nacimiento"
                           value="1990-01-01"
                           class="form-control">
                </div>
                <div class="m-4">
                    <button class="btn btn-success mb-4">Agregar</button>
                </div>
            </form>
        </div>


    </main>
</x-layout>
