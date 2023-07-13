<x-app-layout>
    <x-slot name="header">
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-thin-rounded/css/uicons-thin-rounded.css'>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <i class="fi fi-tr-procedures"></i>
            {{ __('Pacientes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 overflow-x-auto">

            <a href="{{asset ('/Pacientes/create')}}"
            class="tran prim">
            <i class="fi fi-rr-add"></i>
            Nuevo paciente</a>
            <br><br>
            <table class="w-full border-collapse bg-white shadow-sm sm:rounded-lg table-auto">
                <thead>
                  <tr>
                    <th class="py-2 px-4 border-b">clave</th>
                    <th class="py-2 px-4 border-b">Nombres</th>
                    <th class="py-2 px-4 border-b">Apellidos</th>
                    <th class="py-2 px-4 border-b">fecha de nacimiento</th>
                    <th class="py-2 px-4 border-b">Numero de telefono</th>
                    <th class="py-2 px-4 border-b">Moficiar</th>
                    <th class="py-2 px-4 border-b">Eliminar</th>
                    <th class="py-2 px-4 border-b">ver</th>
                  </tr>
                </thead>

                <tbody>
                    @foreach ($pacientes as $pa)
                  <tr class="text-center">
                    <td class="py-2 px-4 border-b">{{$pa->id}}</td>
                    <td class="py-2 px-4 border-b">{{$pa->nombre}}</td>
                    <td class="py-2 px-4 border-b">{{$pa->apellidos}}</td>
                    <td class="py-2 px-4 border-b">{{$pa->fecha_nac}}</td>
                    <td class="py-2 px-4 border-b">{{$pa->Telefono}}</td>

                    <td class="py-2 px-4 border-b text-center">
                        <a href="{{ route('pacientes.edit', ['paciente' => $pa->id]) }}"
                        class="btnY tran"
                        >
                        <i class="fi fi-rr-edit"></i>
                        Modificar</a>
                    </td>
                    <td>
                    <form action="{{route('pacientes.destroy', ['paciente'=>$pa->id])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" name="eliminar" id="eliminar"
                        class="btnR tran">
                        <i class="fi fi-rr-trash"></i> Borrar
                        </button>
                    </form>
                    </td>

                    <td class="py-2 px-4 border-b text-center">
                        <a href="{{ route('pacientes.show',
                        ['paciente' => $pa->id]) }}"
                        class="prim tran"
                        >
                        <i class="fi fi-rr-info"></i>
                        ver
                    </a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</x-app-layout>
