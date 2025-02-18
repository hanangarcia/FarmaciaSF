<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoMovimiento extends Model
{
    use HasFactory;
    protected $table="tipo_movimientos";
    protected $fillable=[
        "nombre"
    ];

    public function movimientoInventarios(){
        return $this->hasMany(MovimientoInventario::class);
    }
}
