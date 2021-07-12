@extends('layouts.appfront')

@section('content')
<style>
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
    flex-flow:row nowrap;
  }
  .article{
    flex:1 1 40%;

  }
  .aside{
    flex:1 1 auto;
  }
  .publico{

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
    font-size: calc(0.5em + 0.5vw);

  background: #eeabb0;
  padding: 0 15px;
}

 ul li.modelonegocio {
  background: url('/img/empresa/checkmarkmedium.png') no-repeat left center;
  padding: 20px 10px 20px 50px;
  list-style: none;
  margin: 0;
  vertical-align: middle;
}

.article {
    padding: 1em;

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

h4,
.h4 {
	font-size: 1.3em;
	line-height: 1.5em;
}

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

@media screen and (max-width:767px){
  .articulos{
flex-flow: row wrap;
  }
}
</style>
      
<div class="container">
    <!--INICIO NOSOTROS -->
      <div class=" carousel-inner ">        
            <img src="/img/empresa/TITULO.png" class="withmin" alt="footer" style="width: 100%;">
              <div class=" carousel-caption ml-auto mr-auto mx-auto container row" style=" padding-top:4%; top:1px;">
                <div class="text-center col-sm-12">
                    <h2 id="Nosotros" class=" linea text-dark text-right" style= "font-family:LemonMilk;  left: -87%;"><span style="">NOSOTROS</span></h2>
                    <h6  class=" text-dark text-center"  style= "font-family:LemonMilk;  left: -81%; font-size:12px;  padding-top:0%;">"vive la vida de tus sueños"</h6>
                </div>
              </div>
       </div>
       <div class="row">
          
               <div class="col-sm-6" style="left:4%;  margin-bottom: 4%; margin-top: 4%; ">
                        <p style="font-family:CaviarDreams_Bold">Contel Jewelry</p>
                        <p style="font-family:CaviarDreams">  Distribuidor autorizado de piezas de joyería en oro
                            laminado, para los estados de: Quintana roo, yucatán, campeche, san luis potosí y nuevo león.
                            inspirados en el movimiento generado por Belé, buscan empoderar a las mujeres de estas 
                            localidades, apoyandolas en el levantamiento de su propio negocio y capacitación constante para que logren el  éxito.
                        </p>
                                   
                        <p  style="font-family:CaviarDreams_Bold">Belé</p>
                        <p  style="font-family:CaviarDreams">  es una empresa mexicana con más de 40 años
                            de experiencia en el mercado de la joyería. sus
                            dueños Han vivido en primera persona la
                            búsqueda de alternativas, para salir con éxito
                            de los momentos difíciles y han tenido que
                            renovarse. Por lo que cuentan con toda la
                            experiencia, para ayudar a otros a que
                            conviertan su sueño de obtener independencia
                            económica, siendo los dueños de sus propios
                            negocios de joyería en oro laminado.
                        </p>
                  
               </div>
               <div class="col-sm-6">
                   <div class="col-sm-6" style="left:30%"> 
                   <h2 style="color:#BE2384; text-align: center; font-size: 20px; margin-top:80%; font-family:LemonMilk;"> “disfruta el proceso de volverte independiente”</2>
                    </div>
               </div>
          


       </div>
       <!--fIN NOSOTROS -->
        <!--INICIO MODELO DE NEGOCIO -->
        <div class=" carousel-inner ">        
            <img src="/img/empresa/TITULO.png" class="withmin" alt="footer" style="width: 100%;">
              <div class=" carousel-caption ml-auto mr-auto mx-auto container row" style=" padding-top:4%; top:1px;">
                <div class="text-center col-sm-12">
                    <h2 id="ModeloNegocio" class=" linea text-dark text-right" style= "font-family:LemonMilk;  left: -74%;"><span style="">modelo de negocio</span></h2>
                    <h6  class=" text-dark text-center"  style= "font-family:LemonMilk;  left: -81%; font-size:12px;  padding-top:0%;">"porque una mujer siempre puede"</h6>
                </div>
              </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <img src="/img/empresa/felizmaletin.png" class="withmin" alt="footer" style="width: 100%;">    
            </div>
            <div class="col-sm-6">
            <div>
                <h2 style="color:#BE2384; text-align: center; font-size: 20px; margin-top:20%; font-family:LemonMilk;"> “Conoce la forma de emprender con poca inversión y a bajo riesgo”</h2>
            </div>
            <div>
                <img src="/img/empresa/ciclo.png" class="withmin" alt="footer" style="width: 80%; margin-top:25%">    
            </div>     
            </div>
            <div class="col-sm-12 text-center container " style="margin-top: 4%;">
                <div class="container">
                <div class="container" style="padding-left: 12%; padding-right: 12%;">
                    <p  style="font-family:CaviarDreams">
                    Buscamos generar oportunidades de reinvención para que las mujeres se conviertan en <stronge style="font-family:CaviarDreams_Bold">las
                    dueñas</stronge> de sus <stronge style="font-family:CaviarDreams_Bold">propios negocios</stronge> de joyería en oro laminado. Nuestro plan es mostrarles 
                    que hay luz al final del túnel y que pueden <stronge style="font-family:CaviarDreams_Bold">mejorar su economía familiar</stronge> con nosotros: 
                    tenemos diversas membresías de <stronge style="font-family:CaviarDreams_Bold">cofres de joyería</stronge> en los que pueden invertir, las 
                    <stronge style="font-family:CaviarDreams_Bold">capacitamos</stronge> para que sepan las mejores técnicas para vender y les damos herramientas
                    tecnológicas para llevar el control de sus negocios. contamos con el respaldo de <stronge style="font-family:CaviarDreams_Bold">una fábrica 
                    aliada</stronge> y <stronge style="font-family:CaviarDreams_Bold">productos con la mejor calidad</stronge>, durabilidad y garantía del mercado.
                    </p> 
                    </div>            
                </div>
           </div>
            <div class="col-sm-12">
            <h2 style="text-align: center; font-size: 20px; margin-top:10%; font-family:LemonMilk;">tendrás LA CERTEZA DE:</h2>
                <ul style="font-family:CaviarDreams" class="modelonegocio">
                    <li class="modelonegocio" style="font-family:CaviarDreams">Cumplir tu sueño de tener tu propio negocio y materializar tus sueños </li>    
                    <li class="modelonegocio" style="font-family:CaviarDreams">Gestionar tus horarios, y ser dueña de tu tiempo</li>    
                    <li class="modelonegocio" style="font-family:CaviarDreams">Tener acompañamiento de una empresa sólida, que te brindará todo Lo que 
                        necesitas para crear y gestionar tu negocio</li>        
                    <li class="modelonegocio" style="font-family:CaviarDreams">Inventario en todo momento, con la confianza de contar con mercancía para 
                        vender</li>
                    <li class="modelonegocio" style="font-family:CaviarDreams">Contar con una garantía de por vida para todas las piezas</li>
                    <li class="modelonegocio" style="font-family:CaviarDreams">Ayudar a otras mujeres a lucir siempre bellas </li>
                </ul>
            </div>


        </div>
        <!--FIN MODELO DE NEGOCIO -->
         <!--INICIO COFRES -->
         <div class=" carousel-inner ">        
            <img src="/img/empresa/TITULO.png" class="withmin" alt="footer" style="width: 100%;">
              <div class=" carousel-caption ml-auto mr-auto mx-auto container row" style=" padding-top:4%; top:1px;">
                <div class="text-center col-sm-12">
                    <h2 id="Cofres" class=" linea text-dark text-right" style= "font-family:LemonMilk;  left: -92%;"><span style="">cofres</span></h2>
                    <h6  class=" text-dark text-center"  style= "font-family:LemonMilk;  left: -81%; font-size:12px;  padding-top:0%;">"invierte en ti misma"</h6>
                </div>
              </div>
        </div>
        <div class="col-sm-12 text-center" style="padding-left: 35%; padding-right: 35%; font-size: 1.2em; z-index: 1;     padding-top: 3%;">
        <p  style="font-family:CaviarDreams_Bold; color:#F07F39"> “El cofre es un display de mercancía portátil, en donde puedes llevar a donde quieras tu mercancía de forma organizada y lista para emprender en el mundo de las ventas”</p>
        </div>
        <div class="row" style="margin-top: -10%;">
        <div class="col-sm-6" style="right: 10%; padding-top: 10%;">
                <img src="/img/empresa/cofre.png" class="withmin" alt="footer" style="width: 100%;">    
        </div>
        <div class="col-sm-6"  style="left: 10%;">
        <img src="/img/empresa/mujer emprendedora.png" class="withmin" alt="footer" style="width: 100%;">    
        </div>
        </div>
        <div class="col-sm-12 text-center" style="padding-left: 35%; padding-right: 35%; font-size: 1.2em; z-index: 1;     padding-top: 3%;">
          <p style="font-family:LemonMilk; color:black"> “tu elijes el tamaño de tu negocio”</p>
        </div>

<div class= "padre container">
  <section class="section">
    <div class= "row ">
    
        <div class= "col-sm-12 articulos" style="">
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



        <!--FIN COFRES -->
</div>
    


@endsection