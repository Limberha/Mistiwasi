<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    public function coleccion()
    {
        return $this ->belongsTo(Coleccion::class);
    }

    public function tipo_fibra()
    {
        return $this ->belongsTo(TipoFibra::class);
    }
}
