<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CarruselGaleria;

use Image;

class CarruselGaleriaController extends Controller
{
    public function index(){
        $carruselgalerias = CarruselGaleria::all();
        return view("admin.carruselGaleria.index",compact('carruselgalerias'));
    }
    public function create(){
        return view('admin.carruselGaleria.create');
    }
    public function store(Request $request){

        $carruselgalerias = new CarruselGaleria($request->all());
        
        if($request->hasFile('urlfoto')){

            $imagen = $request->file('urlfoto');
            $nuevonombre = 'artesanias_'.time().'.'.$imagen->guessExtension();
            Image::make($imagen->getRealPath())
            ->fit(400,550,function($constraint){ $constraint->upsize();  })
            ->save( public_path('/img/carruselGaleria/'.$nuevonombre));

            $carruselgalerias->urlfoto = $nuevonombre;
        }
        $carruselgalerias->save();
        return redirect('/admin/carruselgaleria');

    }
    public function update(Request $request,$id){

        $carruselgalerias = CarruselGaleria::findOrFail($id);
        $carruselgalerias->fill($request->all());
        $foto_anterior     = $carruselgalerias->urlfoto;


        if($request->hasFile('urlfoto')){

            $rutaAnterior = public_path('/img/carruselGaleria/'.$foto_anterior);
            if(file_exists($rutaAnterior)){ unlink(realpath($rutaAnterior)); }

            $imagen = $request->file('urlfoto');
            
            $nuevonombre = 'artesanias_'.time().'.'.$imagen->guessExtension();
            Image::make($imagen->getRealPath())
            ->fit(400,550,function($constraint){ $constraint->upsize();  })
            ->save( public_path('/img/carruselGaleria/'.$nuevonombre));

            $carruselgalerias->urlfoto = $nuevonombre;
        }
       
        $carruselgalerias->save();
        return redirect('/admin/carruselgaleria');
    }

    public function edit($id){
        $carruselgalerias = CarruselGaleria::findOrFail($id);
        return view('admin.carruselGaleria.edit',compact('carruselgalerias'));
    }

    public function destroy($id){
        $carruselgaleria = CarruselGaleria::findOrFail($id);
        $borrar = public_path('/img/carruselGaleria/'.$carruselgaleria->urlfoto);
        if(file_exists($borrar)){ unlink(realpath($borrar)); }
        $carruselgaleria->delete();
        return redirect('/admin/carruselgaleria');
    }
}
