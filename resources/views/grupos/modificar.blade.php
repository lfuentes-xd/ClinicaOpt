<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modificar grupo') }}
        </h2>
    </x-slot>
    <div class="p-5 font-semibold bg-gray">
        <div class="">
            <form action={{ asset('grupos/'.$grupos->id) }} method="POST">
                @csrf
                @include('grupos.formulario')
            </form>
        </div>
    </div>
</x-app-layout>
