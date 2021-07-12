@extends('layouts.appfront')

@section('content')
<div class="container bg-white">
    <div class="row justify-content-center">
        <div class="col-sm-12 mt-5 mb-5 text-center">
            <div class="col-sm-5">
            <h2 class=" linea text-dark text-right" style="font-family:LemonMilk;"><span>Blog</span></h2>
            </div>
            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ipsum, ducimus beatae facilis, qui fugiat inventore dicta magnam numquam, modi ad explicabo quaerat animi magni omnis unde illum vel. Earum!</p>
        </div>
    </div>
   



<div class="container">
@foreach ($posts as $r)
 <div class="card " style=" padding: 2em; border: hidden;">
      <div class="row">
            <div class="col-sm-5">
                <img class="d-block w-100" src="/img/post/{{$r->urlfoto}}" alt="">
            </div>
            <div class="col-sm-7">
                <div class="card-block">
                 <p style="font-family:CaviarDreams_Bold; font-size:24px;">{{$r->nombre}}</p>
                   
                </div>
                <div style="background:#E5E5E5; width:60%; font-family:CaviarDreams">
                <p>{{$r->description}}... </p>
                </div>
                <div>
                <p>
                <a style="font-family:CaviarDreams; padding-top: 0px; padding-bottom: 0px;" href="/blog/{{$r->slug}}" class="btn btn-outline-dark">Leer más</a>
                </p>
                    
                    <p style="font-family:CaviarDreams_Italic;">Finanzas, mujeres, negocios</p>
                </div>

            </div> 
      </div>
 </div>
 @endforeach


 
</div>    
</div>
<style>
    .timeline{
        margin-top: 60px;
    }
    .timeline::before{
        content: '';
        position: absolute;
        left: 50%;
        width: 2px;
        height: 100%;
        background: black;
    }
    .timeline ul{ margin: 0; padding: 0}
    .timeline ul li{ 
        list-style: none;
        position: relative;
        width: 50%;
        padding: 40px;
        box-sizing: border-box;
        }
    .timeline ul li:nth-child(odd){
        float: left;
        text-align: right;
        clear: both;
      
     }
     .timeline ul li:nth-child(even){
        float: right;
        text-align: left;
        clear: both;
      
     }

     .timeline ul li:nth-child(odd)::before{
         content: '';
         position: absolute;
         top: 40px;
         right: -10px;
         width: 20px;
         height: 20px;
         background: black;
         border-radius: 50%;
     }
     .timeline ul li:nth-child(even)::before{
         content: '';
         position: absolute;
         top: 40px;
         left: -10px;
         width: 20px;
         height: 20px;
         background: black;
         border-radius: 50%;
     }
     .archive {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
    grid-gap: 1em;
  }
  
  .article {
    padding: 1em;
    /* background: #71D7E4;
    box-shadow:
      0 5px 10px rgba(0, 0, 0, 0.1),
      0 20px 20px rgba(0, 0, 0, 0.05); */
  }

</style>
@endsection