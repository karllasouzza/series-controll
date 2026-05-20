<x-layout title="Séries">
    <x-series.form :action="route('series.store')" :name="old('name')" isUpdate="false" />
</x-layout>
