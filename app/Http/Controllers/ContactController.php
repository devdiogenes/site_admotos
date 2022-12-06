<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;

//Parei faltando renomear a migration e model 

class ContactController extends Controller
{
    public function enviar(Request $request){
        $nome = $request -> input("nome");
        $telefone = $request -> input("telefone");
        $mensagem = $request -> input("mensagem");

        Contact::create([
            'nome' => $nome,
            'telefone' => $telefone,
            'mensagem' => $mensagem
        ]);

        return redirect('/')->with('form_status', 'Mensagem enviada com sucesso!');
    }
}
