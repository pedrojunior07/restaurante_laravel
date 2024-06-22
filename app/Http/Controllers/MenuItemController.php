<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuItem;

class MenuItemController extends Controller
{
    public function store(Request $request)
    {
       
        // $request->validate([
        //     'restauranteId' => 'required|integer|exists:restaurantes,id',
        //     'item' => 'required|string|max:255',
        //     'preco' => 'required|numeric|min:0',
        // ]);

        MenuItem::create([
            'retauranteId' => $request->restauranteId,
            'item' => $request->item,
            'preco' => $request->preco,
        ]);

        return redirect()->route('restaurants.index')->with('success', 'Item adicionado com sucesso!');
   
   
   
    }


    public function getMenuItems($restaurantId)
    {
        $menuItems = MenuItem::where('restaurant_id', $restaurantId)->get();
        return response()->json($menuItems);
    }
}
