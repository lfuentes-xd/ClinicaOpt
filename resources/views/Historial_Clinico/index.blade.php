<x-app-layout>
    <x-slot name="header">
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-thin-straight/css/uicons-thin-straight.css'>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <i class="fi fi-ts-book-open-cover"></i>
            {{ __('Historial Clinico') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <a href="{{ asset('/historial/create') }}" class="prim tran">
                <i class="fi fi-rr-add"></i>
                Agregar nuevo</a>
            <br><br>
            <table class="w-full max-w-768px border-collapse bg-white shadow-sm sm:rounded-lg table table-responsive">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">clave</th>
                        <th class="py-2 px-4 border-b">Nombres</th>
                        <th class="py-2 px-4 border-b">Apellidos</th>
                        <th class="py-2 px-4 border-b">Historial</th>
                        <th class="py-2 px-4 border-b">Pruebas preeliminares</th>
                        <th class="py-2 px-4 border-b">Refraccion</th>
                        <th class="py-2 px-4 border-b">Pruebas funcionales</th>
                        <th class="py-2 px-4 border-b">Salud ocular</th>
                        <th class="py-2 px-4 border-b">RX ant - Diagnosticos</th>
                        <th class="py-2 px-4 border-b">ELIMINAR</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($datos as $pa)
                        <tr class="text-center">
                            <td class="py-2 px-4 border-b">{{ $pa->id }}</td>
                            <td class="py-2 px-4 border-b">{{ $pa->nombrePac }}</td>
                            <td class="py-2 px-4 border-b">{{ $pa->apellidoPac }}</td>
                            <td class="py-2 px-4 border-b">
                                <a href="{{ route('historial.show', ['historial' => $pa->id]) }}"
                                    class="prim tran">
                                    <i class="fi fi-rr-info"></i>
                                    ver
                                </a>
                            </td>
                            <td class="py-2 px-4 border-b">
                                <a href="{{ route('pacientes.show', ['paciente' => $pa->id]) }}"
                                    class="prim tran">
                                    <i class="fi fi-rr-info"></i>
                                    ver
                                </a>
                            </td>
                            <td class="py-2 px-4 border-b">
                                <a href="{{ route('pacientes.show', ['paciente' => $pa->id]) }}"
                                    class="prim tran">
                                    <i class="fi fi-rr-info"></i>
                                    ver
                                </a>
                            </td>
                            <td class="py-2 px-4 border-b">
                                <a href="{{ route('pacientes.show', ['paciente' => $pa->id]) }}"
                                    class="prim tran">
                                    <i class="fi fi-rr-info"></i>
                                    ver
                                </a>
                            </td>
                            <td class="py-2 px-4 border-b">
                                <a href="{{ route('pacientes.show', ['paciente' => $pa->id]) }}"
                                    class="prim tran">
                                    <i class="fi fi-rr-info"></i>
                                    ver
                                </a>
                            </td>
                            <td class="py-2 px-4 border-b">
                                <a href="{{ route('pacientes.show', ['paciente' => $pa->id]) }}"
                                    class="prim tran">
                                    <i class="fi fi-rr-info"></i>
                                    ver
                                </a>
                            </td>
                            <td class="py-2 px-4 border-b">
                                <form action="{{ asset('') }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" name="eliminar" id="eliminar" class="btnR tran"
                                        onclick="return confirm('¿estas seguro, Esto borrará toda la fila? '); ">
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
</x-app-layout>
