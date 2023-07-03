<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ventas') }}
        </h2>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 overflow-auto max-width-full">
            <input type="number" id="agregar" name="agregar" placeholder="escribe el id del producto"
                class="inline-block text-black font-semibold py-2 px-6">

            {{-- <a href="" class="inline-block bg-blue-600 hover:bg-blue-700 text-black font-semibold rounded py-2 px-4" >Agregar producto</a> --}}
            <button class="ml-4 inline-block bg-blue-600 hover:bg-blue-700 text-black font-semibold rounded py-2 px-4"
                onclick="agregar()" value="">
                Agregar producto
            </button>
            <div class="overflow-x-auto">
                <table class="my-5 w-full border-collapse bg-white shadow-sm sm:rounded-lg table-auto">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b">Clave</th>
                            <th class="py-2 px-4 border-b">Grupo</th>
                            <th class="py-2 px-4 border-b">Marca</th>
                            <th class="py-2 px-4 border-b">¿cuantos?</th>
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

            <div class="">
                <p>
                    total de la venta
                </p>
                <input type="text" id="total" name="total"  class="border-b text-center">
            </div>
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
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
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

                var total = 1 * valorProducto;

                var tabla = document.getElementById('agregartb');
                var fila = tabla.insertRow();
                fila.innerHTML = '<td class="text-center"> ' + claveProducto + '</td>' +
                    '<td class="text-center">' + Grupo + '</td>' +
                    '<td class="text-center">' + Marca + '</td>' +
                    '<td class="text-center"><input type="number" class="form-control" id="cant"  min="1" value="' + cantidadProducto + '" name="cantidadProducto[]" /></td>' +
                    '<td class="text-center">' + valorProducto + '</td>' +
                    '<td class="text-center" id="subt" name="subt">' + total + '</td>';

                // Obtener referencia al campo de entrada
                var inputCantidad = fila.querySelector('input[name="cantidadProducto[]"]');

                // Agregar evento input al campo de entrada
                inputCantidad.addEventListener('input', function(event) {
                    var nuevaCantidad = parseInt(inputCantidad.value);
                    var nuevoTotal = nuevaCantidad * valorProducto;
                    var totalElemento = fila.querySelector('.text-center:last-child');
                    totalElemento.textContent = nuevoTotal;
                });
            },
            error: function(xhr, status, error) {
                var errorResponse = JSON.parse(xhr.responseText);
                var mensaje = errorResponse.message;
                alert(mensaje);
            }
        });
    }
</script>

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
  </script>

