<h2 class="font font-semibold text-center text-2xl">Refracción</h2>

<div class="container flex w-full sm:text-left">

    <div class="sm:w-full md:w-full lg:w-1/2">

        <div class="">

            <h2 class="text-center">Keratometria</h2>

            <div class="flex mt-3">
                <h3 class="mr-2">ojo derecho</h3>
                <div class="relative mb-3">
                    <input type="text" id="OD" name="OD" required
                        class="caja">
                </div>
                <h3 class="mx-5">I.</h3>
                <div class="relative mb-3">
                    <input type="text" id="IZ" name="IZ" required
                        class="caja">
                </div>
            </div>

            <div class="flex">
                <h3 class="">ojo izquierdo</h3>
                <div class="relative mb-3">
                    <input type="text" id="ODI" name="ODI" required
                        class="caja">
                </div>
                <h3 class="mx-5">I.</h3>
                <div class="relative mb-3">
                    <input type="text" id="OII" name="OII" required
                        class="caja">
                </div>
            </div>
        </div>

        <div class="">
            <h2 class="text-center ">Retinoscopia</h2>

            <div class="flex mt-3">
                <h3 class="mr-2">ojo derecho</h3>
                <div class="relative mb-3">
                    <input type="text" id="ODer" name="ODer" required
                        class="caja">
                </div>
                <h3 class="mx-5">AV.</h3>
                <div class="relative mb-3">
                    <input type="text" id="OIzq" name="OIzq" required
                        class="caja">
                </div>
            </div>

            <div class="flex">
                <h3 class="">ojo izquierdo</h3>
                <div class="relative mb-3">
                    <input type="text" id="ODav" name="ODav" required
                        class="caja">
                </div>
                <h3 class="mx-5">AV.</h3>
                <div class="relative mb-3">
                    <input type="text" id="OIav" name="OIav" required
                        class="caja">
                </div>
            </div>
        </div>

        <div class="">
            <h2 class="text-center ">Retinoscopia S/DT</h2>
            <div class="flex ">
                <h3 class="mr-2">ojo derecho</h3>
                <div class="relative mb-3">
                    <input type="text" id="oi" name="oi" required
                        class="caja">
                </div>
            </div>
            <div class="flex">
                <h3 class="">ojo izquierdo</h3>
                <div class="relative mb-3">
                    <input type="text" id="od" name="od" required
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
                <input type="text" id="Tod" name="Tod" required
                    class="caja">
            </div>
            <div class="relative mb-3">
                <input type="text" id="Toi" name="Toi" required
                    class="caja">
            </div>
        </div>

       <div class="mt-2 text-center">
            <h2 class="text-center">Miras</h2>
            <div class="relative mb-3">
                <input type="text" id="Mod" name="Mod" required
                    class="caja">
            </div>
            <div class="relative mb-3">
                <input type="text" id="Moi" name="Moi" required
                    class="caja">
            </div>
        </div>

        <div class="">
            <h2 class="text-center ">Dosificacion</h2>

            <div class="flex mt-3">
                <h3 class="mr-2">ojo derecho</h3>
                <div class="relative mb-3">
                    <input type="text" id="ODerd" name="ODerd" required
                        class="caja">
                </div>
                <h3 class="mx-5">AV.</h3>
                <div class="relative mb-3">
                    <input type="text" id="OIzqd" name="OIzqd" required
                        class="caja">
                </div>
            </div>

            <div class="flex">
                <h3 class="">ojo izquierdo</h3>
                <div class="relative mb-3">
                    <input type="text" id="ODavd" name="ODavd" required
                        class="caja">
                </div>
                <h3 class="mx-5">AV.</h3>
                <div class="relative mb-3">
                    <input type="text" id="OIavd" name="OIavd" required
                        class="caja">
                </div>
            </div>

        </div>
    </div>
</div>

<div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8 text-center">

    <button type="submit"
        class="prim tran">
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


