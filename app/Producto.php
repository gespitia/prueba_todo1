<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nombre',
        'referencia',
        'localizacion',
        'min',
        'max',
        'provedor_id'
    ];

    public function productos(){
        return $this->hasMany(Producto::class);
    }

}
