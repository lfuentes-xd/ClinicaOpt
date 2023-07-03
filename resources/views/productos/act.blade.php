<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

    <div class="relative mb-3">
        <input type="text" id="Descripcion" name="Descripcion" required
            class="caja"
            @if (isset($producto))
                value="{{$producto->Descripcion}}"
            @endif>
        <label for="Descripcion"
            class="etiqueta">Descripcion</label>
    </div>

    <div class="relative mb-3">
        <input type="Number" id="Precio" name="Precio" required
            class="caja"
            @if (isset($producto))
                value="{{$producto->Precio_vta}}"
            @endif>
        <label for="Precio"
            class="etiqueta">Precio</label>
    </div>

    <div class="relative mb-3">
        <input type="date" id="Fecha" name="Fecha" required
            class="caja"
            @if (isset($producto))
                value="{{$producto->Fecha_alta}}"
            @endif>
        <label for="Fecha" class="etiqueta">Fecha</label>
    </div>

    <div class="relative mb-3">
        <input type="Number" id="Existencia" name="Existencia" required
            class="caja"
            @if (isset($producto))
                value="{{$producto->Existencia}}"
            @endif>
        <label for="Existencia"
            class="etiqueta">Existencias</label>
    </div>

    <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8 text-center">
        <a class="btnR tran"
            href="{{ url('productos') }}" role="button">
            <i class="fi fi-rr-cross-circle"></i>
            Cancelar</a>

        <button type="submit"
            class="tran prim"
        >
        <i class="fi fi-rr-check"></i>
        Guardar Registro</button>
    </div>
</div>

