<x-app-layout>
    <x-slot name="header">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <i class="fi fi-sr-trademark"></i>
            {{ __('Marcas') }}

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 overflow-auto max-width-full">

            <a href="{{ asset('Marcas/create') }}"
                class="prim tran">
                <i class="fi fi-rr-add"></i>
                Nueva marca</a>

            <div class="overflow-x-auto">
                <table class="my-5 w-full border-collapse bg-white shadow-sm sm:rounded-lg table-auto">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b">Clave</th>
                            <th class="py-2 px-4 border-b">Marca</th>
                            <th class="py-2 px-4 border-b">Modificar</th>
                            <th class="py-2 px-4 border-b">Eliminar</th>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach ($catprod as $ctp )
                        <tr class="text-center">
                            <td class="py-2 px-4 border-b">{{$ctp->id}}</td>
                            <td class="py-2 px-4 border-b">{{$ctp->Marca}}</td>
                            <td class="py-2 px-4 border-b ">
                                <a href="{{asset('Marcas/'.$ctp->id.'/editar')}}"
                                    class="btnY tran">
                                    <i class="fi fi-rr-edit"></i>
                                    Modificar</a>
                            </td>

                            <td class="py-2 px-4 border-b ">
                                <form action="{{asset ('Marcas/'.$ctp->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" name="eliminar" id="eliminar"
                                    class="btnR tran"
                                    onclick="return confirm('¿estas seguro? '); ">
                                    <i class="fi fi-rr-trash"></i> Borrar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
