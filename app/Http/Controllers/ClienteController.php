<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Restaurante;

class ClienteController extends Controller
{
    public function create()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:cliente',
            'senha' => 'required|string|min:8',
        ]);

        $cliente = new Cliente();
        $cliente->nome = $validatedData['nome'];
        $cliente->username = $validatedData['username'];
        $cliente->senha = bcrypt($validatedData['senha']);
        $cliente->save();

        return redirect()->route('clientes.create')->with('success', 'Cliente cadastrado com sucesso!');
    }

    public function index()
    {
        // Busca todos os restaurantes do banco de dados
        $restaurantes = Restaurante::all();

        // Retorna a visão e passa a variável $restaurantes
        return view('indexCliente', compact('restaurantes'));
    }
}
