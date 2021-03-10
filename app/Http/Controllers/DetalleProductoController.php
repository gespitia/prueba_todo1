<?php

namespace App\Http\Controllers;

use App\DetalleProducto;
use App\Http\Requests\ActualizarDetalleProductoRequest;
use App\Http\Requests\DetalleProductoRequest;

class DetalleProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $index = DetalleProducto::paginate(20);
            return response()->json([
                'success' => true,
                'data' => $index, 'message' => 'resolvio la petición'
            ], 200);
        } catch (\Exception $exception) {
            return response()->json([
                'success' => false,
                'data' => $exception->getMessage(),
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(DetalleProductoRequest $request)
    {


        try {
            $detalleProducto = new DetalleProducto();
            $detalleProducto->id_producto = $request->id_producto;
            $detalleProducto->descripcion = $request->descripcion;
            $detalleProducto->valorUnitario = $request->valorUnitario;
            $detalleProducto->cantidadEntradas = $request->cantidadEntradas;
            $detalleProducto->cantidadSalidas = $request->cantidadSalidas;
            $detalleProducto->valorEntradas = $request->valorEntradas;
            $detalleProducto->valorSalidas = $request->valorSalidas;
            /*sugeridos*/
            $detalleProducto->valorSaldo = $request->valorSaldo;
            $detalleProducto->cantidadSaldo = $request->cantidadSaldo;
            $detalleProducto->save();

            return response()->json([
                'success' => true,
                'data' => "El movimiento fue realizado correctamente"
            ], 201);
        } catch (\Exception $exception) {
            return response()->json([
                'success' => false,
                'data' => $exception->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DetalleProducto $detalleProducto
     * @return \Illuminate\Http\Response
     */
    public function show($detalleProducto)
    {
        try {
            $detalleProducto = DetalleProducto::find($detalleProducto);
            return response()->json([
                'success' => true,
                'data' => $detalleProducto
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
     * @param  \App\DetalleProducto $detalleProducto
     * @return \Illuminate\Http\Response
     */
    public function edit(DetalleProducto $detalleProducto)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\DetalleProducto $detalleProducto
     * @return \Illuminate\Http\Response
     */
    public function update(ActualizarDetalleProductoRequest $request, $detalleProducto)
    {
        try {
            $detalleProducto = DetalleProducto::find($detalleProducto);
            $detalleProducto->update(
                $request->all()
            );

            return response()->json([
                'success' => true,
                'data' => $detalleProducto
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
     * @param  \App\DetalleProducto $detalleProducto
     * @return \Illuminate\Http\Response
     */
    public function destroy($detalleProducto)
    {
        try {
            $detalleProducto = DetalleProducto::find($detalleProducto);
            $detalleProducto->delete();
            return response()->json([
                'success' => true,
                'data' => "El movimiento fue eliminado correctamente."
            ], 200);
        } catch (\Exception $exception) {
            return response()->json([
                'success' => false,
                'data' => $exception->getMessage()
            ], 500);
        }
    }
}
