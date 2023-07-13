<x-app-layout>
    <x-slot name="header">
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-thin-rounded/css/uicons-thin-rounded.css'>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <i class="fi fi-tr-boxes"></i>
            {{ __('Productos') }}
        </h2>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 overflow-x-auto max-width-full">

            <a href="{{asset('productos/create')}}"
            class="prim tran mt-5" >
            <i class="fi fi-rr-add"></i>
            Nuevo producto</a>

            <div class="overflow-x-auto">
                <table class="my-5 w-full border-collapse bg-white shadow-sm sm:rounded-lg table-auto">
                  <thead>
                    <tr>
                      <th class="py-2 px-4 border-b">Clave</th>
                      <th class="py-2 px-4 border-b">Grupo</th>
                      <th class="py-2 px-4 border-b">Marca</th>
                      <th class="py-2 px-4 border-b">Descripcion</th>
                      <th class="py-2 px-4 border-b">Precio venta</th>
                      <th class="py-2 px-4 border-b">Fecha alta</th>
                      <th class="py-2 px-4 border-b">Existencia</th>
                      <th class="py-2 px-4 border-b">Modificar</th>
                      <th class="py-2 px-4 border-b">Eliminar</th>
                    </tr>
                  </thead>

                  <tbody>
                @foreach ($productos as $prod )
                    <tr class="text-center">
                      <td class="py-2 px-4 border-b">{{$prod->id}}</td>
                      <td class="py-2 px-4 border-b">{{$prod->Grupo}}</td>
                      <td class="py-2 px-4 border-b">{{$prod->Marca}}</td>
                      <td class="py-2 px-4 border-b">{{$prod->Descripcion}}</td>
                      <td class="py-2 px-4 border-b">{{$prod->Precio_vta}} $</td>
                      <td class="py-2 px-4 border-b">{{$prod->Fecha_alta}}</td>
                      <td class="py-2 px-4 border-b">{{$prod->Existencia}}</td>

                      <td class="py-2 px-4 border-b ">
                        <a href="{{asset('productos/'.$prod->id.'/edit')}}"
                        class="btnY tran">
                        <i class="fi fi-rr-edit"></i>
                        Modificar</a>
                      </td>

                      <td class="py-2 px-4 border-b ">
                        <form action="{{asset('productos/'.$prod->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" name="eliminar" id="eliminar"
                        class="btnR tran">
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


