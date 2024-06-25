@extends('layouts.main')

@section('content')
    <!-- component -->
    <!-- This is an example component -->
    <div class="h-screen">

        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

        <style>
            [x-cloak] {
                display: none;
            }

            [type="checkbox"] {
                box-sizing: border-box;
                padding: 0;
            }

            .form-checkbox,
            .form-radio {
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                -webkit-print-color-adjust: exact;
                color-adjust: exact;
                display: inline-block;
                vertical-align: middle;
                background-origin: border-box;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                flex-shrink: 0;
                color: currentColor;
                background-color: #fff;
                border-color: #e2e8f0;
                border-width: 1px;
                height: 1.4em;
                width: 1.4em;
            }

            .form-checkbox {
                border-radius: 0.25rem;
            }

            .form-radio {
                border-radius: 50%;
            }

            .form-checkbox:checked {
                background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M5.707 7.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L7 8.586 5.707 7.293z'/%3e%3c/svg%3e");
                border-color: transparent;
                background-color: currentColor;
                background-size: 100% 100%;
                background-position: center;
                background-repeat: no-repeat;
            }

            .form-radio:checked {
                background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3ccircle cx='8' cy='8' r='3'/%3e%3c/svg%3e");
                border-color: transparent;
                background-color: currentColor;
                background-size: 100% 100%;
                background-position: center;
                background-repeat: no-repeat;
            }
        </style>

        <style>
            #map-container {
                position: relative;
                width: 100%;
                height: 600px;
            }

            #current-location-btn {
                position: absolute;
                top: 10px;
                right: 10px;
                z-index: 1;
                background-color: #ffffff;
                border: 1px solid #ccc;
                padding: 10px;
                cursor: pointer;
            }
        </style>

        <div x-data="app()" x-cloak>
            <div class="max-w-3xl mx-auto px-4 py-10">

                <div class="bg-white rounded-lg p-10 flex items-center shadow justify-between">
                    <div>
                        <svg class="mb-4 h-20 w-20 text-green-500 mx-auto" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd" />
                        </svg>

                        <h2 class="text-2xl mb-4 text-gray-800 text-center font-bold">Registro Exitoso</h2>

                        <div class="text-gray-600 mb-8">
                            Gracias. Con este código único por habitante boliviano podrás iniciar el censo digital.
                        </div>
                        <div class="flex items-center justify-center m-10">
                            <div class="bg-white font-semibold text-center rounded-3xl border shadow-lg p-10 max-w-xs">
                                <h1 class="text-lg text-gray-700"> {{ $random_number }} </h1>
                            </div>
                        </div>

                        <div class="flex items-center justify-center">

                            <a href="{{ route('censo-digital') }}"
                                class="w-40 block mx-auto focus:outline-none py-2 px-5 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border">Volver
                                a inicio</a>
                            <a href="{{ route('form.censo.digital') }}"
                                class="w-40 block mx-auto focus:outline-none py-2 px-5 rounded-lg shadow-sm text-center  text-white bg-blue-500 hover:bg-blue-600 font-medium border">Comenzar
                                Censo</a>
                        </div>

                    </div>
                </div>


            </div>


            <!-- / Bottom Navigation https://placehold.co/300x300/e2e8f0/cccccc -->
        </div>
    @endsection
