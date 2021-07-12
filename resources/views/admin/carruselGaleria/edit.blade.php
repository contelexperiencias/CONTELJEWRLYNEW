@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.submenu')
        <div class="col-sm-10">
            {!! Form::open(['route'=>['carruselgaleria.update',$carruselgalerias],'method'=>'PUT','files'=>true]) !!}
            <div class="jumbotron">     
            <div class="form-group">
                    <label for="title">INGRESE TITULO</label>
                    {!! Form::text('title',$carruselgalerias->title ,['class'=>'form-control','maxlength'=>'67']) !!}
                </div>  
                <div class="form-group">
                    <label for="descripcion">INGRESE DESCRIPCIÓN</label>
                    {!! Form::text('descripcion',$carruselgalerias->descripcion,['class'=>'form-control','maxlength'=>'67']) !!}
                </div>
                <div class="form-group">
                    <label for="link">INGRESE LINK</label>
                    {!! Form::text('link',$carruselgalerias->link ,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label for="orden">INGRESE ORDEN</label>
                    {!! Form::text('orden',$carruselgalerias->orden,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label for="urlfoto">IMAGEN</label> <br>
                    <img src="/img/carruselGaleria/{{$carruselgalerias->urlfoto}}">
                    {!! Form::file('urlfoto') !!}
                </div>
                <div class="form-group">
                    <label for="codigo">INGRESE codigo</label>
                    {!! Form::text('codigo',$carruselgalerias->codigo,['class'=>'form-control']) !!}
                </div>
            </div>           
            {!! Form::submit('GUARDAR',['class'=>'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection