<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ver pruebas preeliminares') }}
        </h2>
    </x-slot>
    <div class="p-5 font-semibold bg-gray">
        <div class="">

            <form action="{{asset('/pruebas/'.$pruebas->id)}}" method="POST">
                @csrf
                @method('PATCH')
                @include('pruebas_preeliminares.verform')
            </form>

        </div>
    </div>
</x-app-layout>
