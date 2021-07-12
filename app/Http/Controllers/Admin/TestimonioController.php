<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\testimonio;
use App\Models\Categoria;
use Illuminate\Support\Str;
use Image;

class TestimonioController extends Controller
{
    public function index(){
        $testimonios = testimonio::all();
        return view("admin.Testimonios.index",compact('testimonios'));
    }
    public function create(){
        $categorias=Categoria::orderBy('nombre','ASC')->pluck('nombre','id');
        return view('admin.Testimonios.create', compact('categorias'));
    }
    public function store(Request $request){

        $testimonio = new testimonio($request->all());
        
        if($request->hasFile('urlfoto')){

            $imagen = $request->file('urlfoto');
            $nuevonombre = Str::slug($request->nombre).'.'.$imagen->guessExtension();
            Image::make($imagen->getRealPath())
            ->fit(800,450,function($constraint){ $constraint->upsize();  })
            ->save( public_path('/img/Testimonios/'.$nuevonombre));

            $testimonio->urlfoto = $nuevonombre;
        }
        $testimonio->slug    =   Str::slug($request->nombre);
        $testimonio->save();
        return redirect('/admin/Testimonios');
        }
        public function update(Request $request,$id){

            $testimonio = testimonio::findOrFail($id);
            $testimonio->fill($request->all());
            $foto_anterior     = $testimonio->urlfoto;
    
    
            if($request->hasFile('urlfoto')){
    
                $rutaAnterior = public_path('/img/Testimonios/'.$foto_anterior);
                if(file_exists($rutaAnterior)){ unlink(realpath($rutaAnterior)); }
    
                $imagen = $request->file('urlfoto');
                $nuevonombre = Str::slug($request->nombre).'.'.$imagen->guessExtension();
                Image::make($imagen->getRealPath())
                ->fit(800,450,function($constraint){ $constraint->upsize();  })
                ->save( public_path('/img/Testimonios/'.$nuevonombre));
    
                $testimonio->urlfoto = $nuevonombre;
            }
            $testimonio->slug    =   Str::slug($request->nombre);
            $testimonio->save();
            return redirect('/admin/Testimonios');
        }
    
        public function edit($id){
            $testimonio = testimonio::findOrFail($id);
            $categorias=Categoria::orderBy('nombre','ASC')->pluck('nombre','id');
            return view('admin.Testimonios.edit',compact('testimonio','categorias'));
        }
    
        
    
        public function destroy($id){
            $testimonio = testimonio::findOrFail($id);
            $borrar = public_path('/img/Testimonios/'.$testimonio->urlfoto);
            if(file_exists($borrar)){ unlink(realpath($borrar)); }
            $testimonio->delete();
            return redirect('/admin/Testimonios');
        }

    }
