<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Producto extends Model
{

    static function checkProductoPorMarca( int $idMarca ) : int
    {
        //$check = self::where('idMarca',$idMarca)->first(); obj || null
        $check = self::where('idMarca',$idMarca)->count(); // int
        return $check;
    }

    // métodos de relación
    public function getMarca() : BelongsTo
    {
        return $this->belongsTo(
                            Marca::class,
                            'idMarca',
                            'idMarca'
                        );
    }

    public function getCat() : BelongsTo
    {
        return $this->belongsTo(
                            Categoria::class,
                            'idCategoria',
                            'idCategoria'
                        );
    }

}
