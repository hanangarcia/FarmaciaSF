<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Almacen extends Model
{
    use HasFactory;
    protected $table="almacenes";
    protected $fillable=[
        "nombre"
    ];

    public function inventarios(){
        return $this->hasMany(Inventario::class);
    }
}
