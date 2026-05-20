<x-layout title="Séries">

    <form action="{{ route('series.store') }}" method="post">
        @csrf
        <fieldset class="mb-3">
            <label for="name" class="form-label">Nome: </label>
            <input type="text" id="name" class="form-control" name="name"/>
        </fieldset>

        <button type="submit">Adicionar</button>
    </form>
</x-layout>
