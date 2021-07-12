<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'slug',
        'dia',       
        'description',
        'nombre',
        'descripcion',
        'urlfoto',
        'hora',
        'lugar'
        
    ];
}
