<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarruselGaleria;
use App\Models\Carrusel;
use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Post;
use App\Models\Evento;
use App\Models\Empresa;
use App\Models\testimonio;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\JsonLdMulti;
use Artesaos\SEOTools\Facades\SEOTools;
use SEO;
// use JsonLd;
// use OpenGraph;

class FrontController extends Controller
{
    public function index(){
        SEO::setTitle('Contel Jewelry');
        SEO::setDescription('Somos proveedores autorizados de Belé');
        SEO::opengraph()->setUrl('https://conteljewelry.contelferraez.com/');
        SEO::setCanonical('https://conteljewelry.contelferraez.com/');
        SEO::opengraph()->addProperty('type', 'article');
        SEO::twitter()->setSite('@conteljewelry');
        OpenGraph::addImage("https://conteljewelry.contelferraez.com/img/carrusel/chicamaletin.png");
        $carrusel = Carrusel::orderBy('orden','asc')->get();
        $producto = Producto::orderBy('visitas','desc')->take(4)->get();
        $posts = Post::orderBy('created_at','desc')->get();    
        $pulceras = Producto::where('categoria_id','9')->get();
        $dijes = Producto::where('categoria_id','10')->get();
        $cadenas = Producto::where('categoria_id','11')->get();
        $aretes = Producto::where('categoria_id','12')->get();
        $anillos = Producto::where('categoria_id','13')->get();
        $testimonios = testimonio::orderBy('created_at','desc')->take(1)->get(); 
        $cont2 =0;
        $cont =0;
        
        return view('welcome',compact('carrusel','producto','posts', 'pulceras','dijes','cadenas','aretes','anillos','testimonios','cont2','cont'));
    }

    public function empresa(){
        $empresa = Empresa::find(1);
        return view('front.empresa',compact('empresa'));
    }

    public function bele(){
        $categorias = Categoria::all();
        return view('front.categorias',compact('categorias'));
    }

    public function categoria($categoria){
        $categoria = Categoria::whereSlug($categoria)->first();
        return view('front.categoria',compact('categoria'));
    }
    public function pulceras($pulceras){
        $pulceras = Producto::whereSlug($pulceras)->first();
        return view('front.producto',compact('pulceras'));
    }
    public function producto($categoria,$producto){
        $producto = Producto::whereSlug($producto)->first();
        return view('front.producto',compact('producto'));
    }

    public function blog(){
        $posts = Post::all();
        return view('front.posts',compact('posts'));
    }

    public function post($post){
        $post = Post::whereSlug($post)->first();
        SEO::setTitle($post->title);
        JsonLd::addImage("https://conteljewelry.contelferraez.com/img/post/{$post->urlfoto}");       
        SEO::setDescription( $post->description);
        SEO::opengraph()->setUrl("https://conteljewelry.contelferraez.com/blog/{$post->slug}");
        SEO::setCanonical("https://conteljewelry.contelferraez.com/blog/{$post->slug}");
        SEO::opengraph()->addProperty('type', 'article');
        SEO::twitter()->setSite('@conteljewelry');
        OpenGraph::addImage("https://conteljewelry.contelferraez.com/img/post/{$post->urlfoto}");
        $post->increment('visitas');
        $posts = Post::orderBy('created_at','desc')->get();    
        return view('front.post',compact('post', 'posts'));
    }

    public function contacto(){
     
        return view('front.contacto');
    }
    public function unete(){
        $producto = Producto::orderBy('visitas','desc')->take(4)->get();
        return view('front.unete',compact('producto'));
           
    }
    public function galeria(){
        $carruselgalerias = CarruselGaleria::orderBy('orden','asc')->get();
        $carrusel = Carrusel::orderBy('orden','asc')->get();
        $pulceras = Producto::where('categoria_id','9')->get();
        $dijes = Producto::where('categoria_id','10')->get();
        $cadenas = Producto::where('categoria_id','11')->get();
        $aretes = Producto::where('categoria_id','12')->get();
        $anillos = Producto::where('categoria_id','13')->get();
        return view('front.galeria',compact('pulceras','dijes','cadenas','aretes','anillos','carrusel','carruselgalerias'));
           
    }
    public function eventos(){
        $eventos = Evento::orderBy('dia','asc')->get();
        return view('front.eventos',compact('eventos'));
           
    }

    public function contactoenvio(Request $r){
        if(!empty($r)){
            $nombre    = $_POST['nombre'];
            $email     = $_POST['email'];
            $mensaje   = $_POST['mensaje'];
            $para = 'desarrolloweb@contelferraez.com';
            
            if(mail($para,"ASUNTO CONTACTO ",utf8_decode($mensaje))){
               $resultado = "Gracias!!!. se envió tu mensaje";
            }else{
               $resultado = "No se pudo enviar tu mensaje";
            }
           return redirect()->back()->with('success',$resultado);
        }else{
            return redirect()->back()->with('success',"NO SE PUDO ENVIAR EL MENSAJE");
        }
       }

}
