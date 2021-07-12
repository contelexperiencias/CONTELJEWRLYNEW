@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.submenu')
        <div class="col-sm-10">

            {!! Form::open(['route'=>['producto.store'],'method'=>'POST','files'=>true]) !!}
           

           
           
            <div class="jumbotron">
            @if ($categoria_id >= '9' and $categoria_id <= '13' )   
                <div class="form-group">
                    <label for="title">INGRESE CODIGO</label>
                    {!! Form::text('title',null ,['class'=>'form-control','maxlength'=>'67']) !!}
                </div>
                <div class="form-group">
                    <label for="nombre">INGRESE NOMBRE</label>
                    {!! Form::text('nombre',null ,['class'=>'form-control','maxlength'=>'67']) !!}
                </div>
                <div class="form-group" style="display:none">
                    <label for="description">INGRESE DESCRIPTION</label>
                    {!! Form::textarea('description','description' ,['class'=>'form-control','maxlength'=>'155','rows'=>'3']) !!}
                </div>
                <div class="form-group" style="display:none">
                    <label for="descripcion">INGRESE DESCRIPCIÓN</label>
                    {!! Form::textarea('descripcion','descripcion' ,['class'=>'form-control']) !!}
                </div>
                @elseif($categoria_id == '8')
               
                <div class="form-group">
                    <label for="title">INGRESE TITLE</label>
                    {!! Form::text('title',null ,['class'=>'form-control','maxlength'=>'67']) !!}
                </div>
                <div class="form-group" style="display:none">
                    <label for="description">INGRESE DESCRIPTION</label>
                    {!! Form::textarea('description','COFRES' ,['class'=>'form-control','maxlength'=>'155','rows'=>'3']) !!}
                </div>
               

                <div class="form-group">
                    <label for="nombre">INGRESE NOMBRE</label>
                    {!! Form::text('nombre',null ,['class'=>'form-control','maxlength'=>'67']) !!}
                </div>
                <div class="form-group">
                    <label for="descripcion">INGRESE DESCRIPCIÓN</label>
                    {!! Form::textarea('descripcion',null ,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label for="orden">Ingrese porcentaje (%) de ganancia</label>
                    {!! Form::text('porcentaje',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label for="orden">Ingrese precio ($)</label>
                    {!! Form::text('precio',null,['class'=>'form-control']) !!}
                </div>
               
                <div class="form-group">
                    <label for="orden">Ingrese ganancia en pesos ($)</label>
                    {!! Form::text('ganancia',null,['class'=>'form-control']) !!}
                </div>

              @else

                <div class="form-group">
                    <label for="description">INGRESE DESCRIPTION</label>
                    {!! Form::textarea('description',null ,['class'=>'form-control','maxlength'=>'155','rows'=>'3']) !!}
                </div>
                @endif
                <div class="form-group">
                    <label for="orden">INGRESE ORDEN</label>
                    {!! Form::text('orden',null ,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    <label for="urlfoto">IMAGEN</label> <br>
                    <img src="/img/producto/foto.jpg">
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