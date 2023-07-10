<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pruebas funcionales') }}
        </h2>
    </x-slot>
    <div class="p-5 font-semibold bg-gray">
        <div class="">
            <form action="{{ asset('/pruebasFuncionales/'.$funcionales->id) }}" method="POST">
                @csrf
                @method('PATCH')
                @include('Pruebas_Funcionales.verdatos')
            </form>
        </div>
    </div>
</x-app-layout>
