<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pruebas prerliminares') }}
        </h2>
    </x-slot>
    <div class="p-5 font-semibold bg-gray">
        <div class="">
            <form action="{{ asset('pruebas') }}" method="POST">
                @csrf
                @include('pruebas_preeliminares.formulario2')
            </form>
        </div>
    </div>
</x-app-layout>
