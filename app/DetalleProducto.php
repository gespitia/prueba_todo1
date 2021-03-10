<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetalleProducto extends Model
{
    use SoftDeletes;

   protected $fillable=[
    'id_producto',
    'descripcion',
    'no_factura',
    'valorUnitario',
    'cantidadEntradas',
    'cantidadSalidas',
    'valorEntradas',
    'valorSalidas',
    'cantidadSaldo',
    'valorSaldo'
   ];

    public function detalle_productos(){
        return $this->hasMany(DetalleProducto::class);
    }
}
