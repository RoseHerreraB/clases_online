<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
   
    public function index()
    {
        return response()->json(Producto::all(), 200); //200: OK
    }

    
    public function create()
    { 
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    // Validar Productos
    $datos = $request->validate([
   'asignatura' =>['required', 'string', 'max:100'],
   'descripcion' =>['nullable','string', 'max:255'],
   'precio_hora' =>['required', 'integer', 'min:1000'],
   'cantiad_horas' =>['required', 'integer','min:1'],
    ]);
    //Guardar Datos
    $producto = Producto::create($datos);
    // Respuesta al Cliente
   return response()->json(['success' => true, 'message' => 'Producto creado'], 201);
    }
   

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        return response()->json($producto, 200); //200: OK
        //
    }

    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {  
         // Validar datos de entrada
        $datos = $request->validate([
            'asignatura' =>['required', 'string', 'max:100'],
            'descripcion' =>['nullable','string', 'max:255'],
            'precio_hora' =>['required', 'integer', 'min:1000'],
            'cantidad_hora' =>['required', 'integer','min:1'],
         ]);
          // Actualizar Producto
     $producto->update($datos);
 // Respuesta al Cliente
 return response()->json(['success' => true,'message' => 'Producto actualizado'], 200); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        // Eliminar Producto
        $producto->delete();
        // Respuesta al Cliente
        return response()->json(['success' => true,'message' => 'Producto eliminado'], 200);

    }
}
