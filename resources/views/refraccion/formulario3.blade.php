<h2 class="font font-semibold text-center text-2xl">Refracción</h2>

<div class="container flex w-full sm:text-left">

    <div class="sm:w-full md:w-full lg:w-1/2">

        <div class="">

            <h2 class="text-center">Keratometria</h2>

            <div class="flex mt-3">
                <h3 class="mr-2">hojo derecho</h3>
                <div class="relative mb-3">
                    <input type="text" id="Impresion" name="Impresion" required
                        class="caja">
                </div>
                <h3 class="mx-5">I.</h3>
                <div class="relative mb-3">
                    <input type="text" id="Impresion" name="Impresion" required
                        class="caja">
                </div>
            </div>

            <div class="flex">
                <h3 class="">hojo izquierdo</h3>
                <div class="relative mb-3">
                    <input type="text" id="Impresion" name="Impresion" required
                        class="caja">
                </div>
                <h3 class="mx-5">I.</h3>
                <div class="relative mb-3">
                    <input type="text" id="Impresion" name="Impresion" required
                        class="caja">
                </div>
            </div>
        </div>

        <div class="">
            <h2 class="text-center ">Retinoscopia</h2>

            <div class="flex mt-3">
                <h3 class="mr-2">hojo derecho</h3>
                <div class="relative mb-3">
                    <input type="text" id="Impresion" name="Impresion" required
                        class="caja">
                </div>
                <h3 class="mx-5">AV.</h3>
                <div class="relative mb-3">
                    <input type="text" id="Impresion" name="Impresion" required
                        class="caja">
                </div>
            </div>

            <div class="flex">
                <h3 class="">hojo izquierdo</h3>
                <div class="relative mb-3">
                    <input type="text" id="Impresion" name="Impresion" required
                        class="caja">
                </div>
                <h3 class="mx-5">AV.</h3>
                <div class="relative mb-3">
                    <input type="text" id="Impresion" name="Impresion" required
                        class="caja">
                </div>
            </div>
        </div>

        <div class="">
            <h2 class="text-center ">Retinoscopia S/DT</h2>
            <div class="flex ">
                <h3 class="mr-2">hojo derecho</h3>
                <div class="relative mb-3">
                    <input type="text" id="Impresion" name="Impresion" required
                        class="caja">
                </div>
            </div>
            <div class="flex">
                <h3 class="">hojo izquierdo</h3>
                <div class="relative mb-3">
                    <input type="text" id="Impresion" name="Impresion" required
                        class="caja">
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
                <input type="text" id="Impresion" name="Impresion" required
                    class="caja">
            </div>
            <div class="relative mb-3">
                <input type="text" id="Impresion" name="Impresion" required
                    class="caja">
            </div>
        </div>

       <div class="mt-2 text-center">
            <h2 class="text-center">Toricdad</h2>
            <div class="relative mb-3">
                <input type="text" id="Impresion" name="Impresion" required
                    class="caja">
            </div>
            <div class="relative mb-3">
                <input type="text" id="Impresion" name="Impresion" required
                    class="caja">
            </div>
        </div>

        <div class="">
            <h2 class="text-center ">Dosificacion</h2>

            <div class="flex mt-3">
                <h3 class="mr-2">hojo derecho</h3>
                <div class="relative mb-3">
                    <input type="text" id="Impresion" name="Impresion" required
                        class="caja">
                </div>
                <h3 class="mx-5">AV.</h3>
                <div class="relative mb-3">
                    <input type="text" id="Impresion" name="Impresion" required
                        class="caja">
                </div>
            </div>

            <div class="flex">
                <h3 class="">hojo izquierdo</h3>
                <div class="relative mb-3">
                    <input type="text" id="Impresion" name="Impresion" required
                        class="caja">
                </div>
                <h3 class="mx-5">AV.</h3>
                <div class="relative mb-3">
                    <input type="text" id="Impresion" name="Impresion" required
                        class="caja">
                </div>
            </div>

        </div>
    </div>
</div>

<div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8 text-center">
    <a class="inline-block bg-red-600 hover:bg-red-600 text-black font-semibold py-2 px-4 rounded"
        href="{{ url('historial') }}" role="button">
        <i class="fi fi-rr-cross-circle"></i>
    Cancelar</a>

    <button type="submit"
        class="inline-block bg-white hover:bg-gray-400 text-gray font-semibold rounded border py-2 px-4 ">
        Siguiente
        <i class="fi fi-rr-angle-right"></i>
    </button>
</div>

<style>
    @media (max-width: 768px) {
      .container {
        flex-direction: column;
      }
    }
  </style>


