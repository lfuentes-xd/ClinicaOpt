<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <i class="fi fi-rr-glasses"></i>
            <i class="fi fi-rr-medicine"></i>
            <i class="fi fi-rr-prescription-bottle"></i>
            {{ __('Grupos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 overflow-auto max-width-full">
            <a href="{{asset('grupos/create')}}"
            class="prim tran mt-5" >
            <i class="fi fi-rr-add"></i>
            Nuevo Grupo</a>

            <div class="overflow-x-auto">
                <table class="my-5 w-full border-collapse bg-white shadow-sm sm:rounded-lg table-auto">
                  <thead>
                    <tr>
                      <th class="py-2 px-4 border-b">Clave</th>
                      <th class="py-2 px-4 border-b">Grupo</th>
                      <th class="py-2 px-4 border-b">Modificar</th>
                      <th class="py-2 px-4 border-b">Eliminar</th>
                    </tr>
                  </thead>

                  <tbody>
                @foreach ($grupos as $grp )
                    <tr class="text-center">
                      <td class="py-2 px-4 border-b">{{$grp->id}}</td>
                      <td class="py-2 px-4 border-b">{{$grp->Grupo}}</td>

                      <td class="py-2 px-4 border-b ">
                        <a href="{{asset('grupos/'.$grp->id.'/edit')}}" class="btnY tran">
                        <i class="fi fi-rr-edit"></i>
                        Modificar</a>
                      </td>

                      <td class="py-2 px-4 border-b ">
                            <form action="{{ route('grupos.destroy', ['grupo' => $grp->id]) }}" method="POST">
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


