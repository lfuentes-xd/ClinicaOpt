@extends('welcome')

@section('main')
    <div class="container mx-auto my-auto">

        <div class="w-full lg:flex xl:flex sm:block mt-5">
            <div class="lg:w-1/2 xl:1/2 sm:w-full">
                <img src="{{ asset('images/mision.jpg') }}" alt="" class="w-full h-full object-cover">
            </div>
            <div class="lg:w-1/2 xl:1/2 sm:w-full bg-cover bg-center h-screen"
                style="background-image: url('images/lectura.jpg');">
                <p class="text-2xl text-white font-bold text-center">
                    Queremos verte bien.
                </p>
                <p class="text-2xl text-white font-bold text-justify">
                    Somos una empresa mexicana integrada por un grupo de personas entusiastas con los deseos y habilidades para crear proyectos y soluciones novedosas que hagan las cosas mejor.
                </p>
            </div>
        </div>



        <div class="w-1/2 sm:w-full md:w-full">

        </div>
    </div>
@endsection
