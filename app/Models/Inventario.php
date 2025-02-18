<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;
    protected $table="inventarios";
    protected $fillable=[
        "producto_id",
        "almacen_id",
        "existencia",
        "unidadmedida_id",
        "stockminimo"
    ];

    public function producto(){
        return $this->belongsTo(Producto::class);
    }
   
    public function almacen(){
        return $this->belongsTo(Almacen::class);
    }
    
    public function unidadMedida(){
        return $this->belongsTo(UnidadMedida::class);
    }

    
    public function movimientoInventarios(){
        return $this->hasMany(MovimientoInventario::class);
    }
}
