@extends('layouts.appfront')

@section('content')

<style>
h2.linea {
  position: relative;
  z-index: 1;
}
h2.linea:before {
  border-top: 2px solid black;
  content: "";
  margin: 0 auto;
  position: absolute;
  top: 50%;
  left: 0;
  right: 0;
  bottom: 0;
  width: 95%;
  z-index: -1;
}
h2.linea span {
  font-size:25px;

  background: #fff;
  padding: 0 15px;
}

.demo-gallery > ul > li a {
  border: 3px solid #FFF;
  border-radius: 3px;
  display: block;
  overflow: hidden;
  position: relative;
  float: left;
}
.demo-gallery > ul > li a > img {
  -webkit-transition: -webkit-transform 0.15s ease 0s;
  -moz-transition: -moz-transform 0.15s ease 0s;
  -o-transition: -o-transform 0.15s ease 0s;
  transition: transform 0.15s ease 0s;
  -webkit-transform: scale3d(1, 1, 1);
  transform: scale3d(1, 1, 1);
  height: 100%;
  width: 100%;
}
.demo-gallery > ul > li a:hover > img {
  -webkit-transform: scale3d(1.1, 1.1, 1.1);
  transform: scale3d(1.1, 1.1, 1.1);
}
.demo-gallery > ul > li a:hover .demo-gallery-poster > img {
  opacity: 1;
}
.demo-gallery > ul > li a .demo-gallery-poster {
  background-color: rgba(0, 0, 0, 0.1);
  bottom: 0;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  -webkit-transition: background-color 0.15s ease 0s;
  -o-transition: background-color 0.15s ease 0s;
  transition: background-color 0.15s ease 0s;
}
.demo-gallery > ul > li a .demo-gallery-poster > img {
  left: 50%;
  margin-left: -10px;
  margin-top: -10px;
  opacity: 0;
  position: absolute;
  top: 50%;
  -webkit-transition: opacity 0.3s ease 0s;
  -o-transition: opacity 0.3s ease 0s;
  transition: opacity 0.3s ease 0s;
}
.demo-gallery > ul > li a:hover .demo-gallery-poster {
  background-color: rgba(0, 0, 0, 0.5);
}
.demo-gallery .justified-gallery > a > img {
  -webkit-transition: -webkit-transform 0.15s ease 0s;
  -moz-transition: -moz-transform 0.15s ease 0s;
  -o-transition: -o-transform 0.15s ease 0s;
  transition: transform 0.15s ease 0s;
  -webkit-transform: scale3d(1, 1, 1);
  transform: scale3d(1, 1, 1);
  height: 100%;
  width: 100%;
}
.demo-gallery .justified-gallery > a:hover > img {
  -webkit-transform: scale3d(1.1, 1.1, 1.1);
  transform: scale3d(1.1, 1.1, 1.1);
}
.demo-gallery .justified-gallery > a:hover .demo-gallery-poster > img {
  opacity: 1;
}
.demo-gallery .justified-gallery > a .demo-gallery-poster {
  background-color: rgba(0, 0, 0, 0.1);
  bottom: 0;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  -webkit-transition: background-color 0.15s ease 0s;
  -o-transition: background-color 0.15s ease 0s;
  transition: background-color 0.15s ease 0s;
}
.demo-gallery .justified-gallery > a .demo-gallery-poster > img {
  left: 50%;
  margin-left: -10px;
  margin-top: -10px;
  opacity: 0;
  position: absolute;
  top: 50%;
  -webkit-transition: opacity 0.3s ease 0s;
  -o-transition: opacity 0.3s ease 0s;
  transition: opacity 0.3s ease 0s;
}
.demo-gallery .justified-gallery > a:hover .demo-gallery-poster {
  background-color: rgba(0, 0, 0, 0.5);
}
.demo-gallery .video .demo-gallery-poster img {
  height: 48px;
  margin-left: -24px;
  margin-top: -24px;
  opacity: 0.8;
  width: 48px;
}
.demo-gallery.dark > ul > li a {
  border: 3px solid #04070a;
}
.home .demo-gallery {
  padding-bottom: 80px;
}
h2 {
  font: 33px sans-serif;
  margin-top: 30px;
  text-align: center;
}
h2.lineaAmarilla {
  position: relative;
  z-index: 1;
}
h2.lineaAmarilla:before {
  border-top: 2px solid #edc018;
  content: "";
  margin: 0 auto;
  position: absolute;
  top: 50%;
  left: 0;
  right: 0;
  bottom: 0;
  width: 95%;
  z-index: -1;
}
a.linea {
  position: relative;
  z-index: 1;
}
a.linea:before {
  border-top: 2px solid black;
  content: "";
  margin: 0 auto;
  position: absolute;
  top: 50%;
  left: -20%;
  right: 50%;
  bottom: 0;
  width: 30%;
  z-index: -1;
}
a.linea span {
  font-size:25px;

  background: #fff;
  padding: 0 15px;
}

/* Carousel */
#slider-home {
	margin-bottom: 50px;
}
.carousel-caption {
 

	height: 100%;
	left: 0;
	top: 0;
	padding: 0px 0px;
	text-align: left;
	width: 360px;
}

	.carousel-caption p {
		font-size: 14px;
		line-height: 18px;
	}

	.carousel-caption h2 {
		font-size: 26px;
		line-height: 30px;
	}

	.carousel-caption .h4 {
		font-size: 20px;
		margin-bottom: 30px;
		margin-top: 8px;
	}

	.carousel-caption img {
    height: 100%;
	left: 0;
	top: 0;
	padding: 20px 0px;
	text-align: left;
	width: 360px;
	display: block;
	max-width: 100%;
	
		margin: 0 auto;
	}

	.carousel-caption a {
		border-radius: 0;
		font-weight: bold;
		color: #291701;
		border: none;
	}

  @media screen and (max-width:1200px) and (min-width: 360px){
    .carousel-caption {
       height: 100%;
       left: 0;
       top: 0;
       padding: 0px 0px!important;
       text-align: left;
       width: 34%;
        }

.carousel-caption img {
    height: 100%;
	left: 0;
	top: 0;
	padding: 20px 0px!important;
	text-align: left;
	/* width: 100px; */
	display: block;
	max-width: 100%;
	
		margin: 0 auto;
	}
  .div-caption360{
    left: 35%;
    padding: 0px 5px!important;
    width: 66%;
}
  .p-caption360{
    font-family: CaviarDreams;
    font-size: calc(10px + 2 * ((94vw - 310px) / 660))!important;
    line-height: 1;
  }
  .div-caption360-2{
    width: 98%;
    }
    .p-caption360-2{
      font-size: calc(10px + 2 * ((94vw - 310px) / 660))!important;
    line-height: 12px!important;
    margin-bottom: 0rem!important;

    }
    .carousel-caption .h4 {
		font-size: calc(16px + 4 * ((100vw - 310px) / 660))!important;
		margin-bottom: 10px!important;
		margin-top: 8px;
	}
 

}

    </style>
<!-- Galeria /-->


<div class= container>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <link rel="stylesheet" href="/lib/w3.css"> -->
        <link href="https://cdn.jsdelivr.net/lightgallery/1.3.9/css/lightgallery.min.css" rel="stylesheet">
        <div class="col-sm-5">

        <h2 class=" linea text-dark text-right" style="font-family:LemonMilk;"><span>Galería</span></h2>
        </div>
        <div id="slider-home" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
          @forelse ($carruselgalerias as $item)
            <li data-target="#slider-home" data-slide-to="{{$item->orden}}" class="@if($loop->index==0) active @endif"></li>
            @empty
            @endforelse
          </ol>
          <div class="carousel-inner" >
          @forelse ($carruselgalerias as $item)
            <div class="carousel-item @if($loop->index==0) active @endif">
            
              <img src="/img/empresa/fondogris.png" alt="First slide" style="padding-left: 15%;  padding-bottom: 6%; width: 100%;">
              
              <div class="carousel-caption">

              
                <img alt="aretes_12345" src="/img/carruselGaleria/{{$item->urlfoto}}">
                

              </div>
              <div class="carousel-caption div-caption360" style="left: 34%; padding: 42px 0px; width: 66%;">
              <p class="h4 text-dark p-caption360" style="font-family:CaviarDreams; font-size: 54px; line-height: 1;">{{$item->title}}</p>
               <div style="width:75%" class="div-caption360-2"> <p  class="text-dark p-caption360-2" style="font-family:CaviarDreams;">{{$item->descripcion}}</p></div>
                <p style="font-family:CaviarDreams_Bold; color:black;" class="p-caption360-2">Código</p>
                <p style="font-family:CaviarDreams_Bold; color:black;" class="p-caption360-2">{{$item->codigo}}</p>
                </div>
            </div>
            @empty
            @endforelse
          </div>
          <a style="z-index: 50;" class="carousel-control-prev" href="#slider-home" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a  style="z-index: 50;" class="carousel-control-next" href="#slider-home" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
    <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist" style="justify-content: center; border:0px!important; font-size: calc(0.6vw + 0.6vh + 0.4vmin);">
        <a class="linea nav-item nav-link active" style="text-align: right; padding: 0.5rem 4rem;     width: 20%; color:black;" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Pulseras</a>
        <a class="linea nav-item nav-link" style="text-align: right; padding: 0.5rem 4rem;     width: 20%; color:black;" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Dijes</a>
        <a class="linea nav-item nav-link" style="text-align: right; padding: 0.5rem 4rem;    width: 20%; color:black;" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Cadenas</a>
        <a class="linea nav-item nav-link" style="text-align: right; padding: 0.5rem 4rem;    width: 20%; color:black;" id="nav-contact2-tab" data-toggle="tab" href="#nav-contact2" role="tab" aria-controls="nav-contact2" aria-selected="false">Aretes</a>
        <a class="linea nav-item nav-link" style="text-align: right; padding: 0.5rem 4rem;    width: 20%; color:black;" id="nav-anillo-tab" data-toggle="tab" href="#nav-anillo" role="tab" aria-controls="nav-anillo" aria-selected="false">Anillos</a>
      </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <div class="demo-gallery">
            <ul id="lightgallery1" role="tabpanel" class="tab-pane fade show active list-unstyled row">
            @forelse ($pulceras as $item)
            <li style="" class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="/img/producto/{{$item->urlfoto}}" data-src="/img/producto/{{$item->urlfoto}}" data-sub-html="<h4>{{$item->title}}</h4><p>{{$item->nombre}}</p>">
            
                <a href="">
                    <img class="img-responsive" src="/img/producto/{{$item->urlfoto}}">
                </a>
                
                <a>{{$item->title}}</a>
         
            </li>
            @empty
                @endforelse

                </ul>
            </div>
      </div>
    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
    <div class="demo-gallery">
    <ul id="lightgallery2" role="tabpanel" class="tab-pane fade show active list-unstyled row">
    @forelse ($dijes as $item)
          <li  style="flex: 0 0 33.333333%;" class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="/img/producto/{{$item->urlfoto}}" data-src="/img/producto/{{$item->urlfoto}}" data-sub-html="<h4>{{$item->nombre}}</h4><p>{{$item->nombre}}</p>">
              <a href="">
                  <img class="img-responsive" src="/img/producto/{{$item->urlfoto}}">
              </a>
              <a>{{$item->title}}</a>
          </li>
          @empty
              @endforelse

    </ul>
    </div>
    </div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
    <div class="demo-gallery">
        <ul id="lightgallery3" role="tabpanel" class="tab-pane fade show active list-unstyled row">
        @forelse ($cadenas as $item)
        <li  style="flex: 0 0 33.333333%;" class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="/img/producto/{{$item->urlfoto}}" data-src="/img/producto/{{$item->urlfoto}}" data-sub-html="<h4>{{$item->nombre}}</h4><p>{{$item->nombre}}</p>">
             <a href="">
                <img class="img-responsive" src="/img/producto/{{$item->urlfoto}}">
             </a>
             <a>{{$item->title}}</a>
        </li>
        @empty
            @endforelse
                    </ul>
    </div>
  </div>
  <div class="tab-pane fade" id="nav-contact2" role="tabpanel" aria-labelledby="nav-contact2-tab">
    <div class="demo-gallery">
        <ul id="lightgallery4" role="tabpanel" class="tab-pane fade show active list-unstyled row">
        @forelse ($aretes as $item)
        <li  style="flex: 0 0 33.333333%;" class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="/img/producto/{{$item->urlfoto}}" data-src="/img/producto/{{$item->urlfoto}}" data-sub-html="<h4>{{$item->nombre}}</h4><p>{{$item->nombre}}</p>">
             <a href="">
                <img class="img-responsive" src="/img/producto/{{$item->urlfoto}}">
             </a>
             <a>{{$item->title}}</a>
        </li>
        @empty
            @endforelse
        </ul>
    </div>
  </div>
  <div class="tab-pane fade" id="nav-anillo" role="tabpanel" aria-labelledby="nav-anillo-tab">
    <div class="demo-gallery">
        <ul id="lightgallery5" role="tabpanel" class="tab-pane fade show active list-unstyled row">
        @forelse ($anillos as $item)
        <li  style="flex: 0 0 33.333333%;" class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="/img/producto/{{$item->urlfoto}}" data-src="/img/producto/{{$item->urlfoto}}" data-sub-html="<h4>{{$item->nombre}}</h4><p>{{$item->nombre}}</p>">
             <a href="">
                <img class="img-responsive" src="/img/producto/{{$item->urlfoto}}">
             </a>
             <a>{{$item->title}}</a>
        </li>
        @empty
            @endforelse
        </ul>
    </div>
  </div>
</div>

</div>


<script src="/js/galeria.js"></script>
<script>

            $(document).ready(function(){

                $('#lightgallery1').lightGallery();
                $('#lightgallery2').lightGallery();
                $('#lightgallery3').lightGallery();
                $('#lightgallery4').lightGallery();
                $('#lightgallery5').lightGallery();

            });


        </script>

@endsection