
<h2 class="titulos ">Pruebas Funcionales</h2>
<h2 class="subt">Pruebas funcionales binoculares</h2>

<div class="container lg:flex xl:flex md:flex sm:block mt-3"><!-- awelo -->

    <div class="lg:w-1/2 xl:w-1/2 lg:flex xl:flex sm:block sm:w-full"> <!-- padre 1-->
        <div class="lg:w-1/2 xl:w-1/2 sm:w-full"><!-- hijo-->

            <div class="relative mb-3 w-full">
                <input type="text" id="FLL" name="FLL" required
                    class="caja"
                    @if (isset($funcionales))
                        value="{{$funcionales->FLL}}"
                    @endif>
                <label for="FLL"
                    class="etiqueta">FLL</label>
            </div>

            <div class="relative mb-3 w-full">
                <input type="text" id="FVL" name="FVL" required
                    class="caja"
                    @if (isset($funcionales))
                    value="{{$funcionales->FVL}}"
                @endif>
                <label for="FVL"
                    class="etiqueta">FVL</label>
            </div>

            <div class="relative mb-3 w-full">
                <input type="text" id="VLL" name="VLL" required
                    class="caja"
                    @if (isset($funcionales))
                    value="{{$funcionales->VLL}}"
                @endif>
                <label for="VLL"
                    class="etiqueta">VLL</label>
            </div>

            <div class="relative mb-3 w-full">
                <input type="text" id="BNL" name="BNL" required
                    class="caja"
                    @if (isset($funcionales))
                    value="{{$funcionales->BNL}}"
                @endif>
                <label for="BNL"
                    class="etiqueta">BNL</label>
            </div>

            <div class="relative mb-3 w-full">
                <input type="text" id="BTL" name="BTL" required
                    class="caja"
                    @if (isset($funcionales))
                    value="{{$funcionales->BTL}}"
                @endif>
                <label for="BTL"
                    class="etiqueta">BTL</label>
            </div>

            <div class="relative mb-3 w-full">
                <input type="text" id="CCF" name="CCF" required
                    class="caja"
                    @if (isset($funcionales))
                    value="{{$funcionales->CCF}}"
                @endif>
                <label for="CCF"
                    class="etiqueta">CCF</label>
            </div>

            <div class="relative mb-3 w-full">
                <input type="text" id="ARN" name="ARN" required
                    class="caja"
                    @if (isset($funcionales))
                    value="{{$funcionales->ARN}}"
                @endif>
                <label for="ARN"
                    class="etiqueta">ARN</label>
            </div>

            <div class="relative mb-3 w-full">
                <input type="text" id="ARP" name="ARP" required
                    class="caja"
                    @if (isset($funcionales))
                    value="{{$funcionales->ARP}}"
                @endif>
                <label for="ARP"
                    class="etiqueta">ARP</label>
            </div>


        </div>

        <div class="lg:w-1/2 xl:w-1/2 sm:w-full"><!-- hijo-->

            <div class="relative mb-3 w-full">
                <input type="text" id="ADDO" name="ADDO" required
                    class="caja"
                    @if (isset($funcionales))
                    value="{{$funcionales->ADDO}}"
                @endif>
                <label for="ADDO"
                    class="etiqueta">ADD</label>
            </div>

            <div class="relative mb-3 w-full">
                <input type="text" id="FLC" name="FLC" required
                    class="caja"
                    @if (isset($funcionales))
                    value="{{$funcionales->FLC}}"
                @endif>
                <label for="FLC"
                    class="etiqueta">FLC</label>
            </div>

            <div class="relative mb-3 w-full">
                <input type="text" id="FLC1" name="FLC1" required
                    class="caja"
                    @if (isset($funcionales))
                    value="{{$funcionales->FLC100}}"
                @endif>
                <label for="FLC1"
                    class="etiqueta">FLC-100</label>
            </div>

            <div class="relative mb-3 w-full">
                <input type="text" id="AC" name="AC" required
                    class="caja"
                    @if (isset($funcionales))
                    value="{{$funcionales->ACA}}"
                @endif>
                <label for="AC"
                    class="etiqueta">AC/A</label>
            </div>

            <div class="relative mb-3 w-full">
                <input type="text" id="FVC" name="FVC" required
                    class="caja"
                    @if (isset($funcionales))
                    value="{{$funcionales->FVC}}"
                @endif>
                <label for="FVC"
                    class="etiqueta">FVC</label>
            </div>

            <div class="relative mb-3 w-full">
                <input type="text" id="VVC" name="VVC" required
                    class="caja"
                    @if (isset($funcionales))
                    value="{{$funcionales->VVC}}"
                @endif>
                <label for="VVC"
                    class="etiqueta">VVC</label>
            </div>

            <div class="relative mb-3 w-full">
                <input type="text" id="BNC" name="BNC" required
                    class="caja"
                    @if (isset($funcionales))
                    value="{{$funcionales->BNC}}"
                @endif>
                <label for="BNC"
                    class="etiqueta">BNC</label>
            </div>

            <div class="relative mb-3 w-full">
                <input type="text" id="BNT" name="BNT" required
                    class="caja"
                    @if (isset($funcionales))
                    value="{{$funcionales->BNT}}"
                @endif>
                <label for="BNT"
                    class="etiqueta">BNT</label>
            </div>

        </div>
    </div>

<!--
-----------------------------------------------------

M I T A D

------------------------------------------------------

-->

    <div class="lg:w-1/2 xl:w-1/2 lg:flex xl:flex sm:block sm:w-full"> <!-- padre 2-->

        <div class="lg:w-full xl:w-full sm:w-full"><!-- hijo-->

            <div class="relative mb-3 w-full">
                <input type="text" id="AO" name="AO" required
                    class="caja"
                    @if (isset($funcionales))
                    value="{{$funcionales->AO}}"
                @endif>
                <label for="AO"
                    class="etiqueta">AO</label>
            </div>

            <div class="relative mb-3 w-full">
                <input type="text" id="ODER" name="ODER" required
                    class="caja"
                    @if (isset($funcionales))
                    value="{{$funcionales->ODER}}"
                @endif>
                <label for="ODER"
                    class="etiqueta">O.DER</label>
            </div>

            <div class="relative mb-3 w-full">
                <input type="text" id="OIZQ" name="OIZQ" required
                    class="caja"
                    @if (isset($funcionales))
                    value="{{$funcionales->OIZQ}}"
                @endif>
                <label for="OIZQ"
                    class="etiqueta">O.IZQ</label>
            </div>

            <div class="lg:w-full xl:w-full sm:w-full"><!-- hijo-->

                <div class="relative mb-3 w-full">
                    <input type="text" id="PPCNA" name="PPCNA" required
                        class="caja"
                        @if (isset($funcionales))
                        value="{{$funcionales->PPCNA}}"
                    @endif>
                    <label for="PPCNA"
                        class="etiqueta">P.P.C.N.A</label>
                </div>

                <div class="relative mb-3 w-full">
                    <input type="text" id="AA" name="AA" required
                        class="caja"
                        @if (isset($funcionales))
                        value="{{$funcionales->AAODER}}"
                    @endif>
                    <label for="AA"
                        class="etiqueta">A.A O.der</label>
                </div>

            </div>

            <div class="lg:w-full xl:w-full sm:w-full"><!-- hijo-->

                <div class="relative mb-3 w-full">
                    <input type="text" id="PPCA" name="PPCA" required
                        class="caja"
                        @if (isset($funcionales))
                        value="{{$funcionales->PPCA}}"
                    @endif>
                    <label for="PPCA"
                        class="etiqueta">P.P.C.A</label>
                </div>

                <div class="relative mb-3 w-full">
                    <input type="text" id="Izq" name="Izq" required
                        class="caja"
                        @if (isset($funcionales))
                        value="{{$funcionales->OIZQ}}"
                    @endif>
                    <label for="Izq"
                        class="etiqueta">O.Izq</label>
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
