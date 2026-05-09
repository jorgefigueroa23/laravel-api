<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{

    public function index()
    {
        $productos = Producto::all();

        if ($productos->isEmpty()) {
            return response()->json([
                'message' => 'No se encontraron productos'
            ], 404);
        }

        return response()->json([
            'productos' => $productos
        ], 200);
    }

    public function store(Request $request)
    {
        $producto = Producto::create($request->all());
        
        try {
            $producto->save();
            return response()->json([
                'message' => 'Producto creado correctamente',
                'producto' => $producto
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error al crear el producto',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function update(Request $request, Producto $producto)
    {
        request()->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric',
            'stock' => 'required|integer'
        ]);

        try {
            $producto->update($request->all());
            return response()->json([
                'message' => 'Producto actualizado correctamente',
                'producto' => $producto
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error al actualizar el producto',
                'error' => $e->getMessage()
            ], 500);
        }

    }

    public function destroy(Producto $producto)
    {
        try {
            $producto->delete();
            return response()->json([
                'message' => 'Producto eliminado correctamente'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error al eliminar el producto',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
