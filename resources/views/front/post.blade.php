@extends('layouts.appfront')

@section('content')
<div class="container  pb-5">
<div class=" carousel-inner ">        
            <img src="/img/post/encabezadoblog.png" class="withmin" alt="footer" style="width: 100%;">
              <div class=" carousel-caption ml-auto mr-auto mx-auto container row" style=" padding-top:15%; top:1px;">
                <div class="text-center col-sm-12">
                    <h2 id="Nosotros" class=" linea text-dark text-right" style= "font-family:LemonMilk;  left: -87%;"><span style="background:#ee715f;">BLOG</span></h2>
                    
                </div>
              </div>
       </div>
    <div class="row">
    
    <div class="col-sm-6">
    <p style="font-family:CaviarDreams_Italic; text-aling:left; padding-top:3%">Finanzas, mujeres, negocios</p>
        <h1 style="font-family:CaviarDreams_Bold;" class="p-3 text-black text-right w-100 mt-5">{{$post->title}}</h1>
    </div>
    <div class="col-sm-6">
    </div>
    <div class="col-sm-8 text-center"  style="font-family:CaviarDreams; ">
    {{$post->nombre}}
   
    </div>
    <div class="col-sm-4">
    </div>
    <div class="col-sm-8" style="background:#E5E5E5; font-family:CaviarDreams;">
    {!!$post->description!!}
        <div  style="float: left; ">
            <img src="/img/post/{{$post->urlfoto}}" hspace="5" vspace="5" style="float: left;" />
            {!!$post->descripcion!!}
        </div>
    </div>
    <div class="col-sm-4" style="font-family:CaviarDreams_Bold;">
    <p style="font-family:CaviarDreams_Bold;">
    Otras entradas
    <ul class="text-left" style="margin-left:5%; font-family:CaviarDreams_Bold;">
    @foreach ($posts as $r)
    <li style="font-family:CaviarDreams_Bold;">{{$r->title}}</li>
    
    
    @endforeach
    </ul>
    <a href="/blog" class="text-right">ver mas...</a>
    </p>
    </div>
<!-- <div class="col-sm-8">
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do   eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad   minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip   ex ea commodo consequat. Duis aute irure dolor in reprehenderit in   voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur   sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt   mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do   eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad   minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip   ex ea commodo consequat. Duis aute irure dolor in reprehenderit in   voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur   sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt   mollit anim id est laborum.
 <div  style="float: left;">
 <img src="/img/post/{{$post->urlfoto}}" width="220" height="165" hspace="5" vspace="5" style="float: left;">
 </div>
 
 </div> -->
        

        

    </div>
    
    <!-- <div class="col-sm-12 p-5  mt-5 mb-5 bg-white rounded-lg">

        {!!$post->descripcion!!}

        <hr>
        <p class="small text-right">Leido {{$post->visitas}} veces | Publicado {{$post->created_at->diffForHUmans()}}</p>


    </div> -->

</div>
@endsection