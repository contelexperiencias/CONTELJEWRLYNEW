<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarruselGaleria extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'title',
        'descripcion',
        'urlfoto',
        'codigo',
        'link',
        'orden'
    ];
}
