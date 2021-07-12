<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testimonio extends Model
{
    use HasFactory;
    protected $fillable = [
        'slug',
        'title',  
        'nombre',
        'descripcion',
        'urlfoto',
        'visitas',
        'orden',
        'categoria_id'
    ];
    
    public function Categoria(){
        return $this->belongsTo("App\Models\Categoria");
    }
}
