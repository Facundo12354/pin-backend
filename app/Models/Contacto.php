<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory;
    public $timestamps =false;
    //defiendo el nombre de la tabla con la informacion de los contactos
    protected $fillable=['id','nombre', 'correo','telefono','mensaje'];
    
}
