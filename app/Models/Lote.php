<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lote extends Model
{
    use HasFactory;
    protected $table="lotes";
    protected $fillable=[
        "nombre",
        "numerolote",
        "inventario_id",
        "fechafabricacion",
        "fechacaducidad",
        "cantidad"
    ];

    public function inventario(){
        return $this->belongsTo(Inventario::class);
    }

}
