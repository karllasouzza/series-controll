<x-layout title="Séries">
    <a href="{{ route('series.create') }}" class="btn btn-dark mb-2">Adicionar</a>

    @isset($messageSuccess)
        <div class="alert alert-success">
            {{$messageSuccess}}
        </div>
    @endisset

    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item justify-content-between d-flex flex-row align-items-center">
                <p>
                    {{ $serie->name }}
                </p>

                <div class="d-flex flex-row gap-2">

                <a href="{{route('series.edit', $serie->id)}}" class="btn btn-primary btn-sm h-max">
                    E
                </a>
                <form action="{{route('series.destroy', $serie->id)}}" method="post">
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger btn-sm">
                        X
                    </button>
                </form>
                </div>
            </li>
        @endforeach
    </ul>
</x-layout>
