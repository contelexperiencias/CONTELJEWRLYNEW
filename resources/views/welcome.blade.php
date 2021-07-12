@extends('layouts.appfront')

@section('content')
<style>
 @font-face{
        font-family:LemonMilk;
        src:url(fuentes/LEMONMILK-Regular.otf);
       }

.padre{
  display:flex;
  flex-flow:column nowrap;

}
  .section{
    display:flex;
  }
  .articulos{
    flex:2 1 auto;
    display: flex;
    flex-flow:row wrap;
  }
  .article{
    flex:1 1 40%;

  }
  .aside{
    flex:1 1 auto;
  }
  .publico{

  }
    #wrapper {
        position:relative;
    }

    #wrapper>div {
        width:430px;
        height:220px;
    }

    #div1 {
        background-color:Red;
    }
    #div2 {
        position: absolute;
        background-color: Green;
        top: 4%;
        left: 30%;
    }

    #principal li {
   display:inline;
   float:left;
}

#principal li {
   display:inline;
   float:left;
   width:100px;
   background-color:#f5f7f9;
   padding:5px;
   margin:10px;
   text-align: center;
   border-right: #a5a7aa solid 1px;
   border-bottom: #a5a7aa solid 1px;
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
.w-175 {
    width: 235%!important;
}
.montrar{
  display:none!important;
}
@media screen and (max-width:775px){
.ocultar {
  display:none;
}
.montrar{
  display:flex!important;
}
}
@media screen and (max-width:767px) and (min-width: 576px){
  .col-sm-4 {

  max-width: 100%!important;
  }
  .col-sm-8 {
    max-width: 100%!important;
  }

}

@media screen and (max-width:900px) and (min-width: 776px){
  .montrar{
    display:none!important;
}
  .w-75{
    width: 100%!important;

  }
  .w-left1{
    left: 25%!important;;
 }
   .w-left2{
     left:20%!important;
   }
   .w-top{
     top:39px!important;
   }

}

@media screen and (max-width:1000px) and (min-width: 900px){
  .montrar{
    display:none!important;
}
  .w-top{
     top:20%!important;
   }
   .w-left2{
     left:0%!important;
   }
   .w-left1{
     left:42%!important;
   }
   .w-75{
    width: 100%!important;

  }
}
 
@media screen and (max-width:1100px)and (min-width: 1000px) {
  .montrar{
    display:none!important;
}
  .w-top{
     top:0%!important;
   }
   .w-left2{
     left:3%!important;
   }
   .w-left1{
     left:78%!important;
   }
   .w-75{
    width: 100%!important;

  }
}
@media screen and (max-width:990px){
    #wrapper div {
        width:320px;
        height:220px;
    }
}
@media screen and (max-width:400px){
    .wrapper-div {
        width:320px !important;
        height:220px !important;
    }
    /* .blog{
      flex-wrap:nowrap;
    } */
}


/* CARD TARJETAS*/
.section-cards {
	z-index: 3;
	position: relative;
}

.section-gray {
	background: #e5e5e5;
	padding: 60px 0 30px 0;
}

/*---------------------------------------------------------------------- /
CARDS
----------------------------------------------------------------------- */

.card {
	display: inline-block;
	position: relative;
	width: 100%;
	margin-bottom: 30px;
	border-radius: 6px;
	color: rgba(0, 0, 0, 0.87);
	background: #E0DCDC;
	box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2),
		0 1px 5px 0 rgba(0, 0, 0, 0.12);
}

.card .card-image {
	height: 60%;
	position: relative;
	overflow: hidden;
	margin-left: 15px;
	margin-right: 15px;
	margin-top: -30px;
	border-radius: 6px;
	box-shadow: 0 16px 38px -12px rgba(0, 0, 0, 0.56),
		0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
}

.card .card-image img {
	width: 100%;
	height: 100%;
	border-radius: 6px;
	pointer-events: none;
}

.card .card-image .card-caption {
	position: absolute;
	bottom: 15px;
	left: 15px;
	color: #fff;
	font-size: 1.3em;
	text-shadow: 0 2px 5px rgba(33, 33, 33, 0.5);
}

.card img {
	width: 100%;
	height: auto;
}

.img-raised {
	box-shadow: 0 16px 38px -12px rgba(0, 0, 0, 0.56),
		0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
}

.card .ftr {
	margin-top: 15px;
}

.card .ftr div {
	display: inline-block;
}

.card .ftr .author {
	color: #888;
}

.card .ftr .stats {
	float: right;
	line-height: 30px;
}

.card .ftr .stats {
	position: relative;
	top: 1px;
	font-size: 14px;
}

/* ============ Card Table ============ */

.table {
	margin-bottom: 0px;
}

.card .table {
	padding: 15px 30px;
}

.card .table-primary {
	background: linear-gradient(60deg, #ab47bc, #7b1fa2);
}

.card .table-info {
	background: linear-gradient(60deg, #26c6da, #0097a7);
}

.card .table-success {
	background: linear-gradient(60deg, #66bb6a, #388e3c);
}

.card .table-warning {
	background: linear-gradient(60deg, #ffa726, #f57c00);
}

.card .table-danger {
	background: linear-gradient(60deg, #ef5350, #d32f2f);
}

.card .table-rose {
	background: linear-gradient(60deg, #ec407a, #c2185b);
}

.card [class*="table-"] {
	color: #ffffff;
	border-radius: 6px;
}

.card [class*="table-"] .card-caption a,
.card [class*="table-"] .card-caption,
.card [class*="table-"] .icon i {
	color: #ffffff;
}

.card [class*="table-"] .icon i {
	border-color: rgba(255, 255, 255, 0.25);
}

.card [class*="table-"] .author a,
.card [class*="table-"] .ftr .stats,
.card [class*="table-"] .category,
.card [class*="table-"] .card-description {
	color: rgba(255, 255, 255, 0.8);
}

.card [class*="table-"] .author a:hover,
.card [class*="table-"] .author a:focus,
.card [class*="table-"] .author a:active {
	color: #ffffff;
}

.card [class*="table-"] h1 small,
.card [class*="table-"] h2 small,
.card [class*="table-"] h3 small {
	color: rgba(255, 255, 255, 0.8);
}

/* ============ Card Blog ============ */

.card-blog {
	margin-top: 30px;
}

.card-blog .card-caption {
	margin-top: 5px;
}

.card-blog .card-image + .category {
	margin-top: 20px;
}

.card-raised {
	box-shadow: 0 16px 38px -12px rgba(0, 0, 0, 0.56),
		0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
}

/* ============ Card Background ============ */

.card-background {
	background-position: center;
	background-size: cover;
	text-align: center;
}

.card-background .table {
	position: relative;
	z-index: 2;
	min-height: 280px;
	padding-top: 40px;
	padding-bottom: 40px;
	max-width: 440px;
	margin: 0 auto;
}

.card-background .category,
.card-background .card-description,
.card-background small {
	color: rgba(255, 255, 255, 0.8);
}

.card-background .card-caption {
	color: #ffffff;
	margin-top: 10px;
}

.card-background:after {
	position: absolute;
	z-index: 1;
	width: 100%;
	height: 100%;
	display: block;
	left: 0;
	top: 0;
	table: "";
	background-color: rgba(0, 0, 0, 0.56);
	border-radius: 6px;
}

/* ============ Card Profile ============ */

.card-profile {
	margin-top: 30px;
	text-align: center;
}

/* ============ Card Category ============ */

.category {
	position: relative;
	line-height: 0;
	margin: 15px 0;
}

.card .category-social .fa {
	font-size: 24px;
	position: relative;
	margin-top: -4px;
	top: 2px;
	margin-right: 5px;
}

/* ============ Card Author ============ */

.card .author .avatar {
	width: 36px;
	height: 36px;
	overflow: hidden;
	border-radius: 50%;
	margin-right: 5px;
}

.card .author a {
	color: #333;
	text-decoration: none;
}

.card .author a .ripple-cont {
	display: none;
}

/* ============ Card Product ============ */

.card-product {
	margin-top: 30px;
}

.card-product .btn-simple.btn-just-icon {
	padding: 0;
}

.card-product .ftr {
	margin-top: 5px;
}

.card-product .ftr .stats {
	margin-top: 4px;
	top: 0;
}

.card-product .ftr h4 {
	margin-bottom: 0;
}

.card-product .card-caption,
.card-product .category,
.card-product .card-description {
	text-align: center;
}

.card-description p {
	color: #888;
}

.card-caption,
.card-caption a {
	color: #333;
	text-decoration: none;
}

.card-caption {
	font-weight: 700;
	font-family: "Roboto Slab", "Times New Roman", serif;
}

/* ============ Card Testimonial ============ */

.card-testimonial {
	margin-top: 0;
	margin-bottom: 60px;
	text-align: center;
}

.card-profile .btn-just-icon.btn-raised,
.card-testimonial .btn-just-icon.btn-raised {
	margin-left: 6px;
	margin-right: 6px;
}

.card-profile .card-avatar,
.card-testimonial .card-avatar {
	max-width: 130px;
	max-height: 130px;
	margin: -50px auto 0;
	border-radius: 50%;
	overflow: hidden;
	box-shadow: 0 16px 38px -12px rgba(0, 0, 0, 0.56),
		0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
}

.card-profile.card-plain .card-avatar,
.card-testimonial.card-plain .card-avatar {
	margin-top: 0;
}

.card-testimonial .card-avatar {
	max-width: 100px;
	max-height: 100px;
}

.card-testimonial .card-description {
	font-style: italic;
}

.card-testimonial .card-description + .card-caption {
	margin-top: 30px;
}

.card-testimonial .icon {
	margin-top: 30px;
}

.card-testimonial .icon {
	font-size: 40px;
}

.card-testimonial .ftr {
	margin-top: 0;
}

.card-testimonial .ftr .card-avatar {
	margin-top: 10px;
	margin-bottom: -50px;
}

/* ============ Text Color ============ */

.text-warning {
	color: #ff9800;
}

.text-primary {
	color: #9c27b0;
}

.text-danger {
	color: #f44336;
}

.text-success {
	color: #4caf50;
}

.text-info {
	color: #00bcd4;
}

.text-rose {
	color: #e91e63;
}

.text-gray {
	color: #888;
}

/*---------------------------------------------------------------------- /
BOOTSTRAP COL-MD-12 CLASS
----------------------------------------------------------------------- */

.col-md-12 {
	padding-right: 0px;
	padding-left: 0px;
}

/*---------------------------------------------------------------------- /
FONT AWESOME FA CLASS
----------------------------------------------------------------------- */

.fa {
	display: inline-block;
	font: normal normal normal 14px/1 FontAwesome;
	font-size: inherit;
	text-rendering: auto;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}

/***********Only4Demo*******************/
/**************************************/

/* ======= GENERAL  ======= */

body,
h1,
h2,
h3,
h4,
h5,
h6,
.h1,
.h2,
.h3,
.h4 {
	/* font-family: "Roboto", "Helvetica", "Arial", sans-serif; */
	font-weight: 300;
	line-height: 1.5em;
}

a {
	color: #9c27b0;
	text-decoration: none;
}

a:hover {
	color: #9c27b0;
	text-decoration: underline;
}

p {
	color: #000;
}

header {
	border-bottom: 1px solid #dedede;
	text-align: center;
}

h1,
.h1 {
	font-size: 3.8em;
}

h2,
.h2 {
	font-size: 2em;
	line-height: 1.6em;
	margin: 15px 0 15px;
	font-weight: 700;
	font-family: "Roboto Slab", "Times New Roman", serif;
	text-align: center;
}

h3,
.h3 {
	font-size: 1.825em;
	line-height: 1.4em;
	margin: 30px 0 30px;
	font-weight: 700;
	font-family: "Roboto Slab", "Times New Roman", serif;
	text-align: center;
}

/* h4,
.h4 {
	font-size: 1.3em;
	line-height: 1.5em;
} */

h5,
.h5 {
	font-size: 1.25em;
	line-height: 1.5em;
	margin-bottom: 15px;
}

h6,
.h6 {
	font-size: 0.9em;
	font-weight: 500;
}
/* Older browsers */
.h4 { font-size: 16px; }

/* Modern browsers only need this one */

@media screen and (min-width: 25em){
  .h4 { font-size: calc( 16px + (24 - 16) * (100vw - 400px) / (800 - 400) ); }
}

/* Safari <8 and IE <11 */
@media screen and (min-width: 25em){
  .h4 { font-size: calc( 16px + (24 - 16) * (100vw - 400px) / (800 - 400) ); }
}
@media screen and (min-width: 50em){

.h4 { font-size: calc( 16px + (24 - 16) * (100vw - 400px) / (800 - 400) ); }
}
    </style>

<div class="container">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <link href="https://cdn.jsdelivr.net/lightgallery/1.3.9/css/lightgallery.min.css" rel="stylesheet">
<!-- <iframe   allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"  width="1024" height="480" src="https://www.facebook.com/plugins/video.php?height=206&href=https%3A%2F%2Fwww.facebook.com%2FContelJewelry%2Fvideos%2F190230422821995%2F&show_text=false&width=560&t=0" style="width: 100%"></iframe> -->

<div class= "row section">
<div class= "col-sm-4 articulos" style="background-color:#E0DCDC">
<div class="article" style=" hight:258px; margin-top: 30px; margin-left: 25px;">
<p  style="font-family:LemonMilk; font-size: 24px;">
¿QUIERES TENER TU PROPIO NEGOCIO DE <a style="font-weight:700">JOYERÍA EN ORO LAMINADO?</a>
</p>
<p class="text-center" style="font-family:LemonMilk; line-height: 1; font-size:14px;">INTÉGRATE A NUESTRO EQUIPO DE</P>
<P class="text-center" style="font-family:LemonMilk; color:#921B61; line-height: 1; font-size:14px;"><strong>EMPRENDEDORAS</strong></P>
<P class="text-center" style="font-family:LemonMilk; line-height: 1; font-size:14px;"><strong>¡TE ENSEÑAMOS COMO HACERLO!</strong></p>
<h2 class="lineaAmarilla" style="bottom: 0px;" ></h2>
</div>
<div class="container article" style="background-color:#fff5f630;  margin-top: 10px; margin-bottom: 50px;">
{!! Form::open(['route'=>['Email.store'],'method'=>'POST','files'=>true]) !!}


<div class="form-group" >
  <div style="margin-top: 30px;">
<p class="text-center" style="font-family:LemonMilk; line-height: 1; font-size:14px;">¡QUIERO SER <strong>EMPRENDEDORA!</strong></P>
</div>
                  <input style="font-family:LemonMilk; background-color: #D0656F30;" type="text" class="form-control" name="nombre" id="nombre" placeholder="NOMBRE:">
                </div>
              <div class="form-group">

                <input style="font-family:LemonMilk; background-color: #D0656F30;" type="email" class="form-control" name="email" id="email" placeholder="Email:">
              </div>



              <div class="form-group">

              <input style="font-family:LemonMilk; background-color: #D0656F30; display:none;"  type="tel" class="form-control" id="lada" name="lada"  maxlength="" placeholder="Lada:">

                <input style="font-family:LemonMilk; background-color: #D0656F30;"  type="tel" class="form-control" id="phone" name="phone"  maxlength="10" placeholder="TELÉFONO:">
                <input style="font-family:LemonMilk; background-color: #D0656F30; display:none;" type="text" class="form-control" name="mensaje" id="mensaje" placeholder="mensaje:">
              </div>
              <div class="text-center">
              <!-- <input type="submit" class="btn  btn-radius" style="background-color: #EDC01890; color:black; border-radius: 100px; font-size: 0.7rem;"  name="btnenviar" value="ENVIAR"> -->
              {!! Form::submit('ENVIAR',['class'=>'btn btn-primary suscripcion','style'=>'background-color: #EDC01890; border-color:black; color:black; border-radius: 100px; font-size: 0.7rem;']) !!}
              </div>
      </form>
</div>
  </div>
  <div class= "col-sm-8 aside" style="margin-top: 15px;">
  <div class="publico">
  <iframe id="muteYouTubeVideoPlayer" frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" title="YouTube video player" width="670" height="389" src="https://www.youtube.com/embed/{{$config->seo_urlvideo}}?autoplay=1&amp;controls=1&amp;showinfo=0&amp;modestbranding=1&amp;fs=0&amp;cc_load_policy=0&amp;iv_load_policy=3&amp;autohide=0&amp;enablejsapi=1&amp;origin=http%3A%2F%2Flocalhost%3A8000&amp;widgetid=1&amp;rel=0&amp;loop=1" style="width: 100%;"></iframe>
    </div>
    <div class="publico">
    <div class="container-fluid p-0">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @forelse ($carrusel as $item)
            <li data-target="#carouselExampleCaptions" data-slide-to="{{$item->orden}}" class="@if($loop->index==0) active @endif"></li>
            @empty
            @endforelse
        </ol>
          <div class="carousel-inner">
           @forelse ($carrusel as $item)
            <div class="carousel-item @if($loop->index==0) active @endif">
            <img src="/img/empresa/fondogris.png" alt="First slide" style="padding-left: 0%;  padding-bottom: 0%; width: 100%;">
              <!-- <img src="/img/carrusel/{{$item->urlfoto}}" class="d-block w-100 img-fluid" alt="{{$item->frase}}" style=""> -->
              <div class="row">
                <div class="col-sm-12 col-xs-12 col-md-12 carousel-caption  carousel-caption-slider pb-5" style="left: 0%!important; top: 5%!important; height: 15%;">
                  <h2 style="font-family: 'LemonMilk'; color:black; font-weight:bold; font-size:calc(1vw + 1vh + 0.8vmin);">{{$item->title}}</h2>
                  <h4 style="font-family: 'CaviarDreams'; color:black; font-size:calc(0.8vw + 0.8vh + 0.5vmin);">{{$item->descripcion}}</h4>
                </div>
              </div>
              <div class="carousel-caption carousel-caption-slider ml-auto mr-auto mx-auto" style="left:24%">
              </div>
            </div>
            @empty
            @endforelse
            </div>
            <a style="z-index:30" class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a style="z-index:30" class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
      </div>

</div>


</div>
  </div>
  </div>



</div>
<div class= "container">
<div class="col-sm-10">
  <h2 class=" linea text-black text-right" style= "font-family:LemonMilk; font-size:25px;"><span>Tu eliges el tamaño de tu negocio</span></h2>
</div>
</div>
<div class= "padre container">
  <section class="section">
    <div class= "row ">
        <div class= "col-sm-6 articulos" style="">
          <div class="article" style=" ">
            <img src="/img/carrusel/chicamaletin.png" class="d-block w-100 img-fluid" alt="" style="image-rendering: pixelated;">
          </div>
        </div>
        <div class= "col-sm-6 articulos" style="">
        @forelse ($producto as $item)
          <article class="article" style=" ">
          <div class="card card-product" style="font-family:CaviarDreams">
                            <div class="card-image">
                                <a href="#"> <img class="img" src="/img/producto/{{$item->urlfoto}}"> </a>
                            </div>
                            <div class="table">
                                <!-- <h6 class="category text-rose">Clothing</h6> -->
                                <h4 class="card-caption">
                                  <a style="font-family:CaviarDreams">{{$item->nombre}}</a>
                                </h4>
                                <h5 class="card-caption">
                                  <a style="font-family:CaviarDreams">Invierte</a>
                                </h5>
                                <div class="price text-center">
                                        <h4>${{$item->precio}}</h4>
                                </div>
                                <h5 class="card-caption">
                                  <a style="font-family:CaviarDreams">Gana</a>
                                </h5>
                                <div class="price text-center">
                                        <h4>${{$item->ganancia}}</h4>
                                </div>
                                <!-- <div class="card-description"> Lorem ipsum dolor sit amet, consectetur adipis cingelit. Etiam lacinia elit... </div>
                                <div class="ftr">
                                    <div class="price">
                                        <h4>$1,230</h4> </div>
                                    <div class="stats">
                                        <button type="button" rel="tooltip" title="" class="btn btn-just-icon btn-simple btn-warning" data-original-title="Saved to Wishlist"> <i class="fa fa-shopping-cart"></i> </button>
                                    </div>
                                </div> -->
                            </div>
                        </div>
          </article>
          @empty
            @endforelse

        </div>
      </div>
   </section>
</div>
</div>


    <div class="container">



      <div class="row  text-center align-items-center bg-white">
        <div class="col-sm-6 " style="font-size:25px;" >
          <p style= "font-family:LemonMilk; color:#F07F39; line-height: 2em;" class="text-center" ><strong>función del cofre</strong><br></p>
          <p style= "font-family:LemonMilk; line-height: 3.5em;" class="text-center "><strong style="color:#E8508A;">¡organiza!</strong><strong style="color:#D0656F;"> ¡Transporta!</strong><strong style="color:#921B61;"> ¡Vende!</strong></p>
          <p style= "font-family:CaviarDreams_Bold" class="text-left "><strong>Creamos cofres en donde podrás
    exhibir, almacenar y vender joyería en
    oro laminado de alta calidad de
    manera organizada y sencilla.</strong></p>

        </div>
        <div id="wrapper" class="col-sm-6 pt-5 pb-5">

                <img src="/img/empresa/cofre.png" alt="" class="img-fluid rounded-left">

        </div>
        </div>
  
    </div>


             


      <div class="container">

          <div class=" row blog col-sm-12 mt-5 mb-5 justify-content-center text-center align-items-center bg-white" style="">
            <div class="col-sm-6" >
            </div>
            <div class="col-sm-6" >
                <h2 class=" linea text-black text-right" style="font-family:LemonMilk;"><span>Testimonios</span></h2>
            </div>

        @forelse ($testimonios as $r)

            <div id="" class="col-sm-6">
              <div id=""  class="col-sm-12" style=" width: auto;";>
                <img src="/img/Testimonios/{{$r->urlfoto}}" alt="{{$r->nombre}}" class="img-fluid rounded-left">
              </div>
            </div>
            <div class="col-sm-6" style="font-family:CaviarDreams_Italic" >
              <div style="font-size:17px; font-family:CaviarDreams_Italic;">
                <a style="font-family:CaviarDreams_Italic">{!!$r->descripcion!!} </a>
              </div>
                    <p class="text-black text-left" style="font-family:CaviarDreams_bold" text-align:left;> <br><strong>{{$r->nombre}}</strong></p>
                    <p class="text-black text-left" style="font-family:CaviarDreams">{{$r->title}} <br></p>
            </div>
            @empty
            @endforelse
          </div>
      </div>
      <div class="container">
      <div class="col-sm-10">
  <h2 class=" linea text-black text-right" style="font-family:LemonMilk;"><span>Lo más reciente de nuestro blog</span></h2>
  </div>
  </div>
  <div class="col-sm-2">
  </div>
  <div id="carouselExampleIndicators" class="carousel slide ocultar" data-ride="carousel">
  <ol class="carousel-indicators">
    
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <!-- <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
  </ol>
  
      
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="/img/post/lienzo.png" class="d-block w-75 img-fluid" alt="{{$item->frase}}" style="image-rendering: pixelated;">   
    <div class="carousel-caption carousel-caption-slider ml-auto mr-auto mx-auto" style="text-align:left; left:0%; color:black">
            <div class= "padre container">
              <section class="section">
                  <div class=" articulos" style="background:white;">
                    <div class="row w-top">
                    @for($a = 0; $a < 2; $a++ )
                                  @if($a < count($posts))
                                   @if($a == 1)
                                   <div class="col-sm-12 w-left1 w-top" style="left:80%">
                                   @else
                                   <div class="col-sm-12 w-left2 w-top" style="left:20%">

                                   @endif
                      
                       <div class=" article" style="text-align:left;">
                          <div class="card" style=" line-height: 1.2em; box-shadow: 0 0px; max-width: 540px; background: white; border:0px;">
                            <div class="row no-gutters">
                          
                              <div class="col-md-3" style="background: white; left: 3%; top: 38px; bottom: 0px; height: 137px;">
                                <div class="card-body" style="padding: 0.25rem;">                                                            
                                  <p class="card-text" style="font-family:CaviarDreams_Bold; text-align:left; padding: 0.25rem;"><small class="card-text" style="text-align:left;">{{$posts[$a]['nombre']}}</small></p>
                                  <p>
                                  <a style="font-family:CaviarDreams; padding-top: 0px; padding-bottom: 0px;" href="/blog/{{$posts[$a]['slug']}}" class="btn btn-outline-dark">Leer más</a>
                                  </p>                            
                                </div>
                              </div>
                            <div class="col-md-4" style="bottom: 0px; top: 25px; left: 3%;  z-index: 1;">
                                <!-- <img src="/img/post/cambia tu vida.jpg" > -->
                                <img src="/img/post/{{$posts[$a]['urlfoto']}}" >
                            </div>
                            <div class="col-md-5" style=" background: #E5E5E5; left: 0%; height: 157px;">
                                <div class="card-body">                                
                                <p class="card-text" style="font-family:CaviarDreams_Italic">{{$posts[$a]['description']}} </p>
                                  <p class="card-text"><small class="text-muted"></small></p>
                                </div>
                              </div>
                            @endif
                            @endfor
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
  </div>
    </div>
    <div class="carousel-item">
    <img src="/img/post/lienzo.png" class="d-block w-75 img-fluid" alt="{{$item->frase}}" style="image-rendering: pixelated;">
    <div class="carousel-caption carousel-caption-slider ml-auto mr-auto mx-auto" style="text-align:center; left:0%; color:black">
    <div class= "padre container">
              <section class="section">
                  <div class=" articulos" style="background:white;">
                    <div class="row">
                    @for($a = 2; $a < 4; $a++ )
                                  @if($a < count($posts))
                                   @if($a == 3)
                                   <div class="col-sm-12 w-left1 w-top" style="left:80%">
                                   @else
                                   <div class="col-sm-12 w-left2 w-top" style="left:20%">

                                   @endif
                      
                       <div class=" article" style="text-align:left;">
                          <div class="card" style=" line-height: 1.2em; box-shadow: 0 0px; max-width: 540px; background: white; border:0px;">
                            <div class="row no-gutters">
                          
                              <div class="col-md-3" style="background: white; left: 3%; top: 38px; bottom: 0px; height: 137px;">
                                <div class="card-body"  style="padding: 0.25rem;">                                                            
                                  <p class="card-text" style="font-family:CaviarDreams_Bold; padding: 0.25rem;"><small class="card-text" style="text-align:left;">{{$posts[$a]['nombre']}}</small></p>
                                  <p>
                                  <a style="font-family:CaviarDreams; padding-top: 0px; padding-bottom: 0px;" href="/blog/{{$posts[$a]['slug']}}" class="btn btn-outline-dark">Leer más</a>
                                  </p>                            
                                </div>
                              </div>
                            <div class="col-md-4" style="bottom: 0px; top: 25px; left: 3%;  z-index: 1;">
                                <!-- <img src="/img/post/cambia tu vida.jpg" > -->
                                <img src="/img/post/{{$posts[$a]['urlfoto']}}" >
                            </div>
                            <div class="col-md-5" style=" background: #E5E5E5; left: 0%; height: 157px;">
                                <div class="card-body">                                
                                  <p class="card-text" style="font-family:CaviarDreams_Italic">{{$posts[$a]['description']}} </p>
                                  <p class="card-text"><small class="text-muted"></small></p>
                                </div>
                              </div>
                            @endif
                            @endfor
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
      </div>
    </div>
    <!-- <div class="carousel-item">
     <img src="/img/post/lienzo.png" class="d-block w-75 img-fluid" alt="{{$item->frase}}" style="image-rendering: pixelated;">
      <div class="carousel-caption carousel-caption-slider ml-auto mr-auto mx-auto" style="text-align:center; left:0%; color:black">
        @for($a = 4; $a < 6; $a++ )
        @if($a < count($posts))
        {{$posts[$a]['nombre']}}
        @endif
        @endfor
      </div>
    </div> -->
  </div>
  <a style="z-index: 50;" class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a style="z-index: 50;" class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>





<div class= "padre container montrar" >
              <section class="section">
                  <div class=" articulos" style="background:white;">
                    <div class="row">
                      <div class="col-sm-12">
                       <div class=" article" style="">
                          <div class="card" style=" line-height: 1.2em; box-shadow: 0 0px; max-width: 540px; background: white; border:0px;">
                            <div class="row no-gutters">
                              <div class="col-md-3" style="background: white; left: 3%; top: 38px; bottom: 0px; height: 137px;">
                                <div class="card-body">
                                  <!-- <h5 class="card-title">Card title</h5> -->
                                  <!-- <p class="card-text">It's a broader card with text below as a natural lead-in to extra content. This content is a little longer.</p> -->
                                  <p class="card-text" style="font-family:CaviarDreams_Bold"><small class="card-text">{{$posts[0]['nombre']}}</small></p>
                                  <p>
                                  <a style="font-family:CaviarDreams; padding-top: 0px; padding-bottom: 0px;" href="/blog/{{$posts[0]['slug']}}" class="btn btn-outline-dark">Leer más</a>
                                  </p>
                                </div>
                              </div>
                              <div class="col-md-4" style="bottom: 0px; top: 25px; left: 3%;  z-index: 1;">
                                <img src="/img/post/{{$posts[0]['urlfoto']}}" >
                                  <!-- <svg class="bd-placeholder-img" width="100%" height="250" xmlns="/img/post/cambia tu vida.jpg" aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" role="img"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image</text></svg> -->

                              </div>
                              <div class="col-md-5" style=" background: #E5E5E5; left: 0%; height: 157px;">
                                <div class="card-body">
                                  <!-- <h5 class="card-title">Card title</h5> -->
                                  <p class="card-text" style="font-family:CaviarDreams_Italic">{{$posts[0]['description']}}</p>
                                  <p class="card-text"><small class="text-muted"></small></p>
                                </div>
                              </div>
                            </div>
                          </div>
                       </div>
                      </div>


                      <div class="col-sm-12" style="text-align:right;">
                        <div class=" article" style="">
                            <div class="card" style=" line-height: 1.2em; box-shadow: 0 0px; max-width: 540px; background: white; border:0px;">
                              <div class="row no-gutters">
                                <div class="col-md-3" style="background: white; left: 3%; top: 38px; bottom: 0px; height: 137px;">
                                  <div class="card-body">
                                    <!-- <h5 class="card-title">Card title</h5> -->
                                    <!-- <p class="card-text">It's a broader card with text below as a natural lead-in to extra content. This content is a little longer.</p> -->
                                    <p class="card-text" style="font-family:CaviarDreams_Bold"><small class="card-text">Toma el valor de cambiar tu vida: invierte en ti.</small></p>
                                    <p>
                                    <a style="font-family:CaviarDreams; padding-top: 0px; padding-bottom: 0px;" href="/blog/{{$posts[1]['slug']}}" class="btn btn-outline-dark">Leer más</a>
                                    </p>
                                  </div>
                                </div>
                                <div class="col-md-4" style="bottom: 0px; top: 25px; left: 3%;  z-index: 1;">
                                  <img src="/img/post/{{$posts[1]['urlfoto']}}" >
                                    <!-- <svg class="bd-placeholder-img" width="100%" height="250" xmlns="/img/post/cambia tu vida.jpg" aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" role="img"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image</text></svg> -->

                                </div>
                                <div class="col-md-5" style=" background: #E5E5E5; left: 0%; height: 157px;">
                                  <div class="card-body">
                                    <!-- <h5 class="card-title">Card title</h5> -->
                                    <p class="card-text" style="font-family:CaviarDreams_Italic">{{$posts[1]['description']}}</p>
                                    <p class="card-text"><small class="text-muted"></small></p>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
               </section>
             </div>
         
            </div>





    












<!-- <div class="container">
  @forelse ($posts as $r)
  <div class="col-sm-10">
  <h2 class=" linea text-dark text-right" style="font-family:LemonMilk;"><span>Lo más reciente de nuestro blog</span></h2>

  </div>
  <div class="col-sm-2">
  </div>
  <div class="row  mt-5 mb-5 justify-content-center text-center align-items-center bg-white">
    <div class="col-sm-4 " style="left:10%" >
     <p class="text-black display-4" ><strong>{{$r->nombre}}</strong><br></p>
      <a href="/blog/{{$r->slug}}" class="btn btn-outline-dark">Leer más</a>
    </div>
    <div id="wrapper" class="col-sm-8 pt-5 pb-5">
     <div id="div2"  class="col-sm-12" style="background-color:black; left:25%";>

     </div>
    <div id="div1" class="col-sm-12" style="background-color:revert;" >
     <div class="col-sm-12 wrapper-div">
        <img src="/img/post/{{$r->urlfoto}}" alt="{{$r->nombre}}" class="img-fluid rounded-left">
     </div>

    </div>
    </div>
    </div>
    @empty

         @endforelse
</div> -->

<!-- <div class="container" style="margin-top:5%">

        <div class="row mb-4 mx-4" >
          <div class="col-sm-6  rounded-right bg-white row align-items-center">
                <div class="col-sm-12 card bg-light" style="text-align: left; height: 272px;">
                    <h3 class="text-black">Belé</h3>
                    <p>{{$config->frase_1}}</p>
                </div>
           </div>

           <div class="col-sm-6  rounded-right bg-white row align-items-center">
                <div class="col-sm-12 card  bg-light" style="text-align: right; height: 272px;">
                    <h3 class="text-black">Contel Jewelry</h3>
                    <p>{{$config->frase_2}}</p>

                </div>
            </div>
        </div>


</div> -->
<!--
<div class= container>
  <div class="row mt-5 mb-5 justify-content-center text-center align-items-center bg-success">
        <div class="col-sm-12 bg-white  pt-5 pb-5">
            <div class="row">
            <div class="col-sm-4">
                <h2 class=" linea text-dark text-right"><span>Cofres</span></h2>
            </div>
            <div class="col-sm-8">
            </div>
            @forelse ($producto as $item)
                <div class="col-sm-3">
                    <div class="card" style="background-color:#d8d3d3";>
                    <div class="container">
                    <a href="/bele/{{$item->categoria->slug}}/{{$item->slug}}">
                            <img src="/img/producto/{{$item->urlfoto}}" class="card-img-top" alt="{{$item->nombre}}">
                        </a>
                    </div>

                    </div>
                    <div class="card-footer"  style="background-color:#d8d3d3">
                        <p style="text-align: left;">{{$item->nombre}}</p>
                        <p style="text-align: left;">{{$item->porcentaje}}% ganancia</p>
                        <p style="text-align: left;">Precio ${{$item->precio}}</p>
                        <p style="text-align: left;">Ganancia ${{$item->ganancia}} </p>

                    </div>
                </div>
            @empty
            @endforelse
            </div>
        </div>

    </div>
</div> -->



<!-- artesanias -->

<!-- <div class="container">
  @forelse ($posts as $r)
  <div class="col-sm-8">
  <h2 class=" linea text-dark text-right"><span>Lo más reciente de nuestro blog</span></h2>

  </div>
  <div class="col-sm-4">
  </div>
  <div class="row  mt-5 mb-5 justify-content-center text-center align-items-center bg-white">
    <div class="col-sm-4 " style="left:10%" >
     <p class="text-black display-4" ><strong>{{$r->nombre}}</strong><br></p>
      <a href="/blog/{{$r->slug}}" class="btn btn-outline-dark">Leer más</a>
    </div>
    <div id="wrapper" class="col-sm-8 pt-5 pb-5">
     <div id="div2"  class="col-sm-12" style="background-color:black; left:25%";>

     </div>
    <div id="div1" class="col-sm-12" style="background-color:revert;" >
     <div class="col-sm-12 wrapper-div">
        <img src="/img/post/{{$r->urlfoto}}" alt="{{$r->nombre}}" class="img-fluid rounded-left">
     </div>

    </div>
    </div>
    </div>
    @empty

         @endforelse
</div> -->

<!-- Galeria /-->

<!-- <div class= container>
    <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist" style="justify-content: center;">
        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Pulseras</a>
        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Dijes</a>
        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Cadenas</a>
        <a class="nav-item nav-link" id="nav-contact2-tab" data-toggle="tab" href="#nav-contact2" role="tab" aria-controls="nav-contact2" aria-selected="false">Aretes</a>
        <a class="nav-item nav-link" id="nav-anillo-tab" data-toggle="tab" href="#nav-anillo" role="tab" aria-controls="nav-anillo" aria-selected="false">Anillos</a>
      </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <div class="demo-gallery">
            <ul id="lightgallery1" role="tabpanel" class="tab-pane fade show active list-unstyled row">
            @forelse ($pulceras as $item)
            <li style="flex: 0 0 33.333333%;" class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="/img/producto/{{$item->urlfoto}}" data-src="/img/producto/{{$item->urlfoto}}" data-sub-html="<h4>{{$item->title}}</h4><p>{{$item->nombre}}</p>">
                <a href="">
                    <img class="img-responsive" src="/img/producto/{{$item->urlfoto}}">
                </a>
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
        </li>
        @empty
            @endforelse
        </ul>
    </div>
  </div>
</div>

</div> -->




<!-- <div class="container">

    <div class=" row blog col-sm-12 mt-5 mb-5 justify-content-center text-center align-items-center bg-white" style="border: ridge;">
        @forelse ($testimonios as $r)
            <div id="wrapper" class="col-sm-8 pt-5 pb-5">
                <div id="div2"  class="col-sm-12" style="background-color:black";>

                </div>
                <div id="div1" class="col-sm-12" style="background-color:revert;" >
                            <a href="/bele/{{$item->categoria->slug}}/{{$item->slug}}">
                            <img src="/img/Testimonios/{{$r->urlfoto}}" alt="{{$r->nombre}}" class="img-fluid rounded-left">


                                </a>
                </div>

            </div>
            <div class="col-sm-4" >
              <h2 class=" linea text-dark text-center"><span>Testimonios</span></h2>

              {!!$r->descripcion!!}

              <p class="text-black"> <br>{{$r->nombre}}</p>
              <p class="font-anton text-black">{{$r->title}} <br></p>
              @empty
                  @endforelse
            </div>
    </div>
</div> -->
<!-- <div class="container">

    <section class="">

      <section class="">
        <div class="row">
        @forelse ($carrusel as $item)
        <div style="flex: 0 0 50%;" class="col-lg-3 col-md-12 mb-3 mb-lg-0">
            <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
              <img src="/img/carrusel/{{$item->urlfoto}}" class="w-100"/>
              <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal1">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
              </a>
            </div>
          </div>


        @empty
        @endforelse



        </div>
    </section>

    <section class="">

        <div
          class="modal fade"
          id="exampleModal1"
          tabindex="-1"
          aria-labelledby="exampleModal1Label"
          aria-hidden="true"
        >
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="ratio ratio-16x9">

              </div>

              <div class="text-center py-3">
                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                  Close
                </button>
              </div>
            </div>
          </div>
        </div>

        <div
          class="modal fade"
          id="exampleModal2"
          tabindex="-1"
          aria-labelledby="exampleModal2Label"
          aria-hidden="true"
        >
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="ratio ratio-16x9">

              </div>

              <div class="text-center py-3">
                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                  Close
                </button>
              </div>
            </div>
          </div>
        </div>

        <div
          class="modal fade"
          id="exampleModal3"
          tabindex="-1"
          aria-labelledby="exampleModal3Label"
          aria-hidden="true"
        >
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="ratio ratio-16x9">

              </div>

              <div class="text-center py-3">
                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                  Close
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>

    </section>

</div> -->

<!-- artesanias /-->

<!-- publicaciones-->

<!-- publicaciones/-->
<!-- <script src="/js/galeria.js"></script>
<script>

            $(document).ready(function(){

                $('#lightgallery1').lightGallery();
                $('#lightgallery2').lightGallery();
                $('#lightgallery3').lightGallery();
                $('#lightgallery4').lightGallery();
                $('#lightgallery5').lightGallery();

            });


        </script> -->
@endsection
