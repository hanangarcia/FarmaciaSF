<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table="productos";

    protected $fillable=[
        "nombre",
        "tipopresentacion_id",
        "marca_id",
        "preciopublico",
        "preciomayoreo"
    ];
    

    public function tipoPresentacion(){
        return $this->belongsTo(TipoPresentacion::class);
    }

    public function marca(){
        return $this->belongsTo(Marca::class);
    }

    public function inventarios(){
        return $this->hasMany(Inventario::class);
    }
}
