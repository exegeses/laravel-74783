<x-layout>
    <main class="container py-4">
        <h1>Soy la vista portfolio</h1>

        <p>la fruta es: {{ $fruta }} (handlebars)</p>

        @if( $numero == 15 )
            el número {{ $numero }} es correcto
        @else
            el número {{ $numero }} es incorrecto
        @endif

        <ul>
            @foreach( $empresas as $empresa )
            <li>{{ $empresa }}</li>
            @endforeach
        </ul>

    </main>
</x-layout>
