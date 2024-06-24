<!-- modal.blade.php -->

<!-- Modal backdrop -->
<div>
    <style>
        /* @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap'); */

        .container-form {
            /* height:max-content; */
            text-align: center;
            border-radius: 5px;
            padding: 10px 35px 0 35px;
        }

        .container-form header {
            font-size: 20px;
            font-weight: 600;
        }

        .container-form .form-outer {
            width: 100%;
            overflow: hidden;
        }

        .container-form .form-outer form {
            display: flex;
            width: 500%;
        }

        .form-outer form .page {
            width: 20%;
            height: 90vh;
            margin: 0 0.10px;
            transition: margin-left 0.3s ease-in-out;
        }

        .form-outer form .page .title {
            text-align: left;
            font-size: 20px;
            font-weight: 500;
        }

        .form-outer form .page .field {
            width: 100%;
            margin: 13px 0;
            display: flex;
            position: relative;
        }

        form .page .field .label {
            position: absolute;
            top: -15px;
            font-size: 15px;
            font-weight: 500;
            margin-bottom: 200px;
        }

        form .page .field input,
        textarea {
            height: 100%;
            width: 100%;
            box-sizing: border-box;
            border: 1px solid lightgrey;
            border-radius: 5px;
            padding-left: 15px;
            padding: 5px;
            margin-top: 10px;
            font-size: 18px;
            color: black;
        }

        form .page .field select {
            width: 100%;
            height: 39px;

            padding: 5px;
            font-size: 17px;
            font-weight: 500;
        }

        form .page .field button {
            width: 100%;
            height: calc(100% + 5px);
            border: none;
            background: #04527b;
            margin-top: -20px;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
            font-size: 18px;
            font-weight: 500;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: 0.5s ease;
        }

        form .page .field button:hover {
            background: #000;
        }


        form .page .btns button {
            margin-top: 10px !important;
        }

        form .page .btns button.prev {
            margin-right: 3px;
        }

        form .page .btns button.next {
            margin-left: 3px;

        }

        .container-form .progress-bar {
            display: flex;
            margin: 5px 0;
            user-select: none;
        }

        .container-form .progress-bar .step {
            text-align: center;
            width: 100%;
            position: relative;
        }

        .container-form .progress-bar .step p {
            font-weight: 500;
            font-size: 12px;
            margin-bottom: 8px;
        }

        .progress-bar .step .bullet {
            height: 25px;
            width: 25px;
            border: 2px solid #000;
            display: inline-block;
            border-radius: 50%;
            position: relative;
            transition: 0.2s;
            font-weight: 500;
            font-size: 17px;
            line-height: 25px;
        }

        .progress-bar .step .bullet.active {
            border-color: #04527b;
            background: #04527b;
        }

        .progress-bar .step .bullet span {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }

        .progress-bar .step .bullet.active span {
            display: none;
        }

        .progress-bar .step .bullet:before,
        .progress-bar .step .bullet:after {
            position: absolute;
            content: '';
            bottom: 11px;
            right: -100px;
            height: 3px;
            width: 90px;
            background: #262626;
        }

        .progress-bar .step .bullet.active:after {
            background: #0250c5;
            transform: scaleX(0);
            transform-origin: left;
            animation: animate 0.3s linear forwards;
        }

        @keyframes animate {
            100% {
                transform: scaleX(1);
            }
        }

        .progress-bar .step:last-child .bullet:before,
        .progress-bar .step:last-child .bullet:after {
            display: none;
        }

        .progress-bar .step p.active {
            color: #0250c5;
            transition: 0.2s linear;
        }

        .progress-bar .step .check {
            position: absolute;
            left: 50%;
            top: 70%;
            font-size: 15px;
            transform: translate(-50%, -50%);
            display: none;
        }

        .progress-bar .step .check.active {
            display: block;
            color: #fff;
        }


        .container-form1 {
            align-items: center;
            justify-content: center;
        }

        select {
            width: 100%;
            border: 1px solid lightgrey;
            border-radius: 5px;
            padding-left: 15px;
        }

        .custom-radio {
            display: flex;
            align-items: center;
            cursor: pointer;
            position: relative;
            padding-left: 35px;
            margin-bottom: 12px;
            font-size: 18px;
            user-select: none;
        }

        .custom-radio input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }

        .radiomark {
            position: absolute;
            top: 0;
            left: 0;
            height: 25px;
            width: 25px;
            background-color: #eee;
            border-radius: 50%;
            transition: background-color 0.2s;
        }

        .custom-radio:hover input~.radiomark {
            background-color: #ccc;
        }

        .custom-radio input:checked~.radiomark {
            background-color: #4CAF50;
        }

        .radiomark:after {
            content: "";
            position: absolute;
            display: none;
        }

        .custom-radio input:checked~.radiomark:after {
            display: block;
        }

        .custom-radio .radiomark:after {
            top: 9px;
            left: 9px;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: white;
        }

        .label-text {
            margin-left: 10px;
        }

        .select-city {
            height: 100%;
            width: 100%;
            border: 1px solid lightgrey;
            border-radius: 5px;
            padding-left: 15px;
            margin-top: 10px;
            font-size: 18px;
        }



        .body-crud {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .container-crud {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h1 {
            text-align: center;
        }

        .input-container {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-bottom: 20px;
        }

        .input-crud {
            width: 70%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        #addBtn {
            padding: 8px 12px;
            background-color: #04527b;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        #addBtn:hover {
            background-color: #000;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            display: flex;
            justify-content: space-between;
            padding: 8px;
            border-bottom: 1px solid #ccc;
        }

        .edit-btn,
        .delete-btn {
            margin-left: 10px;
            cursor: pointer;
        }

        .edit-btn {
            color: #FFC107;
        }

        .delete-btn {
            color: #F44336;
        }
    </style>
    <x-dialog-modal  wire:model="show_modal_code">
        <x-slot name="title">
            Confirmación de ingreso al Censo Digital
        </x-slot>
        <x-slot name="content">
            <p class="mb-4 text-gray-700">¿Deseas acceder al formulario del censo?</p>


            <x-label class="mb-1">
                Ingrese su código único
            </x-label>
            <x-input wire:model="current_code" class="w-full" placeholder="Ingresa tu código generado..." />

        </x-slot>
        <x-slot name="footer">
            <div class="flex justify-end">
                <a href="{{ route('censo-digital') }}"
                    class="cursor-pointer px-4 py-2 bg-gray-200 text-gray-800 rounded-lg mr-2">Volver al
                    menú</a>
                <x-button wire:click="validateCode"
                    class="cursor-pointer px-4 py-2 bg-blue-500 text-white rounded-lg">Acceder</x-button>
            </div>

        </x-slot>
    </x-dialog-modal>


    <x-dialog-modal  wire:model="show_modal_add_person">
        <x-slot name="title">
            Crear nueva persona
        </x-slot>
        <x-slot name="content">
            <x-validation-errors class="mb-4" />
            <div class="grid grid-cols-2 gap-6 mb-4">
                <div>
                    <x-label class="mb-1">
                        Nombre
                    </x-label>
                    <x-input wire:model="nombre" class="w-full" placeholder="Karol Ortiz Rocha" />
                </div>
                <div>
                    <x-label class="mb-1">
                        Rol
                    </x-label>
                    <select wire:model="rol" class="w-full">
                        <option value="" disabled>Seleccione una opción</option>
                        <option value="Cónyuge o pareja">Cónyuge o pareja</option>
                        <option value="Hija o hijo / Hijastra o hijastro">Hija o hijo / Hijastra o hijastro</option>
                        <option value="Nuera o yerno">Nuera o yerno</option>
                        <option value="Nieta o nieto">Nieta o nieto</option>
                        <option value="Madre o padre">Madre o padre</option>
                        <option value="Suegra o suegro">Suegra o suegro</option>
                        <option value="Abuela o abuelo">Abuela o abuelo</option>
                        <option value="Otros familiares">Otros familiares</option>
                        <option value="Otros no familiares">Otros no familiares</option>
                    </select>
                </div>
                <div>
                    <x-label class="mb-1">
                        Sexo
                    </x-label>
                    <!-- Option 1 -->
                    <select wire:model="sexo" class="w-full">
                        <option value="" disabled>Seleccione una opción</option>
                        <option value="Hombre">Hombre</option>
                        <option value="Mujer">Mujer</option>
                        <option value="Otro">Otro</option>
                    </select>
                </div>
                <div>
                    <x-label class="mb-1">
                        Edad
                    </x-label>
                    <x-input wire:model="edad" type="number" class="w-full" placeholder="24" />
                </div>
            </div>

        </x-slot>
        <x-slot name="footer">
            <x-danger-button class="btn btn-blue mx-2" wire:click="$set('show_modal_add_person', false)">
                Cerrar
            </x-danger-button>
            <x-button class="btn btn-blue mx-2" wire:click="addPerson">
                Agregar
            </x-button>

        </x-slot>
    </x-dialog-modal>


    <!-- component -->
    <!-- This is an example component -->
    <!-- component -->
    <div class="container-form">
        <header>CENSO DIGITAL 2025</header>
        <div class="progress-bar">
            <div class="step">
                <p>Vivienda</p>
                <div class="bullet">
                    <span>1</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <p>Lista de personas del hogar</p>
                <div class="bullet">
                    <span>2</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            <!-- <div class="step">
                <p>Birth</p>
                <div class="bullet">
                    <span>3</span>
                </div>
                <div class="check fas fa-check"></div>
            </div> -->
            <div class="step">
                <p>Características del hogar</p>
                <div class="bullet">
                    <span>3</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <p>Población</p>
                <div class="bullet">
                    <span>4</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <p>Comprobante del Censo digital</p>
                <div class="bullet">
                    <span>5</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
        </div>
        <div class="form-outer">
            <form action="#">
                <div class="page slide-page">
                    <div class="title">Tipo de Vivienda:</div>
                    <div class="block flex-wrap gap-4 p-5" id="checkbox-container">
                        <!-- Option 1 -->
                        <label class="flex items-center my-5">
                            <input @if ($tipo_vivienda === 'Casa') checked @endif type="radio" name="tipo_vivienda"
                                value="Casa" class="form-radio h-5 w-5 focus:outline-none focus:shadow-outline">
                            <span class="ml-2">Casa</span>
                        </label>

                        <!-- Option 2 -->
                        <label class="flex items-center my-5">
                            <input @if ($tipo_vivienda === 'Rancho') checked @endif type="radio" name="tipo_vivienda"
                                value="Rancho" class="form-radio h-5 w-5 focus:outline-none focus:shadow-outline">
                            <span class="ml-2">Rancho</span>
                        </label>

                        <!-- Option 3 -->
                        <label class="flex items-center my-5">
                            <input @if ($tipo_vivienda === 'Casilla') checked @endif type="radio" name="tipo_vivienda"
                                value="Casilla" class="form-radio h-5 w-5 focus:outline-none focus:shadow-outline">
                            <span class="ml-2">Casilla</span>
                        </label>

                        <!-- Option 4 -->
                        <label class="flex items-center my-5">
                            <input @if ($tipo_vivienda === 'Departamento') checked @endif type="radio"
                                name="tipo_vivienda" value="Departamento"
                                class="form-radio h-5 w-5 focus:outline-none focus:shadow-outline">
                            <span class="ml-2">Departamento</span>
                        </label>

                        <!-- Option 5 -->
                        <label class="flex items-center my-5">
                            <input @if ($tipo_vivienda === 'Pieza ocupada en inquilinato, hotel familiar o pensión') checked @endif type="radio"
                                name="tipo_vivienda" value="Pieza ocupada en inquilinato, hotel familiar o pensión"
                                class="form-radio h-5 w-5 focus:outline-none focus:shadow-outline">
                            <span class="ml-2">Pieza ocupada en inquilinato, hotel familiar o pensión</span>
                        </label>

                        <!-- Option 6 -->
                        <label class="flex items-center my-5">
                            <input @if ($tipo_vivienda === 'Local no construído para habitación ocupado') checked @endif type="radio"
                                name="tipo_vivienda" value="Local no construído para habitación ocupado"
                                class="form-radio h-5 w-5 focus:outline-none focus:shadow-outline">
                            <span class="ml-2">Local no construído para habitación ocupado</span>
                        </label>

                        <!-- Option 7 -->
                        <label class="flex items-center my-5">
                            <input @if ($tipo_vivienda === 'Vivienda móvil ocupada (casa rodante, barco, carpa u otra)') checked @endif type="radio"
                                name="tipo_vivienda"
                                value="Vivienda móvil ocupada (casa rodante, barco, carpa u otra)"
                                class="form-radio h-5 w-5 focus:outline-none focus:shadow-outline">
                            <span class="ml-2">Vivienda móvil ocupada (casa rodante, barco, carpa u otra)</span>
                        </label>

                    </div>


                    <div class="field">
                        <button class="firstNext next">Siguiente</button>
                    </div>
                </div>

                <div class="page">
                    <div class="title">¿Cuántas personas viven la mayor parte del tiempo en esta vivienda?</div>
                    <div class="block flex-wrap gap-4 p-5" id="checkbox-container">
                        <!-- Option 1 -->
                        <label class="flex items-center  my-5">
                            <input @if ($personas_vivienda === 'Una sola') checked @endif type="radio" name="option"
                                value="Una sola" class="form-radio h-5 w-5 focus:outline-none focus:shadow-outline">
                            <span class="ml-2">Una sola</span>
                        </label>


                        <!-- Option 2 -->
                        <label class="flex items-center  my-5">
                            <input @if ($personas_vivienda === 'Dos o más') checked @endif type="radio" name="option"
                                value="Dos o más" class="form-radio h-5 w-5  focus:outline-none focus:shadow-outline">
                            <span class="ml-2">Dos o más</span>
                        </label>

                    </div>

                    <div class="field btns">
                        <button class="prev-1 prev">Anterior</button>
                        <button class="next-1 next">Siguiente</button>
                    </div>

                </div>
                <div class="page">
                    <div class="title">¿Cuáles son los nombres de las personas de este hogar que viven la mayor parte
                        del tiempo en esta vivienda?(Incluya bebes, niñas, niños y personas mayores)</div>
                    <div class="m-4">

                        <!-- component -->
                        <div class="flex flex-col">
                            <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
                                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                                    <div class="overflow-hidden">
                                        <table class="min-w-full">
                                            <thead class="bg-white border-b">
                                                <tr>

                                                    <th scope="col"
                                                        class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                        Nombre
                                                    </th>
                                                    <th scope="col"
                                                        class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                        Rol
                                                    </th>
                                                    <th scope="col"
                                                        class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                        Sexo
                                                    </th>
                                                    <th scope="col"
                                                        class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                        Edad
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($lista_personas as $persona)
                                                    <tr
                                                        class="  {{ $loop->index % 2 == 0 ? 'bg-gray-100' : 'bg-white' }} border-b">

                                                        <td
                                                            class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                            {{ $persona->nombre }}
                                                        </td>
                                                        <td
                                                            class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                            {{ $persona->rol }}
                                                        </td>
                                                        <td
                                                            class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                            {{ $persona->sexo }}
                                                        </td>
                                                        <td
                                                            class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                            {{ $persona->edad }}
                                                        </td>

                                                    </tr>
                                                @endforeach


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <x-button wire:click="openModalAddPerson">Añadir denunciado</x-button>
                    </div>

                    <div class="field btns">
                        <button class="prev-2 prev">Anterior</button>
                        <button class="next-2 next">Siguiente</button>
                    </div>
                </div>


                <div class="page">

                    <div class="title"> Datos de la Persona o Personas denunciadas:</div>
                    <div class="body-crud">

                        <div class="container-crud">
                            <!-- <h1>CRUD of Persons</h1> -->
                            <div class="input-container">
                                <input class="input-crud" type="text" id="nameInput"
                                    placeholder="Ingrese el nombre">
                                <input class="input-crud" id="cargoInput" placeholder="Ingrese el cargo">
                                <button id="addBtn">Añadir denunciado</button>
                            </div>
                            <ul id="personList"></ul>
                        </div>
                    </div>
                    <div class="field" style="display: flex; align-items: center;">
                        <div class="field" style="padding-right: 5px;">
                            <div class="label">Dirección General:</div>
                            <input type="text">
                        </div>
                        <div class="field" style="padding-left: 5px;">
                            <div class="label">Unidad Educativa:</div>

                            <input type="text">
                            <!-- <input type="text"> -->

                        </div>
                    </div>
                    <div class="field" style="display: flex; align-items: center;">
                        <div class="field" style="padding-right: 5px;">
                            <div class="label">Distrito:</div>
                            <input type="text">
                        </div>
                        <div class="field" style="padding-left: 5px;">
                            <div class="label">Zona:</div>

                            <input type="text">
                            <!-- <input type="text"> -->

                        </div>
                    </div>
                    <div class="field" style="display: flex; align-items: center;">
                        <div class="field" style="padding-right: 5px;">
                            <div class="label">Barrio:</div>
                            <input type="text">
                        </div>
                        <div class="field" style="padding-left: 5px;">
                            <div class="label">Referencia:</div>

                            <input type="text">
                            <!-- <input type="text"> -->

                        </div>
                    </div>

                    <div class="field btns">
                        <button class="prev-3 prev">Anterior</button>
                        <button class="next-3 next">Siguiente</button>
                    </div>

                </div>




                <div class="page">
                    <div class="title">Relación de los hechos en que se basa la denuncia:</div>
                    <div class="field" style="display: flex; align-items: center;">
                        <div class="field" style="padding-right: 5px;">
                            <div class="label">Fecha:</div>
                            <input type="date">
                        </div>
                        <div class="field" style="padding-left: 5px;">
                            <div class="label">Hora:</div>
                            <input type="time">
                        </div>
                    </div>
                    <div class="field">
                        <div class="label">Lugar:</div>
                        <input type="text">
                    </div>
                    <div class="field">
                        <!-- <input type="text"> -->

                        <textarea rows="3" placeholder="Inserte la descripción de los hechos..."></textarea>
                    </div>
                    <div class="field" style="display: flex; gap: 10px;">
                        <div class="field" style="padding-right: 5px;  flex: 1;">
                            <div class="label">Fecha de denuncia:</div>
                            <input type="date">
                        </div>
                        <div class="field" style="padding-left: 5px;  flex:1 ;">
                            <div class="label">Hora:</div>
                            <input type="time">
                        </div>
                    </div>
                    <div class="field btns">
                        <button class="prev-4 prev">Anterior</button>
                        <button class="submit">Enviar</button>
                    </div>
                </div>
            </form>

        </div>

    </div>
</div>

@push('js')
    <script>
        const slidePage = document.querySelector(".slide-page");
        const nextBtnFirst = document.querySelector(".firstNext");

        const prevBtnSec = document.querySelector(".prev-1");
        const nextBtnSec = document.querySelector(".next-1");

        const prevBtnThird = document.querySelector(".prev-2");
        const nextBtnThird = document.querySelector(".next-2");

        const prevBtnFourth = document.querySelector(".prev-3");
        const nextBtnFourth = document.querySelector(".next-3");

        const prevBtnFifth = document.querySelector(".prev-4");
        const submitBtn = document.querySelector(".submit");

        const progressText = document.querySelectorAll(".step p");
        const progressCheck = document.querySelectorAll(".step .check");
        const bullet = document.querySelectorAll(".step .bullet");
        let current = 1;

        // function adjustFormPageHeight() {
        //   const formPage = document.querySelector(".form-outer form .page");
        //   // const newHeight = Math.max(
        //   //   90,
        //   //   (formPage.scrollHeight / window.innerHeight) * 110
        //   // );
        //   // formPage.style.height = "90vh";
        // }


        nextBtnFirst.addEventListener("click", function(event) {
            event.preventDefault();
            slidePage.style.marginLeft = "-20%";
            bullet[current - 1].classList.add("active");
            progressCheck[current - 1].classList.add("active");
            progressText[current - 1].classList.add("active");
            current += 1;
        });
        nextBtnSec.addEventListener("click", function(event) {
            event.preventDefault();
            slidePage.style.marginLeft = "-40%";
            bullet[current - 1].classList.add("active");
            progressCheck[current - 1].classList.add("active");
            progressText[current - 1].classList.add("active");
            current += 1;
        });
        nextBtnThird.addEventListener("click", function(event) {
            event.preventDefault();
            slidePage.style.marginLeft = "-60%";
            bullet[current - 1].classList.add("active");
            progressCheck[current - 1].classList.add("active");
            progressText[current - 1].classList.add("active");
            current += 1;
        });
        nextBtnFourth.addEventListener("click", function(event) {
            event.preventDefault();
            slidePage.style.marginLeft = "-80%";
            bullet[current - 1].classList.add("active");
            progressCheck[current - 1].classList.add("active");
            progressText[current - 1].classList.add("active");
            current += 1;
        });
        submitBtn.addEventListener("click", function() {
            bullet[current - 1].classList.add("active");
            progressCheck[current - 1].classList.add("active");
            progressText[current - 1].classList.add("active");
            current += 1;
            setTimeout(function() {
                alert("Your Form Successfully Signed up");
                location.reload();
            }, 800);
        });

        prevBtnSec.addEventListener("click", function(event) {
            event.preventDefault();
            // adjustFormPageHeight();

            slidePage.style.marginLeft = "0%";
            bullet[current - 2].classList.remove("active");
            progressCheck[current - 2].classList.remove("active");
            progressText[current - 2].classList.remove("active");
            current -= 1;
        });
        prevBtnThird.addEventListener("click", function(event) {
            event.preventDefault();
            slidePage.style.marginLeft = "-20%";
            bullet[current - 2].classList.remove("active");
            progressCheck[current - 2].classList.remove("active");
            progressText[current - 2].classList.remove("active");
            current -= 1;
        });
        prevBtnFourth.addEventListener("click", function(event) {
            event.preventDefault();
            slidePage.style.marginLeft = "-40%";
            bullet[current - 2].classList.remove("active");
            progressCheck[current - 2].classList.remove("active");
            progressText[current - 2].classList.remove("active");
            current -= 1;
        });
        prevBtnFifth.addEventListener("click", function(event) {
            event.preventDefault();
            slidePage.style.marginLeft = "-60%";
            bullet[current - 2].classList.remove("active");
            progressCheck[current - 2].classList.remove("active");
            progressText[current - 2].classList.remove("active");
            current -= 1;
        });
        // prevBtnSixth.addEventListener("click", function(event) {
        //     event.preventDefault();
        //     slidePage.style.marginLeft = "-80%";
        //     bullet[current - 2].classList.remove("active");
        //     progressCheck[current - 2].classList.remove("active");
        //     progressText[current - 2].classList.remove("active");
        //     current -= 1;
        // });
    </script>
@endpush
</div>
