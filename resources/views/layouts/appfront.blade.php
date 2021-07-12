<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
{!! SEO::generate() !!}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>@yield('title', $config->seo_title)</title>
    <meta name="description" content="@yield('description', $config->seo_description)">
    <meta property="og:type" content="website" />
    <meta property="og:description" content="@yield('description',  $config->seo_description)"/>
    <meta property="og:url" content="@yield('url','https://artesanias.com')"/>   
    <meta property="og:site_name" content="artesanias.com" />
    <meta property="og:image" content="@yield('image','https://artesanias.com/img/configuracion/'.$config->seo_urlfoto)" />
    <link rel="canonical" href="@yield('url','https://artesanias.com')"/> -->
    <link rel="shortcut icon" href="/img/configuracion/{{$config->urlfavicon}}" type="image/png" />

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- <link href="http://fonts.cdnfonts.com/css/lemonmilk" rel="stylesheet"> -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
    <style>
    /* @import url('http://fonts.cdnfonts.com/css/lemonmilk'); */
       
       @font-face{
        font-family:LemonMilk;
        src:url(/fuentes/FontsFree-Net-LemonMilk.ttf);
       }
       @font-face{
        font-family:CaviarDreams;
        src:url(/fuentes/CaviarDreams.ttf);
       }
       @font-face{
        font-family:CaviarDreams_Bold;
        src:url(/fuentes/CaviarDreams_Bold.ttf);
       }
       @font-face{
        font-family:CaviarDreams_Italic;
        src:url(/fuentes/CaviarDreams_Italic.ttf);
       }
        .menutitle{
            font-family: 'Lemon/Milk', sans-serif;
            font-family: 'Lemon/Milk light', sans-serif;

        }
        h1,h2,h3,.nav-link,.font-anton{
            font-family: 'LemonMilk';
        }
        p,ul,li{font-family: 'CaviarDreams';}
        .navbar-light .navbar-nav .nav-link {color:black !important}
        .bg-danger{ background:white !important}
        .text-danger{ color:#FF4000 !important}
        .text-warning{ color:#FFC926 !important}
        .bg-warning{ background:#FFC926 !important}
        *{padding:0;margin:0;}

body{
	font-family: 'Muli', sans-serif;
	font-size:18px;
	background-color:#CCC;
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
.float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:55%;
	
	background-color:revert;
	color:#FFF;
	border-radius:50px;
	text-align:center;
    z-index: 1000;
	/* box-shadow: 2px 2px 3px #999; */
}

.my-float{
	margin-top:22px;
}

.floating-buttons{
    z-index:9999;
    position:fixed;
    top:250px;left:0
}

@media screen and (max-width:767px){
  .logo1{
    width:100px!important;
  }
  .logo2{
    width:100px!important;
    margin-top:0px!important;
  }
  .navbar-nav{
    flex-direction: row;
  }
  .menuli{
    margin-right: 12px;
    margin-left: 12px;
  }
  .dropdown-menu {
    font-size: 0.5rem;
  }

}
.floating-buttons .floating-button{
    display:inline-block;
    padding:14px 18px;
    font-size:2rem;
    text-align:center;
    border-radius:0 50% 50% 0;
    color:#fff;
    transition:.2s all
    }
    .floating-buttons .floating-button:hover
    {color:#fff;box-shadow:2px 2px 5px 1px rgba(0,0,0,.25)}
    .floating-buttons .floating-button.whatsapp
    {background:#25d366}
    .appWhatsapp{
        position:fixed;
        left:2px;
        bottom:350px;
        width:55px;
        z-index: 1000;
    }
    .appWhatsapp img{
        width:100%;
        height:auto;
    }
    </style>
</head>
<body class="bg-danger">
<a class="appWhatsapp" target="_blanck" href="https://api.whatsapp.com/send?phone=529981535274&text=Hola!&nbsp;me&nbsp;pueden&nbsp;apoyar?">
<img style= ""  src="/img/Logos/whatsappverde.png" alt="whatsapp" >
</a>


<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
window.fbAsyncInit = function() {
  FB.init({
    xfbml            : true,
    version          : 'v11.0'
  });
};

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your Chat Plugin code -->
<div class="fb-customerchat"
  attribution="install_email"
  attribution_version="page_inbox"
  page_id="105048951596663">
</div>


<!-- <div class="fb-customerchat" attribution=setup_tool page_id="781167248634441" theme_color="#0084ff" logged_in_greeting="hola! cómo podemos ayudarte?" logged_out_greeting="hola! cómo podemos ayudarte?">
</div> -->
<!-- <a href="https:m.me/ContelJewelry" class="float">
<i class="my-float"><img style= "width: 70%; margin-top:125%; "  src="/img/Logos/mensseger.png" ></i>
</a> -->
</div>


        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                <img class="logo1" src="/img/configuracion/{{$config->urllogo}}" alt="Logo jewelry" style="image-rendering: pixelated; hight:176px;">
                </a>
                <a class="navbar-brand" href="{{ url('/') }}">
                <img class="logo2" src="/img/configuracion/LOGO-BELÉ-CUADRADO.png" alt="Logo jewelry" style="image-rendering: pixelated; width: 197px; hight:197px; margin-top: 77px;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ml-auto menutitle" style="border-bottom: 2px solid #edc018;">
                        <li class="nav-item menuli">
                            <a style="font-family:LemonMilk; font-size: calc(0.6vw + 0.6vh + 0.4vmin);" class="nav-link" href="/" title="Portada">INICIO</a>
                        </li>
                        <li class="nav-item dropdown menuli">
                            <a style="font-family:LemonMilk; font-size: calc(0.6vw + 0.6vh + 0.4vmin);" class="nav-link dropdown-toggle" href="/unete" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ÚNETE
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a href="/unete" style="font-family:LemonMilk;" class="dropdown-item" >Nosotros</a>   
                            <a href="#ModeloNegocio" style="font-family:LemonMilk;" class="dropdown-item"  >Modelo de negocio</a>  
                            <a href="#Cofres" style="font-family:LemonMilk;" class="dropdown-item"  >Cofres</a>  
                            
                            </div>
                        </li>
                   
                        <li class="nav-item menuli">
                            <a style="font-family:LemonMilk; font-size: calc(0.6vw + 0.6vh + 0.4vmin);" class="nav-link" href="/galeria" title="Últimas publicaciones">GALERÍA</a>
                        </li>
                        <li class="nav-item menuli">
                            <a style="font-family:LemonMilk; font-size: calc(0.6vw + 0.6vh + 0.4vmin);" class="nav-link" href="/blog" title="Últimas publicaciones">BLOG</a>
                        </li>
                        <li class="nav-item menuli">
                            <a style="font-family:LemonMilk; font-size: calc(0.6vw + 0.6vh + 0.4vmin);" class="nav-link" href="/eventos" title="Últimas publicaciones">EVENTOS</a>
                        </li>
                        <li class="nav-item menuli">
                            <a style="font-family:LemonMilk; font-size: calc(0.6vw + 0.6vh + 0.4vmin);" class="nav-link" href="/contacto" title="Datos contacto">CONTACTO</a>
                        </li>
                    </ul>
                    
                   

                   
                </div>
               
            </div>
            
        </nav>
        

        @yield('content')
        <div id="fb-root"></div>
<script>

</script>

        <footer>
      
                <div style="margin-bottom: 5%; margin-top:2%; text-align: left; background:#E0DCDC;" class="container" > 
                <div class="row">
                <div class= "container col-lg-4 col-md-12" style="text-align: center;">
                <a class="navbar-brand" href="{{ url('/') }}">
                <img src="/img/configuracion/{{$config->urllogo}}" alt="Logo jewelry" style="width: 78%;">
                </a>  
                </div>
                <div class= "col-lg-8"  style="margin-top: 6%;">
       
                <h3 style="font-weight: bold; font-family:CaviarDreams_Bold; text-align:left" >Contacto</h3>
                </div>
                </div>

                <div class="row">
                
                      <div class="col-lg-3 col-md-12">
                                       
                        <ul style="text-align: left;">
                            <!-- <p style="font-weight: bold;" >Dirección</p>
                            <p>{{$config->direccion}}</p> -->
                            <p class="text-center" style="font-weight: bold; font-family:CaviarDreams_Bold;" >Horario de Atención</p>
                            <p class="text-center" style="font-family:CaviarDreams;" >Lunes a Viernes</p>
                            <p class="text-center" style="font-family:CaviarDreams;">9.00 - 18.00</p>
                            <p class="text-center" style="font-family:CaviarDreams;">Sábados</p>
                            <p class="text-center" style="font-family:CaviarDreams;">9.00 - 13.00</p>
                        </ul>            
                </div>
                    <div class="col-lg-3">
                      <ul  style="text-align: left;">
                      <p style="font-family:CaviarDreams;" >Callcenter +52 {{$config->celular}}</p>
                      <p style="font-family:CaviarDreams;"> Whatsapp   +52 9981535274</p>
                      
                      </ul> 
                        
                     
                    </div>
                    <!-- style="font-size:1vw; color: black; font-family: Sans-serif;" -->
                      <div class="col-lg-3" style="">
                         
                         <p style="text-align: right; color:black; font-family:CaviarDreams; "><a>Garantías</a></P>                      
                         <p style="text-align: right; color:black; font-family:CaviarDreams;"><a href="https://contelferraez.com/privacidad/">Términos y condiciones</a></P> 
                         <p style="text-align: right; color:black; font-family:CaviarDreams;"><a>FAQ</a></P> 
                        
                      </div>
                      <div class="col-lg-3" style="text-align: center;">
                      <a class="navbar-brand"  href="https://contelferraez.com/">
                          <img src="/img/empresa/logo contel ferraez.png" alt="Logo contelferraez" width="75">
                      </a>  
                      <p><a style="font-family:CaviarDreams;">Volver a sitio Contel y Ferraez</a></P>  
                      <div  style="text-align: center;">
                          <a href="https://www.facebook.com/ContelJewelry">
                          <img style= "width: 17%;"src="/img/Logos/facebook.png" alt="">
                          </a>
                          <a href="https://www.instagram.com/ContelJewelry/">
                          <img style= "width: 15%;"src="/img/Logos/instagram.png" alt="">
                          </a> 
                          <a href="https://www.youtube.com/channel/UCsxX_6skG3RYIp8AtF1PZww">
                          <img style= "width: 15%;"  src="/img/Logos/icono youtube.png" >
                          </a>                          
                        </div>
                         
                      </div>
                </div>

                </div>
            </footer>
</body>
</html>
