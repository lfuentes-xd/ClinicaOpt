<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ventas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 overflow-auto max-width-full">

            <x-input-label for="agregar" :value="__('Producto')" />
            <x-text-input id="agregar" class="inline-block mt-1 text-center" type="text" name="text" required />

            <x-primary-button class="ml-2 mlr-3 tran" onclick="agregar()">
                {{ __('Agregar producto') }}
            </x-primary-button>


            <div class="overflow-x-auto">
                <table class="my-5 w-full border-collapse bg-white shadow-sm sm:rounded-lg table-auto">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b">Clave</th>
                            <th class="py-2 px-4 border-b">Grupo</th>
                            <th class="py-2 px-4 border-b">Marca</th>
                            <th class="py-2 px-4 border-b">¿cuantos?</th>
                            <th class="py-2 px-4 border-b">existencias</th>
                            <th class="py-2 px-4 border-b">Precio venta</th>
                            <th class="py-2 px-4 border-b">subtotal</th>
                        </tr>
                    </thead>

                    <tbody id="agregartb" name="agregartb">

                        <tr class="text-center">

                        </tr>
                    </tbody>
                </table>
            </div>

            <x-input-label for="total" :value="__('Total de la venta')" />
            <x-text-input id="total" class="inline-block mt-1" type="text" name="text" required />
        </div>
    </div>
</x-app-layout>

<!-- se agrega jsqueru-->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script>
    function agregar() {
        var claveProducto = document.getElementById('agregar').value;
        document.getElementById("agregar").value = "";

        var cantidadProducto = 1;
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') //token CSRF
            }
        });

        // Realizar la petición AJAX al backend de Laravel para obtener el valor del producto
        $.ajax({
            url: '/obtener',
            type: 'POST',
            data: {
                agregar: claveProducto
            },

            success: function(response) {
                var valorProducto = response.precio;
                var Grupo = response.Grupo;
                var Marca = response.Marca;
                var Existencia = response.Existencia;
                var total = 1 * valorProducto;

                var tabla = document.getElementById('agregartb');
                var fila = tabla.insertRow();
                fila.innerHTML = '<td class="text-center"> ' + claveProducto + '</td>' +
                    '<td class="text-center">' + Grupo + '</td>' +
                    '<td class="text-center">' + Marca + '</td>' +
                    '<td class="text-center"><input type="number" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm text-center" id="cant"  min="1"  max="' +
                    Existencia + '"value="' + cantidadProducto +'"></td>' +
                    '<td class="text-center">' + Existencia + '</td>' +
                    '<td class="text-center">' + valorProducto + '</td>' +
                    '<td class="text-center" id="subt" name="subt">' + total + '</td>';

            },
            error: function(xhr, status, error) {
                var errorResponse = JSON.parse(xhr.responseText);
                var mensaje = errorResponse.message;
                alert(mensaje);
            }
        });
    }


    function calculaSubt() {

    }
</script>
{{--
<script>
    function calcularTotal() {
        var tabla = document.getElementById('agregartb');
        var filas = tabla.getElementsByTagName('tbody')[0].getElementsByTagName('tr');

        var total = 0;

        for (let index = 0; index < filas.length; index++) {
            var dinero = parseFloat(filas[index].querySelector('#subt').value);
            total += dinero;
        }

        document.getElementById('total').value = total;
    }

    // Asociar el evento de cambio a los elementos input
    var inputs = document.getElementsById('subt');
    for (var i = 0; i < inputs.length; i++) {
        inputs[i].addEventListener('change', calcularTotal);
    }
</script> --}}
