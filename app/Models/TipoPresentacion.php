<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPresentacion extends Model
{
    use HasFactory;
    protected $table="tipo_presentaciones";   //nombre de mi tabla en la bd

    protected $fillable=[
    "nombre"
   ];

   public function productos(){
    return $this->hasMany(Producto::class);
   }
}
