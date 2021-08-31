<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\contactanosMailable;
use Illuminate\Support\Facades\Mail;


class ContactanosController extends Controller
{
    public function index(){
        return view('contactanos.index');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'correo' => 'required',
            'mensaje' => 'required'
        ]);

        $email = new contactanosMailable($request->all());
        Mail::to('rojasgabriela901@gmail.com')->send($email);
        return redirect()->route('contactanos.index')->with('info', 'mensaje enviado');
    }
}
