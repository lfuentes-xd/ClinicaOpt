@extends('welcome')

@section('main')
<div class="relative w-full h-full">
    <img src="{{ asset('images/lentes1.jpg') }}" class="w-screen h-screen object-cover">

    <div class="absolute top-0 left-0 right-0 bottom-0 flex items-center justify-center">
      <h1 class="text-white text-4xl font-bold">CLINICA ÓPTICA</h1>
    </div>
  </div>

<div class="lg:w-full sm:text-xl">
    <h1 class="font-bold text-center text-4xl mt-5">
        ¿CÓMO PODEMOS AYUDARTE?
    </h1>
</div>

<div class="sm:block lg:flex">
    <div class="max-w-sm mx-auto bg-white shadow-md rounded-lg overflow-hidden">
        <img src="{{ asset('images/lentes2.jpg') }}" alt="Imagen de la card" class="w-full">
        <div class="p-4">
            <h3 class="text-xl font-medium text-gray-800 text-center">Comprar unos lentes</h3>
            <p class="text-gray-600 mt-2 text-justify">Te ayudamos en la compra de unos lentes nuevos
                ya sea que los quieras para las caminatas por el dia, oh que requieras de unos
                nuevos lenes para lectura.
            </p>
            <a href="#" class="text-blue-500 mt-2 inline-block">Leer más</a>
        </div>
    </div>

    <div class="max-w-sm mx-auto bg-white shadow-md rounded-lg overflow-hidden">
        <img src="{{ asset('images/lentes4.jpg') }}" alt="Imagen de la card" class="w-full">
        <div class="p-4">
            <h3 class="text-xl font-medium text-gray-800 text-center">¿lentes con aumento?</h3>
            <p class="text-gray-600 mt-2 text-justify">
                ¿Tienes problemas para leer?
                ¿oh, para poder ver simplemente bien?

                Entonces tambien te ayudamos a conseguir unos lentes con el aumento
                que es necesario para ti.
            </p>
            <a href="#" class="text-blue-500 mt-2 inline-block">Leer más</a>
        </div>
    </div>

    <div class="max-w-sm mx-auto bg-white shadow-md rounded-lg overflow-hidden">
      <img src="{{asset('images/lentes3.jpg')}}"
      alt="Imagen de la card"
      class="w-full">
      <div class="p-4">
        <h3 class="text-xl font-medium text-gray-800 text-center">Título de la Card</h3>
        <p class="text-gray-600 mt-2 text-justify">
          Un texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido.
          También es una composición de caracteres imprimibles generados por un algoritmo de cifrado que,
          aunque no tienen sentido para cualquier persona,
          sí puede ser descifrado por su destinatario original.
        </p>
        <a href="#" class="text-blue-500 mt-2 inline-block">Leer más</a>
      </div>
    </div>
</div>

<div class="w-full lg:flex xl:flex sm:block mt-5">
    <div class="lg:w-1/2 xl:1/2 sm:w-full">
        <img src="{{ asset('images/personas1.jpg') }}" alt="" class="w-full h-full object-cover">
    </div>
    <div class="lg:w-1/2 xl:1/2 sm:w-full bg-cover bg-center h-screen"
        style="background-image: url('images/lectura.jpg');">
        <p class="text-2xl text-white font-bold text-center">
            Queremos verte bien.
        </p>
        <p class="text-2xl text-white font-bold text-center">
            Agenda una cita con nosotros y obtén unos nuevos lentes.
        </p>
    </div>
</div>
</div>
@endsection
