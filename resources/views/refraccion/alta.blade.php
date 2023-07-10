<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('refraccion') }}
        </h2>
    </x-slot>
    <div class="p-5 font-semibold bg-gray">
        <div class="">
            <form action="{{ asset('refraccion') }}" method="POST">
                @csrf
                @include('refraccion.formulario3')
            </form>
        </div>
    </div>
</x-app-layout>
