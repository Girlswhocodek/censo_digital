<?php

namespace App\Http\Controllers\Censo;

use App\Http\Controllers\Controller;
use App\Mail\MyEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CensoController extends Controller
{


    public function form()
    {
        $random_number = $this->generateRandomString(10);
        return view('app.censo.form', compact('random_number'));
    }
    public function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function formCensoDigital()
    {
        $show_modal_code = true;
        return view('app.censo.form-censo-digital', compact('show_modal_code'));
    }

    public function validateCodeCenso(Request $request)
    {
        $current_user = Auth::user();
        // dd($request->code);
        if ($request->code == $current_user->code_censo) {
            $show_modal_code = false;
            session()->flash('swal', [
                'icon' => 'success',
                'title' => '¡Bien Hecho!',
                'text' => 'Código válido del usuario ' . $current_user->name,
            ]);
        } else {
            $show_modal_code = true;
            session()->flash('swal', [
                'icon' => 'error',
                'title' => '¡Ups!',
                'text' => 'Por favor, verifique el código introducido.',
            ]);
        }
        return view('app.censo.form-censo-digital', compact('show_modal_code'));
    }

    //     public function sendEmail()
    //     {
    //         $random_number = $this->generateRandomString(10);
    //         $data = [
    //             'title' => 'Test Email',
    //             'message' => 'This is a test email sent from Laravel.'
    //         ];


    //        dd( Mail::to('diegohurtado2412@gmail.com')->send(new MyEmail($data)));

    //         return view('app.censo.form', compact('random_number'));
    //     }
}
