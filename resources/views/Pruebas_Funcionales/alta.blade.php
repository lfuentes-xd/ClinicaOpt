<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pruebas funcionales') }}
        </h2>
    </x-slot>
    <div class="p-5 font-semibold bg-gray">
        <div class="">
            <form action="{{ asset('pruebasFuncionales') }}" method="POST">
                @csrf
                @include('Pruebas_Funcionales.formulario4')
            </form>
        </div>
    </div>
</x-app-layout>
