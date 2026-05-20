@props(['action', 'name' => null])

<form action="{{ $action }}" method="post">
    @csrf

    @isset($update)
        @method('PUT')
    @endisset
    <fieldset class="mb-3">
        <label for="name" class="form-label">Nome: </label>
        <input type="text" id="name" class="form-control" name="name"
               @isset($update)value="{{ $name }}"@endisset />
    </fieldset>

    <button type="submit">
        @if($update)
            Editar
        @else
            Adicionar
        @endif
    </button>
</form>
