<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;
    protected $table="marcas";   // esta linea hace referencia a la tabla que se llama marcas dentro de mi base de datos
    protected $fillable=[
        "nombre"
    ];

    //esta relacion se refiere a que una marca tiene  mucho productos "hasMany" , por eso se pone productos en singular
    public function productos(){
        return $this->hasMany(Producto::class);
    }
}
