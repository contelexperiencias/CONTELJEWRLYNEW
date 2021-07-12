@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.submenu')
        <div class="col-sm-10">

            {!! Form::open(['route'=>['evento.update',$evento],'method'=>'PUT','files'=>true]) !!}

            <div class="jumbotron">
               
                <div class="form-group">
                    <label for="description">INGRESE description</label>
                    {!! Form::textarea('description',$evento->description,['class'=>'form-control','maxlength'=>'250','rows'=>'4']) !!}
                </div>

                <div class="form-group">
                    <label for="nombre">INGRESE NOMBRE</label>
                    {!! Form::text('nombre',$evento->nombre,['class'=>'form-control','maxlength'=>'100']) !!}
                </div>

                <div class="form-group">
                    <label for="descripcion">INGRESE DESCRIPCIÓN</label>
                    {!! Form::textarea('descripcion',$evento->descripcion,['class'=>'form-control']) !!}
                </div>
                <div class="row">

                <div class="form-group col-sm-4">
                    <label for="dia">INGRESE dia</label>
                    {!! Form::date('dia',$evento->dia,['class'=>'form-control']) !!}
                </div>
                <div class="form-group col-sm-4">
                    <label for="lugar">INGRESE LUGAR</label>
                    {!! Form::text('lugar',$evento->lugar,['class'=>'form-control']) !!}
                </div>
                <div class="form-group col-sm-4">
                    <label for="hora">INGRESE HORA</label>
                    {!! Form::time('hora',$evento->hora,['class'=>'form-control']) !!}
                </div>
                </div>

                <div class="form-group">
                    <label for="urlfoto">IMAGEN</label> <br>
                    <img src="/img/eventos/{{$evento->urlfoto}}">
                    {!! Form::file('urlfoto') !!}
                </div>
            </div>           
            {!! Form::submit('GUARDAR',['class'=>'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
<script>
    CKEDITOR.replace( 'descripcion' );
</script>
@endsection