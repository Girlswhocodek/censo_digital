<?php

namespace App\Livewire;

use App\Models\Proyeccion;
use Livewire\Component;

class ProyeccionDashboard extends Component
{
    public $proyecciones;

    public $habitantes;
    public $extranjeros;
    public $santa_cruz_habitantes;

    public $type_proyecciones = [
        'Próximo año',
        'Próximos 5 años',
        'Próximo censo',
    ];

    public $typeSelected = 'Próximo año';

    public $growth_percentage_habitantes;
    public $growth_percentage_extranjeros;
    public $growth_percentage_habitantes_santa_cruz;

    public function mount()
    {

        if ($this->typeSelected == 'Próximo año') {
            $this->proyecciones = Proyeccion::find(1);
        }
        if ($this->typeSelected == 'Próximos 5 años') {
            $this->proyecciones = Proyeccion::find(2);
        }
        if ($this->typeSelected == 'Próximo censo') {
            $this->proyecciones = Proyeccion::find(3);
        }
        $this->growth_percentage_habitantes = (($this->proyecciones->habitantes - 12332000) / 12332000) * 100;
        $this->growth_percentage_extranjeros = (($this->proyecciones->extranjeros - 156000) / 156000) * 100;
        $this->growth_percentage_habitantes_santa_cruz = (($this->proyecciones->habitantes_santa_cruz - 3547000) / 3547000) * 100;
    }

    public function updatedTypeSelected()
    {
        if ($this->typeSelected == 'Próximo año') {
            $this->proyecciones = Proyeccion::find(1);
        }
        if ($this->typeSelected == 'Próximos 5 años') {
            $this->proyecciones = Proyeccion::find(2);
        }
        if ($this->typeSelected == 'Próximo censo') {
            $this->proyecciones = Proyeccion::find(3);
        }
        $this->growth_percentage_habitantes = (($this->proyecciones->habitantes - 12332000) / 12332000) * 100;
        $this->growth_percentage_extranjeros = (($this->proyecciones->extranjeros - 156000) / 156000) * 100;
        $this->growth_percentage_habitantes_santa_cruz = (($this->proyecciones->habitantes_santa_cruz - 3547000) / 3547000) * 100;
    }

    public function render()
    {
        return view('livewire.proyeccion-dashboard');
    }
}
