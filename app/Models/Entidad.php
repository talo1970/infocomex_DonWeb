<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Entidad extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'entidades';

    protected $fillable = [
        // Agrega aquí los campos que deseas permitir asignar masivamente
    ];  
    

}
