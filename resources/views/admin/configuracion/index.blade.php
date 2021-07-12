@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
    
        @include('admin.submenu')
        @if (Auth::user()->tipo_usuario == '1')
       
        <div class="col-sm-10">

            {!! Form::open(['route'=>['configuracion.update',$registro],'method'=>'PUT','files'=>true]) !!}

            <div class="jumbotron">
                <div class="form-group">
                    <label for="seo_title">INGRESE TITLE</label>
                    {!! Form::text('seo_title',$registro->seo_title,['class'=>'form-control','maxlength'=>'67']) !!}
                </div>
    
                <div class="form-group">
                    <label for="seo_description">INGRESE DESCRIPTION</label>
                    {!! Form::textarea('seo_description',$registro->seo_description,['class'=>'form-control','maxlength'=>'155','rows'=>'3']) !!}
                </div>
                <div class="form-group">
                    <label for="seo_urlvideo">VIDEO DESTACADO</label> <br>
                    <iframe id="muteYouTubeVideoPlayer" frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" title="YouTube video player" width="1024" height="480" src="https://www.youtube.com/embed/{{$registro->seo_urlvideo}}?autoplay=1&amp;controls=1&amp;showinfo=0&amp;modestbranding=1&amp;fs=0&amp;cc_load_policy=0&amp;iv_load_policy=3&amp;autohide=0&amp;enablejsapi=1&amp;origin=http%3A%2F%2Flocalhost%3A8000&amp;widgetid=1&amp;rel=0&amp;loop=1" style="width: 100%;"></iframe>
                    <!-- <img src="/img/configuracion/{{$registro->seo_urlfoto}}">
                    {!! Form::file('seo_urlfoto') !!} -->
                </div>
                <div class="form-group">
                    <label for="seo_urlvideo">INGRESE ID DEL VIDEO (el codigo despues de "https://www.youtube.com/embed/" ejemplo:6hPD62oh0Ag)</label>
                    {!! Form::text('seo_urlvideo',$registro->seo_urlvideo,['class'=>'form-control','maxlength'=>'50']) !!}
                    
                </div>
            </div>


            <div class="form-group row">
                <div class="col-sm-3">
                    <label for="colorPrimario">COLOR PRIMARIO</label>
                    {!! Form::text('colorPrimario',$registro->colorPrimario,['class'=>'form-control','maxlength'=>'7']) !!}
                </div>
                
                <div class="col-sm-9">
                    <label for="urlfavicon">FAVICON</label> <br>
                    <img src="/img/configuracion/{{$registro->urlfavicon}}">
                    {!! Form::file('urlfavicon') !!}
                </div>
                <div class="col-sm-3">
                    <label for="colorSecundario">COLOR SECUNDARIO</label>
                    {!! Form::text('colorSecundario',$registro->colorSecundario,['class'=>'form-control','maxlength'=>'7']) !!}
                </div>
                <div class="col-sm-9">
                    <label for="urllogo">LOGO</label> <br>
                    <img src="/img/configuracion/{{$registro->urllogo}}">
                    {!! Form::file('urllogo') !!}
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-6">
                    <label for="slogan">SLOGAN</label>
                    {!! Form::text('slogan',$registro->slogan,['class'=>'form-control','maxlength'=>'100']) !!}
                </div>
                <div class="col-sm-6">
                    <label for="frase_1">Belé</label>
                    {!! Form::text('frase_1',$registro->frase_1,['class'=>'form-control','maxlength'=>'250']) !!}
                </div>
                <div class="col-sm-6">
                    <label for="frase_2">Contel Jewelry</label>
                    {!! Form::text('frase_2',$registro->frase_2,['class'=>'form-control','maxlength'=>'250']) !!}
                </div>
                
                <!-- <div class="col-sm-6">
                    <label for="frase_3">FRASE 3</label>
                    {!! Form::text('frase_3',$registro->frase_3,['class'=>'form-control','maxlength'=>'50']) !!}
                </div> -->
            </div>


            <div class="form-group row">
                
                <div class="col-sm-3">
                    <label for="razonsocial">RAZÓN SOCIAL</label>
                    {!! Form::text('razonsocial',$registro->razonsocial,['class'=>'form-control','maxlength'=>'50']) !!}
                </div>
                <div class="col-sm-3">
                    <label for="direccion">DIRECCIÓN</label>
                    {!! Form::text('direccion',$registro->direccion,['class'=>'form-control','maxlength'=>'50']) !!}
                </div>
                
                <div class="col-sm-3">
                    <label for="celular">CELULAR</label>
                    {!! Form::text('celular',$registro->celular,['class'=>'form-control','maxlength'=>'50']) !!}
                </div>
                <div class="col-sm-3">
                    <label for="email">EMAIL</label>
                    {!! Form::text('email',$registro->email,['class'=>'form-control','maxlength'=>'50']) !!}
                </div>
                <div class="col-sm-3">
                    <label for="facebook">FACEBOOK</label>
                    {!! Form::text('facebook',$registro->facebook,['class'=>'form-control','maxlength'=>'50']) !!}
                </div>
                <div class="col-sm-3">
                    <label for="youtube">YOUTUBE</label>
                    {!! Form::text('youtube',$registro->youtube,['class'=>'form-control','maxlength'=>'50']) !!}
                </div>
            </div>




           
            {!! Form::submit('GUARDAR',['class'=>'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
        @endif
    </div>
</div>
@endsection