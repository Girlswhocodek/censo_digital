@extends('layouts.main')

@section('content')
    <!-- component -->
    <aside
        class="overflow-hidden bg-[url(https://i.pinimg.com/originals/83/a6/8e/83a68ede151a440ec4e433ca578daaa3.jpg)] bg-center bg-no-repeat bg-cover">
        <div class="p-8 md:p-12 lg:px-16 lg:py-24 bg-slate-900/50 text-center flex justify-center align-middle self-center items-center">
            <div class="max-w-lg text-center">
                <h2 class="text-2xl font-extrabold text-white sm:text-3xl md:text-5xl mb-2">
                    Censo Digital
                </h2>

                <p class="max-w-md text-white/90 md:mt-6 md:text-lg md:leading-relaxed md:block">
                    Para empezar el censo digital es necesario generar el código único de la vivienda que le permitirá
                    completar el cuestionario.
                </p>

                <div class="mt-4 sm:mt-8">
                    <a class="inline-flex items-center px-8 py-3 text-white transition bg-gray-900 rounded-full shadow-lg focus:outline-none focus:ring focus:ring-yellow-400 hover:bg-gray-800"
                        href="{{route('form')}}">
                        <span class="text-sm font-medium"> Generar código </span>

                        <svg class="w-5 h-5 ml-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
                <p class="max-w-md text-white/90 md:mt-6 md:text-lg md:leading-relaxed md:block">
                    ¿Ya cuenta con el código único de la vivienda?
                </p>
                <div class="mt-4 sm:mt-8">
                    <a class="inline-flex items-center px-8 py-3 text-white transition bg-gray-900 rounded-full shadow-lg focus:outline-none focus:ring focus:ring-yellow-400 hover:bg-gray-800"
                    href="{{route('form.censo.digital')}}">
                        <span class="text-sm font-medium"> Ingresar </span>

                        <svg class="w-5 h-5 ml-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>

            </div>
        </div>
    </aside>
@endsection
