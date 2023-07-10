<h2 class="font font-semibold text-center text-2xl">Refracción</h2>

<div class="container flex w-full sm:text-left">

    <div class="sm:w-full md:w-full lg:w-1/2">

        <div class="">

            <h2 class="text-center">Keratometria</h2>

            <div class="flex mt-3">
                <h3 class="mr-2">ojo derecho</h3>
                <div class="relative mb-3">
                    <input type="text" id="OD" name="OD" required class="caja"
                    @if (isset($refraccion)) value="{{ $refraccion-> OD}}" @endif>
                </div>
                <h3 class="mx-5">I.</h3>
                <div class="relative mb-3">
                    <input type="text" id="IZ" name="IZ" required class="caja"
                    @if (isset($refraccion)) value="{{ $refraccion->OI }}" @endif>
                </div>
            </div>

            <div class="flex">
                <h3 class="">ojo izquierdo</h3>
                <div class="relative mb-3">
                    <input type="text" id="ODI" name="ODI" required class="caja"
                        @if (isset($refraccion)) value="{{ $refraccion->ODI }}" @endif>
                </div>
                <h3 class="mx-5">I.</h3>
                <div class="relative mb-3">
                    <input type="text" id="OII" name="OII" required class="caja"
                        @if (isset($refraccion)) value="{{ $refraccion->OII }}" @endif>
                </div>
            </div>
        </div>

        <div class="">
            <h2 class="text-center ">Retinoscopia</h2>

            <div class="flex mt-3">
                <h3 class="mr-2">ojo derecho</h3>
                <div class="relative mb-3">
                    <input type="text" id="ODer" name="ODer" required class="caja"
                        @if (isset($refraccion)) value="{{ $refraccion->ODer }}" @endif>
                </div>
                <h3 class="mx-5">AV.</h3>
                <div class="relative mb-3">
                    <input type="text" id="OIzq" name="OIzq" required class="caja"
                        @if (isset($refraccion)) value="{{ $refraccion->OIzq }}" @endif>
                </div>
            </div>

            <div class="flex">
                <h3 class="">ojo izquierdo</h3>
                <div class="relative mb-3">
                    <input type="text" id="ODav" name="ODav" required class="caja"
                        @if (isset($refraccion)) value="{{ $refraccion->ODav }}" @endif>
                </div>
                <h3 class="mx-5">AV.</h3>
                <div class="relative mb-3">
                    <input type="text" id="OIav" name="OIav" required class="caja"
                        @if (isset($refraccion)) value="{{ $refraccion->OIav }}" @endif>
                </div>
            </div>
        </div>

        <div class="">
            <h2 class="text-center ">Retinoscopia S/DT</h2>
            <div class="flex ">
                <h3 class="mr-2">ojo derecho</h3>
                <div class="relative mb-3">
                    <input type="text" id="oi" name="oi" required class="caja"
                        @if (isset($refraccion)) value="{{ $refraccion->oir }}" @endif>
                </div>
            </div>
            <div class="flex">
                <h3 class="">ojo izquierdo</h3>
                <div class="relative mb-3">
                    <input type="text" id="od" name="od" required class="caja"
                        @if (isset($refraccion)) value="{{ $refraccion->odr }}" @endif>
                </div>
            </div>

        </div>

    </div>

    <!--
    --------------------------------------------------
    M I T A D
    ---------------------------------------------------
    -->
    <div class="sm:w-full md:w-full lg:w-1/2">

        <div class="mt-2 text-center">
            <h2 class="text-center">Toricdad</h2>
            <div class="relative mb-3">
                <input type="text" id="Tod" name="Tod" required class="caja"
                    @if (isset($refraccion)) value="{{ $refraccion->Tod }}" @endif>
            </div>
            <div class="relative mb-3">
                <input type="text" id="Toi" name="Toi" required class="caja"
                    @if (isset($refraccion)) value="{{ $refraccion->Toi }}" @endif>
            </div>
        </div>

        <div class="mt-2 text-center">
            <h2 class="text-center">Miras</h2>
            <div class="relative mb-3">
                <input type="text" id="Mod" name="Mod" required class="caja"
                    @if (isset($refraccion)) value="{{ $refraccion->Mod }}" @endif>
            </div>
            <div class="relative mb-3">
                <input type="text" id="Moi" name="Moi" required class="caja"
                    @if (isset($refraccion)) value="{{ $refraccion->Moi }}" @endif>
            </div>
        </div>

        <div class="">
            <h2 class="text-center ">Dosificacion</h2>

            <div class="flex mt-3">
                <h3 class="mr-2">ojo derecho</h3>
                <div class="relative mb-3">
                    <input type="text" id="ODerd" name="ODerd" required class="caja"
                        @if (isset($refraccion)) value="{{ $refraccion->ODerd }}" @endif>
                </div>
                <h3 class="mx-5">AV.</h3>
                <div class="relative mb-3">
                    <input type="text" id="OIzqd" name="OIzqd" required class="caja"
                        @if (isset($refraccion)) value="{{ $refraccion->OIzqd }}" @endif>
                </div>
            </div>

            <div class="flex">
                <h3 class="">ojo izquierdo</h3>
                <div class="relative mb-3">
                    <input type="text" id="ODavd" name="ODavd" required class="caja"
                        @if (isset($refraccion)) value="{{ $refraccion->ODavd }}" @endif>
                </div>
                <h3 class="mx-5">AV.</h3>
                <div class="relative mb-3">
                    <input type="text" id="OIavd" name="OIavd" required class="caja"
                        @if (isset($refraccion)) value="{{ $refraccion->OIavd }}" @endif>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8 text-center">
    <a class="prim tran" href="{{ url('historial') }}" role="button">
        <i class="fi fi-rr-angle-left"></i>
        regresar</a>

    <button type="submit" class="btnY tran">
        Modificar
        <i class="fi fi-rr-edit"></i>
    </button>
</div>

<style>
    @media (max-width: 768px) {
        .container {
            flex-direction: column;
        }
    }
</style>
