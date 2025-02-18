<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovimientoInventario extends Model
{
    use HasFactory;
    protected $table="movimiento_inventarios";
    protected $fillable=[
        "inventario_id",
        "fechamovimiento",
        "tipomovimiento_id",
        "cantidad",
        "observaciones",
        "preciounitario",
        "importe",
        "proveedor_id"
    ];

    public function inventario(){
    return $this->belongsTo(Inventario::class);
    }

    public function tipoMovimiento(){
        return $this->belongsTo(TipoMovimiento::class);
    }

    public function proveedor(){
        return $this->belongsTo(Proveedor::class);
    }


}

