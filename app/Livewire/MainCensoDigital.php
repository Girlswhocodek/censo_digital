<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MainCensoDigital extends Component
{
    public $current_user;

    public function pushingGenerateCode(){
        $this->current_user = Auth::user();
        if($this->current_user->code_censo ){
            $this->dispatch('swal', [
                'icon' => 'error',
                'title' => '¡Ups!',
                'text' => 'Este usuario ya tiene su código único.',
            ]);
        }else{
            return redirect()->route('form');
        }
        
    }

    public function pushingEnterWithCode(){
        $this->current_user = Auth::user();
        if($this->current_user->code_censo == null){
            $this->dispatch('swal', [
                'icon' => 'error',
                'title' => '¡Ups!',
                'text' => 'Este usuario todavía no ha generado su código.',
            ]);
        }else{
            return redirect()->route('form.censo.digital');
        }
    }

    public function render()
    {
        return view('livewire.main-censo-digital');
    }
}
