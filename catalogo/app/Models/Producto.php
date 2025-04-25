<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    
    static function checkProductoPorMarca( int $idMarca ) : int
    {
        //$check = self::where('idMarca',$idMarca)->first(); obj || null
        $check = self::where('idMarca',$idMarca)->count(); // int
        return $check;
    }

}
