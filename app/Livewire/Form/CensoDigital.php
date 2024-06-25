<?php

namespace App\Livewire\Form;

use App\Models\Persona;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CensoDigital extends Component
{
    public $current_code;
    public $current_user;
    public $show_modal_code = true;
    public $show_modal_add_person = false;

    //attributes of the form
    public $tipo_vivienda;
    public $personas_vivienda;
    public $lista_personas = [];

    public $nombre;
    public $rol = "";
    public $sexo = "";
    public $edad;

    public function mount()
    {
        $this->current_user = Auth::user();
        // dd($this->current_user->code_censo);
    }

    public function addPerson(){

        $this->validate([
            'nombre' => 'required',
            'rol' => 'required',
            'sexo' => 'required',
            'edad' => 'required',
        ]);
        Persona::create([
            'nombre' => $this->nombre,
            'rol' => $this->rol,
            'sexo' => $this->sexo,
            'edad' => $this->edad,
            'formulario_censo_id' => $this->current_user->form->id,
        ]);

        $this->lista_personas =$this->current_user->form->personas;


        $this->dispatch('swal', [
            'icon' => 'error',
            'title' => 'Bien Hecho!',
            'text' => 'Persona agregada correctamente.',
        ]);

        $this->reset('show_modal_add_person', 'nombre', 'rol', 'sexo', 'edad');
    }

    public function openModalAddPerson()
    {
        $this->show_modal_add_person = true;
    }

    public function validateCode()
    {
        $this->current_user = Auth::user();
        // dd($request->code);
        if ($this->current_code == $this->current_user->code_censo) {

            $this->tipo_vivienda = $this->current_user->form->tipoVivienda?->tipo_vivienda_name ?? "";
            $this->personas_vivienda = $this->current_user->form->personaVivienda?->cantidad_personas_vivienda ?? "";
            $this->lista_personas =$this->current_user->form->personas?? [];
            $this->show_modal_code = false;
            $this->dispatch('swal', [
                'icon' => 'success',
                'title' => '¡Bien Hecho!',
                'text' => 'Código válido del usuario ' . $this->current_user->name,
            ]);
        } else {
            $this->show_modal_code = true;
            $this->dispatch('swal', [
                'icon' => 'error',
                'title' => '¡Ups!',
                'text' => 'Por favor, verifique el código introducido.',
            ]);

        }
    }

    public function saveProgress(){
        $this->tipo_vivienda = $this->current_user->form->tipoVivienda?->tipo_vivienda_name ?? "";
        $this->personas_vivienda = $this->current_user->form->personaVivienda?->cantidad_personas_vivienda ?? "";
        $this->lista_personas =$this->current_user->form->personas?? [];
    }

    public function render()
    {
        return view('livewire.form.censo-digital');
    }
}
