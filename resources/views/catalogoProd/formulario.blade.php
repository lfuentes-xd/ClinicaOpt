
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

    <div class="relative mb-3">
        <input type="number" id="Clave" name="Clave" required
            class="caja"
                @if (isset($productos))
                    value="{{$productos->id}}"
                    @disabled(true)
                @endif
            >
        <label for="Grupo" class="etiqueta">Clave</label>
    </div>

    <div class="relative mb-3">
        <input type="text" id="Marca" name="Marca" required
            class="caja"
            @if (isset($productos))
            value="{{$productos->Marca}}"

            @endif
            >
        <label for="Grupo" class="etiqueta">Marca</label>
    </div>

    <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8 text-center">
        <a class="btnR tran"
            href="{{ url('/Marcas') }}" role="button">
            <i class="fi fi-rr-cross-circle"></i>
            Cancelar</a>

        <button type="submit"
            class="prim tran">
        <i class="fi fi-rr-check"></i>
        Guardar Registro</button>
    </div>
</div>
