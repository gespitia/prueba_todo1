<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActualizarProductoRequest;
use App\Http\Requests\ProductoRequest;
use App\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $index = Producto::paginate(20);
            return response()->json([
                'success' => true,
                'data' => $index, 'message' => 'resolvio la petición'
            ], 200);
        } catch (\Exception $exception) {
            return response()->json([
                'data' => $exception->getMessage(),
                'success' => false,
            ], 404);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


            // $producto = new Producto();
            // $producto->nombre = $request->nombre;
            // $producto->referencia = $request->referencia;
            // $producto->localizacion = $request->localizacion;
            // $producto->min = $request->min;
            // $producto->max = $request->max;
            // $producto->provedor_id = $request->provedor_id;
            // $producto->save();

            return redirect('/home')->with('status','El producto fue guardado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        $producto = Producto::find($producto);

        return response()->json([
            'success' => true,
            'data' => $producto
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Producto $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        try {


            return response()->json([
                'success' => true,
                'data' => $producto
            ], 200);
        } catch (\Exception $exception) {
            return response()->json([
                'success' => false,
                'data' => $exception->getMessage()
            ], 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        $producto->update(
            $request->all()
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(ActualizarProductoRequest $request, Producto $producto)
    {
        try {
            $producto->update($request->all());
            return response()->json([
                'success' => true,
                'data' => $producto
            ], 200);
        } catch (\Exception $exception) {
            return response()->json([
                'success' => false,
                'data' => $exception->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        try {
            $producto->delete();
            return response()->json([
                'success' => true,
                'data' => "El producto fue eliminada correctamente"
            ], 200);
        } catch (\Exception $exception) {
            return response()->json([
                'success' => false,
                'data' => $exception->getMessage()
            ], 500);
        }
    }
}
