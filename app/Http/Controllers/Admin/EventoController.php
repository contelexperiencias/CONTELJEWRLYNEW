<?php

namespace App\Http\Controllers\Admin;
use App\Models\Evento;
use App\Models\Categoria;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;

class EventoController extends Controller
{
    public function index(){
        $eventos = Evento::all();
        return view("admin.evento.index",compact('eventos'));
    }
    public function create(){
        $categorias=Categoria::orderBy('nombre','ASC')->pluck('nombre','id');
        return view('admin.evento.create', compact('categorias'));
    }
    public function store(Request $request){

        $evento = new Evento($request->all());
        
        if($request->hasFile('urlfoto')){

            $imagen = $request->file('urlfoto');
            $nuevonombre = Str::slug($request->nombre).'.'.$imagen->guessExtension();
            Image::make($imagen->getRealPath())
            ->fit(800,450,function($constraint){ $constraint->upsize();  })
            ->save( public_path('/img/eventos/'.$nuevonombre));

            $evento->urlfoto = $nuevonombre;
        }
        $evento->slug    =   Str::slug($request->nombre);
        $evento->save();
        return redirect('/admin/evento');

    }
    public function update(Request $request,$id){

        $evento = Evento::findOrFail($id);
        $evento->fill($request->all());
        $foto_anterior     = $evento->urlfoto;


        if($request->hasFile('urlfoto')){

            $rutaAnterior = public_path('/img/eventos/'.$foto_anterior);
            if(file_exists($rutaAnterior)){ unlink(realpath($rutaAnterior)); }

            $imagen = $request->file('urlfoto');
            $nuevonombre = Str::slug($request->nombre).'.'.$imagen->guessExtension();
            Image::make($imagen->getRealPath())
            ->fit(800,450,function($constraint){ $constraint->upsize();  })
            ->save( public_path('/img/eventos/'.$nuevonombre));

            $evento->urlfoto = $nuevonombre;
        }
        $evento->slug    =   Str::slug($request->nombre);
        $evento->save();
        return redirect('/admin/evento');
    }

    public function edit($id){
        $evento = Evento::findOrFail($id);
        // $categorias=Categoria::orderBy('id','ASC')->pluck('dia','id');
        return view('admin.evento.edit',compact('evento'));
    }

    

    public function destroy($id){
        $evento = Evento::findOrFail($id);
        $borrar = public_path('/img/evento/'.$evento->urlfoto);
        if(file_exists($borrar)){ unlink(realpath($borrar)); }
        $evento->delete();
        return redirect('/admin/evento');
    }
    // public function store(Request $request)
    // {
    //     // $request->validate([
    //     //     'name' => 'required',
    //     //     'email' => 'required',
    //     // ]);
    //     Evento::create($request->all());
    //     return json_encode(array(
    //         "statusCode"=>200
    //     ));
    // }
}
