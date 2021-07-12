@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.submenu')
        <div class="col-sm-10">

            {!! Form::open(['route'=>['evento.store'],'method'=>'POST','files'=>true]) !!}

            <div class="jumbotron">
                
                <div class="form-group">
                    <label for="description">INGRESE DESCRIPTION</label>
                    {!! Form::textarea('description',null ,['class'=>'form-control','maxlength'=>'155','rows'=>'3']) !!}
                </div>

                <div class="form-group">
                    <label for="nombre">INGRESE NOMBRE</label>
                    {!! Form::text('nombre',null ,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    <label for="descripcion">INGRESE DESCRIPCIÓN</label>
                    {!! Form::textarea('descripcion',null ,['class'=>'form-control']) !!}
                </div>
                <div class="row">
                        <div class="form-group col-sm-4">
                            <label for="dia">INGRESE DIA</label>
                            {!! Form::date('dia',null ,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group col-sm-4">
                            <label for="lugar">INGRESE LUGAR</label>
                            {!! Form::text('lugar',null ,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="hora">INGRESE HORA</label>
                            {!! Form::time('hora',null ,['class'=>'form-control']) !!}
                        </div>
                </div>

               



                <div class="form-group">
                    <label for="urlfoto">IMAGEN</label> <br>
                    <img src="/img/post/foto.jpg">
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