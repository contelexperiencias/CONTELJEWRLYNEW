<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joya extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'slug',
        'title',        
        'nombre',
        'descripcion',
        'urlfoto'
        
    ];

    public function Producto(){
        return $this->hasMany("App\Models\Producto");
    }

}
