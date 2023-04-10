<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $fillable=['nombre', 'correo','telefono','mensaje'];
    use HasFactory;
    public $timestamps =false;
    //defiendo el nombre de la tabla con la informacion de los contactos
   
    
}
