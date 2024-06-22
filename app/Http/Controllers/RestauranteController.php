<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurante;

class RestauranteController extends Controller
{
    public function store(Request $request)
    {
        // Validação dos dados
        // $request->validate([
        //     'nome' => 'required|string|max:255',
        //     'localizacao' => 'required|string|max:255',
        //     'caminhoImagem' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);

        // Inicializar a variável $imagePath
        // $imagePath = null;

        // Upload da imagem
        if ($request->hasFile('caminhoImagem')) {
           
            $imagePath = $request->file('caminhoImagem')->store('uploads', 'public');
           
        }

        // Criação do novo restaurante
        Restaurante::create([
            'nome' => $request->nome,
            'localizacao' => $request->localizacao,
            'caminhoImagem' => $imagePath,
        ]);

        return redirect()->back()->with('success', 'Restaurante adicionado com sucesso!');
    }

    public function index()
    {
        $restaurantes = Restaurante::all();
        return view('listRestaurantes', compact('restaurantes'));
    }
   
}
