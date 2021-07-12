<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Joya;

class JoyasController extends Controller
{
    public function index(){
        $joyas = Joya::all();
        return view("admin.joyas.index",compact('joyas'));
        
    }
    public function create(){
        return view('admin.joyas.create');
    }
    public function store(Request $request){

        $joya = new Joya($request->all());
        
        // if($request->hasFile('urlfoto')){

        //     $imagen = $request->file('urlfoto');
        //     $nuevonombre = Str::slug($request->nombre).'.'.$imagen->guessExtension();
        //     Image::make($imagen->getRealPath())
        //     ->fit(1200,450,function($constraint){ $constraint->upsize();  })
        //     ->save( public_path('/img/joyas/'.$nuevonombre));

        //     $joya->urlfoto = $nuevonombre;
        // }
        $joya->slug    =   Str::slug($request->nombre);
        $joya->save();
        return redirect('/admin/joya');

    }
}
